// Gallery Page JavaScript
let galleryProducts = [];
let currentFilter = 'All';

// Initialize gallery when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Small delay to ensure all elements are rendered
    setTimeout(() => {
        initializeGallery();
    }, 100);
});

// Initialize gallery functionality
function initializeGallery() {
    try {
        // Get products data from global variable if available
        if (typeof window.galleryProductsData !== 'undefined') {
            galleryProducts = window.galleryProductsData;
        }
        
        // Check if there's a search query from navbar (takes priority)
        if (typeof window.searchQuery !== 'undefined' && window.searchQuery.trim() !== '') {
            searchGalleryProducts(window.searchQuery);
        } else if (typeof window.selectedCategory !== 'undefined' && window.selectedCategory !== 'All') {
            currentFilter = window.selectedCategory;
            filterGallery(window.selectedCategory);
        } else {
            // Set up initial state - show all products
            currentFilter = 'All';
            filterGallery('All');
        }
        
        // Ensure all images are loaded
        ensureImagesLoaded();
    } catch (error) {
        console.error('Error initializing gallery:', error);
    }
}

// Search functionality for navbar searches
function searchGalleryProducts(query) {
    try {
        const searchTerm = query.toLowerCase().trim();
        const productCards = document.querySelectorAll('.product-card');
        let visibleCount = 0;
        
        if (!productCards.length) {
            console.log('No product cards found for search');
            return;
        }
        
        productCards.forEach(card => {
            try {
                const productNameElement = card.querySelector('.product-name');
                const productCategoryElement = card.querySelector('.product-category');
                const productDescriptionElement = card.querySelector('.product-description');
                
                if (!productNameElement) {
                    console.warn('Product name element not found in card');
                    return;
                }
                
                const productName = productNameElement.textContent.toLowerCase();
                const productCategory = productCategoryElement ? productCategoryElement.textContent.toLowerCase() : '';
                const productDescription = productDescriptionElement ? productDescriptionElement.textContent.toLowerCase() : '';
                
                const matchesSearch = searchTerm === '' || 
                    productName.includes(searchTerm) ||
                    productCategory.includes(searchTerm) ||
                    productDescription.includes(searchTerm);
                
                if (matchesSearch) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    card.style.transform = 'none';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            } catch (cardError) {
                console.error('Error processing card in search:', cardError);
            }
        });

        // Update results count safely
        setTimeout(() => {
            try {
                if (typeof updateResultsCount === 'function') {
                    updateResultsCount();
                }
                if (typeof toggleNoResults === 'function') {
                    toggleNoResults(visibleCount === 0);
                }
                
                // Update page title and gallery header to show search results
                if (searchTerm) {
                    document.title = `Search: "${query}" - Adishakti Furnitures Gallery`;
                    
                    // Update gallery title
                    const galleryTitle = document.querySelector('.gallery-title');
                    if (galleryTitle) {
                        galleryTitle.innerHTML = `Search Results for "<span class="highlight">${query}</span>"`;
                    }
                    
                    // Update gallery description
                    const galleryDescription = document.querySelector('.gallery-description');
                    if (galleryDescription) {
                        galleryDescription.textContent = 'Browse through our search results';
                    }
                    
                    // Update results text
                    const galleryResults = document.querySelector('.gallery-results');
                    if (galleryResults) {
                        const resultsCount = galleryResults.querySelector('#resultsCount');
                        if (resultsCount) {
                            galleryResults.innerHTML = `<span id="resultsCount">${visibleCount}</span> results found`;
                        }
                    }
                } else {
                    // Reset to default gallery view
                    const galleryTitle = document.querySelector('.gallery-title');
                    if (galleryTitle) {
                        galleryTitle.innerHTML = `Our <span class="highlight">Furniture Gallery</span>`;
                    }
                    
                    const galleryDescription = document.querySelector('.gallery-description');
                    if (galleryDescription) {
                        galleryDescription.textContent = 'Discover our complete collection of handcrafted wooden furniture';
                    }
                    
                    const galleryResults = document.querySelector('.gallery-results');
                    if (galleryResults) {
                        const resultsCount = galleryResults.querySelector('#resultsCount');
                        if (resultsCount) {
                            galleryResults.innerHTML = `<span id="resultsCount">${visibleCount}</span> products in our collection`;
                        }
                    }
                }
            } catch (updateError) {
                console.error('Error updating search results:', updateError);
            }
        }, 100);
        
    } catch (error) {
        console.error('Error in searchGalleryProducts:', error);
    }
}

// Ensure all images are properly loaded
function ensureImagesLoaded() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    images.forEach(img => {
        // Force load lazy images that are in viewport
        if (img.getBoundingClientRect().top < window.innerHeight) {
            img.loading = 'eager';
        }
    });
}



// Filter gallery by category (used when coming from navbar categories or product links)
function filterGallery(category) {

    

    
    currentFilter = category;

    // Filter products
    const productCards = document.querySelectorAll('.product-card');
    let visibleCount = 0;
    

    
    productCards.forEach((card, index) => {
        const cardCategory = card.getAttribute('data-category');
        const shouldShow = category === 'All' || cardCategory === category;
        

        
        if (shouldShow) {
            card.style.display = 'block';
            card.style.opacity = '1';
            card.style.transform = 'none';
            card.classList.remove('hidden');
            visibleCount++;
        } else {
            card.style.display = 'none';
            card.style.opacity = '0';
            card.classList.add('hidden');
        }
    });



    // Update results count immediately
    updateResultsCount();
    toggleNoResults(visibleCount === 0);
}



// Update results count
function updateResultsCount() {
    const allCards = document.querySelectorAll('.product-card');
    const count = Array.from(allCards).filter(card => {
        const style = window.getComputedStyle(card);
        return style.display !== 'none';
    }).length;
    
    const resultsElement = document.getElementById('resultsCount');
    if (resultsElement) {
        resultsElement.textContent = count;
    }
    
    return count;
}

// Toggle no results message
function toggleNoResults(show) {
    const noResults = document.getElementById('noResults');
    if (noResults) {
        noResults.style.display = show ? 'block' : 'none';
    }
}



// Open product modal
function openProductModal(productIndex) {
    const product = galleryProducts[productIndex];
    if (!product) return;
    
    // Update modal content
    document.getElementById('lightboxImage').src = product.image;
    document.getElementById('lightboxImage').alt = product.name;
    document.getElementById('lightboxTitle').textContent = product.name;
    document.getElementById('lightboxCategory').textContent = product.category;
    document.getElementById('lightboxDescription').textContent = product.description;
    document.getElementById('lightboxMaterial').textContent = product.material;
    document.getElementById('lightboxDimensions').textContent = product.dimensions;
    
    // Show modal
    const modal = document.getElementById('lightboxModal');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Store current product index for navigation
    window.currentProductIndex = productIndex;
}

// Close lightbox modal
function closeLightbox() {
    const modal = document.getElementById('lightboxModal');
    modal.classList.remove('active');
    document.body.style.overflow = '';
}

// Navigate lightbox (previous/next)
function navigateLightbox(direction) {
    const visibleProducts = Array.from(document.querySelectorAll('.product-card'))
        .filter(card => card.style.display !== 'none')
        .map(card => parseInt(card.getAttribute('data-index')));
    
    const currentIndex = visibleProducts.indexOf(window.currentProductIndex);
    let newIndex = currentIndex + direction;
    
    if (newIndex < 0) newIndex = visibleProducts.length - 1;
    if (newIndex >= visibleProducts.length) newIndex = 0;
    
    openProductModal(visibleProducts[newIndex]);
}

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeLightbox();
    }
    if (e.key === 'ArrowLeft') {
        navigateLightbox(-1);
    }
    if (e.key === 'ArrowRight') {
        navigateLightbox(1);
    }
});

// Contact for specific product
function contactForProduct(productName) {
    const message = `Hi, I'm interested in the ${productName} from your furniture collection. Could you please provide more details?`;
    const whatsappUrl = `https://wa.me/919986642973?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}

// Update gallery display
function updateGalleryDisplay() {
    // Add any additional display updates here
    const visibleProducts = document.querySelectorAll('.product-card[style*="block"], .product-card:not([style*="none"])');
    // Gallery updated successfully
}

// Smooth scroll to gallery section
function scrollToGallery() {
    const gallerySection = document.querySelector('.gallery-section');
    if (gallerySection) {
        gallerySection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}



// Lazy loading for gallery images
function initializeLazyLoading() {
    const images = document.querySelectorAll('.gallery-item img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }
}

// Initialize lazy loading when DOM is ready
document.addEventListener('DOMContentLoaded', initializeLazyLoading);

// Performance optimization: Debounce scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Add scroll-based animations
window.addEventListener('scroll', debounce(() => {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const windowHeight = window.innerHeight;
    
    galleryItems.forEach(item => {
        const itemTop = item.getBoundingClientRect().top;
        
        if (itemTop < windowHeight * 0.8) {
            item.classList.add('fade-in');
        }
    });
}, 10));

// Update URL when filtering (for better UX)
function updateURL(category) {
    if (category && category !== 'All') {
        const url = new URL(window.location);
        url.searchParams.set('category', category);
        window.history.replaceState({}, '', url);
    } else {
        const url = new URL(window.location);
        url.searchParams.delete('category');
        window.history.replaceState({}, '', url);
    }
}

// Enhanced filter function with URL update
function filterGalleryWithURL(category) {
    filterGallery(category);
    updateURL(category);
}

// Export functions for global access
window.filterGalleryWithURL = filterGalleryWithURL;
window.openProductModal = openProductModal;
window.contactForProduct = contactForProduct;
window.closeLightbox = closeLightbox;
window.navigateLightbox = navigateLightbox;
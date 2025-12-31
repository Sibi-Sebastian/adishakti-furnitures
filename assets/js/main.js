// Global variables
let currentSlideIndex = 0;
let slideInterval;
let activeCategory = 'Living Room';

// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    try {
        initializeSlideshow();
        initializeBackToTop();
        initializeScrollHandlers(); // Consolidated scroll functionality
        initializeProductFilters();
        initializeMobileMenu();
        initializeSearch();
        initializeNavbarScroll(); // Additional navbar functionality
        initializeTouchImprovements(); // Mobile touch improvements
        
        initializeTestimonialsCarousel();
        initializeMobileSearch(); // Add mobile search functionality
    } catch (error) {
        console.error('Error initializing page:', error);
    }
});

// Slideshow functionality
function initializeSlideshow() {
    const slides = document.querySelectorAll('.showcase-image');
    const indicators = document.querySelectorAll('.indicator');
    
    if (slides.length === 0) return;

    // Update slide display
    function updateSlide() {
        slides.forEach((slide, index) => {
            slide.classList.toggle('active', index === currentSlideIndex);
        });
        
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlideIndex);
        });
    }

    // Auto-rotate slides only if there are multiple slides
    if (slides.length > 1) {
        slideInterval = setInterval(() => {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            updateSlide();
        }, 4000);
    }
}

// Manual slide change
function changeSlide(index) {
    currentSlideIndex = index;
    const slides = document.querySelectorAll('.showcase-image');
    const indicators = document.querySelectorAll('.indicator');
    
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
    
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === index);
    });

    // Reset auto-rotation only if there are multiple slides
    if (slides.length > 1) {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            const currentSlides = document.querySelectorAll('.showcase-image');
            const currentIndicators = document.querySelectorAll('.indicator');
            
            currentSlides.forEach((slide, i) => {
                slide.classList.toggle('active', i === currentSlideIndex);
            });
            
            currentIndicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === currentSlideIndex);
            });
        }, 4000);
    }
}

// Product filtering functionality
function initializeProductFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.textContent.trim();
            filterProducts(category);
        });
    });
}

function filterProducts(category) {
    activeCategory = category;
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    const viewAllBtn = document.getElementById('viewAllBtn');
    const viewAllText = document.querySelector('.view-all-text');

    // Update active button
    filterButtons.forEach(btn => {
        btn.classList.toggle('active', btn.textContent.trim() === category);
    });

    // Filter products with smooth animation
    productCards.forEach((card, index) => {
        const productCategory = card.getAttribute('data-category');
        const shouldShow = productCategory === category;
        
        if (shouldShow) {
            setTimeout(() => {
                card.style.display = 'block';
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.4s ease-out';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 50);
            }, index * 50);
        } else {
            card.style.transition = 'all 0.3s ease-out';
            card.style.opacity = '0';
            card.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                card.style.display = 'none';
            }, 300);
        }
    });

    // Update "View All" button
    if (viewAllBtn && viewAllText) {
        const visibleCount = Array.from(productCards).filter(card => 
            card.getAttribute('data-category') === category
        ).length;
        
        viewAllBtn.href = `gallery.php?category=${encodeURIComponent(category)}`;
        viewAllText.textContent = `View All ${category} Products (${visibleCount})`;
    }
}

// Back to top functionality
function initializeBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (!backToTopBtn) return;

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Consolidated scroll handler for better performance
function initializeScrollHandlers() {
    const backToTopBtn = document.getElementById('backToTop');
    
    // Single optimized scroll handler - only for back to top button
    const handleScroll = debounce(() => {
        const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Back to top button logic
        if (backToTopBtn) {
            if (currentScrollTop > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        }
    }, 10);

    // Add single scroll event listener
    window.addEventListener('scroll', handleScroll, { passive: true });
}

// Navbar additional functionality - removed scroll hiding
function initializeNavbarScroll() {
    // Always show navbar when mobile menu is open
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', () => {
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                navbar.classList.remove('navbar-hidden');
                navbar.classList.add('navbar-visible');
            }
        });
    }
}

// Mobile menu functionality
function initializeMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (!mobileMenu) {
        console.error('Mobile menu not found during initialization');
        return;
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        if (mobileMenu.classList.contains('show') && 
            !mobileMenu.contains(e.target) && 
            !mobileMenuToggle.contains(e.target)) {
            closeMobileMenu();
        }
    });

    // Close mobile menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('show')) {
            closeMobileMenu();
        }
    });
}

function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    
    if (!mobileMenu || !mobileMenuToggle) {
        return;
    }

    const isOpen = mobileMenu.classList.contains('show');
    
    if (isOpen) {
        closeMobileMenu();
    } else {
        openMobileMenu();
    }
}

function openMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    
    if (!mobileMenu || !mobileMenuToggle) {
        return;
    }

    mobileMenu.classList.add('show');
    mobileMenuToggle.setAttribute('aria-expanded', 'true');
    mobileMenuToggle.classList.add('active');
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    
    if (!mobileMenu || !mobileMenuToggle) {
        return;
    }

    mobileMenu.classList.remove('show');
    mobileMenuToggle.setAttribute('aria-expanded', 'false');
    mobileMenuToggle.classList.remove('active');
    
    // Restore body scroll
    document.body.style.overflow = '';
}

// Search functionality
function initializeSearch() {
    const searchInputs = document.querySelectorAll('.search-input');
    
    searchInputs.forEach(input => {
        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                handleSearch(e);
            }
        });
    });
}

function handleSearch(event) {
    try {
        event.preventDefault();
        
        const form = event.target.closest('form') || event.target.closest('.search-form');
        if (!form) {
            return;
        }
        
        const input = form.querySelector('.search-input');
        if (!input) {
            return;
        }
        
        const query = input.value.trim();
        
        if (query) {
            // Check if we're on the gallery page
            const isGalleryPage = window.location.pathname.includes('gallery.php');
            
            if (isGalleryPage) {
                // If on gallery page, use gallery search function if available
                if (typeof searchGalleryProducts === 'function') {
                    searchGalleryProducts(query);
                } else {
                    // Fallback to basic search
                    searchProducts(query);
                }
                
                // Update URL to reflect search
                const url = new URL(window.location);
                url.searchParams.set('search', query);
                window.history.replaceState({}, '', url);
            } else {
                // If on other pages, redirect to gallery with search
                window.location.href = `gallery.php?search=${encodeURIComponent(query)}`;
            }
        } else {
            // If empty search, show all products
            if (window.location.pathname.includes('gallery.php')) {
                if (typeof filterGallery === 'function') {
                    filterGallery('All');
                } else {
                    // Reset all products to visible
                    const productCards = document.querySelectorAll('.product-card');
                    productCards.forEach(card => {
                        card.style.display = 'block';
                    });
                }
            }
        }
    } catch (error) {
        // Silent error handling for production
    }
}

function searchProducts(query) {
    try {
        const productCards = document.querySelectorAll('.product-card');
        const searchTerm = query.toLowerCase().trim();
        
        if (!productCards.length) {
            return;
        }
        
        productCards.forEach(card => {
            try {
                const productNameElement = card.querySelector('.product-name');
                const productCategoryElement = card.querySelector('.product-category');
                const productDescriptionElement = card.querySelector('.product-description');
                
                if (!productNameElement) {
                    return;
                }
                
                const productName = productNameElement.textContent.toLowerCase();
                const productCategory = productCategoryElement ? productCategoryElement.textContent.toLowerCase() : '';
                const productDescription = productDescriptionElement ? productDescriptionElement.textContent.toLowerCase() : '';
                
                const shouldShow = searchTerm === '' || 
                    productName.includes(searchTerm) ||
                    productCategory.includes(searchTerm) ||
                    productDescription.includes(searchTerm);
                
                if (shouldShow) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    card.style.transform = 'none';
                } else {
                    card.style.display = 'none';
                }
            } catch (cardError) {
                // Silent error handling for production
            }
        });

        // Update filter buttons safely
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Update results count if function exists
        if (typeof updateResultsCount === 'function') {
            updateResultsCount();
        }
        
    } catch (error) {
        // Silent error handling for production
    }
}

// Smooth scrolling for anchor links
document.addEventListener('click', function(e) {
    const target = e.target.closest('a[href^="#"]');
    if (!target) return;
    
    const href = target.getAttribute('href');
    if (href === '#') return;
    
    const targetElement = document.querySelector(href);
    if (targetElement) {
        e.preventDefault();
        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
});

// Lazy loading for images
function initializeLazyLoading() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
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

// Add loading states for better UX
function showLoading(element) {
    element.classList.add('loading');
    element.style.opacity = '0.6';
    element.style.pointerEvents = 'none';
}

function hideLoading(element) {
    element.classList.remove('loading');
    element.style.opacity = '';
    element.style.pointerEvents = '';
}

// Error handling for images
document.addEventListener('error', function(e) {
    if (e.target.tagName === 'IMG') {
        e.target.src = 'assets/images/logo.png'; // Fallback to logo
        e.target.alt = 'Image not available';
    }
}, true);

// Accessibility improvements
document.addEventListener('keydown', function(e) {
    // Handle keyboard navigation for custom elements
    if (e.key === 'Enter' || e.key === ' ') {
        const target = e.target;
        
        // Handle filter buttons
        if (target.classList.contains('filter-btn')) {
            e.preventDefault();
            target.click();
        }
        
        // Handle indicators
        if (target.classList.contains('indicator')) {
            e.preventDefault();
            target.click();
        }
    }
});

// Add focus styles for keyboard navigation
document.addEventListener('DOMContentLoaded', function() {
    const style = document.createElement('style');
    style.textContent = `
        .filter-btn:focus-visible,
        .indicator:focus-visible,
        .nav-action:focus-visible,
        .category-link:focus-visible {
            outline: 3px solid var(--primary-gold);
            outline-offset: 2px;
        }
    `;
    document.head.appendChild(style);
});

// Dropdown functionality
function toggleDropdown(event) {
    event.preventDefault();
    event.stopPropagation();
    
    const dropdown = event.target.closest('.nav-dropdown');
    const isActive = dropdown.classList.contains('active');
    
    // Close all dropdowns
    document.querySelectorAll('.nav-dropdown').forEach(d => d.classList.remove('active'));
    
    // Toggle current dropdown
    if (!isActive) {
        dropdown.classList.add('active');
    }
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.nav-dropdown')) {
        document.querySelectorAll('.nav-dropdown').forEach(d => d.classList.remove('active'));
    }
});

// Close dropdowns on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.nav-dropdown').forEach(d => d.classList.remove('active'));
    }
});

// Testimonials carousel functionality
let currentTestimonialIndex = 0;
let testimonialInterval;

function initializeTestimonialsCarousel() {
    const carousel = document.querySelector('.testimonials-carousel');
    if (!carousel) return;
    
    const cards = carousel.querySelectorAll('.testimonial-card');
    const dots = carousel.querySelectorAll('.testimonial-dot');
    
    if (cards.length === 0) return;

    // Reset to first slide
    currentTestimonialIndex = 0;
    showTestimonial(0);
    
    // Add dot click handlers
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToTestimonial(index);
        });
    });

    // Start auto-rotation
    startAutoRotation();
}

function showTestimonial(index) {
    const carousel = document.querySelector('.testimonials-carousel');
    if (!carousel) return;
    
    const cards = carousel.querySelectorAll('.testimonial-card');
    const dots = carousel.querySelectorAll('.testimonial-dot');
    
    // Update cards
    cards.forEach((card, i) => {
        card.classList.toggle('active', i === index);
    });
    
    // Update dots
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
    
    currentTestimonialIndex = index;
}

function goToTestimonial(index) {
    clearInterval(testimonialInterval);
    showTestimonial(index);
    startAutoRotation();
}

function startAutoRotation() {
    const carousel = document.querySelector('.testimonials-carousel');
    if (!carousel) return;
    
    const cards = carousel.querySelectorAll('.testimonial-card');
    if (cards.length <= 1) return;
    
    testimonialInterval = setInterval(() => {
        const nextIndex = (currentTestimonialIndex + 1) % cards.length;
        showTestimonial(nextIndex);
    }, 4000);
}

// Export functions for global access
window.changeSlide = changeSlide;
window.filterProducts = filterProducts;
window.toggleMobileMenu = toggleMobileMenu;
window.closeMobileMenu = closeMobileMenu;
window.handleSearch = handleSearch;
window.toggleDropdown = toggleDropdown;
window.changeTestimonial = changeTestimonial;
// Mobile touch improvements
function initializeTouchImprovements() {
    // Add touch class to body for CSS targeting
    if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
        document.body.classList.add('touch-device');
    }

    // Improve touch scrolling on iOS
    if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
        document.body.style.webkitOverflowScrolling = 'touch';
    }

    // Handle orientation change
    window.addEventListener('orientationchange', function() {
        // Force a reflow to fix layout issues on orientation change
        setTimeout(function() {
            window.scrollTo(0, window.scrollY);
        }, 100);
    });

    // Prevent double-tap zoom on buttons
    const buttons = document.querySelectorAll('button, .btn, [role="button"]');
    buttons.forEach(button => {
        button.addEventListener('touchend', function(e) {
            e.preventDefault();
            this.click();
        });
    });
}

// Mobile touch improvements
function initializeTouchImprovements() {
    // Add touch class to body for CSS targeting
    if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
        document.body.classList.add('touch-device');
    }

    // Improve touch scrolling on iOS
    if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
        document.body.style.webkitOverflowScrolling = 'touch';
    }

    // Handle orientation change
    window.addEventListener('orientationchange', function() {
        // Force a reflow to fix layout issues on orientation change
        setTimeout(function() {
            window.scrollTo(0, window.scrollY);
        }, 100);
    });

    // Prevent double-tap zoom on buttons
    const buttons = document.querySelectorAll('button, .btn, [role="button"]');
    buttons.forEach(button => {
        button.addEventListener('touchend', function(e) {
            e.preventDefault();
            this.click();
        });
    });
}

// Mobile Search Functionality
function initializeMobileSearch() {
    const searchOverlay = document.getElementById('mobileSearchOverlay');
    const searchInput = document.getElementById('mobileSearchInput');
    
    if (!searchOverlay || !searchInput) return;
    
    // Close overlay when clicking outside content
    searchOverlay.addEventListener('click', function(e) {
        if (e.target === searchOverlay) {
            closeMobileSearch();
        }
    });
    
    // Focus input when overlay opens
    searchOverlay.addEventListener('transitionend', function() {
        if (searchOverlay.classList.contains('show')) {
            searchInput.focus();
        }
    });
    
    // Handle escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && searchOverlay.classList.contains('show')) {
            closeMobileSearch();
        }
    });
}

function toggleMobileSearch() {
    const searchOverlay = document.getElementById('mobileSearchOverlay');
    const searchToggle = document.getElementById('mobileSearchToggle');
    
    if (!searchOverlay || !searchToggle) return;
    
    const isOpen = searchOverlay.classList.contains('show');
    
    if (isOpen) {
        closeMobileSearch();
    } else {
        openMobileSearch();
    }
}

function openMobileSearch() {
    const searchOverlay = document.getElementById('mobileSearchOverlay');
    const searchToggle = document.getElementById('mobileSearchToggle');
    const searchInput = document.getElementById('mobileSearchInput');
    
    if (!searchOverlay || !searchToggle) return;
    
    searchOverlay.classList.add('show');
    searchToggle.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Focus input after animation
    setTimeout(() => {
        if (searchInput) searchInput.focus();
    }, 300);
}

function closeMobileSearch() {
    const searchOverlay = document.getElementById('mobileSearchOverlay');
    const searchToggle = document.getElementById('mobileSearchToggle');
    const searchInput = document.getElementById('mobileSearchInput');
    
    if (!searchOverlay || !searchToggle) return;
    
    searchOverlay.classList.remove('show');
    searchToggle.classList.remove('active');
    document.body.style.overflow = '';
    
    // Clear input
    if (searchInput) searchInput.value = '';
}

function handleMobileSearch(event) {
    event.preventDefault();
    
    const searchInput = document.getElementById('mobileSearchInput');
    if (!searchInput) return;
    
    const query = searchInput.value.trim();
    
    if (query) {
        // Redirect to gallery with search query
        window.location.href = `gallery.php?search=${encodeURIComponent(query)}`;
    }
}

function searchFor(term) {
    const searchInput = document.getElementById('mobileSearchInput');
    if (searchInput) {
        searchInput.value = term;
    }
    
    // Redirect to gallery with search term
    window.location.href = `gallery.php?search=${encodeURIComponent(term)}`;
}

// Export mobile search functions for global access
window.toggleMobileSearch = toggleMobileSearch;
window.openMobileSearch = openMobileSearch;
window.closeMobileSearch = closeMobileSearch;
window.handleMobileSearch = handleMobileSearch;
window.searchFor = searchFor;

// Mobile Navbar Search Functionality
function handleMobileNavbarSearch(event) {
    event.preventDefault();
    
    const searchInput = document.getElementById('mobileNavbarSearchInput');
    if (!searchInput) return;
    
    const query = searchInput.value.trim();
    
    if (query) {
        // Redirect to gallery with search query
        window.location.href = `gallery.php?search=${encodeURIComponent(query)}`;
    }
}

// Export mobile navbar search function for global access
window.handleMobileNavbarSearch = handleMobileNavbarSearch;
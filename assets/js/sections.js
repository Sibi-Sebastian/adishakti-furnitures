// Sections JavaScript Functions

// Hero Carousel Functionality
function changeSlide(index) {
    const images = document.querySelectorAll('.showcase-image');
    const indicators = document.querySelectorAll('.indicator');
    
    // Remove active class from all
    images.forEach(img => img.classList.remove('active'));
    indicators.forEach(ind => ind.classList.remove('active'));
    
    // Add active class to selected
    images[index].classList.add('active');
    indicators[index].classList.add('active');
}

// Auto-play hero carousel
let currentSlide = 0;
const totalSlides = document.querySelectorAll('.showcase-image').length;

function autoPlayCarousel() {
    currentSlide = (currentSlide + 1) % totalSlides;
    changeSlide(currentSlide);
}

// Start auto-play if carousel exists
if (document.querySelector('.showcase-main')) {
    setInterval(autoPlayCarousel, 5000);
}

// Product Filter Functionality
function filterProducts(category) {
    const products = document.querySelectorAll('.product-card');
    const buttons = document.querySelectorAll('.filter-btn');
    const viewAllBtn = document.getElementById('viewAllBtn');
    const viewAllText = viewAllBtn?.querySelector('.view-all-text');
    
    // Update active button
    buttons.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');
    
    // Filter products
    products.forEach(product => {
        const productCategory = product.getAttribute('data-category');
        if (productCategory === category) {
            product.style.display = 'block';
            product.classList.add('fade-in');
        } else {
            product.style.display = 'none';
            product.classList.remove('fade-in');
        }
    });
    
    // Update view all button text
    if (viewAllText) {
        viewAllText.textContent = `View All ${category} Products`;
    }
    
    // Update view all button link
    if (viewAllBtn) {
        viewAllBtn.href = `gallery.php?category=${encodeURIComponent(category)}`;
    }
}

// Smooth scroll for anchor links
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
        }
    });
}, observerOptions);

// Observe sections for animations
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.shop-categories-section, .featured-banner-section, .new-collection-section, .modular-section, .indias-finest-brand-section, .why-wooden-section');
    sections.forEach(section => observer.observe(section));
});

// Back to top functionality
const backToTopBtn = document.getElementById('backToTop');

if (backToTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}
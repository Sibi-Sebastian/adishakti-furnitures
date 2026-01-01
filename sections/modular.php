<!-- Modular Section -->
<div class="modular-section">
    <div class="hero-container">
        <h2 class="section-title">Premium Collections, Living Room & More</h2>
        <p class="section-subtitle">Custom-designed modular furniture that turns everyday moments into lasting memories, crafted with care and premium materials.</p>
        <div class="modular-grid">
            
            <div class="modular-banner modular-large" data-banner="1">
                <img src="assets/images/premium-collection-sofa.webp" alt="Premium Modular Furniture" loading="lazy">
                <div class="modular-banner-content">
                    <h3 class="modular-title">Transform Your Interiors with Excellence</h3>
                    <p class="modular-description">Engineered wood with laminate finish, soft-close hinges, and customizable configurations</p>
                    <a href="gallery.php" class="modular-cta">View Collection</a>
                </div>
            </div>

            <div class="modular-banner modular-large" data-banner="2">
                <img src="assets/images/premium-dining.webp" alt="Bedroom Collection" loading="lazy">
                <div class="modular-banner-content">
                    <h3 class="modular-title">Bedroom Collection</h3>
                    <p class="modular-description">Wardrobes with mirror finish, storage beds with hydraulic mechanism</p>
                    <a href="gallery.php?category=Bedroom" class="modular-cta">View Collection</a>
                </div>
            </div>

            <div class="modular-bottom-banner">
                <div class="modular-banner-split">
                    <div class="modular-banner-left">
                        <h3 class="modular-product-title">Premium Sofa & Home Office Collection</h3>
                        <p class="modular-product-description">Modern seating and workspace solutions with ergonomic design, durable materials, and contemporary styling. Available in multiple sizes, finishes, and fabric options.</p>
                        <div class="product-features">
                            <span class="modular-cta">High-Density Foam</span>
                            <span class="modular-cta">Premium Fabric / Leatherette</span>
                            <span class="modular-cta">Solid Wood Frame</span>
                        </div>
                        </div>
                    <div class="modular-banner-right" style="min-height: 768px;">
                        <img src="assets/images/premium-tv.webp" alt="Linnea TV Unit" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if device is mobile/tablet
    function isMobileOrTablet() {
        return window.innerWidth <= 1024 || 'ontouchstart' in window;
    }
    
    // Get all modular banners
    const modularBanners = document.querySelectorAll('.modular-banner.modular-large');
    
    modularBanners.forEach(banner => {
        const content = banner.querySelector('.modular-banner-content');
        const button = banner.querySelector('.modular-cta');
        
        if (isMobileOrTablet()) {
            // Mobile/Tablet behavior: tap to toggle content visibility
            banner.addEventListener('click', function(e) {
                // Prevent default if clicking on the banner but not the button
                if (!button.contains(e.target)) {
                    e.preventDefault();
                    
                    // Toggle active class
                    banner.classList.toggle('mobile-active');
                }
            });
            
            // Allow button clicks to work normally
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                // Let the default link behavior happen
            });
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        // Remove mobile-active class if switching to desktop
        if (!isMobileOrTablet()) {
            modularBanners.forEach(banner => {
                banner.classList.remove('mobile-active');
            });
        }
    });
});
</script>
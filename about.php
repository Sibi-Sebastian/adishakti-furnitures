<?php
$title = 'About Us - Adishakti Furnitures | Handcrafted Wooden Furniture';
$meta_description = 'Learn about Adishakti Furnitures - your trusted partner for premium handcrafted wooden furniture. Discover our story, craftsmanship, and commitment to quality.';
$meta_keywords = 'about Adishakti furnitures, wooden furniture company, handcrafted furniture, furniture craftsmanship, premium furniture maker';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="<?= $meta_keywords ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:image" content="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/about.css">
</head>
<body>
    <!-- Navigation -->
    <?php include 'components/navbar.php'; ?>
    
    <!-- Main Content -->
    <main>
        <!-- About Hero Section -->
        <div class="about-hero">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="breadcrumb-separator">›</span>
                    <span class="breadcrumb-current">About Us</span>
                </div>
                <h1 class="about-title">
                    About <span class="highlight">Adishakti Furnitures</span>
                </h1>
                <p class="about-subtitle">
                    Crafting timeless furniture with passion, precision, and premium materials since our inception
                </p>
            </div>
        </div>

        <!-- Our Story Section -->
        <div class="story-section">
            <div class="container">
                <div class="story-grid">
                    <div class="story-image">
                        <img src="https://lh3.googleusercontent.com/gps-cs-s/AG0ilSz0Ah82ZxfQiuoFON9gBl49tkJCSzSDZ4DodEG5pgX7vXFb7bMuRuBBB5oz-s1uoHGQHtHZnLJqgv2yQwTQqpHcUcA7jNKt0KPkqlOGLvu7zbj8Kn4AhQWNgcItTM_ke7-JdJWp=s1360-w1360-h1020-rw" alt="Adishakti Furnitures Craftsmanship" loading="lazy">
                    </div>
                    <div class="story-content">
                        <h2 class="section-title">Our Story</h2>
                        <p class="story-text">
                            Adishakti Furnitures was born from a passion for creating beautiful, functional furniture that transforms houses into homes. Founded with the vision of bringing premium handcrafted wooden furniture to every household, we have been dedicated to excellence in craftsmanship and customer satisfaction.
                        </p>
                        <p class="story-text">
                            Our journey began with a simple belief: that furniture should not just be functional, but should also tell a story, reflect personality, and create lasting memories. Every piece we create is a testament to this philosophy, combining traditional woodworking techniques with modern design sensibilities.
                        </p>
                        <div class="story-highlights">
                            <div class="highlight-item">
                                <div class="highlight-number">8,247+</div>
                                <div class="highlight-label">Happy Customers</div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number">387+</div>
                                <div class="highlight-label">Unique Designs</div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number">43+</div>
                                <div class="highlight-label">Cities Served</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Trust Adishakti Section -->
        <div class="trust-section">
            <div class="container">
                <h2 class="section-title text-center">Why Trust Adishakti Furnitures?</h2>
                <p class="section-subtitle text-center">
                    Building lasting relationships through quality, reliability, and exceptional service
                </p>
                
                <div class="trust-grid">
                    <div class="trust-card">
                        <div class="trust-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                        <h3 class="trust-title">Premium Quality</h3>
                        <p class="trust-description">We use only the finest materials and time-tested craftsmanship techniques to ensure every piece lasts for generations.</p>
                    </div>

                    <div class="trust-card">
                        <div class="trust-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 12l2 2 4-4"></path>
                                <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"></path>
                                <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"></path>
                            </svg>
                        </div>
                        <h3 class="trust-title">Trusted Service</h3>
                        <p class="trust-description">Years of satisfied customers and positive reviews reflect our commitment to excellence and customer satisfaction.</p>
                    </div>

                    <div class="trust-card">
                        <div class="trust-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h3 class="trust-title">Expert Guidance</h3>
                        <p class="trust-description">Our experienced team provides personalized advice to help you choose furniture that perfectly fits your space and style.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="why-choose-section">
            <div class="container">
                <div class="why-choose-grid">
                    <div class="why-choose-image">
                        <img src="https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg" alt="Quality Furniture" loading="lazy">
                    </div>
                    <div class="why-choose-content">
                        <h2 class="section-title">Why Choose Adishakti Furnitures?</h2>
                        <div class="features-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"></path>
                                        <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"></path>
                                        <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"></path>
                                        <path d="M12 3c0 1-1 3-3 3s-3-2-3-3 1-3 3-3 3 2 3 3"></path>
                                        <path d="M12 21c0-1 1-3 3-3s3 2 3 3-1 3-3 3-3-2-3-3"></path>
                                    </svg>
                                </div>
                                <div class="feature-text">
                                    <h4>Premium Quality Materials</h4>
                                    <p>We use only the finest wood and materials sourced from trusted suppliers.</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                        <polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline>
                                        <polyline points="7.5 19.79 7.5 14.6 3 12"></polyline>
                                        <polyline points="21 12 16.5 14.6 16.5 19.79"></polyline>
                                        <polyline points="12 22.81 12 17"></polyline>
                                    </svg>
                                </div>
                                <div class="feature-text">
                                    <h4>10 Year Warranty</h4>
                                    <p>Comprehensive warranty coverage with dedicated customer support.</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <div class="feature-text">
                                    <h4>Expert Consultation</h4>
                                    <p>Free design consultation with our interior experts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    
    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    
    <!-- Floating Action Buttons (Mobile Only) -->
    <div class="floating-actions">
        <a href="tel:+919876543210" class="floating-btn floating-call" aria-label="Call us">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
        </a>
        <a href="https://wa.me/919876543210" class="floating-btn floating-whatsapp" target="_blank" aria-label="WhatsApp us">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.893 3.386"/>
            </svg>
        </a>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="Back to top">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>
    
    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
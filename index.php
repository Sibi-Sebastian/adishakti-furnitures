<?php
// Adishakti Furnitures - Main Homepage
// Plain PHP version converted from CodeIgniter

// Include data functions
require_once 'includes/data.php';

// Get data for the page
$products = getProductsData();
$categories = getCategoriesData();
$featured_products = getFeaturedProducts();
$title = 'Adishakti Furnitures - Premium Wooden Furniture | Handcrafted with Love';
$meta_description = 'Explore premium handcrafted furniture for your home. Browse our collection of sofas, beds, dining tables, and more. 8,247+ happy customers across India.';
$meta_keywords = 'furniture, wooden furniture, home furniture, sofas, beds, dining tables, wardrobes, India';
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
</head>
<body>
    <!-- Navigation -->
    <?php include 'components/navbar.php'; ?>
    
    <!-- Main Content -->
    <main>
        <div class="hero">
            <?php include 'sections/hero.php'; ?>
            <?php include 'sections/why-choose.php'; ?>
            <?php include 'sections/modular.php'; ?>
            <?php include 'sections/indias-finest-brand.php'; ?>
            <?php include 'sections/latest-collections.php'; ?>
            <?php include 'components/testimonials.php'; ?>
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
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>
    
    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
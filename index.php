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
            <?php include 'sections/latest-collections.php'; ?>
            <?php include 'sections/indias-finest-brand.php'; ?>
        </div>

        <!-- Testimonials Section -->
        <?php include 'components/testimonials.php'; ?>
    </main>
    
    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
    
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
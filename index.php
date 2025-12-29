<?php
// Adishakti Furnitures - Main Homepage
// Plain PHP version converted from CodeIgniter

// Product Data
function getProductsData() {
    return [
        // Living Room Category
        [
            'id' => 1,
            'name' => 'SOFA CORNER',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Premium corner sofa with comfortable seating',
            'dimensions' => 'L 250cm x W 180cm x H 85cm',
            'material' => 'Premium Fabric & Solid Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 2,
            'name' => 'SOFA 3+1+1',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Complete sofa set with 3-seater and 2 single chairs',
            'dimensions' => '3-Seater: L 210cm x W 90cm x H 85cm',
            'material' => 'Premium Fabric & Solid Wood',
            'badge' => 'New'
        ],
        [
            'id' => 3,
            'name' => 'WOODEN SOFA',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Traditional wooden sofa with elegant design',
            'dimensions' => 'L 200cm x W 85cm x H 90cm',
            'material' => 'Sheesham Wood'
        ],
        [
            'id' => 4,
            'name' => 'WOODEN L SHAPE SOFA',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'L-shaped wooden sofa perfect for corners',
            'dimensions' => 'L 240cm x W 160cm x H 85cm',
            'material' => 'Teak Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 5,
            'name' => 'WOODEN SOFA CUSHION',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Comfortable cushioned wooden sofa',
            'dimensions' => 'L 190cm x W 80cm x H 85cm',
            'material' => 'Wood Frame with Premium Cushions'
        ],
        [
            'id' => 6,
            'name' => 'WINGS CHAIR',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Elegant wing chair with high back support',
            'dimensions' => 'L 80cm x W 75cm x H 110cm',
            'material' => 'Fabric & Solid Wood Frame'
        ],
        [
            'id' => 7,
            'name' => 'RECLINERS',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Comfortable reclining chair for relaxation',
            'dimensions' => 'L 85cm x W 90cm x H 105cm',
            'material' => 'Leather & Metal Frame',
            'badge' => 'New'
        ],
        [
            'id' => 8,
            'name' => 'ROCKING CHAIR',
            'category' => 'Living Room',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Traditional wooden rocking chair',
            'dimensions' => 'L 70cm x W 85cm x H 100cm',
            'material' => 'Solid Wood'
        ],

        // Bedroom Category
        [
            'id' => 9,
            'name' => 'WOODEN COTS',
            'category' => 'Bedroom',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg',
            'description' => 'Handcrafted wooden bed with elegant design',
            'dimensions' => 'L 210cm x W 180cm x H 120cm',
            'material' => 'Sheesham Wood',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 10,
            'name' => 'STORAGE COTS',
            'category' => 'Bedroom',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg',
            'description' => 'Wooden bed with built-in storage compartments',
            'dimensions' => 'L 210cm x W 180cm x H 120cm',
            'material' => 'Engineered Wood with Storage',
            'badge' => 'New'
        ],
        [
            'id' => 11,
            'name' => 'WARDROBE',
            'category' => 'Bedroom',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg',
            'description' => 'Spacious wardrobe with multiple compartments',
            'dimensions' => 'L 180cm x W 60cm x H 210cm',
            'material' => 'Engineered Wood'
        ],
        [
            'id' => 12,
            'name' => 'DRESSING TABLE',
            'category' => 'Bedroom',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg',
            'description' => 'Elegant dressing table with mirror and drawers',
            'dimensions' => 'L 120cm x W 45cm x H 160cm',
            'material' => 'Solid Wood with Mirror'
        ],

        // Dining Category
        [
            'id' => 13,
            'name' => 'DINING TABLES',
            'category' => 'Dining',
            'image' => 'https://media.landmarkshops.in/cdn-cgi/image/h=1420,w=1420,q=85,fit=cover/homecentre/1000016248132-1000016248132-2710_01-2100.jpg',
            'description' => 'Premium wooden dining table for family gatherings',
            'dimensions' => 'L 180cm x W 90cm x H 75cm',
            'material' => 'Mango Wood',
            'badge' => 'Bestseller'
        ],

        // Mattresses Category
        [
            'id' => 14,
            'name' => 'MATTRESS',
            'category' => 'Mattresses',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Orthopedic memory foam mattress for better sleep',
            'dimensions' => 'L 200cm x W 180cm x H 20cm',
            'material' => 'Memory Foam',
            'badge' => 'New'
        ],
        [
            'id' => 15,
            'name' => 'PILLOWS',
            'category' => 'Mattresses',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Comfortable pillows for perfect sleep',
            'dimensions' => 'L 70cm x W 45cm x H 15cm',
            'material' => 'Memory Foam & Cotton Cover'
        ],

        // Home Office Category
        [
            'id' => 16,
            'name' => 'OFFICE CHAIR',
            'category' => 'Home Office',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Ergonomic office chair for comfortable work',
            'dimensions' => 'L 65cm x W 65cm x H 110cm',
            'material' => 'Mesh & Metal Frame',
            'badge' => 'Bestseller'
        ],
        [
            'id' => 17,
            'name' => 'COMPUTER TABLE',
            'category' => 'Home Office',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Modern computer table with cable management',
            'dimensions' => 'L 120cm x W 60cm x H 75cm',
            'material' => 'Engineered Wood'
        ],
        [
            'id' => 18,
            'name' => 'STUDY TABLE',
            'category' => 'Home Office',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Spacious study table with storage drawers',
            'dimensions' => 'L 120cm x W 60cm x H 75cm',
            'material' => 'Solid Wood'
        ],
        [
            'id' => 19,
            'name' => 'BOSS CHAIRS',
            'category' => 'Home Office',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Executive boss chair with premium leather',
            'dimensions' => 'L 70cm x W 70cm x H 120cm',
            'material' => 'Leather & Metal Frame',
            'badge' => 'New'
        ],

        // Home Decor Category
        [
            'id' => 20,
            'name' => 'POOJA MANTAPA',
            'category' => 'Home Decor',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Traditional wooden pooja mantapa for worship',
            'dimensions' => 'L 90cm x W 45cm x H 150cm',
            'material' => 'Teak Wood with Carvings',
            'badge' => 'Limited'
        ]
    ];
}

function getCategoriesData() {
    return ['Living Room', 'Bedroom', 'Dining', 'Mattresses', 'Home Office', 'Home Decor'];
}

function getFeaturedProducts() {
    return [
        [
            'name' => 'Modern Living Collection',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg',
            'description' => 'Elegant comfort for your space'
        ],
        [
            'name' => 'Luxury Bedroom Sets',
            'image' => 'https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg',
            'description' => 'Where dreams meet design'
        ],
        [
            'name' => 'Dining Excellence',
            'image' => 'https://media.landmarkshops.in/cdn-cgi/image/h=1420,w=1420,q=85,fit=cover/homecentre/1000016248132-1000016248132-2710_01-2100.jpg',
            'description' => 'Gather in style'
        ]
    ];
}

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
            <!-- Split Hero Section -->
            <div class="hero-split">
                <div class="hero-container">
                    <!-- Left Side - Content -->
                    <div class="hero-content-side">
                        <div class="hero-badge">✨ Handcrafted with Love</div>
                        <h1 class="hero-main-title">
                            Transform Your Space with
                            <span class="hero-highlight"> Timeless Elegance</span>
                        </h1>
                        <p class="hero-description">
                            Discover premium handcrafted furniture that brings warmth, style, and comfort to every corner of your home. From classic designs to modern masterpieces.
                        </p>
                        
                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="stat-number">8,247+</div>
                                <div class="stat-label">Happy Customers</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">387+</div>
                                <div class="stat-label">Unique Designs</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">43+</div>
                                <div class="stat-label">Cities Served</div>
                            </div>
                        </div>

                        <div class="hero-cta-group">
                            <a href="gallery.php" class="hero-cta-primary">
                                View Collection
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                            <a href="tel:+919986642973" class="hero-cta-secondary">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                Call Us
                            </a>
                            <a 
                                href="https://wa.me/919986642973?text=Hi, I'm interested in your furniture" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="hero-cta-whatsapp"
                            >
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Right Side - Interactive Showcase -->
                    <div class="hero-showcase-side">
                        <div class="showcase-main">
                            <?php foreach ($featured_products as $index => $product): ?>
                                <div class="showcase-image <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>">
                                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" loading="lazy">
                                    <div class="showcase-overlay">
                                        <h3><?= $product['name'] ?></h3>
                                        <p><?= $product['description'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="showcase-indicators">
                            <?php foreach ($featured_products as $index => $product): ?>
                                <button
                                    class="indicator <?= $index === 0 ? 'active' : '' ?>"
                                    onclick="changeSlide(<?= $index ?>)"
                                    aria-label="View slide <?= $index + 1 ?>"
                                ></button>
                            <?php endforeach; ?>
                        </div>

                        <!-- Floating Elements -->
                        <div class="floating-badge badge-1">
                            <span class="badge-icon">🏆</span>
                            <div>
                                <div class="badge-title">Premium Quality</div>
                                <div class="badge-subtitle">Certified Wood</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Premimum furnitures Section -->
            <div class="shop-categories-section" id="products">
                <div class="hero-container">
                    <h2 class="section-title">Premium furniture offered in Davangere</h2>
                    <p class="section-subtitle">Explore our curated collection of premium furniture for every room</p>
                    
                    <div class="category-filters" role="tablist" aria-label="Product categories">
                        <?php foreach ($categories as $category): ?>
                            <button
                                class="filter-btn <?= $category === 'Living Room' ? 'active' : '' ?>"
                                onclick="filterProducts('<?= $category ?>')"
                                role="tab"
                                aria-selected="<?= $category === 'Living Room' ? 'true' : 'false' ?>"
                                aria-label="Filter by <?= $category ?>"
                            >
                                <?= $category ?>
                            </button>
                        <?php endforeach; ?>
                    </div>

                    <!-- Products Grid -->
                    <div class="products-grid" id="productsGrid">
                        <?php foreach ($products as $product): ?>
                            <a href="gallery.php?category=<?= urlencode($product['category']) ?>" class="product-card" data-category="<?= $product['category'] ?>" style="<?= $product['category'] !== 'Living Room' ? 'display: none;' : '' ?>">
                                <div class="product-image">
                                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" loading="lazy">
                                    <?php if (isset($product['badge'])): ?>
                                        <div class="product-badge"><?= $product['badge'] ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="product-name"><?= $product['name'] ?></div>
                                
                                <!-- Product Tooltip -->
                                <div class="product-tooltip">
                                    <div class="tooltip-content">
                                        <h4 class="tooltip-title"><?= $product['name'] ?></h4>
                                        <p class="tooltip-category"><?= $product['category'] ?></p>
                                        <p class="tooltip-description"><?= $product['description'] ?></p>
                                        <?php if (isset($product['material'])): ?>
                                            <p class="tooltip-detail"><strong>Material:</strong> <?= $product['material'] ?></p>
                                        <?php endif; ?>
                                        <?php if (isset($product['dimensions'])): ?>
                                            <p class="tooltip-detail"><strong>Dimensions:</strong> <?= $product['dimensions'] ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- View All Button -->
                    <div class="view-all-section">
                        <a href="gallery.php" class="view-all-btn" id="viewAllBtn">
                            <span class="view-all-text">View All Living Room Products</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>



            <!-- Featured Collection Banner -->
            <div class="featured-banner-section">
                <div class="hero-container">
                    <div class="featured-banner">
                        <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Featured Collection" class="banner-image" loading="lazy">
                        <div class="banner-overlay">
                            <div class="banner-content">
                                <span class="banner-subtitle">New Collection • Premium Teak Wood</span>
                                <h2 class="banner-title">The Toledo Look</h2>
                                <p class="banner-description">Discover timeless elegance with our exclusive Toledo collection featuring hand-carved details, rich grain patterns, and traditional joinery techniques passed down through generations.</p>
                                <div class="banner-features">
                                    <div class="feature-item">
                                        <span class="feature-icon">🌳</span>
                                        <span class="feature-text">Premium Teak Wood</span>
                                    </div>
                                    <div class="feature-item">
                                        <span class="feature-icon">✋</span>
                                        <span class="feature-text">Hand-Carved Details</span>
                                    </div>
                                    <div class="feature-item">
                                        <span class="feature-icon">🛡️</span>
                                        <span class="feature-text">10-Year Warranty</span>
                                    </div>
                                </div>
                                <a href="gallery.php" class="banner-cta">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Collections Section -->
            <div class="new-collection-section">
                <div class="hero-container">
                    <h2 class="section-title">Latest Collections</h2>
                    
                    <div class="collection-grid">
                        <a href="gallery.php" class="collection-card collection-large">
                            <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Astra Collection" loading="lazy">
                            <div class="collection-label">
                                <div class="label-content">
                                    <span class="collection-badge">NEW</span>
                                    <h3 class="collection-name">ASTRA Collection</h3>
                                </div>
                                <svg class="collection-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 16 16 12 12 8"></polyline>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </div>
                        </a>

                        <div class="collection-cards-right">
                            <?php 
                            $rooms = [
                                'Living Room' => 'Living Room',
                                'Dining Room' => 'Dining', 
                                'Bedroom' => 'Bedroom',
                                'Explore All' => ''
                            ];
                            foreach ($rooms as $room_name => $category): 
                                $link = $category ? "gallery.php?category=" . urlencode($category) : "gallery.php";
                            ?>
                                <a href="<?= $link ?>" class="collection-card collection-small">
                                    <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="<?= $room_name ?>" loading="lazy">
                                    <div class="collection-label">
                                        <h3 class="collection-name"><?= $room_name ?></h3>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modular Section -->
            <div class="modular-section">
                <div class="hero-container">
                    <h2 class="section-title">Modular Kitchens, Wardrobes & More</h2>
                    <p class="section-subtitle">Custom-designed modular solutions crafted with precision engineering and premium materials</p>
                    <div class="modular-grid">
                        <div class="modular-banner modular-large">
                            <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Premium Modular Furniture" loading="lazy">
                            <div class="modular-banner-content">
                                <span class="modular-badge">PREMIUM COLLECTION</span>
                                <h3 class="modular-title">Transform Your Interiors with Modular Excellence</h3>
                                <p class="modular-description">Engineered wood with laminate finish, soft-close hinges, and customizable configurations</p>
                                <a href="gallery.php" class="modular-cta">View Collection</a>
                            </div>
                        </div>

                        <a href="gallery.php?category=Bedroom" class="modular-banner modular-large">
                            <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Bedroom Collection" loading="lazy">
                            <div class="modular-banner-overlay">
                                <div class="modular-overlay-content">
                                    <h4 class="overlay-title">Bedroom Collection</h4>
                                    <p class="overlay-description">Wardrobes with mirror finish, storage beds with hydraulic mechanism</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <a href="gallery.php?category=Living%20Room" class="modular-bottom-banner">
                        <div class="modular-banner-split">
                            <div class="modular-banner-left">
                                <h3 class="modular-product-title">Linnea TV Unit Collection</h3>
                                <p class="modular-product-description">Modern entertainment solutions with cable management, LED strip compatibility, and premium matte finish. Available in multiple sizes and configurations.</p>
                                <div class="product-features">
                                    <span class="feature-tag">Sheesham Wood</span>
                                    <span class="feature-tag">Cable Management</span>
                                    <span class="feature-tag">LED Ready</span>
                                </div>
                            </div>
                            <div class="modular-banner-right">
                                <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Linnea TV Unit" loading="lazy">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- India's Finest Online Furniture Brand Section -->
            <div class="indias-finest-brand-section">
                <div class="finest-brand-header">
                    <h2 class="finest-brand-title">India's Finest Online Furniture Brand</h2>
                    <p class="section-description">
                        Explore our <a href="gallery.php" class="highlight">Furniture</a> Collection showcasing our extensive range of wooden furniture units to give your home an elegant touch with premium craftsmanship. We offer a wide range of... <a href="gallery.php" class="more-link">More</a>
                    </p>
                </div>
                
                <div class="finest-brand-categories">
                    <!-- Row 1 -->
                    <!-- Dining Room Card -->
                    <a href="gallery.php?category=Dining" class="brand-category-card dining-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Dining Room</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://media.landmarkshops.in/cdn-cgi/image/h=1420,w=1420,q=85,fit=cover/homecentre/1000016248132-1000016248132-2710_01-2100.jpg" alt="Dining Room Furniture" loading="lazy">
                    </a>

                    <!-- Bedroom Card -->
                    <a href="gallery.php?category=Bedroom" class="brand-category-card bedroom-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Bedroom</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg" alt="Bedroom Furniture" loading="lazy">
                    </a>

                    <!-- Living Room Card -->
                    <a href="gallery.php?category=Living%20Room" class="brand-category-card living-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Living Room</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Living Room Furniture" loading="lazy">
                    </a>

                    <!-- Row 2 -->
                    <!-- Study Card -->
                    <a href="gallery.php?category=Home%20Office" class="brand-category-card study-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Study</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Study Furniture" loading="lazy">
                    </a>

                    <!-- Outdoor Card -->
                    <a href="gallery.php?category=Home%20Decor" class="brand-category-card outdoor-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Outdoor</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Outdoor Furniture" loading="lazy">
                    </a>

                    <!-- Kids Room Card -->
                    <a href="gallery.php?category=Bedroom" class="brand-category-card kids-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Kids Room</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/w/h/1100x1210/white-abstract-220-tc-microfiber-king-size-fitted-bedsheet-with-2-pillow-covers-white-abstract-220-t-8rkzv4.jpg" alt="Kids Room Furniture" loading="lazy">
                    </a>

                    <!-- Row 3 (partial) -->
                    <!-- Office Card -->
                    <a href="gallery.php?category=Home%20Office" class="brand-category-card office-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Office</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Office Furniture" loading="lazy">
                    </a>

                    <!-- Decor Card -->
                    <a href="gallery.php?category=Home%20Decor" class="brand-category-card decor-card">
                        <div class="category-overlay">
                            <div class="category-info">
                                <h3 class="category-title">Decor</h3>
                                <p class="category-subtitle">Furniture</p>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="Home Decor" loading="lazy">
                    </a>

                    <!-- More Collections Card -->
                    <a href="gallery.php" class="brand-category-card more-card">
                        <div class="category-overlay">
                            <div class="category-info more-info">
                                <h3 class="category-title">Explore More</h3>
                                <p class="category-subtitle">Collections</p>
                                <div class="more-button">
                                    <span>View All</span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <img src="https://ii1.pepperfry.com/media/catalog/product/c/a/1600x1760/canedo-velvet-chaise-lounger-in-beige-colour-by-casacraft-canedo-velvet-chaise-lounger-in-beige-colo-zqhuzh.jpg" alt="More Collections" loading="lazy">
                    </a>
                </div>
            </div>

            <!-- Why Choose Wooden Furniture Section -->
            <div class="why-wooden-section">
                <div class="hero-container">
                    <div class="why-wooden-grid">
                        <div class="why-wooden-content">
                            <h2 class="section-title">Why Choose Adishakti Furnitures?</h2>
                            <p class="section-subtitle">Discover the timeless benefits that make wooden furniture the perfect choice for your home</p>
                            
                            <div class="benefits-list">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="benefit-text">
                                        <h4>Durability That Lasts Generations</h4>
                                        <p>High-quality wooden furniture can last for decades with proper care, making it a smart long-term investment for your home.</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    </div>
                                    <div class="benefit-text">
                                        <h4>Natural Beauty & Warmth</h4>
                                        <p>Wood brings natural warmth and character to any space, creating a cozy and inviting atmosphere that synthetic materials can't match.</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4"></path>
                                        </svg>
                                    </div>
                                    <div class="benefit-text">
                                        <h4>Increases Home Value</h4>
                                        <p>Quality wooden furniture adds significant value to your property and creates a sophisticated, premium look that buyers appreciate.</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <div class="benefit-text">
                                        <h4>Eco-Friendly Choice</h4>
                                        <p>Sustainably sourced wooden furniture is environmentally responsible and biodegradable, reducing your carbon footprint.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why-wooden-image">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Beautiful wooden furniture showcase" loading="lazy">
                        </div>
                    </div>
                </div>
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
<?php
// Adishakti Furnitures - Collections Page
// Showcase all products in a clean collections layout

// Include data functions
require_once 'includes/data.php';

$gallery_products = getProductsData();
$gallery_categories = getGalleryCategoriesData();

// Get category from URL parameter
$selected_category = isset($_GET['category']) ? urldecode($_GET['category']) : 'All';
$selected_category = in_array($selected_category, $gallery_categories) ? $selected_category : 'All';



// Get search query from URL parameter
$search_query = isset($_GET['search']) ? trim($_GET['search']) : '';

// Update title and meta based on selected category
if ($selected_category !== 'All') {
    $title = $selected_category . ' Furniture - Adishakti Furnitures | Premium Wooden Furniture';
    $meta_description = 'Explore our ' . strtolower($selected_category) . ' furniture collection. Handcrafted wooden furniture pieces designed for your ' . strtolower($selected_category) . '.';
    $meta_keywords = strtolower($selected_category) . ' furniture, wooden ' . strtolower($selected_category) . ' furniture, Adishakti ' . strtolower($selected_category) . ', premium ' . strtolower($selected_category) . ' furniture';
} else {
    $title = 'Collections - Adishakti Furnitures | Premium Wooden Furniture Collection';
    $meta_description = 'Explore our complete collection of handcrafted wooden furniture. Browse through our collections of sofas, beds, dining tables, wardrobes, and more premium furniture pieces.';
    $meta_keywords = 'furniture collections, wooden furniture collection, Adishakti furniture showcase, premium furniture, handcrafted furniture';
}
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
    <link rel="stylesheet" href="assets/css/gallery.css">
</head>
<body>
    <!-- Navigation -->
    <?php include 'components/navbar.php'; ?>
    
    <!-- Main Content -->
    <main>
        <!-- Collections Header Section -->
        <div class="gallery-header">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="breadcrumb-separator">›</span>
                    <?php if ($selected_category !== 'All'): ?>
                        <a href="gallery.php">Collections</a>
                        <span class="breadcrumb-separator">›</span>
                        <span class="breadcrumb-current"><?= $selected_category ?></span>
                    <?php else: ?>
                        <span class="breadcrumb-current">Collections</span>
                    <?php endif; ?>
                </div>
                <h1 class="gallery-title">
                    <?php if (!empty($search_query)): ?>
                        Search Results for "<span class="highlight"><?= htmlspecialchars($search_query) ?></span>"
                    <?php elseif ($selected_category !== 'All'): ?>
                        <span class="highlight"><?= $selected_category ?></span> Furniture
                    <?php else: ?>
                        Our <span class="highlight">Furniture Collections</span>
                    <?php endif; ?>
                </h1>

                <p class="gallery-description">
                    <?php if (!empty($search_query)): ?>
                        Browse through our search results
                    <?php elseif ($selected_category !== 'All'): ?>
                        Explore our <?= strtolower($selected_category) ?> furniture collections
                    <?php else: ?>
                        Discover our complete collections of handcrafted wooden furniture
                    <?php endif; ?>
                </p>
                <div class="gallery-results">
                    <span id="resultsCount"><?= count($gallery_products) ?></span> 
                    <?php if (!empty($search_query)): ?>
                        results found
                    <?php else: ?>
                        products in our collection
                    <?php endif; ?>
                </div>
            </div>
        </div>



        <!-- Collections Grid Section -->
        <div class="gallery-section">
            <div class="container">
                <div class="gallery-grid" id="galleryGrid">
                    <?php foreach ($gallery_products as $index => $product): ?>
                        <div class="product-card" data-category="<?= $product['category'] ?>" data-index="<?= $index ?>" onclick="openProductModal(<?= $index ?>)">
                            <div class="product-image">
                                <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" loading="lazy">
                                <?php if (isset($product['badge'])): ?>
                                    <div class="product-badge"><?= $product['badge'] ?></div>
                                <?php endif; ?>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <div class="product-quick-info">
                                            <h3 class="overlay-title"><?= $product['name'] ?></h3>
                                            <p class="overlay-category"><?= $product['category'] ?></p>
                                        </div>
                                        <div class="view-details-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.35-4.35"></path>
                                            </svg>
                                            <span>View Details</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><?= $product['name'] ?></h3>
                                <p class="product-category"><?= $product['category'] ?></p>
                                <p class="product-description"><?= $product['description'] ?></p>
                                <div class="product-specs">
                                    <span class="spec-item">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                            <line x1="8" y1="21" x2="16" y2="21"></line>
                                            <line x1="12" y1="17" x2="12" y2="21"></line>
                                        </svg>
                                        <?= $product['dimensions'] ?>
                                    </span>
                                    <span class="spec-item">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                                            <line x1="16" y1="8" x2="2" y2="22"></line>
                                            <line x1="17.5" y1="15" x2="9" y2="15"></line>
                                        </svg>
                                        <?= $product['material'] ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- No Results Message -->
                <div class="no-results" id="noResults" style="display: none;">
                    <div class="no-results-content">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                        <h3>No products found in this category</h3>
                        <p>Browse other categories using the navigation menu</p>
                        <a href="gallery.php" class="btn-primary">View All Products</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div class="lightbox-modal" id="lightboxModal">
            <div class="lightbox-overlay" onclick="closeLightbox()"></div>
            <div class="lightbox-content">
                <button class="lightbox-close" onclick="closeLightbox()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                
                <div class="lightbox-image-container">
                    <img id="lightboxImage" src="" alt="" loading="lazy" />
                </div>
                
                <div class="lightbox-info">
                    <div class="lightbox-details">
                        <h2 id="lightboxTitle"></h2>
                        <p id="lightboxCategory" class="lightbox-category"></p>
                        <p id="lightboxDescription" class="lightbox-description"></p>
                        <div class="lightbox-specs">
                            <div class="spec-item">
                                <span class="spec-label">Material:</span>
                                <span id="lightboxMaterial" class="spec-value"></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Dimensions:</span>
                                <span id="lightboxDimensions" class="spec-value"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lightbox-actions">
                        <button class="lightbox-cta-primary" onclick="contactForProduct(document.getElementById('lightboxTitle').textContent)">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            WhatsApp Inquiry
                        </button>
                        <button class="lightbox-cta-secondary" onclick="window.location.href='tel:+919986642973'">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            Call Now
                        </button>
                    </div>
                </div>
                
                <div class="lightbox-navigation">
                    <button class="lightbox-nav-btn" id="lightboxPrev" onclick="navigateLightbox(-1)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button class="lightbox-nav-btn" id="lightboxNext" onclick="navigateLightbox(1)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>


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
    <script>
        // Pass PHP data to JavaScript
        window.galleryProductsData = <?= json_encode($gallery_products) ?>;
        window.selectedCategory = '<?= $selected_category ?>';
        window.searchQuery = '<?= addslashes($search_query) ?>';
        

    </script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/gallery.js"></script>
</body>
</html>
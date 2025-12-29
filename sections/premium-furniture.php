<!-- Premium Furniture Section -->
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
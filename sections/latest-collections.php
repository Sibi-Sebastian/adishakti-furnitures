<!-- Latest Collections Section -->
<div class="new-collection-section">
    <div class="hero-container">
        <h2 class="section-title">Our Latest Collections</h2>
        <p class="section-subtitle">Custom-designed modular solutions crafted with precision engineering and premium materials</p>
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
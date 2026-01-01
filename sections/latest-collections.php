<!-- Latest Collections Section -->
<div class="new-collection-section">
    <div class="hero-container">
        <h2 class="section-title">Our Latest Collections</h2>
        <p class="section-subtitle">Thoughtfully designed modular furniture crafted with precision, premium materials, and a passion for beautiful living.</p>
        <div class="collection-grid">
            <a href="gallery.php" class="collection-card collection-large">
                <img src="http://localhost/Tackle-D/December/adishakti-furnitures/assets/images/premium-dining.webp" alt="Astra Collection" loading="lazy">
                <div class="collection-label">
                    <div class="label-content">
                        <span class="collection-badge">NEW</span>
                        <h3 class="collection-name">Dining Collections</h3>
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
                    'Living Room' => [
                        'category' => 'Living Room',
                        'image' => 'http://localhost/Tackle-D/December/adishakti-furnitures/assets/images/carousal-image-living-room.webp'
                    ],
                    'Dining Room' => [
                        'category' => 'Dining',
                        'image' => 'http://localhost/Tackle-D/December/adishakti-furnitures/assets/images/carousal-image-dining-room.webp'
                    ],
                    'Bedroom' => [
                        'category' => 'Bedroom',
                        'image' => 'http://localhost/Tackle-D/December/adishakti-furnitures/assets/images/carousal-image-bedroom.webp'
                    ]
                ];
                foreach ($rooms as $room_name => $room_data): 
                    $link = "gallery.php?category=" . urlencode($room_data['category']);
                ?>
                    <a href="<?= $link ?>" class="collection-card collection-small">
                        <img src="<?= $room_data['image'] ?>" alt="<?= $room_name ?>" loading="lazy">
                        <div class="collection-label">
                            <h3 class="collection-name"><?= $room_name ?></h3>
                        </div>
                    </a>
                <?php endforeach; ?>
                
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
                    <img src="http://localhost/Tackle-D/December/adishakti-furnitures/assets/images/why-choose-us.webp" alt="More Collections" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</div>
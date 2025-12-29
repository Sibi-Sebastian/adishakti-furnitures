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
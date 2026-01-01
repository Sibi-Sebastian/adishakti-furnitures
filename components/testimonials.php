<?php
// Testimonials data - matching the Google Reviews from the image
$testimonials = [
    [
        'name' => 'gowtham ganavi',
        'avatar' => 'https://ui-avatars.com/api/?name=Gowtham+Ganavi&background=4285F4&color=fff&size=40&rounded=true',
        'time' => '1 months ago',
        'rating' => 5,
        'review' => 'Extremely comfortable and supportive cushions High-quality build and fabric Looks stylish and fits my room perfectly, Delivered on time and easy to assemble.',
        'verified' => true
    ],
    [
        'name' => 'Suprith Suprith',
        'avatar' => 'https://ui-avatars.com/api/?name=Suprith+Suprith&background=8B4513&color=fff&size=40&rounded=true',
        'time' => '9 day ago',
        'rating' => 5,
        'review' => 'Got best service from staff Very reasonable price & Best quality products Highly recommend to Visit.',
        'verified' => true
    ],
    
    [
        'name' => 'Manju Bhargavi',
        'avatar' => 'https://ui-avatars.com/api/?name=Manju+Bhargavi&background=0F9D58&color=fff&size=40&rounded=true',
        'time' => '5 months ago',
        'rating' => 5,
        'review' => 'Good service with excellent communication. Very affordable prices and quality is good.',
        'verified' => true
    ]
];
?>

<section class="testimonials-section">
    <div class="testimonials-container">
        <!-- Section Header -->
        <div class="testimonials-header">
            <h2 class="testimonials-title">Customer Reviews</h2>
        </div>

        <!-- Google Reviews Widget -->
        <div class="google-reviews-widget">
            <!-- Reviews Header -->
            <div class="reviews-header">
                <div class="reviews-brand">
                    <svg width="20" height="20" viewBox="0 0 24 24" class="google-logo">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    <span class="reviews-text">Reviews</span>
                </div>
                <div class="reviews-rating">
                    <span class="rating-score">4.8</span>
                    <div class="rating-stars">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#FBBC05">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <span class="rating-count">(16)</span>
                </div>
                <button class="review-us-btn" onclick="window.open('https://share.google/z4xDjWKxBO00gQOSP', '_blank')">
                    <span>Review us on Google</span>
                </button>
            </div>

            <!-- Reviews Container -->
            <div class="reviews-container-wrapper">
                <div class="reviews-slider" id="reviewsSlider">
                    <?php foreach($testimonials as $index => $testimonial): ?>
                        <div class="review-slide">
                            <a href="https://share.google/z4xDjWKxBO00gQOSP" target="_blank" class="review-card">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <img src="<?php echo $testimonial['avatar']; ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>" class="reviewer-avatar">
                                        <div class="reviewer-details">
                                            <div class="reviewer-name-container">
                                                <span class="reviewer-name"><?php echo htmlspecialchars($testimonial['name']); ?></span>
                                                <?php if($testimonial['verified']): ?>
                                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#4285F4" class="verified-icon">
                                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </div>
                                            <span class="review-time"><?php echo $testimonial['time']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="review-rating">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="<?php echo $i <= $testimonial['rating'] ? '#FBBC05' : '#E0E0E0'; ?>">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    <?php endfor; ?>
                                </div>
                                
                                <div class="review-content">
                                    <p class="review-text"><?php echo htmlspecialchars($testimonial['review']); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Mobile Swipe Indicator -->
            <div class="mobile-swipe-hint">
                <span>Swipe to see all testimonials</span>
            </div>
        </div>
    </div>
</section>

<style>
/* Testimonials Section */
.testimonials-section {
    padding: 60px 0;
    background: #f8f9fa;
}

.testimonials-container {
    max-width: 80.5%;
    margin: 0 auto;
    padding: 0 20px;
}

.testimonials-header {
    text-align: center;
    margin-bottom: 50px;
}

.testimonials-title {
    font-size: 36px;
    font-weight: 700;
    color: #333;
    margin-bottom: 16px;
    white-space: nowrap;
}

/* Google Reviews Widget */
.google-reviews-widget {
    background: transparent;
    border-radius: 12px;
    box-shadow: none;
    padding: 27.6px;
    width: 100%;
    margin: 0 auto;
}

/* Reviews Header */
.reviews-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
    padding-bottom: 16px;
    border-bottom: 1px solid #e8eaed;
}

.reviews-brand {
    display: flex;
    align-items: center;
    gap: 8px;
}

.reviews-text {
    font-size: 16px;
    font-weight: 500;
    color: #3c4043;
}

.reviews-rating {
    display: flex;
    align-items: center;
    gap: 8px;
}

.rating-score {
    font-size: 16px;
    font-weight: 500;
    color: #3c4043;
}

.rating-stars {
    display: flex;
    gap: 2px;
}

.rating-count {
    font-size: 14px;
    color: #5f6368;
}

.review-us-btn {
    background: #4285f4;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s;
}

.review-us-btn:hover {
    background: #3367d6;
}

/* Desktop Reviews Layout */
.reviews-container-wrapper {
    position: relative;
}

.reviews-slider {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 24px;
}

.review-slide {
    width: 100%;
}

.review-card {
    display: block;
    text-decoration: none;
    color: inherit;
    background: #f8f9fa;
    border-radius: 8px;
    padding: 23px;
    border: 1px solid #e8eaed;
    height: 100%;
    transition: all 0.2s ease;
    box-sizing: border-box;
}

.review-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.review-header {
    margin-bottom: 12px;
}

.reviewer-info {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.reviewer-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
}

.reviewer-details {
    flex: 1;
}

.reviewer-name-container {
    display: flex;
    align-items: center;
    gap: 4px;
    margin-bottom: 2px;
}

.reviewer-name {
    font-size: 14px;
    font-weight: 500;
    color: #3c4043;
}

.verified-icon {
    flex-shrink: 0;
}

.review-time {
    font-size: 12px;
    color: #5f6368;
}

.review-rating {
    display: flex;
    gap: 2px;
    margin-bottom: 8px;
}

.review-content {
    font-size: 14px;
    line-height: 1.4;
    color: #3c4043;
}

.review-text {
    margin: 0;
}

/* Mobile Swipe Hint */
.mobile-swipe-hint {
    display: none;
    text-align: center;
    margin-top: 16px;
    padding: 8px;
}

.mobile-swipe-hint span {
    font-size: 14px;
    color: #666;
    font-style: italic;
}

/* Mobile Responsive Design */
@media (max-width: 768px) {
    .testimonials-section {
        padding: 40px 0;
    }
    
    .testimonials-title {
        font-size: 28px;
        white-space: nowrap;
    }
    
    .google-reviews-widget {
        padding: 16px;
    }
    
    .reviews-header {
        flex-direction: column;
        gap: 16px;
        align-items: flex-start;
    }
    
    .reviews-rating {
        order: -1;
    }
    
    /* Mobile Slider */
    .reviews-container-wrapper {
        overflow: hidden;
        position: relative;
    }
    
    .reviews-slider {
        display: flex;
        gap: 16px;
        transition: transform 0.3s ease;
        transform: translateX(0);
    }
    
    .review-slide {
        flex: 0 0 85%;
        min-width: 85%;
    }
    
    .review-card {
        margin: 0;
        height: auto;
        min-height: 200px;
    }
    
    .review-card:hover {
        transform: none;
        box-shadow: none;
    }
    
    .mobile-swipe-hint {
        display: block;
    }
}

@media (max-width: 480px) {
    .review-slide {
        flex: 0 0 90%;
        min-width: 90%;
    }
    
    .review-card {
        padding: 16px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('reviewsSlider');
    const slides = slider.querySelectorAll('.review-slide');
    const totalSlides = slides.length;
    let currentSlide = 0;
    let startX = 0;
    let currentX = 0;
    let isDragging = false;
    
    function isMobile() {
        return window.innerWidth <= 768;
    }
    
    function updateSlider() {
        if (!isMobile()) return;
        
        const slideWidth = slides[0].offsetWidth + 16; // width + gap
        const offset = -currentSlide * slideWidth;
        slider.style.transform = `translateX(${offset}px)`;
    }
    
    function goToSlide(index) {
        if (!isMobile()) return;
        
        currentSlide = Math.max(0, Math.min(index, totalSlides - 1));
        updateSlider();
    }
    
    // Touch events
    slider.addEventListener('touchstart', function(e) {
        if (!isMobile()) return;
        
        startX = e.touches[0].clientX;
        isDragging = true;
        slider.style.transition = 'none';
    });
    
    slider.addEventListener('touchmove', function(e) {
        if (!isMobile() || !isDragging) return;
        
        e.preventDefault();
        currentX = e.touches[0].clientX;
        const diffX = currentX - startX;
        const slideWidth = slides[0].offsetWidth + 16;
        const currentOffset = -currentSlide * slideWidth;
        
        slider.style.transform = `translateX(${currentOffset + diffX}px)`;
    });
    
    slider.addEventListener('touchend', function(e) {
        if (!isMobile() || !isDragging) return;
        
        isDragging = false;
        slider.style.transition = 'transform 0.3s ease';
        
        const diffX = currentX - startX;
        const threshold = 50;
        
        if (Math.abs(diffX) > threshold) {
            if (diffX > 0 && currentSlide > 0) {
                goToSlide(currentSlide - 1);
            } else if (diffX < 0 && currentSlide < totalSlides - 1) {
                goToSlide(currentSlide + 1);
            } else {
                updateSlider();
            }
        } else {
            updateSlider();
        }
    });
    
    // Handle resize
    window.addEventListener('resize', function() {
        if (isMobile()) {
            currentSlide = 0;
            updateSlider();
        } else {
            slider.style.transform = '';
            slider.style.transition = '';
        }
    });
    
    // Initialize
    if (isMobile()) {
        updateSlider();
    }
});
</script>
<?php
// Testimonials data
$testimonials = [
    [
        'name' => 'gowtham ganavi',
        'time' => '2 months ago',
        'rating' => 5,
        'review' => 'Extremely comfortable and supportive cushions High-quality build and fabric Looks stylish and fits my room perfectly. Delivered on time and easy to assemble.',
        'verified' => true
    ],
    [
        'name' => 'Suprith Suprith',
        'time' => '1 day ago',
        'rating' => 5,
        'review' => 'Got best service from staff Very reasonable price & Best quality products Highly recommend to Visit.',
        'verified' => true
    ],
    [
        'name' => 'Manju Bhargavi',
        'time' => '10 months ago',
        'rating' => 5,
        'review' => 'Good service with excellent communication. Very affordable prices and quality is good.',
        'verified' => true
    ]
];
?>

<section class="testimonials-section-new">
    <div class="testimonials-container-new">
        <div class="testimonials-widget-new">
            <!-- Header -->
            <div class="testimonials-header-new">
                <h2 class="testimonials-title-new">Customer Reviews</h2>
                <button class="google-review-btn-new" onclick="window.open('https://share.google/z4xDjWKxBO00gQOSP', '_blank')">
                    Review us on Google
                </button>
            </div>

            <!-- Reviews Container -->
            <div class="testimonials-grid-new" id="testimonialsGrid">
                <?php foreach($testimonials as $index => $testimonial): ?>
                    <div class="testimonial-item-new">
                        <div class="testimonial-content-new">
                            <div class="reviewer-info-new">
                                <div class="reviewer-avatar-new">
                                    <?php 
                                    $initials = strtoupper(substr($testimonial['name'], 0, 1) . substr(strstr($testimonial['name'], ' '), 1, 1));
                                    $colors = ['#4285F4', '#34A853', '#EA4335', '#FBBC05', '#9C27B0', '#FF5722'];
                                    $bgColor = $colors[$index % count($colors)];
                                    ?>
                                    <span class="avatar-text-new" style="background-color: <?php echo $bgColor; ?>">
                                        <?php echo $initials; ?>
                                    </span>
                                </div>
                                <div class="reviewer-details-new">
                                    <div class="reviewer-name-new"><?php echo htmlspecialchars($testimonial['name']); ?></div>
                                    <div class="review-date-new"><?php echo $testimonial['time']; ?></div>
                                </div>
                            </div>
                            
                            <div class="review-rating-new">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star-new <?php echo $i <= $testimonial['rating'] ? 'filled' : ''; ?>">★</span>
                                <?php endfor; ?>
                            </div>
                            
                            <div class="review-content-new">
                                <?php echo htmlspecialchars($testimonial['review']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Mobile Swipe Hint -->
            <div class="mobile-hint-new">
                Swipe to see all testimonials
            </div>
        </div>
    </div>
</section>

<style>
/* Complete reset for testimonials section */
.testimonials-section-new {
    padding: 80px 0;
    background: #ffffff;
    width: 100%;
    position: relative;
    z-index: 1;
}

.testimonials-section-new * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.testimonials-container-new {
    max-width: 80.5%;
    margin: 0 auto;
    padding: 0 20px;
}

.testimonials-widget-new {
    background: #ffffff;
    border: 1px solid #e8eaed;
    border-radius: 12px;
    padding: 32px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Header Styles */
.testimonials-header-new {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 24px;
    border-bottom: 1px solid #e8eaed;
}

.testimonials-title-new {
    font-size: 32px;
    font-weight: 600;
    color: #202124;
    letter-spacing: -0.5px;
    line-height: 1.2;
}

.google-review-btn-new {
    background: #1a73e8;
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 2px 4px rgba(26, 115, 232, 0.3);
}

.google-review-btn-new:hover {
    background: #1557b0;
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(26, 115, 232, 0.4);
}

/* Desktop Grid */
.testimonials-grid-new {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 24px;
}

.testimonial-item-new {
    width: 100%;
}

.testimonial-content-new {
    background: #ffffff;
    border: 1px solid #e8eaed;
    border-radius: 12px;
    padding: 24px;
    height: 100%;
    min-height: 220px;
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.testimonial-content-new:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    border-color: #dadce0;
}

/* Reviewer Info */
.reviewer-info-new {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 16px;
}

.reviewer-avatar-new {
    flex-shrink: 0;
}

.avatar-text-new {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
    font-size: 18px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.reviewer-details-new {
    flex: 1;
}

.reviewer-name-new {
    font-size: 16px;
    font-weight: 600;
    color: #202124;
    margin-bottom: 4px;
}

.review-date-new {
    font-size: 13px;
    color: #5f6368;
}

/* Rating Stars */
.review-rating-new {
    display: flex;
    gap: 2px;
    margin-bottom: 16px;
}

.star-new {
    font-size: 18px;
    color: #E8EAED;
    transition: color 0.2s ease;
}

.star-new.filled {
    color: #FBBC05;
}

/* Review Content */
.review-content-new {
    flex: 1;
    font-size: 15px;
    line-height: 1.6;
    color: #3c4043;
    word-wrap: break-word;
}

/* Mobile Hint */
.mobile-hint-new {
    display: none;
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #5f6368;
    font-style: italic;
}

/* Tablet Styles */
@media (max-width: 1024px) {
    .testimonials-section-new {
        padding: 70px 0;
    }
    
    .testimonials-container-new {
        max-width: 95%;
        padding: 0 16px;
    }
    
    .testimonials-widget-new {
        padding: 24px;
    }
    
    .testimonials-title-new {
        font-size: 28px;
    }
    
    .testimonials-grid-new {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }
}

/* Mobile Styles */
@media (max-width: 768px) {
    .testimonials-section-new {
        padding: 60px 0;
    }
    
    .testimonials-container-new {
        max-width: 100%;
        padding: 0 16px;
    }
    
    .testimonials-widget-new {
        padding: 20px;
    }
    
    .testimonials-header-new {
        flex-direction: column;
        gap: 20px;
        text-align: center;
        margin-bottom: 32px;
    }
    
    .testimonials-title-new {
        font-size: 26px;
        white-space: nowrap;
        overflow: visible;
    }
    
    .google-review-btn-new {
        padding: 12px 24px;
        font-size: 15px;
    }
    
    /* Mobile Slider */
    .testimonials-grid-new {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        overflow-y: visible;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 20px;
        margin: 0 -20px;
        padding-left: 20px;
        padding-right: 20px;
        scroll-snap-type: x mandatory;
    }
    
    .testimonial-item-new {
        flex: 0 0 300px;
        width: 300px;
        min-width: 300px;
        scroll-snap-align: start;
    }
    
    .testimonial-content-new {
        height: auto;
        min-height: 200px;
        padding: 20px;
    }
    
    .testimonial-content-new:hover {
        transform: none;
    }
    
    .reviewer-info-new {
        gap: 14px;
        margin-bottom: 14px;
    }
    
    .avatar-text-new {
        width: 44px;
        height: 44px;
        font-size: 16px;
    }
    
    .reviewer-name-new {
        font-size: 15px;
    }
    
    .review-content-new {
        font-size: 14px;
        line-height: 1.5;
    }
    
    .mobile-hint-new {
        display: block;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .testimonials-section-new {
        padding: 50px 0;
    }
    
    .testimonials-container-new {
        padding: 0 12px;
    }
    
    .testimonials-widget-new {
        padding: 16px;
    }
    
    .testimonials-title-new {
        font-size: 24px;
    }
    
    .google-review-btn-new {
        padding: 10px 20px;
        font-size: 14px;
    }
    
    .testimonials-grid-new {
        gap: 16px;
        margin: 0 -16px;
        padding-left: 16px;
        padding-right: 16px;
    }
    
    .testimonial-item-new {
        flex: 0 0 280px;
        width: 280px;
        min-width: 280px;
    }
    
    .testimonial-content-new {
        padding: 18px;
        min-height: 180px;
    }
    
    .avatar-text-new {
        width: 40px;
        height: 40px;
        font-size: 15px;
    }
    
    .reviewer-name-new {
        font-size: 14px;
    }
    
    .review-date-new {
        font-size: 12px;
    }
    
    .star-new {
        font-size: 16px;
    }
    
    .review-content-new {
        font-size: 13px;
        line-height: 1.4;
    }
}

/* Hide scrollbar but keep functionality */
.testimonials-grid-new::-webkit-scrollbar {
    display: none;
}

.testimonials-grid-new {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const grid = document.getElementById('testimonialsGrid');
    const items = grid.querySelectorAll('.testimonial-item-new');
    
    let startX = 0;
    let scrollLeft = 0;
    let isDown = false;
    
    function isMobile() {
        return window.innerWidth <= 768;
    }
    
    if (isMobile()) {
        // Touch events for mobile
        grid.addEventListener('touchstart', function(e) {
            isDown = true;
            startX = e.touches[0].pageX - grid.offsetLeft;
            scrollLeft = grid.scrollLeft;
        });
        
        grid.addEventListener('touchmove', function(e) {
            if (!isDown) return;
            e.preventDefault();
            const x = e.touches[0].pageX - grid.offsetLeft;
            const walk = (x - startX) * 2;
            grid.scrollLeft = scrollLeft - walk;
        });
        
        grid.addEventListener('touchend', function() {
            isDown = false;
        });
    }
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (!isMobile()) {
            grid.scrollLeft = 0;
        }
    });
});
</script>
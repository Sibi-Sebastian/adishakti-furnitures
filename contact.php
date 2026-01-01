<?php
$title = 'Contact Us - Adishakti Furnitures | Get in Touch';
$meta_description = 'Contact Adishakti Furnitures for all your furniture needs. Visit our showroom in Davanagere or reach out via phone, WhatsApp, or email for personalized assistance.';
$meta_keywords = 'contact Adishakti furnitures, furniture showroom Davanagere, furniture store contact, wooden furniture enquiry';
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
    <meta property="og:image" content="assets/images/carousal-image-living-room.webp">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <!-- Skip Navigation Link -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
    
    <!-- Navigation -->
    <?php include 'components/navbar.php'; ?>
    
    <!-- Main Content -->
    <main id="main-content">
        <!-- Contact Hero Section -->
        <div class="contact-hero">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="breadcrumb-separator">›</span>
                    <span class="breadcrumb-current">Contact Us</span>
                </div>
                <h1 class="contact-title">
                    Get in <span class="highlight">Touch</span>
                </h1>
                <p class="contact-subtitle">
                    We're here to help you find the perfect furniture for your home
                </p>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="contact-info-section">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-page-details">
                        <h2 class="section-title">Contact Information</h2>
                        <p class="contact-description">
                            Visit our showroom or reach out to us through any of the following channels. Our team is ready to assist you with all your furniture needs.
                        </p>
                        
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="method-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="method-details">
                                    <h3>Visit Our Showroom</h3>
                                    <p>Adishakthi Furnitures<br>
                                    Ring Rd, beside Navodaya Vidya Samsthe<br>
                                    SS Layout, Davanagere<br>
                                    Karnataka 577004</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="method-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>
                                <div class="method-details">
                                    <h3>Call Us</h3>
                                    <p><a href="tel:+919986642973">+91 99866 42973</a></p>
                                    <small>Mon - Sat: 9:00 AM - 8:00 PM</small>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="method-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </div>
                                <div class="method-details">
                                    <h3>WhatsApp</h3>
                                    <p><a href="https://wa.me/919986642973?text=Hi, I'd like to know more about your furniture" target="_blank">+91 99866 42973</a></p>
                                    <small>Quick responses guaranteed</small>
                                </div>
                            </div>
                        </div>

                        <div class="quick-actions">
                            <a href="https://wa.me/919986642973?text=Hi, I'd like to know more about your furniture" target="_blank" class="btn-primary">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                Chat on WhatsApp
                            </a>
                            <a href="tel:+919986642973" class="btn-secondary">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                Call Now
                            </a>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form-container">
                        <h2 class="section-title">Send us a Message</h2>
                        <form class="contact-form" id="contactForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name *</label>
                                    <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required aria-describedby="firstName-help">
                                    <span id="firstName-help" class="sr-only">Enter your first name as it should appear on correspondence</span>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name *</label>
                                    <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required aria-describedby="lastName-help">
                                    <span id="lastName-help" class="sr-only">Enter your last name as it should appear on correspondence</span>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" placeholder="your.email@example.com" required aria-describedby="email-help">
                                    <span id="email-help" class="sr-only">We'll use this email to respond to your inquiry</span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" placeholder="+91 99999 99999" required aria-describedby="phone-help">
                                    <span id="phone-help" class="sr-only">Include country code for international numbers</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <select id="subject" name="subject" required aria-describedby="subject-help">
                                    <option value="">Select a subject</option>
                                    <option value="product-inquiry">Product Inquiry</option>
                                    <option value="custom-order">Custom Order</option>
                                    <option value="showroom-visit">Showroom Visit</option>
                                    <option value="after-sales">After Sales Support</option>
                                    <option value="other">Other</option>
                                </select>
                                <span id="subject-help" class="sr-only">Choose the category that best describes your inquiry</span>
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" rows="5" placeholder="Tell us about your furniture requirements, preferred style, budget range, or any specific questions you have. We're here to help you find the perfect furniture for your home!" required aria-describedby="message-help"></textarea>
                                <span id="message-help" class="sr-only">Provide details about your furniture needs, budget, and any specific requirements</span>
                            </div>

                            <div class="form-note">
                                <p><strong>📱 How it works:</strong> Your message will be formatted and sent directly to our WhatsApp for immediate response. We'll get back to you within 30 minutes during business hours.</p>
                            </div>

                            <button type="submit" class="btn-primary form-submit">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22,2 15,22 11,13 2,9 22,2"></polygon>
                                </svg>
                                Send via WhatsApp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <div class="container">
                <h2 class="section-title text-center">Find Our Showroom</h2>
                <p class="section-subtitle text-center">
                    Visit us to experience our furniture collection in person
                </p>
                
                <div class="map-container">
                    <div class="professional-map">
                        <div class="map-header">
                            <div class="map-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 6v16l7-4 8 4 7-4V2l-7 4-8-4-7 4z"></path>
                                    <polyline points="8,2 8,18"></polyline>
                                    <polyline points="16,6 16,22"></polyline>
                                </svg>
                            </div>
                            <h3 class="map-title">Interactive Map</h3>
                        </div>
                        <div class="map-container-wrapper">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.8234567890123!2d75.9234567890123!3d14.4567890123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDI3JzI0LjQiTiA3NcKwNTUnMjQuNCJF!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin&q=Ring+Rd,+beside+Navodaya+Vidya+Samsthe,+SS+Layout,+Davanagere,+Karnataka+577004"
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Adishakti Furnitures Location">
                            </iframe>
                        </div>
                        <div class="map-footer">
                            <div class="map-note">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 6v6l4 2"></path>
                                </svg>
                                <span>Click and drag to explore • Zoom in for detailed view</span>
                            </div>
                        </div>
                    </div>
                    <div class="location-info">
                        <div class="location-header">
                            <div class="location-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <h3 class="location-title">Visit Our Showroom</h3>
                        </div>
                        
                        <div class="location-details">
                            <div class="address-block">
                                <h4>Adishakti Furnitures</h4>
                                <p>Ring Road, beside Navodaya Vidya Samsthe<br>
                                SS Layout, Davanagere<br>
                                Karnataka 577004</p>
                            </div>
                            
                            <div class="timing-block">
                                <h4>Store Hours</h4>
                                <p>Monday - Saturday: 9:00 AM - 8:00 PM<br>
                                Sunday: 10:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        
                        <div class="location-actions">
                            <a href="https://maps.google.com/?q=Ring+Rd,+beside+Navodaya+Vidya+Samsthe,+SS+Layout,+Davanagere,+Karnataka+577004" target="_blank" class="directions-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 11l3 3l8-8"></path>
                                    <path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9s4.03-9 9-9c1.51 0 2.93.37 4.18 1.03"></path>
                                </svg>
                                Get Directions
                            </a>
                            <a href="tel:+919986642973" class="call-btn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                Call Store
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>
    
    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/contact.js"></script>
</body>
</html>
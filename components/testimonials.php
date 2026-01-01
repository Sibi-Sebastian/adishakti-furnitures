<?php
// Testimonials Section - Google Reviews Widget
?>

<section class="testimonials-section">
    <div class="testimonials-container">
        
        <!-- Elfsight Google Reviews | Untitled Google Reviews -->
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <div class="elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f" data-elfsight-app-lazy></div>
    </div>
</section>

<style>
/* Testimonials Section Styles */
.testimonials-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #FAFAFA 0%, #F5F5F5 100%);
    position: relative;
}

.testimonials-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    overflow: hidden;
    position: relative;
}

.testimonials-header {
    text-align: center;
    margin-bottom: 60px;
}

.testimonials-title {
    font-size: 42px;
    font-weight: 700;
    color: var(--neutral-dark);
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

.testimonials-subtitle {
    font-size: 18px;
    color: var(--neutral-medium);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Elfsight widget container styling */
.elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f {
    margin: 0 auto;
    max-width: 100%;
    margin-bottom: -50px; /* Hide watermark */
    overflow: hidden;
    position: relative;
}

/* Style the widget title to look like h2 */
.WidgetTitle__Header-sc-c581efe-2.dNtlyB,
.elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f .WidgetTitle__Header-sc-c581efe-2 {
    font-size: 42px !important;
    font-weight: 700 !important;
    color: var(--neutral-dark) !important;
    margin-bottom: 16px !important;
    letter-spacing: -0.5px !important;
    line-height: 1.2 !important;
    text-align: center !important;
    font-family: inherit !important;
    display: block !important;
}

/* Additional styling to ensure watermark is hidden */
.elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;
    background: linear-gradient(135deg, #FAFAFA 0%, #F5F5F5 100%);
    z-index: 10;
    pointer-events: none;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .testimonials-section {
        padding: 70px 0;
    }
    
    .testimonials-container {
        padding: 0 16px;
        overflow: hidden;
    }
    
    .testimonials-title {
        font-size: 36px;
    }
    
    .testimonials-subtitle {
        font-size: 16px;
    }
    
    .testimonials-header {
        margin-bottom: 50px;
    }
    
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f {
        margin-bottom: -45px;
    }
    
    /* Responsive widget title styling */
    .WidgetTitle__Header-sc-c581efe-2.dNtlyB,
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f .WidgetTitle__Header-sc-c581efe-2 {
        font-size: 36px !important;
    }
}

@media (max-width: 768px) {
    .testimonials-section {
        padding: 60px 0;
    }
    
    .testimonials-container {
        padding: 0 16px;
        overflow: hidden;
    }
    
    .testimonials-title {
        font-size: 32px;
    }
    
    .testimonials-subtitle {
        font-size: 16px;
    }
    
    .testimonials-header {
        margin-bottom: 40px;
    }
    
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f {
        margin-bottom: -40px;
    }
    
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f::after {
        height: 40px;
    }
    
    /* Responsive widget title styling */
    .WidgetTitle__Header-sc-c581efe-2.dNtlyB,
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f .WidgetTitle__Header-sc-c581efe-2 {
        font-size: 32px !important;
    }
}

@media (max-width: 480px) {
    .testimonials-section {
        padding: 50px 0;
    }
    
    .testimonials-container {
        padding: 0 12px;
        overflow: hidden;
    }
    
    .testimonials-title {
        font-size: 28px;
        margin-bottom: 12px;
    }
    
    .testimonials-subtitle {
        font-size: 15px;
    }
    
    .testimonials-header {
        margin-bottom: 30px;
    }
    
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f {
        margin-bottom: -35px;
    }
    
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f::after {
        height: 35px;
    }
    
    /* Responsive widget title styling */
    .WidgetTitle__Header-sc-c581efe-2.dNtlyB,
    .elfsight-app-a1332e3e-4729-4619-a26e-db33f2bc395f .WidgetTitle__Header-sc-c581efe-2 {
        font-size: 28px !important;
    }
}
</style>
// Contact Form Functionality
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', handleFormSubmit);
    }
});

function handleFormSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('.form-submit');
    const formData = new FormData(form);
    
    // Show loading state
    submitBtn.classList.add('loading');
    submitBtn.disabled = true;
    
    // Remove any existing messages
    const existingMessage = form.querySelector('.form-message');
    if (existingMessage) {
        existingMessage.remove();
    }
    
    // Simulate form submission (replace with actual form handling)
    setTimeout(() => {
        // Create WhatsApp message
        const firstName = formData.get('firstName');
        const lastName = formData.get('lastName');
        const email = formData.get('email');
        const phone = formData.get('phone');
        const subject = formData.get('subject');
        const message = formData.get('message');
        
        const whatsappMessage = `Hi! I'm ${firstName} ${lastName}.

📧 Email: ${email}
📱 Phone: ${phone}
📋 Subject: ${subject}

Message:
${message}

I'd like to discuss my furniture requirements. Please get back to me at your earliest convenience.`;
        
        const whatsappUrl = `https://wa.me/919986642973?text=${encodeURIComponent(whatsappMessage)}`;
        
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.className = 'form-message success';
        successMessage.innerHTML = `
            <strong>Message sent successfully!</strong><br>
            We'll redirect you to WhatsApp to complete your inquiry.
        `;
        form.insertBefore(successMessage, form.firstChild);
        
        // Reset form
        form.reset();
        
        // Redirect to WhatsApp after a short delay
        setTimeout(() => {
            window.open(whatsappUrl, '_blank');
        }, 2000);
        
        // Remove loading state
        submitBtn.classList.remove('loading');
        submitBtn.disabled = false;
        
    }, 1000);
}

// Form validation
function validateForm(formData) {
    const errors = [];
    
    if (!formData.get('firstName').trim()) {
        errors.push('First name is required');
    }
    
    if (!formData.get('lastName').trim()) {
        errors.push('Last name is required');
    }
    
    const email = formData.get('email').trim();
    if (!email) {
        errors.push('Email is required');
    } else if (!isValidEmail(email)) {
        errors.push('Please enter a valid email address');
    }
    
    const phone = formData.get('phone').trim();
    if (!phone) {
        errors.push('Phone number is required');
    } else if (!isValidPhone(phone)) {
        errors.push('Please enter a valid phone number');
    }
    
    if (!formData.get('subject')) {
        errors.push('Please select a subject');
    }
    
    if (!formData.get('message').trim()) {
        errors.push('Message is required');
    }
    
    return errors;
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhone(phone) {
    const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
    return phoneRegex.test(phone.replace(/[\s\-\(\)]/g, ''));
}

// Enhanced form submission with validation
function handleFormSubmitWithValidation(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('.form-submit');
    const formData = new FormData(form);
    
    // Remove any existing messages
    const existingMessage = form.querySelector('.form-message');
    if (existingMessage) {
        existingMessage.remove();
    }
    
    // Validate form
    const errors = validateForm(formData);
    
    if (errors.length > 0) {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'form-message error';
        errorMessage.innerHTML = `
            <strong>Please fix the following errors:</strong><br>
            ${errors.map(error => `• ${error}`).join('<br>')}
        `;
        form.insertBefore(errorMessage, form.firstChild);
        return;
    }
    
    // Show loading state
    submitBtn.classList.add('loading');
    submitBtn.disabled = true;
    
    // Create WhatsApp message
    const firstName = formData.get('firstName');
    const lastName = formData.get('lastName');
    const email = formData.get('email');
    const phone = formData.get('phone');
    const subject = formData.get('subject');
    const message = formData.get('message');
    
    const subjectLabels = {
        'product-inquiry': 'Product Inquiry',
        'custom-order': 'Custom Order',
        'showroom-visit': 'Showroom Visit',
        'after-sales': 'After Sales Support',
        'other': 'Other'
    };
    
    const whatsappMessage = `🏠 *ADISHAKTI FURNITURES - Website Inquiry*

👤 *Customer Name:* ${firstName} ${lastName}
📧 *Email Address:* ${email}
📱 *Phone Number:* ${phone}
📋 *Inquiry Type:* ${subjectLabels[subject] || subject}

💬 *Customer Message:*
"${message}"

---
*Customer Request:* Please contact me to discuss my furniture requirements at your earliest convenience.

*Inquiry Source:* Website Contact Form
*Date:* ${new Date().toLocaleDateString('en-IN')} at ${new Date().toLocaleTimeString('en-IN')}`;
    
    const whatsappUrl = `https://wa.me/919986642973?text=${encodeURIComponent(whatsappMessage)}`;
    
    // Simulate processing time
    setTimeout(() => {
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.className = 'form-message success';
        successMessage.innerHTML = `
            <strong>✅ Message prepared successfully!</strong><br>
            Your inquiry details have been formatted and will be sent via WhatsApp.<br>
            <small>If WhatsApp doesn't open automatically, you can call us at +91 99866 42973</small>
        `;
        form.insertBefore(successMessage, form.firstChild);
        
        // Store form data for potential backup
        const inquiryData = {
            name: `${firstName} ${lastName}`,
            email: email,
            phone: phone,
            subject: subjectLabels[subject] || subject,
            message: message,
            timestamp: new Date().toISOString()
        };
        
        // Store in localStorage as backup
        localStorage.setItem('lastInquiry', JSON.stringify(inquiryData));
        
        // Reset form
        form.reset();
        
        // Redirect to WhatsApp after a short delay
        setTimeout(() => {
            const opened = window.open(whatsappUrl, '_blank');
            
            // If popup was blocked, show alternative
            if (!opened || opened.closed || typeof opened.closed == 'undefined') {
                const altMessage = document.createElement('div');
                altMessage.className = 'form-message error';
                altMessage.innerHTML = `
                    <strong>WhatsApp couldn't open automatically</strong><br>
                    Please call us directly at <a href="tel:+919986642973">+91 99866 42973</a> or 
                    <a href="${whatsappUrl}" target="_blank">click here to open WhatsApp manually</a>
                `;
                form.insertBefore(altMessage, form.firstChild);
            }
        }, 1500);
        
        // Remove loading state
        submitBtn.classList.remove('loading');
        submitBtn.disabled = false;
        
    }, 800);
}

// Update the event listener to use validation
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', handleFormSubmitWithValidation);
    }
});

// Function to resend last inquiry (useful if WhatsApp fails)
function resendLastInquiry() {
    const lastInquiry = localStorage.getItem('lastInquiry');
    if (lastInquiry) {
        const data = JSON.parse(lastInquiry);
        const whatsappMessage = `🏠 *ADISHAKTI FURNITURES - Website Inquiry*

👤 *Customer Name:* ${data.name}
📧 *Email Address:* ${data.email}
📱 *Phone Number:* ${data.phone}
📋 *Inquiry Type:* ${data.subject}

💬 *Customer Message:*
"${data.message}"

---
*Customer Request:* Please contact me to discuss my furniture requirements at your earliest convenience.

*Inquiry Source:* Website Contact Form (Resent)
*Original Date:* ${new Date(data.timestamp).toLocaleDateString('en-IN')} at ${new Date(data.timestamp).toLocaleTimeString('en-IN')}`;
        
        const whatsappUrl = `https://wa.me/919986642973?text=${encodeURIComponent(whatsappMessage)}`;
        window.open(whatsappUrl, '_blank');
    }
}

// Add click handler for manual WhatsApp links
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('resend-inquiry')) {
        e.preventDefault();
        resendLastInquiry();
    }
});

// Enhanced phone number validation for Indian numbers
function isValidIndianPhone(phone) {
    // Remove all non-digit characters
    const cleanPhone = phone.replace(/\D/g, '');
    
    // Check for valid Indian mobile number patterns
    const patterns = [
        /^[6-9]\d{9}$/, // 10 digit starting with 6-9
        /^91[6-9]\d{9}$/, // 12 digit with country code
        /^(\+91|0091)[6-9]\d{9}$/ // With +91 or 0091 prefix
    ];
    
    return patterns.some(pattern => pattern.test(cleanPhone));
}

// Update phone validation to use Indian-specific validation
function isValidPhone(phone) {
    return isValidIndianPhone(phone);
}
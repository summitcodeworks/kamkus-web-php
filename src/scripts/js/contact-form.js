/**
 * Contact Form Handler for Kamkus College of Law
 * Handles form submission with AJAX and provides user feedback
 */

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', handleFormSubmission);
    }
});

function handleFormSubmission(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('.submit-btn');
    const originalBtnText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    
    // Create FormData object
    const formData = new FormData(form);
    
    // Send AJAX request
    fetch('process_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            showSuccessMessage(data.message);
            form.reset();
        } else {
            showErrorMessage(data.message || 'An error occurred while sending your message.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showErrorMessage('An unexpected error occurred. Please try again.');
    })
    .finally(() => {
        // Reset button state
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
    });
}

function showSuccessMessage(message) {
    const alertDiv = createAlert(message, 'success');
    insertAlert(alertDiv);
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        alertDiv.remove();
    }, 5000);
}

function showErrorMessage(message) {
    const alertDiv = createAlert(message, 'error');
    insertAlert(alertDiv);
    
    // Auto-hide after 7 seconds
    setTimeout(() => {
        alertDiv.remove();
    }, 7000);
}

function createAlert(message, type) {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type}`;
    
    const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle';
    
    alertDiv.innerHTML = `
        <div class="alert-content">
            <i class="fas ${icon}"></i>
            <span>${message}</span>
            <button type="button" class="alert-close" onclick="this.parentElement.parentElement.remove()">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    return alertDiv;
}

function insertAlert(alertDiv) {
    const contactForm = document.querySelector('.contact-form');
    const container = contactForm.closest('.contact-form-card');
    
    // Remove any existing alerts
    const existingAlerts = container.querySelectorAll('.alert');
    existingAlerts.forEach(alert => alert.remove());
    
    // Insert new alert at the top of the form container
    container.insertBefore(alertDiv, container.firstChild);
    
    // Scroll to alert
    alertDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// Form validation helpers
function validateForm(form) {
    const requiredFields = form.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            highlightField(field, false);
            isValid = false;
        } else {
            highlightField(field, true);
        }
    });
    
    // Email validation
    const emailField = form.querySelector('input[type="email"]');
    if (emailField && emailField.value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailField.value)) {
            highlightField(emailField, false);
            isValid = false;
        }
    }
    
    return isValid;
}

function highlightField(field, isValid) {
    if (isValid) {
        field.classList.remove('error');
        field.classList.add('valid');
    } else {
        field.classList.remove('valid');
        field.classList.add('error');
    }
}

// Add real-time validation
document.addEventListener('DOMContentLoaded', function() {
    const formFields = document.querySelectorAll('.contact-form input, .contact-form select, .contact-form textarea');
    
    formFields.forEach(field => {
        field.addEventListener('blur', function() {
            if (this.hasAttribute('required')) {
                highlightField(this, this.value.trim() !== '');
            }
        });
        
        field.addEventListener('input', function() {
            if (this.classList.contains('error') && this.value.trim() !== '') {
                highlightField(this, true);
            }
        });
    });
}); 
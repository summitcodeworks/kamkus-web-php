/**
 * Contact Form Validation System
 * Real-time validation with visual feedback
 */

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    const submitBtn = form.querySelector('.submit-btn');
    
    // Initialize validation
    initializeValidation();
    
    function initializeValidation() {
        // Add validation to all form fields
        const fields = form.querySelectorAll('input, select, textarea');
        
        fields.forEach(field => {
            // Real-time validation on blur
            field.addEventListener('blur', () => validateField(field));
            
            // Clear errors on input
            field.addEventListener('input', () => clearFieldError(field));
            
            // Special handling for phone number formatting
            if (field.type === 'tel') {
                field.addEventListener('input', formatPhoneNumber);
            }
            
            // Character counter for message field
            if (field.name === 'message') {
                field.addEventListener('input', updateCharCounter);
                updateCharCounter({ target: field }); // Initialize counter
            }
        });
        
        // Form submission validation
        form.addEventListener('submit', handleFormSubmit);
    }
    
    function validateField(field) {
        const fieldName = field.name;
        const value = field.value.trim();
        
        // Clear previous errors
        clearFieldError(field);
        
        // Required field validation
        if (field.hasAttribute('required') && !value) {
            showFieldError(field, getRequiredMessage(fieldName));
            return false;
        }
        
        // Field-specific validation
        switch (fieldName) {
            case 'name':
                return validateName(field, value);
            case 'email':
                return validateEmail(field, value);
            case 'phone':
                return validatePhone(field, value);
            case 'query_type':
                return validateSelect(field, value);
            case 'message':
                return validateMessage(field, value);
            default:
                return true;
        }
    }
    
    function validateName(field, value) {
        if (value.length < 2) {
            showFieldError(field, 'Name must be at least 2 characters long');
            return false;
        }
        
        if (!/^[a-zA-Z\s]+$/.test(value)) {
            showFieldError(field, 'Name can only contain letters and spaces');
            return false;
        }
        
        showFieldSuccess(field);
        return true;
    }
    
    function validateEmail(field, value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (!emailRegex.test(value)) {
            showFieldError(field, 'Please enter a valid email address');
            return false;
        }
        
        showFieldSuccess(field);
        return true;
    }
    
    function validatePhone(field, value) {
        // Remove all non-numeric characters for validation
        const phoneNumbers = value.replace(/\D/g, '');
        
        if (phoneNumbers.length < 10) {
            showFieldError(field, 'Phone number must be at least 10 digits');
            return false;
        }
        
        if (phoneNumbers.length > 15) {
            showFieldError(field, 'Phone number cannot exceed 15 digits');
            return false;
        }
        
        showFieldSuccess(field);
        return true;
    }
    
    function validateSelect(field, value) {
        if (!value) {
            showFieldError(field, 'Please select a query type');
            return false;
        }
        
        showFieldSuccess(field);
        return true;
    }
    
    function validateMessage(field, value) {
        if (value.length < 10) {
            showFieldError(field, 'Message must be at least 10 characters long');
            return false;
        }
        
        if (value.length > 1000) {
            showFieldError(field, 'Message cannot exceed 1000 characters');
            return false;
        }
        
        showFieldSuccess(field);
        return true;
    }
    
    function formatPhoneNumber(e) {
        let value = e.target.value.replace(/\D/g, '');
        
        // Format as +91 XXXXX XXXXX for Indian numbers
        if (value.startsWith('91') && value.length <= 12) {
            if (value.length > 2) {
                value = '+91 ' + value.slice(2, 7) + (value.length > 7 ? ' ' + value.slice(7, 12) : '');
            }
        } else if (value.length <= 10) {
            // Format as XXXXX XXXXX for 10-digit numbers
            if (value.length > 5) {
                value = value.slice(0, 5) + ' ' + value.slice(5, 10);
            }
        }
        
        e.target.value = value;
    }
    
    function updateCharCounter(e) {
        const textarea = e.target;
        const counter = document.getElementById('charCounter');
        const currentLength = textarea.value.length;
        const maxLength = 1000;
        
        if (counter) {
            counter.textContent = `${currentLength}/${maxLength}`;
            
            // Update counter color based on length
            counter.className = 'char-counter';
            if (currentLength > maxLength * 0.9) {
                counter.classList.add('danger');
            } else if (currentLength > maxLength * 0.7) {
                counter.classList.add('warning');
            }
        }
    }
    
    function showFieldError(field, message) {
        const formGroup = field.closest('.form-group');
        
        // Add error class
        field.classList.add('error');
        field.classList.remove('success');
        
        // Remove existing error message
        const existingError = formGroup.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Add error message
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
        formGroup.appendChild(errorDiv);
    }
    
    function showFieldSuccess(field) {
        field.classList.add('success');
        field.classList.remove('error');
        
        // Remove error message
        const formGroup = field.closest('.form-group');
        const existingError = formGroup.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
    }
    
    function clearFieldError(field) {
        field.classList.remove('error', 'success');
        
        const formGroup = field.closest('.form-group');
        const existingError = formGroup.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
    }
    
    function getRequiredMessage(fieldName) {
        const messages = {
            'name': 'Full name is required',
            'email': 'Email address is required',
            'phone': 'Phone number is required',
            'query_type': 'Please select a query type',
            'message': 'Message is required'
        };
        
        return messages[fieldName] || 'This field is required';
    }
    
    function handleFormSubmit(e) {
        e.preventDefault();
        
        // Validate all fields
        const fields = form.querySelectorAll('input, select, textarea');
        let isValid = true;
        
        fields.forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });
        
        if (!isValid) {
            // Scroll to first error
            const firstError = form.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstError.focus();
            }
            
            // Show general error message
            showFormError('Please fix the errors above and try again.');
            return;
        }
        
        // Show loading state
        setSubmitLoading(true);
        
        // Submit form
        const formData = new FormData(form);
        
        fetch('process_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.redirected) {
                // Follow the redirect
                window.location.href = response.url;
            } else {
                throw new Error('Unexpected response');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showFormError('An error occurred. Please try again.');
            setSubmitLoading(false);
        });
    }
    
    function setSubmitLoading(loading) {
        if (loading) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.classList.add('loading');
        } else {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Message';
            submitBtn.classList.remove('loading');
        }
    }
    
    function showFormError(message) {
        // Remove existing error
        const existingError = form.querySelector('.form-error');
        if (existingError) {
            existingError.remove();
        }
        
        // Create error element
        const errorDiv = document.createElement('div');
        errorDiv.className = 'form-error';
        errorDiv.innerHTML = `
            <i class="fas fa-exclamation-triangle"></i>
            ${message}
        `;
        
        // Insert before submit button
        submitBtn.parentNode.insertBefore(errorDiv, submitBtn);
        
        // Auto-remove after 5 seconds
        setTimeout(() => {
            if (errorDiv.parentNode) {
                errorDiv.remove();
            }
        }, 5000);
    }
}); 
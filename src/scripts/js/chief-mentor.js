document.addEventListener('DOMContentLoaded', function() {
    // Handle quote expansion
    const quoteBox = document.getElementById('quote-box');
    if (quoteBox) {
        quoteBox.addEventListener('click', function() {
            this.classList.toggle('expanded');
            const expandedContent = this.querySelector('.quote-expanded');
            if (expandedContent) {
                if (expandedContent.style.display === 'none') {
                    expandedContent.style.display = 'block';
                } else {
                    expandedContent.style.display = 'none';
                }
            }
        });
    }

    // Initialize animations
    const animatedElements = document.querySelectorAll('.fade-in, .slide-in-up, .slide-in-left, .slide-in-right, .scale-in');
    
    // Add IntersectionObserver for animations
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            root: null,
            threshold: 0.1,
            rootMargin: '0px'
        }
    );

    // Observe each animated element
    animatedElements.forEach(element => {
        element.style.animationPlayState = 'paused';
        observer.observe(element);
    });

    // Add hover effects to profile items
    const profileItems = document.querySelectorAll('.profile-item');
    profileItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.profile-icon');
            if (icon) {
                icon.style.backgroundColor = 'rgba(30, 41, 59, 0.2)';
            }
        });
        
        item.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.profile-icon');
            if (icon) {
                icon.style.backgroundColor = 'rgba(30, 41, 59, 0.1)';
            }
        });
    });

    // Add hover effects to CTA buttons
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            const arrowIcon = this.querySelector('i.right');
            if (arrowIcon) {
                arrowIcon.style.opacity = '1';
                arrowIcon.style.transform = 'translateX(0)';
            }
        });
        
        button.addEventListener('mouseleave', function() {
            const arrowIcon = this.querySelector('i.right');
            if (arrowIcon) {
                arrowIcon.style.opacity = '0';
                arrowIcon.style.transform = 'translateX(-8px)';
            }
        });
    });
    
    // Handle testimonial card hover effect
    const testimonialCard = document.querySelector('.testimonial-card');
    if (testimonialCard) {
        testimonialCard.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        testimonialCard.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    }
}); 
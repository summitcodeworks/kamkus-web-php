document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM Content Loaded");
    
    // Hero Slider functionality is handled by carousel.js
    // Removed initHeroSlider() call to prevent conflicts
    
    // News Ticker
    // The animation is handled by CSS, no JavaScript needed
    
    // Mobile Menu Toggle (for responsive design)
    initMobileMenu();
    
    // Reviews Slider
    initReviewsSlider();
    
    // Add active class to current menu item
    const currentLocation = window.location.pathname;
    const menuItems = document.querySelectorAll('.main-nav a');
    
    menuItems.forEach(item => {
        if (item.getAttribute('href') === currentLocation) {
            item.classList.add('active');
            
            // If in dropdown, also highlight parent
            const parentLi = item.closest('li.has-dropdown');
            if (parentLi) {
                const parentLink = parentLi.querySelector('a');
                if (parentLink) {
                    parentLink.classList.add('active');
                }
            }
        }
    });
    
    // Mobile menu toggle (for future implementation)
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            const mainNav = document.querySelector('.main-nav');
            mainNav.classList.toggle('mobile-open');
        });
    }
    
    console.log("Initialization complete");

    // Animation for modern page elements
    if (document.querySelector('.modernized-page')) {
        // Add visibility to staggered items with delay
        const staggerItems = document.querySelectorAll('.stagger-item');
        staggerItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.opacity = '1';
            }, 100 * (index + 1));
        });

        // Add intersection observer for elements that should animate when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        // Observe elements with animation classes
        document.querySelectorAll('.slide-in-up, .slide-in-right, .fade-in').forEach(element => {
            observer.observe(element);
        });

        // Add hover effects for program items
        document.querySelectorAll('.program-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.01)';
                this.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });

        // Add hover effects for course items
        document.querySelectorAll('.course-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
                this.querySelector('.course-icon').style.backgroundColor = 'rgba(30, 41, 59, 0.2)';
                this.querySelector('.course-text').style.color = '#1e293b';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.querySelector('.course-icon').style.backgroundColor = '';
                this.querySelector('.course-text').style.color = '';
            });
        });
    }

    // Add scroll reveal animations
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    }

    // Elements to animate on scroll
    const animateElements = document.querySelectorAll('.section-card, .timeline-item, .feature-item, .goal-item, .info-item, .program-item, .visit-card');
    
    // Initial check for elements in viewport
    animateElements.forEach(el => {
        if (isInViewport(el)) {
            el.classList.add('animate-in');
        }
    });
    
    // Add animation class when scrolling
    window.addEventListener('scroll', function() {
        animateElements.forEach(el => {
            if (isInViewport(el) && !el.classList.contains('animate-in')) {
                el.classList.add('animate-in');
            }
        });
    });

    // Dropdown functionality
    const dropdownLinks = document.querySelectorAll('.has-dropdown > a');
    
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const dropdown = this.nextElementSibling;
            
            // Toggle the active class on the dropdown
            if (dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
            } else {
                // Close all other dropdowns
                document.querySelectorAll('.dropdown-wrapper.active').forEach(activeDropdown => {
                    if (activeDropdown !== dropdown) {
                        activeDropdown.classList.remove('active');
                    }
                });
                
                dropdown.classList.add('active');
            }
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.has-dropdown')) {
            document.querySelectorAll('.dropdown-wrapper.active').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    });

    // Timeline animation
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, index) => {
        setTimeout(() => {
            if (isInViewport(item)) {
                item.classList.add('animate-timeline');
            }
        }, 300 * index);
    });

    // Hover effects for feature items
    const featureItems = document.querySelectorAll('.feature-item');
    featureItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Program items hover effect
    const programItems = document.querySelectorAll('.program-item');
    programItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.02)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Goal items hover effect
    const goalItems = document.querySelectorAll('.goal-item');
    goalItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });
});

/* 
// Commented out to prevent conflicts with carousel.js
function initHeroSlider() {
    try {
        console.log("Starting carousel initialization");
        // Define the slider content with images and captions
        const sliderContent = [
            {
                image: 'public/carousel/kam_cal_1.jpg',
                title: 'Welcome to Kamkus College of Law',
                description: 'A premier institution for legal education in Delhi NCR'
            },
            {
                image: 'public/carousel/kam_cal_2.JPG',
                title: 'State-of-the-Art Infrastructure',
                description: 'Modern facilities to enhance your learning experience'
            },
            {
                image: 'public/carousel/kam_cal_3.JPG',
                title: 'Legal Excellence',
                description: 'Shaping the future of law education since 2007'
            },
            {
                image: 'public/carousel/kam_cal_4.JPG',
                title: 'Moot Court Excellence',
                description: 'Practical learning through world-class moot court facilities'
            },
            {
                image: 'public/carousel/kam_cal_5.JPG',
                title: 'Professional Development',
                description: 'Building the foundation for successful legal careers'
            },
            {
                image: 'public/carousel/484165219_1162827332295756_1017795504416414952_n.jpg',
                title: 'Campus Life at KCL',
                description: 'A vibrant environment for learning and growth'
            },
            {
                image: 'public/carousel/476807702_1136279011617255_8832833112241867193_n.jpg',
                title: 'Student Activities',
                description: 'Fostering all-round development through co-curricular activities'
            }
        ];
        
        console.log("Slider content defined with " + sliderContent.length + " items");
        
        const sliderContainer = document.querySelector('.slider-container');
        if (!sliderContainer) {
            console.error("Could not find slider container");
            return;
        }
        console.log("Found slider container");
        
        // Keep the fallback slide and add our dynamic ones
        const existingContent = sliderContainer.innerHTML;
        sliderContainer.innerHTML = existingContent;
        
        // Create slides for additional images with captions
        sliderContent.forEach((slide, index) => {
            // Skip the first one as it's already there as a fallback
            if (index === 0) return;
            
            console.log("Creating slide for " + slide.image);
            
            const slideElement = document.createElement('div');
            slideElement.className = 'slide';
            
            // Create the image element
            const img = document.createElement('img');
            img.src = slide.image;
            img.alt = slide.title;
            img.loading = 'lazy'; // Add lazy loading for better performance
            
            // Create the caption/content overlay
            const contentElement = document.createElement('div');
            contentElement.className = 'slide-content';
            
            const titleElement = document.createElement('h2');
            titleElement.textContent = slide.title;
            
            const descElement = document.createElement('p');
            descElement.textContent = slide.description;
            
            // Assemble the slide
            contentElement.appendChild(titleElement);
            contentElement.appendChild(descElement);
            
            slideElement.appendChild(img);
            slideElement.appendChild(contentElement);
            sliderContainer.appendChild(slideElement);
        });
        
        console.log("All slides created");
        
        // Add navigation controls
        const prevButton = document.createElement('button');
        prevButton.className = 'slider-nav prev';
        prevButton.innerHTML = '&lt;'; // Simple text character instead of Font Awesome
        
        const nextButton = document.createElement('button');
        nextButton.className = 'slider-nav next';
        nextButton.innerHTML = '&gt;'; // Simple text character instead of Font Awesome
        
        // Add indicators
        const indicators = document.createElement('div');
        indicators.className = 'slider-indicators';
        
        sliderContent.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.className = 'indicator';
            if (index === 0) dot.classList.add('active');
            dot.dataset.index = index;
            indicators.appendChild(dot);
        });
        
        sliderContainer.appendChild(prevButton);
        sliderContainer.appendChild(nextButton);
        sliderContainer.appendChild(indicators);
        
        console.log("Navigation controls added");
    } catch (error) {
        console.error("Error initializing carousel:", error);
    }
    
    try {
        // Get all slides and indicators after creation
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.indicator');
        
        console.log("Found " + slides.length + " slides and " + dots.length + " indicators");
        
        if (slides.length === 0) {
            console.error("No slides found");
            return;
        }
        
        let currentSlide = 0;
        let slideInterval;
        
        // Navigation functions
        function goToSlide(index) {
            console.log("Going to slide " + index);
            // Remove active class from current slide and dot
            slides[currentSlide].classList.remove('active');
            if (dots[currentSlide]) dots[currentSlide].classList.remove('active');
            
            // Update current slide index
            currentSlide = index;
            if (currentSlide < 0) currentSlide = slides.length - 1;
            if (currentSlide >= slides.length) currentSlide = 0;
            
            // Add active class to new slide and dot
            slides[currentSlide].classList.add('active');
            if (dots[currentSlide]) dots[currentSlide].classList.add('active');
        }
        
        function nextSlide() {
            goToSlide(currentSlide + 1);
        }
        
        function prevSlide() {
            goToSlide(currentSlide - 1);
        }
        
        // Event listeners
        nextButton.addEventListener('click', function() {
            console.log("Next button clicked");
            nextSlide();
            resetInterval();
        });
        
        prevButton.addEventListener('click', function() {
            console.log("Previous button clicked");
            prevSlide();
            resetInterval();
        });
        
        // Add click event to indicators
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                console.log("Indicator clicked: " + this.dataset.index);
                goToSlide(parseInt(this.dataset.index));
                resetInterval();
            });
        });
        
        // Handle touch events for swipe
        let touchStartX = 0;
        let touchEndX = 0;
        
        sliderContainer.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, false);
        
        sliderContainer.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            resetInterval();
        }, false);
        
        function handleSwipe() {
            if (touchEndX < touchStartX) {
                nextSlide();
            }
            if (touchEndX > touchStartX) {
                prevSlide();
            }
        }
        
        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        // Initialize with first slide active
        goToSlide(0);
        
        // Start auto-slideshow
        slideInterval = setInterval(nextSlide, 5000);
        
        console.log("Hero slider initialization complete");
    } catch (error) {
        console.error("Error setting up carousel event listeners:", error);
    }
}
*/

// Mobile Menu Toggle
function initMobileMenu() {
    // Will be implemented if a mobile menu button is added to the HTML
    // For now, the site uses media queries for responsive design
}

// Reviews Slider
function initReviewsSlider() {
    // Sample reviews data
    const reviews = [
        {
            name: "Rahul Sharma",
            batch: "Batch of 2021",
            text: "Kamkus College of Law provided me with exceptional legal education and practical training that prepared me for a successful career in law.",
            image: "public/reviews/profile-1.jpg"
        },
        {
            name: "Priya Patel",
            batch: "Batch of 2020",
            text: "The faculty at KCL are outstanding. They not only teach the curriculum but also share their practical experience which is invaluable.",
            image: "public/reviews/profile-2.jpg"
        },
        {
            name: "Amit Kumar",
            batch: "Batch of 2019",
            text: "My time at Kamkus helped me develop critical thinking and analytical skills that have been essential in my practice as an advocate.",
            image: "public/reviews/profile-3.jpg"
        }
    ];
    
    const reviewSlider = document.querySelector('.review-slider');
    
    // Insert review slides before the "View All Reviews" button
    const viewAllButton = reviewSlider.querySelector('.text-center');
    
    reviews.forEach(review => {
        const reviewCard = document.createElement('div');
        reviewCard.className = 'review-card';
        
        reviewCard.innerHTML = `
            <div class="review-content">
                <div class="reviewer-image">
                    <img src="${review.image}" alt="${review.name}">
                </div>
                <p class="review-text">"${review.text}"</p>
                <div class="reviewer-info">
                    <h4>${review.name}</h4>
                    <p>${review.batch}</p>
                </div>
            </div>
        `;
        
        reviewSlider.insertBefore(reviewCard, viewAllButton);
    });
    
    // Add slider functionality if there are more than one review
    if (reviews.length > 1) {
        // Simple slider functionality can be added here
        // For now, we'll just display all reviews
    }
}

// Enhanced dropdown menu functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get all dropdown parent items
    const dropdownItems = document.querySelectorAll('.has-dropdown');
    
    // Add hover event listeners to each dropdown item
    dropdownItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            const dropdown = this.querySelector('.dropdown-wrapper');
            if (dropdown) {
                // Force visibility
                dropdown.style.opacity = '1';
                dropdown.style.visibility = 'visible';
                dropdown.style.transform = 'translateY(0)';
                dropdown.style.display = 'block';
                
                // Ensure the dropdown menu inside is also visible
                const menu = dropdown.querySelector('.dropdown-menu');
                if (menu) {
                    menu.style.display = 'flex';
                    menu.style.flexDirection = 'column';
                }
                
                console.log('Dropdown shown');
            }
        });
        
        item.addEventListener('mouseleave', function() {
            const dropdown = this.querySelector('.dropdown-wrapper');
            if (dropdown) {
                // Delay hiding to prevent flickering
                setTimeout(() => {
                    dropdown.style.opacity = '0';
                    dropdown.style.visibility = 'hidden';
                    dropdown.style.transform = 'translateY(10px)';
                }, 50);
                
                console.log('Dropdown hidden');
            }
        });
    });
    
    console.log("Enhanced dropdown functionality added");
}); 
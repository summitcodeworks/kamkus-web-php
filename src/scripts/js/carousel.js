// Simple Carousel Script
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded - Simple Carousel');
    
    // Basic carousel navigation for pre-existing slides
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.slider-indicators .indicator');
    const prevBtn = document.querySelector('.slider-nav.prev');
    const nextBtn = document.querySelector('.slider-nav.next');
    
    console.log('Found elements:', {
        slides: slides.length,
        indicators: indicators.length,
        prevBtn: !!prevBtn,
        nextBtn: !!nextBtn
    });
    
    if (slides.length === 0) {
        console.error('No slides found');
        return;
    }
    
    let currentSlide = 0;
    let slideInterval;
    
    // Navigation functions
    function goToSlide(index) {
        // Remove active class from current slide and indicator
        slides[currentSlide].classList.remove('active');
        if (indicators[currentSlide]) {
            indicators[currentSlide].classList.remove('active');
        }
        
        // Update current slide index
        currentSlide = index;
        if (currentSlide < 0) currentSlide = slides.length - 1;
        if (currentSlide >= slides.length) currentSlide = 0;
        
        // Add active class to new slide and indicator
        slides[currentSlide].classList.add('active');
        if (indicators[currentSlide]) {
            indicators[currentSlide].classList.add('active');
        }
    }
    
    function nextSlide() {
        goToSlide(currentSlide + 1);
    }
    
    function prevSlide() {
        goToSlide(currentSlide - 1);
    }
    
    // Add event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            nextSlide();
            resetInterval();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            prevSlide();
            resetInterval();
        });
    }
    
    // Add click events to indicators
    indicators.forEach(function(indicator, index) {
        indicator.addEventListener('click', function() {
            goToSlide(index);
            resetInterval();
        });
    });
    
    // Reset interval
    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 5000);
    }
    
    // Start auto slideshow
    slideInterval = setInterval(nextSlide, 5000);
    
    // Gallery carousel functionality
    initGalleryCarousel();
}); 

// Images for the gallery carousel
const galleryImages = [
    "public/gallery/11.jpg",
    "public/gallery/yoga day.jpg",
    "public/gallery/3.jpg",
    "public/gallery/farewell1.jpg",
    "public/gallery/sportscom.jpg",
    "public/gallery/7.jpg",
    "public/gallery/13.jpg",
    "public/gallery/14.jpg",
    "public/gallery/15.jpg",
    "public/gallery/16.jpg",
    "public/gallery/17.jpg",
    "public/gallery/18.jpg",
    "public/gallery/19 (1).jpg",
    "public/gallery/20 (1).jpg",
    "public/gallery/24.jpg",
    "public/gallery/29 (1).jpg",
    "public/gallery/35.jpg",
    "public/gallery/45.jpg",
    "public/gallery/env.jpg",
    "public/gallery/skit (1).jpg"
];

function initGalleryCarousel() {
    const gallerySlides = document.querySelector('.gallery-slides');
    const galleryDots = document.querySelectorAll('.gallery-indicators .indicator');
    const galleryPrevBtn = document.querySelector('.gallery-carousel .gallery-nav.prev');
    const galleryNextBtn = document.querySelector('.gallery-carousel .gallery-nav.next');
    
    if (!gallerySlides) {
        console.log('Gallery slides container not found');
        return;
    }
    
    console.log('Gallery carousel initialized');
    
    // Current state
    let currentIndex = 17; // Start with the highlighted dot in the image (18th dot)
    updateGalleryDots(currentIndex);
    
    // Track carousel interval
    let galleryInterval = null;
    
    // Update gallery display based on current index
    function updateGalleryDisplay(index) {
        // Calculate which images to show (current, prev, next in a circular manner)
        const totalImages = galleryImages.length;
        const prevIndex = (index - 1 + totalImages) % totalImages;
        const nextIndex = (index + 1) % totalImages;
        
        // Get the three gallery items
        const items = gallerySlides.querySelectorAll('.gallery-item');
        
        // Update images
        if (items.length >= 3) {
            const imgElements = items[0].querySelector('img');
            const imgElements1 = items[1].querySelector('img');
            const imgElements2 = items[2].querySelector('img');
            
            if (imgElements) imgElements.src = galleryImages[prevIndex];
            if (imgElements1) imgElements1.src = galleryImages[index];
            if (imgElements2) imgElements2.src = galleryImages[nextIndex];
            
            // Update data-index attributes
            items[0].setAttribute('data-index', prevIndex);
            items[1].setAttribute('data-index', index);
            items[2].setAttribute('data-index', nextIndex);
            
            // Show the middle image as featured
            items.forEach(item => item.classList.remove('featured'));
            items[1].classList.add('featured');
        }
    }
    
    // Update gallery indicators
    function updateGalleryDots(index) {
        galleryDots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        if (galleryDots[index]) {
            galleryDots[index].classList.add('active');
        }
    }
    
    // Navigate the gallery
    function navigateGallery(direction) {
        currentIndex = (currentIndex + direction + galleryImages.length) % galleryImages.length;
        updateGalleryDisplay(currentIndex);
        updateGalleryDots(currentIndex);
        resetGalleryInterval();
    }
    
    // Automatic gallery movement
    function autoGallerySlide() {
        navigateGallery(1);
    }
    
    // Reset interval for gallery
    function resetGalleryInterval() {
        if (galleryInterval) {
            clearInterval(galleryInterval);
        }
        galleryInterval = setInterval(autoGallerySlide, 4000);
    }
    
    // Navigation button click handlers
    if (galleryPrevBtn) {
        galleryPrevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            navigateGallery(-1);
        });
    }
    
    if (galleryNextBtn) {
        galleryNextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            navigateGallery(1);
        });
    }
    
    // Gallery dots click handlers
    galleryDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            currentIndex = index;
            updateGalleryDisplay(currentIndex);
            updateGalleryDots(currentIndex);
            resetGalleryInterval();
        });
    });
    
    // Initialize the gallery display
    updateGalleryDisplay(currentIndex);
    
    // Start auto-movement
    resetGalleryInterval();
    
    console.log('Gallery auto-movement started');
}

// Simple Gallery JavaScript
const galleryData = [
    {
        src: "public/gallery/yoga day.jpg",
        title: "International Yoga Day Celebration",
        description: "Students participating in International Yoga Day celebrations at our campus",
        category: "events"
    },
    {
        src: "public/gallery/11.jpg",
        title: "Faculty Excellence",
        description: "Our distinguished faculty members leading by example in academic excellence",
        category: "academic"
    },
    {
        src: "public/gallery/3.jpg",
        title: "Vibrant Campus Life",
        description: "Students engaging in various campus activities and learning environment",
        category: "campus"
    },
    {
        src: "public/gallery/farewell1.jpg",
        title: "Farewell Ceremony",
        description: "Emotional farewell ceremony celebrating graduating students",
        category: "events"
    },
    {
        src: "public/gallery/sportscom.jpg",
        title: "Sports Committee Activities",
        description: "Sports committee organizing various athletic events and competitions",
        category: "sports"
    },
    {
        src: "public/gallery/env.jpg",
        title: "Environmental Awareness",
        description: "Environmental awareness programs and sustainability initiatives",
        category: "events"
    }
];

let currentImageIndex = 0;

function showImage(index) {
    currentImageIndex = index;
    
    const mainImg = document.getElementById('main-gallery-img');
    const title = document.getElementById('gallery-title');
    const description = document.getElementById('gallery-description');
    const currentNum = document.getElementById('current-num');
    
    if (mainImg) mainImg.src = galleryData[index].src;
    if (title) title.textContent = galleryData[index].title;
    if (description) description.textContent = galleryData[index].description;
    if (currentNum) currentNum.textContent = index + 1;
    
    // Update thumbnail active state
    document.querySelectorAll('.thumbnail-item').forEach((thumb, i) => {
        thumb.classList.toggle('active', i === index);
    });
}

function changeImage(direction) {
    currentImageIndex += direction;
    
    if (currentImageIndex >= galleryData.length) {
        currentImageIndex = 0;
    }
    if (currentImageIndex < 0) {
        currentImageIndex = galleryData.length - 1;
    }
    
    showImage(currentImageIndex);
}

function filterGallery(category) {
    // Update filter button active state
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active');
        if (btn.textContent.toLowerCase().includes(category) || category === 'all') {
            btn.classList.add('active');
        }
    });
    
    // Simple filter simulation - in a real app you'd filter the data
    console.log('Filtering by category:', category);
}

// Auto-rotate gallery every 6 seconds
setInterval(() => {
    changeImage(1);
}, 6000); 
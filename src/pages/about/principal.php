<?php
// Set page-specific variables
$page_title = "Principal's Message - Kamkus College of Law";
$page_description = "Message from Dr. Ambuj Sharma, Principal of Kamkus College of Law.";
$default_title = "Kamkus College of Law";
$default_description = "Premier law college offering quality legal education.";
require_once '../../includes/config.php';
$current_page = "about";

// Include header
include '../../includes/header.php';
?>

<!-- Add custom CSS -->
<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/about.css">
<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/principal.css">
<!-- SVG Icons - No external dependencies needed -->

<style>
/* SVG Icon Styles */
.svg-icon {
    display: inline-block;
    width: 1.2em;
    height: 1.2em;
    vertical-align: middle;
    fill: currentColor;
    margin-right: 0.25em;
}

.svg-icon-lg {
    width: 1.5em;
    height: 1.5em;
}

.svg-icon-xl {
    width: 2em;
    height: 2em;
}

.svg-icon-2x {
    width: 2.5em;
    height: 2.5em;
}

/* Feature Icon Specific Styles */
.feature-icon {
    width: 40px;
    height: 40px;
    border-radius: 50% !important;
    background: rgba(30, 41, 59, 0.1) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    margin-top: 2px !important;
}

.feature-icon .svg-icon {
    width: 20px !important;
    height: 20px !important;
    margin-right: 0 !important;
    fill: #1E293B !important;
}

.center-cropped {
    width: 100%;
    height: 100%;
    background-position: center center;
    background-repeat: no-repeat;
    overflow: hidden;
}

/* Card Header Icon Alignment */
.card-header {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding: 16px 20px !important;
}

.card-header .svg-icon {
    width: 20px !important;
    height: 20px !important;
    margin-right: 0 !important;
    flex-shrink: 0 !important;
}

/* Badge Icon Alignment */
.badge .svg-icon {
    width: 16px !important;
    height: 16px !important;
    margin-right: 0 !important;
}

/* Quote and Comment Icons */
.quote-icon {
    width: 24px !important;
    height: 24px !important;
    margin-right: 8px !important;
}

/* Additional custom styles to match the React design */
.hero-section {
    position: relative;
    height: 40vh;
    border-radius: 1rem;
    overflow: hidden;
    margin-bottom: 4rem;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

.hero-overlay-blue {
    position: absolute;
    inset: 0;
    background-color: rgba(30, 58, 138, 0.3);
    mix-blend-mode: multiply;
    z-index: 10;
}

.hero-overlay-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5), transparent);
    z-index: 10;
}

.hero-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 2rem;
    z-index: 20;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
}

@media (min-width: 768px) {
    .hero-content {
        flex-direction: row;
        align-items: center;
    }
}

.principal-avatar-modern {
    width: 10rem;
    height: 10rem;
    border-radius: 50%;
    border: 4px solid white;
    overflow: hidden;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    flex-shrink: 0;
}

@media (min-width: 768px) {
    .principal-avatar-modern {
        width: 14rem;
        height: 14rem;
    }
}

.principal-info-modern {
    text-align: center;
}

@media (min-width: 768px) {
    .principal-info-modern {
        text-align: left;
    }
}

.leadership-badge {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    justify-content: center;
}

@media (min-width: 768px) {
    .leadership-badge {
        justify-content: flex-start;
    }
}

.leadership-badge p {
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-size: 0.875rem;
    font-weight: 500;
    color: #fde68a;
}

.principal-name {
    font-size: 2.25rem;
    font-weight: 700;
    margin: 0.5rem 0;
    color: white;
}

@media (min-width: 768px) {
    .principal-name {
        font-size: 3rem;
    }
}

.principal-title-modern {
    font-size: 1.25rem;
    font-weight: 300;
    color: #f3f4f6;
    margin-bottom: 1rem;
}

@media (min-width: 768px) {
    .principal-title-modern {
        font-size: 1.5rem;
    }
}

.principal-motto {
    max-width: 28rem;
    color: #e5e7eb;
    margin: 0 auto;
}

@media (min-width: 768px) {
    .principal-motto {
        margin: 0;
    }
}

.experience-badge {
    position: absolute;
    top: 2rem;
    right: 2rem;
    z-index: 20;
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(4px);
    padding: 0.75rem;
    border-radius: 0.75rem;
    display: flex;
    gap: 0.75rem;
}

.exp-icon {
    height: 3rem;
    width: 3rem;
    border-radius: 50%;
    background-color: #1e293b;
    display: flex;
    align-items: center;
    justify-content: center;
}

.exp-text {
    color: white;
}

.exp-text p:first-child {
    font-size: 0.875rem;
    font-weight: 600;
}

.exp-text p:last-child {
    font-size: 0.75rem;
}

.main-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.breadcrumb-modern {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 2rem;
    font-size: 0.875rem;
    color: #6b7280;
}

.breadcrumb-modern a {
    color: #6b7280;
    transition: color 0.3s;
}

.breadcrumb-modern a:hover {
    color: #1e293b;
}

.breadcrumb-modern span:last-child {
    color: #1e293b;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    margin-bottom: 3rem;
}

@media (min-width: 1024px) {
    .content-grid {
        grid-template-columns: 400px 1fr;
    }
}

.sidebar {
    background-color: white;
    border-radius: 0.75rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: sticky;
    top: 2rem;
}

.sidebar-header {
    background-color: #1e293b;
    color: white;
    padding: 2rem 1.5rem;
    margin-bottom: 0;
}

.sidebar-header h2 {
    display: none;
}

.sidebar-header p {
    color: #e2e8f0;
    font-size: 1rem;
}

.sidebar-content {
    padding: 1.5rem;
}

.info-list {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

.info-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.info-icon {
    height: 3rem;
    width: 3rem;
    border-radius: 50%;
    background-color: #f3f4f6;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.info-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.25rem;
}

.info-text p:first-child {
    font-size: 0.875rem;
    color: #6b7280;
    margin: 0;
}

.info-text p:last-child {
    font-weight: 500;
    color: #1e293b;
    margin: 0;
    font-size: 1rem;
}

.achievements-box {
    margin-top: 2rem;
    background-color: #f9fafb;
    border-radius: 0.75rem;
    padding: 1.5rem;
    margin: 2.5rem 0 0 0;
}

.achievements-box h3 {
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1e293b;
    font-weight: 600;
    font-size: 1.25rem;
    margin-bottom: 1rem;
    text-align: center;
}

.achievements-list {
    list-style: disc;
    padding-left: 1.25rem;
    font-size: 0.9rem;
    margin: 0;
    color: #1e293b;
}

.achievements-list li {
    margin-bottom: 0.75rem;
    line-height: 1.4;
}

.achievements-list li:last-child {
    margin-bottom: 0;
}

.content-card {
    background-color: white;
    border-radius: 0.75rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-bottom: 2rem;
}

.card-header {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
}

.card-icon {
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 50%;
    background-color: #1e293b;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
}

.card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1e293b;
}

.message-content {
    max-width: none;
    color: #333;
}

.message-greeting {
    font-size: 1.25rem;
    font-weight: 500;
    color: #1e293b;
    margin-bottom: 1.5rem;
}

.message-text {
    margin-bottom: 1.5rem;
    font-size: 1rem;
    line-height: 1.7;
}

.quote-icon {
    display: block;
    font-size: 2.5rem;
    color: #f9d88a;
    margin-bottom: 1rem;
}

.message-quote {
    border-left: 4px solid #1e293b;
    padding: 1rem 1.5rem;
    margin: 2rem 0;
    background: linear-gradient(to right, rgba(30, 41, 59, 0.05), transparent);
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    cursor: pointer;
    transition: all 0.3s;
}

.message-quote:hover {
    transform: translateX(5px);
}

.message-quote.expanded {
    padding: 1.5rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.message-quote p {
    font-style: italic;
    color: #374151;
    font-size: 1.125rem;
}

.quote-toggle {
    display: flex;
    justify-content: center;
    margin-top: 0.5rem;
    transition: transform 0.3s;
}

.quote-toggle.expanded {
    transform: rotate(180deg);
}

.cta-card {
    background: linear-gradient(to right, #1e293b, #364559);
    border-radius: 0.75rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    padding: 1.5rem 2rem;
    color: white;
    margin-bottom: 2rem;
}

.cta-card h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1.25rem;
}

.cta-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.cta-button {
    display: inline-flex;
    align-items: center;
    padding: 0.625rem 1.25rem;
    border-radius: 0.375rem;
    font-weight: 500;
    transition: all 0.3s;
}

.cta-button:hover {
    transform: translateY(-3px) scale(1.03);
}

.cta-button-primary {
    background-color: white;
    color: #1e293b;
}

.cta-button-primary:hover {
    background-color: #f3f4f6;
}

.cta-button-secondary {
    background-color: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(4px);
    color: white;
}

.cta-button-secondary:hover {
    background-color: rgba(255, 255, 255, 0.3);
}

.cta-button i {
    margin-right: 0.5rem;
    font-size: 1rem;
}

.cta-button .arrow {
    margin-left: 0.5rem;
    opacity: 0;
    transform: translateX(-0.5rem);
    transition: all 0.3s;
}

.cta-button:hover .arrow {
    opacity: 1;
    transform: translateX(0);
}

.testimonial-card {
    background-color: white;
    border-radius: 0.75rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s;
}

.testimonial-card:hover {
    transform: translateY(-5px);
}

.testimonial-inner {
    padding: 0.25rem;
}

.testimonial-content {
    background-color: #f9fafb;
    border-radius: 0.5rem;
    padding: 1.5rem;
}

.testimonial-header {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.testimonial-avatar {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 1rem;
}

.testimonial-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.testimonial-author h3 {
    font-weight: 600;
    margin: 0;
}

.testimonial-author p {
    font-size: 0.875rem;
    color: #6b7280;
}

.testimonial-stars {
    margin-left: auto;
    display: flex;
}

.testimonial-stars i {
    color: #fbbf24;
    font-size: 1rem;
}

.testimonial-text {
    font-style: italic;
    color: #374151;
}

/* Animation classes */
.fade-in {
    animation: fadeIn 0.5s ease forwards;
}

.slide-in {
    animation: slideIn 0.6s ease forwards;
}

.slide-up {
    animation: slideUp 0.6s ease forwards;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<main class="py-12 bg-gradient-to-b from-gray-50 to-white">
    <div class="main-container">
        <!-- Breadcrumb Navigation -->
        <div class="breadcrumb-modern fade-in">
            <a href="<?php echo $base_url; ?>">Home</a>
            <span>/</span>
            <a href="<?php echo $base_url; ?>about/index.php">About</a>
            <span>/</span>
            <span>Principal</span>
        </div>

        <!-- Hero Section -->
        <div class="hero-section slide-in">
            <div class="hero-overlay-blue"></div>
            <div class="hero-overlay-gradient"></div>
            
            <div class="hero-content">
                <div class="principal-avatar-modern slide-up" style="animation-delay: 0.2s;">
                    <img src="<?php echo $base_url; ?>src/assets/public/main_heads/ambuj_sharma.jpg" alt="Principal, Kamkus College of Law" onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'" class="center-cropped">
                </div>
                
                <div class="principal-info-modern">
                    <div class="slide-up" style="animation-delay: 0.4s;">
                        <div class="leadership-badge">
                            <svg class="svg-icon text-yellow-300" viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <p class="text-yellow-300">Leadership</p>
                        </div>
                        <h1 class="principal-name">Dr. Ambuj Sharma</h1>
                        <p class="principal-title-modern">Principal, Kamkus College of Law</p>
                    </div>
                    
                    <div class="principal-motto slide-up" style="animation-delay: 0.6s;">
                        <p>Shaping the legal minds of tomorrow with holistic education and ethical values</p>
                    </div>
                </div>
            </div>

            <div class="experience-badge slide-up" style="animation-delay: 0.7s;">
                <div class="exp-icon">
                    <svg class="svg-icon text-white" viewBox="0 0 24 24" style="width: 24px; height: 24px;">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <div class="exp-text">
                    <p>Experience</p>
                    <p>15+ Years in Legal Education</p>
                </div>
            </div>
        </div>

        <div class="content-grid">
            <!-- Profile Sidebar -->
            <div>
                <div class="sidebar slide-in" style="animation-delay: 0.3s;">
                    <div class="sidebar-header slide-up" style="animation-delay: 0.4s;">
                        <h2>Quick Info</h2>
                        <p>Get to know our Principal</p>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="info-list">
                            <div class="info-item slide-up" style="animation-delay: 0.5s;">
                                <div class="info-icon">
                                    <svg class="svg-icon text-gray-500" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                </div>
                                <div class="info-text">
                                    <p>Position</p>
                                    <p>Principal</p>
                                </div>
                            </div>
                            
                            <div class="info-item slide-up" style="animation-delay: 0.6s;">
                                <div class="info-icon">
                                    <svg class="svg-icon text-gray-500" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                </div>
                                <div class="info-text">
                                    <p>Expertise</p>
                                    <p>Legal Education & Leadership</p>
                                </div>
                            </div>
                            
                            <div class="info-item slide-up" style="animation-delay: 0.7s;">
                                <div class="info-icon">
                                    <svg class="svg-icon text-gray-500" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                        <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                    </svg>
                                </div>
                                <div class="info-text">
                                    <p>Office Hours</p>
                                    <p>Monday - Friday, 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                            
                            <div class="info-item slide-up" style="animation-delay: 0.8s;">
                                <div class="info-icon">
                                    <svg class="svg-icon text-gray-500" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                </div>
                                <div class="info-text">
                                    <p>Contact</p>
                                    <p>kamkus.law@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="achievements-box slide-up" style="animation-delay: 0.9s;">
                            <h3><svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg> Achievements</h3>
                            <ul class="achievements-list">
                                <li>15+ years in Legal Education</li>
                                <li>Established Moot Court Excellence Center</li>
                                <li>Recognized by Bar Council of India for leadership</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main content area -->
            <div class="space-y-8">
                <!-- Principal's Message -->
                <div class="content-card slide-in" style="animation-delay: 0.4s;">
                    <div class="card-header">
                        <div class="card-icon slide-up" style="animation-delay: 0.5s;">
                            <svg class="svg-icon text-white" viewBox="0 0 24 24" style="width: 24px; height: 24px;">
                                <path d="M21.99 4c0-1.1-.89-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                            </svg>
                        </div>
                        <h2 class="card-title">Message From The Principal</h2>
                    </div>
                    
                    <div class="message-content slide-up" style="animation-delay: 0.6s;">
                        <svg class="svg-icon quote-icon" viewBox="0 0 24 24" style="width: 24px; height: 24px;">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                        </svg>
                        
                        <p class="message-greeting">
                            Dear Students, Parents, and Well-wishers,
                        </p>
                        
                        <p class="message-text">
                            I extend a warm welcome to you all on behalf of Kamkus College of Law. As the Principal, it gives me immense pleasure to lead an institution that stands committed to imparting quality legal education with a focus on developing not just competent legal professionals but also responsible citizens.
                        </p>
                        
                        <p class="message-text">
                            Legal education today faces numerous challenges and opportunities. The legal profession is evolving rapidly in response to technological advancements, globalization, and changing societal needs. At Kamkus College of Law, we recognize these changes and have designed our academic programs to prepare students for the future of legal practice.
                        </p>
                        
                        <div class="message-quote" id="principalQuote" onclick="toggleQuote()">
                            <p>
                                "Our approach to legal education is holistic. We focus not only on teaching substantive law but also on developing practical skills, ethical values, and critical thinking abilities."
                            </p>
                            
                            <div class="hidden-quote" id="expandedQuote">
                                <p>Our curriculum, teaching methodology, and assessment system are designed to foster these qualities in our students, ensuring they become well-rounded legal professionals ready to tackle the challenges of the modern legal landscape.</p>
                            </div>
                            
                            <div class="quote-toggle" id="quoteToggle">
                                <svg class="svg-icon text-[#1E293B]" viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <p class="message-text">
                            We are fortunate to have a dedicated faculty comprising experienced academicians and practicing legal professionals. They bring their knowledge, expertise, and real-world experience to the classroom, enriching the learning experience for our students. Our state-of-the-art infrastructure, including a well-equipped library, moot court hall, and digital resources, provides a conducive environment for learning.
                        </p>
                        
                        <p class="message-text">
                            Beyond academics, we offer a vibrant campus life with numerous co-curricular and extra-curricular activities. Our moot court competitions, legal aid clinics, debates, cultural programs, and sports events provide students with opportunities to develop their personality, leadership skills, and teamwork.
                        </p>
                        
                        <p class="message-text">
                            I am proud of our achievements, but I also recognize that there is always room for improvement. We are committed to continuous improvement in all aspects of our operations, from academic programs to administrative processes. We welcome feedback from all stakeholders and use it to enhance our services.
                        </p>
                        
                        <p class="message-text">
                            To our current students, I encourage you to make the most of the opportunities available at Kamkus College of Law. Engage actively in classroom discussions, participate in co-curricular activities, and pursue your interests with passion and dedication. Remember, the years you spend here will shape not just your career but also your character.
                        </p>
                        
                        <p class="message-text">
                            To prospective students, I invite you to consider Kamkus College of Law for your legal education. We offer a stimulating academic environment, excellent faculty, modern infrastructure, and numerous opportunities for personal and professional growth.
                        </p>
                        
                        <p class="mt-6 font-medium">
                            Warm regards,<br />
                            <span class="text-lg text-[#1E293B]">Dr. Ambuj Sharma</span><br />
                            Principal
                        </p>
                    </div>
                </div>
                
                <!-- Call to Action -->
                <div class="cta-card slide-in" style="animation-delay: 0.6s;">
                    <h3>Explore More Leadership Messages</h3>
                    
                    <div class="cta-buttons">
                        <a href="<?php echo $base_url; ?>about/chief-mentor.php" class="cta-button cta-button-primary slide-up" style="animation-delay: 0.7s;">
                            <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            Chief Mentor's Message
                            <svg class="svg-icon arrow" viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                            </svg>
                        </a>
                        
                        <a href="<?php echo $base_url; ?>about/secretary.php" class="cta-button cta-button-secondary slide-up" style="animation-delay: 0.8s;">
                            <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            Secretary's Message
                            <svg class="svg-icon arrow" viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Toggle quote visibility
    function toggleQuote() {
        const expandedQuote = document.getElementById('expandedQuote');
        const principalQuote = document.getElementById('principalQuote');
        const quoteToggle = document.getElementById('quoteToggle');
        
        if (expandedQuote.style.display === 'block') {
            expandedQuote.style.display = 'none';
            principalQuote.classList.remove('expanded');
            quoteToggle.classList.remove('expanded');
        } else {
            expandedQuote.style.display = 'block';
            principalQuote.classList.add('expanded');
            quoteToggle.classList.add('expanded');
        }
    }
    
    // Add animation classes on page load
    document.addEventListener('DOMContentLoaded', function() {
        // If you want to add animations to elements that appear on scroll,
        // you can implement that functionality here
    });
</script>

<?php
// Include footer
include("../includes/footer.php");
?>


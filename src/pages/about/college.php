<?php
$page_title = "About the College - Kamkus College of Law";
$page_description = "Learn about Kamkus College of Law, a premier educational institution established in 2007 providing quality legal education in Ghaziabad.";
$current_page = "about";
require_once '../../includes/config.php';

include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">
<style>
/* Custom styles for College page */

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

/* Program Icon Specific Styles */
.program-icon {
    width: 36px !important;
    height: 36px !important;
    border-radius: 50% !important;
    background: rgba(30, 41, 59, 0.1) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    transition: all 0.3s ease !important;
}

.program-icon .svg-icon {
    width: 18px !important;
    height: 18px !important;
    margin-right: 0 !important;
    fill: #1E293B !important;
    transition: fill 0.3s ease;
}

.program-link:hover .program-icon {
    background: rgba(255, 255, 255, 0.2) !important;
}

.program-link:hover .program-icon .svg-icon {
    fill: #fcd34d !important;
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

/* Stats Icon Alignment */
.stats-icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.stats-icon .svg-icon {
    width: 24px !important;
    height: 24px !important;
    margin-right: 0 !important;
}

/* Breadcrumb Icon Alignment */
.breadcrumb .svg-icon {
    width: 14px !important;
    height: 14px !important;
    margin-right: 0 !important;
    flex-shrink: 0 !important;
}

/* Resource Link Icon Alignment */
.resource-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: linear-gradient(135deg, #f8fafc, #ffffff);
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    text-decoration: none;
    color: #1E293B;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    margin-bottom: 8px;
}

.resource-link .svg-icon {
    width: 16px !important;
    height: 16px !important;
    margin-right: 0 !important;
    flex-shrink: 0 !important;
    fill: #64748b;
    transition: fill 0.3s ease;
}

.resource-link:hover .svg-icon {
    fill: #fcd34d;
}

/* Enhanced Program Links */
.program-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: linear-gradient(135deg, #f8fafc, #ffffff);
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    text-decoration: none;
    color: #1E293B;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    margin-bottom: 8px;
    position: relative;
    overflow: hidden;
}

.program-link:hover {
    background: linear-gradient(135deg, #1E293B, #374151);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(30, 41, 59, 0.2);
    border-color: #1E293B;
}

.program-icon {
    width: 36px !important;
    height: 36px !important;
    border-radius: 50% !important;
    background: rgba(30, 41, 59, 0.1) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    transition: all 0.3s ease !important;
}

.program-icon i {
    color: #1E293B !important;
    font-size: 18px !important;
    transition: color 0.3s ease;
}

.program-link:hover .program-icon {
    background: rgba(255, 255, 255, 0.2) !important;
}

.program-link:hover .program-icon i {
    color: #fcd34d !important;
}

.program-text {
    font-size: 14px;
    font-weight: 500;
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.program-duration {
    font-size: 12px;
    opacity: 0.7;
    font-weight: 400;
}

/* Enhanced Resource Links */
.resource-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: linear-gradient(135deg, #f8fafc, #ffffff);
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    text-decoration: none;
    color: #1E293B;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    margin-bottom: 8px;
}

.resource-link:hover {
    background: linear-gradient(135deg, #1E293B, #374151);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(30, 41, 59, 0.2);
    border-color: #1E293B;
}

.resource-link i {
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #64748b;
    transition: color 0.3s ease;
}

.resource-link:hover i {
    color: #fcd34d;
}

.resource-link span {
    font-size: 14px;
    font-weight: 500;
}

/* Resource grid layout */
.resource-grid {
    display: grid;
    gap: 8px;
    margin-top: 16px;
}

/* Program grid layout */
.program-grid {
    display: grid;
    gap: 8px;
    margin-top: 16px;
}

/* Improved Breadcrumb Design */
.breadcrumb {
    background: linear-gradient(135deg, #ffffff, #f8fafc) !important;
    border: 1px solid #e2e8f0 !important;
    border-radius: 12px !important;
    padding: 16px 24px !important;
    margin: 0 auto 1rem auto !important;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05) !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    font-size: 14px !important;
    backdrop-filter: blur(10px) !important;
    width: 100% !important;
    max-width: 1200px !important;
}

.breadcrumb a {
    color: #64748b !important;
    text-decoration: none !important;
    font-weight: 500 !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
    padding: 6px 12px !important;
    border-radius: 8px !important;
    transition: all 0.3s ease !important;
}

.breadcrumb a:hover {
    color: #1E293B !important;
    background: rgba(30, 41, 59, 0.08) !important;
    transform: translateY(-1px) !important;
}

.breadcrumb a i {
    font-size: 14px !important;
}

.breadcrumb i.fas.fa-chevron-right {
    color: #cbd5e1 !important;
    font-size: 12px !important;
    margin: 0 4px !important;
}

.breadcrumb span {
    color: #1E293B !important;
    font-weight: 600 !important;
    background: rgba(30, 41, 59, 0.1) !important;
    padding: 6px 12px !important;
    border-radius: 8px !important;
    border: 1px solid rgba(30, 41, 59, 0.15) !important;
}

/* Enhanced Modern Design */
.teaching-learning-page {
    background: linear-gradient(135deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%);
    min-height: 100vh;
    padding-bottom: 4rem;
}

/* Enhanced Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

/* Card header styles are now handled in the SVG Icon Styles section above */
.card-header h3 {
    font-size: 18px !important;
    font-weight: 500 !important;
    margin: 0 !important;
    line-height: 1.2 !important;
}

/* Feature icon styles are now handled in the SVG Icon Styles section above */

/* Feature List Layout */
.feature-list {
    margin-top: 20px;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 24px;
    padding: 20px;
    background: #F8FAFC;
    border: 1px solid rgba(251, 191, 36, 0.1);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: rgba(251, 191, 36, 0.08);
    border-color: rgba(251, 191, 36, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(251, 191, 36, 0.15);
}

.feature-text h4 {
    color: #1E293B;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: 16px;
}

.feature-text p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
}

/* Add highlight box styling */
.highlight-box {
    background: rgba(251, 191, 36, 0.1);
    border: 1px solid rgba(251, 191, 36, 0.2);
    border-radius: 12px;
    padding: 20px;
    margin-top: 20px;
    font-style: italic;
    color: #1E293B;
}

.prose p {
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 1rem;
}

/* Additional utility classes */
.mt-4 { margin-top: 1rem; }

/* Ensure proper flexbox layout */
.content-section .container .content-grid {
    display: flex !important;
    gap: 2rem !important;
    align-items: flex-start !important;
}

.content-section .container .content-grid .main-content {
    flex: 2 !important;
}

.content-section .container .content-grid .sidebar {
    flex: 1 !important;
    min-width: 300px !important;
}

@media (max-width: 768px) {
    .content-section .container .content-grid {
        flex-direction: column !important;
    }
    
    .content-section .container .content-grid .sidebar {
        min-width: unset !important;
    }
}

/* Ensure container has max-width */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}
</style> 

<!-- Main Page Content -->
<main class="teaching-learning-page">
    <!-- Breadcrumb -->
    <div class="content-section">
        <div class="container" style="max-width: 1200px;">
            <div class="breadcrumb">
                <a href="<?php echo $base_url; ?>">
                    <svg class="svg-icon" viewBox="0 0 24 24">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                    </svg>
                    Home
                </a>
                <svg class="svg-icon" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                </svg>
                <a href="<?php echo $base_url; ?>about/">About</a>
                <svg class="svg-icon" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                </svg>
                <span>About the College</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/about/slide1f.jpg" 
             alt="Kamkus College of Law Campus" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg class="svg-icon" viewBox="0 0 24 24">
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                        </svg>
                        <span>Premier Institution</span>
                    </div>
                    <h1>About Our College</h1>
                    <p>A premier institution dedicated to excellence in legal education since 2007</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg class="svg-icon" viewBox="0 0 24 24">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                    </div>
                    <div class="stats-text">
                        <h4>Established</h4>
                        <p>Since 2007</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content-section">
        <div class="container">
            <div class="content-grid" style="display: flex !important; gap: 2rem !important;">

                <!-- Main Content Area -->
                <div class="main-content" style="flex: 2 !important;">
                    <!-- Introduction -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/>
                            </svg>
                            <h3>Our Institution</h3>
                        </div>
                        <div class="card-content">
                
                <div class="prose">
                    <p>
                        Kamkus College of Law was established in 2007 with a vision to impart quality legal education. It is a premier educational institution managed by Bhagirath Sewa Sansthan, a society registered under the Societies Registration Act, 1860. Located in B Block, Sector 23, Sanjay Nagar, Ghaziabad, Uttar Pradesh, 201002, one of the fastest growing industrial hubs of National Capital Region, the institute strives for academic excellence with best infrastructure and faculties.
                    </p>
                    <p class="mt-4">
                        The College is celebrating its glorious 10th year of inception in the journey of imparting legal education. Kamkus College of Law aspires to be one of the premier law schools of the country entrenched with values and vision for the future. The institution is affiliated to Chaudhary Charan Singh University, Meerut, and the courses offered are approved by the Bar Council of India.
                    </p>
                </div>

                <div class="highlight-box">
                            <p>
                                Our team comprises of competent faculties who believe in innovative legal education and have a remarkable spirit of leadership. The College focuses on the all-round development of students' personality in a manner that they become responsible citizens and competent legal professionals.
                            </p>
                        </div>
                    </div>

                    <!-- Learning Environment -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <h3>Mission & Vision</h3>
                        </div>
                        <div class="card-content">
                    <div class="prose">
                        <p>
                            The College provides an excellent academic environment conducive to learning, with a focus on both theoretical knowledge and practical skills. Our campus is equipped with modern facilities designed to enhance the legal education experience.
                        </p>
                    </div>
                    
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Modern Library</h4>
                                        <p>Our extensive library houses a comprehensive collection of legal resources, including textbooks, journals, law reports, and digital databases for research.</p>
                                    </div>
                                </div>
                        
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M7 6V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2v8a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-8H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h2zm2-2v2h6V4H9zm6 4H9v10h6V8z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Moot Court</h4>
                                        <p>A professional courtroom setting that offers students practical training in advocacy, arguments, and legal procedures.</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M20 3H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h3l-1 1v2h12v-2l-1-1h3c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 13H4V5h16v11z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Computer Laboratory</h4>
                                        <p>Advanced computer systems equipped with legal research software and databases to facilitate digital learning and research.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Smart Classrooms</h4>
                                        <p>Technology-enabled learning spaces with modern audio-visual equipment to enhance the teaching-learning experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Goals and Quality Policy -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                            <h3>Goals & Quality Policy</h3>
                        </div>
                        <div class="card-content">
                    <div class="prose">
                        <p>
                            The College aims to develop professionals who are well-versed in legal principles and capable of applying them in real-world scenarios. Our quality policy is built on several core principles:
                        </p>
                    </div>
                    
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Excellence in Education</h4>
                                        <p>Commitment to highest standards in teaching and research</p>
                                    </div>
                                </div>
                        
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Ethical Foundation</h4>
                                        <p>Value-based legal education emphasizing professional ethics</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zM4 18v-4h3v4h2v-7.5c0-.83.67-1.5 1.5-1.5S12 9.67 12 10.5V18h2v-7.5c0-.83.67-1.5 1.5-1.5S17 9.67 17 10.5V18h2V10.5C19 8.57 17.43 7 15.5 7S12 8.57 12 10.5V18H4z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Continuous Improvement</h4>
                                        <p>Regular enhancement of academic programs and teaching methodologies</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M9 21c0 .5.4 1 1 1h4c.6 0 1-.5 1-1v-1H9v1zm3-19C8.1 2 5 5.1 5 9c0 2.4 1.2 4.5 3 5.7V17c0 .5.4 1 1 1h6c.6 0 1-.5 1-1v-2.3c1.8-1.3 3-3.4 3-5.7 0-3.9-3.1-7-7-7z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Innovation Culture</h4>
                                        <p>Promoting critical thinking and creative problem-solving skills</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Industry Connection</h4>
                                        <p>Building strong links with legal professionals and organizations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Milestones -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/>
                            </svg>
                            <h3>Our Milestones</h3>
                        </div>
                        <div class="card-content">
                            <div class="prose">
                                <p>
                                    Our journey represents a continuous commitment to excellence in legal education and institutional development over the years.
                                </p>
                            </div>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6h-5.6z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>2007 - Foundation</h4>
                                        <p>Establishment of Kamkus College of Law</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M18 7l-1.41-1.41-6.34 6.34 1.41 1.41L18 7zm4.24-1.41L11.66 16.17 7.48 12l-1.41 1.41L11.66 19l12-12-1.42-1.41zM.41 13.41L6 19l1.41-1.41L1.83 12 .41 13.41z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Recognition</h4>
                                        <p>Approval from Bar Council of India</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Programs Expansion</h4>
                                        <p>Introduction of LL.M, B.COM.LLB., PGD-CCL program</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Excellence</h4>
                                        <p>NAAC, NIRF</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="sidebar" style="flex: 1 !important; min-width: 300px !important;">
                    <!-- Educational Programs -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                            </svg>
                            <h3>Educational Programs</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Explore all legal education programs offered at Kamkus College
                            </p>
                            
                            <div class="program-grid">
                                <a href="<?php echo $base_url; ?>academics/llm.php" class="program-link">
                                    <div class="program-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M6 2v6h.01L6 8.01 10 12l-4 4 .01.01H6V22h12v-5.99h-.01L18 16l-4-4 4-3.99-.01-.01H18V2H6z"/>
                                        </svg>
                                    </div>
                                    <div class="program-text">
                                        <span>LL.M.</span>
                                        <span class="program-duration">Master's Program • 2 Years</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>academics/llb.php" class="program-link">
                                    <div class="program-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M7 6V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2v8a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-8H5a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h2zm2-2v2h6V4H9zm6 4H9v10h6V8z"/>
                                        </svg>
                                    </div>
                                    <div class="program-text">
                                        <span>LL.B.</span>
                                        <span class="program-duration">Bachelor's Program • 3 Years</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>academics/ba-llb.php" class="program-link">
                                    <div class="program-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M11 17h2v-1h1c.55 0 1-.45 1-1s-.45-1-1-1h-1v-1h2c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2h-3V6c0-.55-.45-1-1-1s-1 .45-1 1v1H8c-1.1 0-2 .9-2 2v2c0 1.1.9 2 2 2h2v1H9c-.55 0-1 .45-1 1s.45 1 1 1h1v1c0 .55.45 1 1 1s1-.45 1-1z"/>
                                        </svg>
                                    </div>
                                    <div class="program-text">
                                        <span>B.A. LL.B.</span>
                                        <span class="program-duration">Integrated Program • 5 Years</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>academics/bcom-llb.php" class="program-link">
                                    <div class="program-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/>
                                        </svg>
                                    </div>
                                    <div class="program-text">
                                        <span>B.Com. LL.B.</span>
                                        <span class="program-duration">Integrated Program • 5 Years</span>
                                    </div>
                                </a>

                                <a href="#" class="program-link">
                                    <div class="program-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/>
                                        </svg>
                                    </div>
                                    <div class="program-text">
                                        <span>P.G.D.-C.C.L.</span>
                                        <span class="program-duration">Integrated Program • 1 Year</span>
                                    </div>
                                </a>
                            </div>
                            
                            <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
                                <a href="<?php echo $base_url; ?>academics/academics.php" 
                                   style="display: inline-flex; align-items: center; gap: 8px; color: #1E293B; text-decoration: none; font-size: 14px; font-weight: 500; transition: color 0.3s ease;">
                                    <svg class="svg-icon" viewBox="0 0 24 24" style="width: 12px; height: 12px;">
                                        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                    </svg>
                                    <span>View All Academic Programs</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Facts -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z"/>
                            </svg>
                            <h3>Quick Facts</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Key information about Kamkus College of Law
                            </p>
                
                            <div class="resource-grid">
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg class="svg-icon" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                    <span>Ghaziabad, Uttar Pradesh</span>
                                </a>
                                
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg class="svg-icon" viewBox="0 0 24 24">
                                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                                    </svg>
                                    <span>CCS University, Meerut</span>
                                </a>
                                
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg class="svg-icon" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    <span>Bar Council of India</span>
                                </a>
                                
<!--                                <a href="#" class="resource-link" onclick="return false;">-->
<!--                                    <svg class="svg-icon" viewBox="0 0 24 24">-->
<!--                                        <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>-->
<!--                                    </svg>-->
<!--                                    <span>Established 2007</span>-->
<!--                                </a>-->
                                
                                <a href="<?php echo $base_url; ?>contact.php" class="resource-link">
                                    <svg class="svg-icon" viewBox="0 0 24 24">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                    <span>Contact Information</span>
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <!-- Vision & Mission -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                            </svg>
                            <h3>Vision & Mission</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Vision</h4>
                                        <p>To be recognized as a center of excellence in legal education, producing competent legal professionals who contribute meaningfully to the justice system and society at large.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M9 21c0 .5.4 1 1 1h4c.6 0 1-.5 1-1v-1H9v1zm3-19C8.1 2 5 5.1 5 9c0 2.4 1.2 4.5 3 5.7V17c0 .5.4 1 1 1h6c.6 0 1-.5 1-1v-2.3c1.8-1.3 3-3.4 3-5.7 0-3.9-3.1-7-7-7z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Mission</h4>
                                        <p>To impart quality legal education that blends theoretical knowledge with practical skills, ethical values, and social responsibility, preparing students for diverse careers in the legal profession.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Contact Information -->
                    <div class="content-card" style="background: linear-gradient(135deg, #1E293B, #364559);">
                        <div class="card-header" style="background: transparent;">
                            <svg class="svg-icon" viewBox="0 0 24 24" style="color: white;">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <h3 style="color: white;">Visit Our Campus</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 16px;">
                                Experience our facilities firsthand and meet our faculty members. Schedule a campus tour today.
                            </p>
                            
                            <div style="margin-bottom: 16px;">
                                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                                    <svg class="svg-icon" viewBox="0 0 24 24" style="color: #fcd34d; width: 20px; height: 20px;">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                    <span style="color: rgba(255, 255, 255, 0.9);">B Block, Sector 23, Sanjay Nagar, Ghaziabad</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <svg class="svg-icon" viewBox="0 0 24 24" style="color: #fcd34d; width: 20px; height: 20px;">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                    <span style="color: rgba(255, 255, 255, 0.9);">kamkus.law@gmail.com</span>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <a href="<?php echo $base_url; ?>contact.php" 
                                   style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                                    <svg class="svg-icon" viewBox="0 0 24 24">
                                        <path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/>
                                    </svg>
                                    Schedule a Visit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</main>

<script>
    // Basic hover effects for elements
    document.addEventListener('DOMContentLoaded', function() {
        // Feature items hover effect
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

        // Visit card hover effect
        const visitCard = document.querySelector('.visit-card');
        if (visitCard) {
            visitCard.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            visitCard.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        }
    });
</script>

<?php include('../includes/footer.php'); ?>
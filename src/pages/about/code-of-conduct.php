<?php
// Page specific information
$page_title = "Code of Conduct - Kamkus College of Law";
$page_description = "Guidelines for ethical behavior and professional standards at Kamkus College of Law";
$current_page = "about";
require_once '../../includes/config.php';
$default_title = "Kamkus College of Law";
$default_description = "Kamkus College of Law provides quality legal education in Ghaziabad, India";

// Include header
include '../../includes/header.php';
?>

<!-- Custom CSS for code of conduct page -->
<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/about.css">
<style>
    /* Styles for the code of conduct page */
    body {
        background: linear-gradient(to bottom, #f9fafb, #ffffff);
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 16px;
        padding-right: 16px;
    }
    
    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #64748b;
        margin-bottom: 32px;
        padding-top: 48px;
    }
    
    .breadcrumb a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.2s;
    }
    
    .breadcrumb a:hover {
        color: #1E293B;
    }
    
    .hero-section {
        position: relative;
        height: 50vh;
        overflow: hidden;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        margin-bottom: 48px;
    }
    
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(30, 41, 59, 0.3);
        mix-blend-mode: multiply;
        z-index: 10;
    }
    
    .hero-gradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5), transparent);
        z-index: 10;
    }
    
    .hero-image {
        position: absolute;
        inset: 0;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
    
    .hero-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 32px;
        z-index: 20;
        color: white;
    }
    
    .status-badge {
        position: absolute;
        top: 32px;
        right: 32px;
        z-index: 20;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(4px);
        padding: 12px;
        border-radius: 12px;
        display: flex;
        gap: 12px;
        align-items: center;
    }
    
    .icon-circle {
        height: 48px;
        width: 48px;
        border-radius: 50%;
        background: #1E293B;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .badge-container {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
    }
    
    .badge-text {
        text-transform: uppercase;
        letter-spacing: 0.2em;
        font-size: 14px;
        font-weight: 500;
        color: #FCD34D;
    }
    
    .main-content {
        display: block;
        margin-bottom: 48px;
    }
    
    .content-area {
        display: flex;
        flex-direction: column;
        gap: 32px;
    }
    
    .sidebar {
        display: flex;
        flex-direction: column;
        gap: 32px;
    }
    
    .section-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
        padding: 24px 32px;
        border: 1px solid #edf2f7;
    }
    
    .section-header {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
    }
    
    .section-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #1E293B;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08);
    }
    
    .gradient-heading {
        font-size: 24px;
        font-weight: bold;
        background: linear-gradient(to right, #1E293B, #364559);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .prose {
        color: #475569;
        line-height: 1.7;
    }
    
    .prose p {
        margin-bottom: 20px;
    }
    
    .card-header {
        background: #1E293B;
        color: white;
        padding: 14px 20px;
        display: flex;
        align-items: center;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }
    
    .rule-item {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 20px;
        border: 1px solid #edf2f7;
    }
    
    .rule-item h4 {
        font-weight: 600;
        color: #1E293B;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
    }
    
    .rule-item h4 i {
        margin-right: 8px;
    }
    
    .rule-item ul {
        padding-left: 26px;
        list-style-type: none;
    }
    
    .rule-item ul li {
        position: relative;
        padding-left: 8px;
        margin-bottom: 8px;
    }
    
    .rule-item ul li:before {
        content: '';
        position: absolute;
        left: -8px;
        top: 8px;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #1E293B;
    }
    
    .benefits-section {
        background: linear-gradient(to right, #1E293B, #364559);
        color: white;
        padding: 24px 32px;
        border-radius: 12px;
    }
    
    .benefit-item {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(4px);
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 16px;
    }
    
    .sidebar-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }
    
    .sidebar-header {
        background: #1E293B;
        color: white;
        padding: 16px;
    }
    
    .sidebar-content {
        padding: 20px;
    }
    
    .sidebar-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px;
        margin: -8px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        margin-bottom: 16px;
    }
    
    .sidebar-item:hover {
        background: rgba(30, 41, 59, 0.05);
    }
    
    .sidebar-icon {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background: rgba(30, 41, 59, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }
    
    .sidebar-item:hover .sidebar-icon {
        background: rgba(30, 41, 59, 0.2);
    }
    
    /* Additional styles needed for tailwind-like classes */
    .grid-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        margin-top: 24px;
    }
    
    @media (min-width: 768px) {
        .grid-container {
            grid-template-columns: 1fr 1fr;
        }
    }
    
    .space-y-4 > * + * {
        margin-top: 16px;
    }
    
    .space-y-5 > * + * {
        margin-top: 20px;
    }
    
    .space-y-3 > * + * {
        margin-top: 12px;
    }
    
    .mr-3 {
        margin-right: 12px;
    }
    
    .mr-2 {
        margin-right: 8px;
    }
    
    .mb-5 {
        margin-bottom: 20px;
    }
    
    .mt-4 {
        margin-top: 16px;
    }
    
    .p-6 {
        padding: 24px;
    }
    
    .pb-2 {
        padding-bottom: 8px;
    }
    
    .font-medium {
        font-weight: 500;
    }
    
    .contact-btn {
        display: inline-flex;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        font-weight: 500;
        padding: 8px 16px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }
    
    .contact-btn:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }
    
    .badge {
        font-size: 12px;
        background-color: #1E293B;
        color: white;
        padding: 2px 8px;
        border-radius: 9999px;
        margin-left: 8px;
    }
    
    /* Hero section styling */
    .hero-section h1 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 8px;
        color: white;
        line-height: 1.2;
    }
    
    @media (min-width: 768px) {
        .hero-section h1 {
            font-size: 48px;
        }
    }
    
    .hero-section .hero-content p {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.9);
        max-width: 768px;
    }
    
    /* Card header styling */
    .card-header h3 {
        font-size: 18px;
        font-weight: 500;
    }
    
    /* Benefits section styling */
    .benefits-section h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
    }
    
    .benefit-item h4 {
        font-weight: 600;
        margin-bottom: 8px;
    }
    
    /* Sidebar styling */
    .sidebar-header h3 {
        font-size: 18px;
        font-weight: 700;
    }
    
    /* Additional styles for the modernized-page approach */
    .modernized-page {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    
    .modern-container {
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 16px;
        padding-right: 16px;
    }
    
    .modern-breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #64748b;
        margin-bottom: 32px;
    }
    
    .modern-breadcrumb a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.2s;
    }
    
    .modern-breadcrumb a:hover {
        color: #1E293B;
    }
    
    .modern-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 32px;
        margin-bottom: 48px;
    }
    
    @media (max-width: 768px) {
        .modern-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .space-y-8 > * + * {
        margin-top: 32px;
    }
    
    .column > * + * {
        margin-top: 32px;
    }
    
    /* Animation classes */
    .fade-in {
        opacity: 0;
        animation: fadeIn 0.8s forwards;
    }
    
    .slide-in-up {
        opacity: 0;
        transform: translateY(30px);
        animation: slideInUp 0.8s forwards;
    }
    
    .slide-in-right {
        opacity: 0;
        transform: translateX(30px);
        animation: slideInRight 0.8s forwards;
    }
    
    .stagger-item {
        opacity: 0;
    }
    
    .stagger-item:nth-child(1) { animation-delay: 0.1s; }
    .stagger-item:nth-child(2) { animation-delay: 0.2s; }
    .stagger-item:nth-child(3) { animation-delay: 0.3s; }
    .stagger-item:nth-child(4) { animation-delay: 0.4s; }
    
    @keyframes fadeIn {
        to { opacity: 1; }
    }
    
    @keyframes slideInRight {
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideInUp {
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<!-- Modernized Page content -->
<section class="modernized-page">
    <div class="modern-container">
        <!-- Breadcrumb -->
        <div class="modern-breadcrumb fade-in">
            <a href="<?php echo $base_url; ?>">Home</a>
            <span>/</span>
            <a href="#">About</a>
            <span>/</span>
            <span style="color: #1E293B;">Code of Conduct</span>
        </div>

        <!-- Hero section with image -->
        <div class="hero-section slide-in-up">
            <div class="hero-overlay"></div>
            <div class="hero-gradient"></div>
            <img src="<?php echo $base_url; ?>src/assets/public/about/coc.avif" alt="Code of Conduct - Kamkus College of Law" class="hero-image">
            
            <div class="hero-content">
                <div class="badge-container">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#FDE047"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M7,7H17V9H7V7M7,11H17V13H7V11M7,15H13V17H7V15Z"/></svg>
                    <p class="badge-text">Professional Standards</p>
                </div>
                <h1>Code of Conduct</h1>
                <p>
                    Guidelines for ethical behavior and professional standards at Kamkus College of Law
                </p>
            </div>

            <div class="status-badge">
                <div class="icon-circle">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15A1,1 0 0,1 22,16H21A7,7 0 0,1 14,23H10A7,7 0 0,1 3,16H2A1,1 0 0,1 1,15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2Z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold">Status</p>
                    <p class="text-xs">Updated <?php echo date('Y'); ?></p>
                </div>
            </div>
        </div>

        <div class="modern-grid">
            <!-- Left column -->
            <div class="column">
                <!-- Introduction -->
                <div class="section-card slide-in-up">
                    <div class="section-header">
                        <div class="section-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                        </div>
                        <h2 class="gradient-heading">About Our Code of Conduct</h2>
                    </div>
                    
                    <div class="prose fade-in">
                        <p>
                            The Code of Conduct at Kamkus College of Law outlines the expectations for ethical behavior, 
                            academic integrity, and professional standards for all members of our community. Adherence 
                            to this code is essential to maintain the dignity and prestige of the legal profession and create a 
                            respectful learning environment.
                        </p>
                        <p>
                            Our code is built on the principles of honesty, respect, responsibility, and dedication to legal ethics. 
                            It applies to students, faculty, staff, and administrators alike, creating a framework for our interactions 
                            and professional development.
                        </p>
                    </div>
                </div>

                <!-- Student Conduct -->
                <div class="section-card slide-in-up">
                    <div class="card-header">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 12px;"><path d="M9,12A3,3 0 0,0 12,9A3,3 0 0,0 15,12A3,3 0 0,0 12,15A3,3 0 0,0 9,12M12,17C16.42,17 20,18.79 20,21V23H4V21C4,18.79 7.58,17 12,17M17.75,4.81L16.31,6.25L14.41,4.35L13,5.76L16.31,9.07L19.16,6.22L17.75,4.81Z"/></svg>
                        <h3>Student Conduct</h3>
                    </div>
                    
                    <div class="p-6">
                        <div class="prose mb-5 fade-in">
                            <p>
                                Students represent both themselves and the institution. The following guidelines establish 
                                expectations for conduct that reflect the values and ethics of the legal profession.
                            </p>
                        </div>
                        
                        <div class="grid-container">
                            <div class="rule-item stagger-item">
                                <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg> Academic Integrity</h4>
                                <ul>
                                    <li>Avoid all forms of academic dishonesty, including plagiarism and cheating</li>
                                    <li>Submit original work with proper citations and acknowledgments</li>
                                    <li>Respect intellectual property rights in research and assignments</li>
                                </ul>
                            </div>
                            
                            <div class="rule-item stagger-item">
                                <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/></svg> Classroom Decorum</h4>
                                <ul>
                                    <li>Arrive punctually for classes and academic events</li>
                                    <li>Maintain respectful behavior during lectures and discussions</li>
                                    <li>Practice active listening and constructive participation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Faculty Conduct -->
                <div class="section-card slide-in-up">
                    <div class="card-header">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 12px;"><path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5Z"/></svg>
                        <h3>Faculty Conduct</h3>
                    </div>
                    
                    <div class="p-6">
                        <div class="prose mb-5 fade-in">
                            <p>
                                Faculty members are role models who set the tone for educational excellence and professional ethics. 
                                Their conduct should exemplify the highest standards of the legal profession.
                            </p>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="rule-item stagger-item">
                                <ul>
                                    <li>Maintain fairness and transparency in evaluation and grading processes</li>
                                    <li>Uphold confidentiality regarding student information and records</li>
                                    <li>Provide constructive feedback to support student growth and learning</li>
                                    <li>Avoid conflicts of interest in teaching, research, and professional activities</li>
                                    <li>Foster an inclusive classroom environment that respects diverse perspectives</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right column -->
            <div class="column">
                <!-- Core Principles -->
                <div class="sidebar-card slide-in-right">
                    <div class="sidebar-header">
                        <h3>Core Principles</h3>
                    </div>
                    <div class="sidebar-content">
                        <div class="space-y-4">
                            <div class="sidebar-item stagger-item">
                                <span class="sidebar-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15A1,1 0 0,1 22,16H21A7,7 0 0,1 14,23H10A7,7 0 0,1 3,16H2A1,1 0 0,1 1,15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M12,4.5A0.5,0.5 0 0,0 11.5,4A0.5,0.5 0 0,0 12,3.5A0.5,0.5 0 0,0 12.5,4A0.5,0.5 0 0,0 12,4.5Z"/></svg>
                                </span>
                                <div>
                                    <p class="font-medium">Integrity</p>
                                    <p class="text-sm">Honesty in all actions</p>
                                </div>
                            </div>
                            
                            <div class="sidebar-item stagger-item">
                                <span class="sidebar-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9,12A3,3 0 0,0 12,9A3,3 0 0,0 15,12A3,3 0 0,0 12,15A3,3 0 0,0 9,12M12,17C16.42,17 20,18.79 20,21V23H4V21C4,18.79 7.58,17 12,17M17.75,4.81L16.31,6.25L14.41,4.35L13,5.76L16.31,9.07L19.16,6.22L17.75,4.81Z"/></svg>
                                </span>
                                <div>
                                    <p class="font-medium">Respect</p>
                                    <p class="text-sm">Dignity for all individuals</p>
                                </div>
                            </div>
                            
                            <div class="sidebar-item stagger-item">
                                <span class="sidebar-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                </span>
                                <div>
                                    <p class="font-medium">Justice</p>
                                    <p class="text-sm">Fairness in all processes</p>
                                </div>
                            </div>
                            
                            <div class="sidebar-item stagger-item">
                                <span class="sidebar-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z"/></svg>
                                </span>
                                <div>
                                    <p class="font-medium">Excellence</p>
                                    <p class="text-sm">Striving for highest standards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Why This Code Matters -->
                <div class="sidebar-card slide-in-right">
                    <div class="sidebar-header">
                        <h3>Why This Code Matters</h3>
                    </div>
                    <div class="sidebar-content">
                        <div class="prose prose-sm mb-4 fade-in">
                            <p>
                                This Code of Conduct is more than a set of rules—it's a foundation for your professional development 
                                and future legal practice. It helps create:
                            </p>
                        </div>
                        
                        <div class="mt-4 space-y-3">
                            <div class="border-b border-gray-100 pb-2 stagger-item">
                                <p class="font-medium">Professional Identity</p>
                                <p class="text-sm">Developing ethical habits that will serve you throughout your career</p>
                            </div>
                            
                            <div class="border-b border-gray-100 pb-2 stagger-item">
                                <p class="font-medium">Collegial Environment</p>
                                <p class="text-sm">Creating a respectful community that fosters learning and growth</p>
                            </div>
                            
                            <div class="border-b border-gray-100 pb-2 stagger-item">
                                <p class="font-medium">Public Trust</p>
                                <p class="text-sm">Building the foundation for trust in the legal profession</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Prohibited Conduct - Moved to right column -->
                <div class="section-card slide-in-up">
                    <div class="card-header">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 12px;"><path d="M13,14H11V10H13M13,18H11V16H13M1,21H23L12,2L1,21Z"/></svg>
                        <h3>Prohibited Conduct</h3>
                    </div>
                    
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="rule-item stagger-item">
                                <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg> Academic Dishonesty</h4>
                                <p>
                                    Plagiarism, cheating on exams, falsification of records, unauthorized collaboration on assignments, and other forms of academic fraud.
                                </p>
                            </div>
                            
                            <div class="rule-item stagger-item">
                                <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg> Harassment & Discrimination</h4>
                                <p>
                                    Any form of discriminatory behavior, harassment, intimidation, bullying, or abusive conduct directed at any member of the college community.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Animation effects when scrolling
    document.addEventListener('DOMContentLoaded', function() {
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
        document.querySelectorAll('.slide-in-up, .slide-in-right, .fade-in, .section-card').forEach(element => {
            observer.observe(element);
        });

        // Add hover effects for items
        document.querySelectorAll('.rule-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });

        // Add hover effects for sidebar items
        document.querySelectorAll('.sidebar-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
                this.querySelector('.sidebar-icon').style.backgroundColor = 'rgba(30, 41, 59, 0.2)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.querySelector('.sidebar-icon').style.backgroundColor = '';
            });
        });
    });
</script>

<?php
// Include footer
include("../includes/footer.php");
?> 
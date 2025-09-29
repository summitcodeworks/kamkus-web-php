<?php
// Page specific variables
$page_title = "Affiliation & Recognition - Kamkus College of Law";
$page_description = "Our certifications and partnerships that validate our commitment to quality education";
$current_page = "about";
$default_title = "Kamkus College of Law";
$default_description = "Premier Law College in Ghaziabad";
require_once '../../includes/config.php';
$subpage = "affiliation";

// Include header
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/about.css">
<style>
    /* Styles for the affiliation page */
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
        padding-top: 24px;
        padding-bottom: 24px;
    }
    
    .breadcrumb a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.2s;
    }
    
    .breadcrumb a:hover {
        color: #1E293B;
    }
    
    .breadcrumb-separator {
        color: #94a3b8;
        margin: 0 4px;
    }
    
    .breadcrumb-current {
        color: #475569;
        font-weight: 500;
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
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 32px;
        margin-bottom: 48px;
    }
    
    @media (max-width: 768px) {
        .main-content {
            grid-template-columns: 1fr;
        }
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
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        padding: 24px 32px;
    }
    
    .section-header {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
    }
    
    .section-icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: #1E293B;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }
    
    .gradient-heading {
        font-size: 24px;
        font-weight: bold;
        background: linear-gradient(to right, #1E293B, #364559);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .certificates-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }
    
    @media (max-width: 768px) {
        .certificates-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .certificate-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .certificate-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .certificate-header {
        background: #1E293B;
        color: white;
        padding: 16px 20px;
        display: flex;
        align-items: center;
    }
    
    .certificate-content {
        padding: 24px;
        position: relative;
    }
    
    .certificate-document-box {
        background-color: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 24px;
        margin-bottom: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .document-icon-container {
        background-color: #f1f5f9;
        width: 64px;
        height: 64px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px 0;
    }
    
    .view-certificate-text {
        color: #4b5563;
        font-size: 14px;
        font-weight: 500;
        margin-top: 8px;
        display: flex;
        align-items: center;
    }
    
    .certificate-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 12px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 4px;
        letter-spacing: 0.5px;
    }
    
    .official-badge {
        background-color: #f1f5f9;
        color: #475569;
    }
    
    .verified-badge {
        background-color: #f1f5f9;
        color: #475569;
    }
    
    .certificate-btn-container {
        display: flex;
        justify-content: flex-start;
    }
    
    .download-btn {
        display: inline-flex;
        align-items: center;
        color: white;
        font-weight: 500;
        padding: 10px 16px;
        border-radius: 8px;
        background: #1E293B;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    
    .download-btn:hover {
        background: #161e29;
        transform: translateY(-2px);
    }
    
    .download-btn:active {
        transform: scale(0.97);
    }
    
    .benefits-section {
        background: linear-gradient(to right, #1E293B, #364559);
        border-radius: 12px;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        padding: 24px 32px;
        color: white;
    }
    
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 20px;
    }
    
    @media (max-width: 768px) {
        .benefits-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .benefit-item {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(4px);
        border-radius: 8px;
        padding: 16px;
        transition: transform 0.3s ease;
    }
    
    .benefit-item:hover {
        transform: translateY(-5px) scale(1.02);
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
    
    .program-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 8px;
        margin-bottom: 8px;
        border-bottom: 1px solid #f3f4f6;
        transition: transform 0.3s ease;
    }
    
    .program-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    
    .program-item:hover {
        transform: translateX(5px);
    }
    
    .faq-item {
        padding: 20px;
        background: rgba(30, 41, 59, 0.05);
        border-radius: 8px;
        margin-bottom: 20px;
    }
    
    .faq-question {
        font-weight: 500;
        color: #1E293B;
        margin-bottom: 8px;
    }
    
    .document-link {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: inherit;
        transition: transform 0.3s ease;
    }
    
    .document-link:hover {
        transform: translateY(-3px);
    }
    
    .document-link:hover .document-icon-container {
        background-color: #e2e8f0;
    }
    
    /* Recognition Highlights Styles */
    .recognition-items {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .recognition-item {
        display: flex;
        align-items: center;
        gap: 16px;
    }
    
    .recognition-icon {
        width: 48px;
        height: 48px;
        background-color: #f1f5f9;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #1E293B;
        font-size: 18px;
    }
    
    .recognition-info {
        display: flex;
        flex-direction: column;
    }
    
    .recognition-title {
        font-weight: 600;
        font-size: 16px;
        color: #1E293B;
    }
    
    .recognition-subtitle {
        font-size: 14px;
        color: #64748b;
    }
</style>

<main>
    <div class="container">
        <div class="breadcrumb fade-in">
            <a href="<?php echo $base_url; ?>">Home</a>
            <span class="breadcrumb-separator">/</span>
            <a href="<?php echo $base_url; ?>about/">About</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">Affiliation & Recognition</span>
        </div>

        <section class="page-content">
            <div class="container">

                <!-- Hero section with image -->
                <div class="hero-section">
                    <div class="hero-overlay"></div>
                    <div class="hero-gradient"></div>
                    <img src="<?php echo $base_url; ?>src/assets/public/about/isonn.jpg" alt="Affiliation & Recognition - Kamkus College of Law" class="hero-image">
                    
                    <div class="hero-content">
                        <div class="badge-container">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="#FCD34D"><path d="M13,21L15.5,18.5L18.5,19.82L17.18,16.82L20.68,15L17.18,13.18L18.5,10.18L15.5,11.5L13,9L10.5,11.5L7.5,10.18L8.82,13.18L5.32,15L8.82,16.82L7.5,19.82L10.5,18.5L13,21M12,8A3,3 0 0,1 15,5A3,3 0 0,1 18,8A3,3 0 0,1 15,11A3,3 0 0,1 12,8Z"/></svg>
                            <p class="badge-text">Official Recognition</p>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-bold mb-2">Affiliation & Recognition</h1>
                        <p class="text-white/90 max-w-3xl text-lg">
                            Our certifications and partnerships that validate our commitment to quality education
                        </p>
                    </div>

                    <div class="status-badge">
                        <div class="icon-circle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z"/></svg>
                        </div>
                        <div class="text-white">
                            <p class="text-sm font-semibold">Status</p>
                            <p class="text-xs">Fully Accredited</p>
                        </div>
                    </div>
                </div>

                <div class="main-content">
                    <!-- Main content area -->
                    <div class="content-area">
                        <!-- Intro -->
                        <div class="section-card">
                            <div class="section-header">
                                <div class="section-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                                </div>
                                <h2 class="gradient-heading">Our Certifications</h2>
                            </div>
                            
                            <div class="prose">
                                <p>
                                    Kamkus College of Law is proud to be recognized by the following prestigious organizations, validating our commitment to providing quality legal education and maintaining the highest academic standards.
                                </p>
                            </div>
                        </div>

                        <!-- Certificates Grid -->
                        <div class="certificates-grid">
                            <!-- CCS University -->
                            <div class="certificate-card">
                                <div class="certificate-header">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M16 8C16 10.21 14.21 12 12 12C9.79 12 8 10.21 8 12C8 9.79 9.79 8 12 8C14.21 8 16 9.79 16 8ZM12 14C16.42 14 20 15.79 20 18V20H4V18C4 15.79 7.58 14 12 14Z"/></svg>
                                    <h3 class="text-lg font-medium">University Affiliation</h3>
                                </div>
                                
                                <div class="certificate-content">
                                    <h4 class="text-[#1E293B] font-semibold mb-4 text-lg">Chaudhary Charan Singh University</h4>
                                    
                                    <div class="certificate-document-box">
                                        <div class="certificate-badge official-badge">OFFICIAL</div>
                                        <a href="https://kamkus.org/assets/pdf/affilliation.pdf" target="_blank" rel="noopener noreferrer" class="document-link">
                                            <div class="document-icon-container">
                                                <i class="far fa-file-alt text-[#1E293B] text-4xl"></i>
                                            </div>
                                            <div class="view-certificate-text">
                                                View Certificate <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin-left: 4px;"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <p class="text-gray-700 mb-6">
                                        Kamkus College of Law is affiliated with Chaudhary Charan Singh University, Meerut, a prestigious institution established in 1965. This affiliation ensures that our programs meet high academic standards.
                                    </p>
                                    
<!--                                    <div class="certificate-btn-container">-->
<!--                                        <a href="https://kamkus.org/assets/pdf/affilliation.pdf" -->
<!--                                        target="_blank" -->
<!--                                        rel="noopener noreferrer"-->
<!--                                        class="download-btn">-->
<!--                                            <i class="fas fa-download mr-2"></i>-->
<!--                                            Download Certificate-->
<!--                                        </a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                            
                            <!-- BCI Approval -->
                            <div class="certificate-card">
                                <div class="certificate-header">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                    <h3 class="text-lg font-medium">Regulatory Approval</h3>
                                </div>
                                
                                <div class="certificate-content">
                                    <h4 class="text-[#1E293B] font-semibold mb-4 text-lg">Bar Council of India</h4>
                                    
                                    <div class="certificate-document-box">
                                        <div class="certificate-badge verified-badge">VERIFIED</div>
                                        <a href="https://kamkus.org/assets/pdf/bci.pdf" target="_blank" rel="noopener noreferrer" class="document-link">
                                            <div class="document-icon-container">
                                                <i class="far fa-file-alt text-[#1E293B] text-4xl"></i>
                                            </div>
                                            <div class="view-certificate-text">
                                                View Certificate <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin-left: 4px;"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <p class="text-gray-700 mb-6">
                                        Our law programs are approved by the Bar Council of India (BCI), the regulatory body for legal education and the legal profession in India, validating the quality of our curriculum.
                                    </p>
                                    
<!--                                    <div class="certificate-btn-container">-->
<!--                                        <a href="https://kamkus.org/assets/pdf/bci.pdf" -->
<!--                                        target="_blank" -->
<!--                                        rel="noopener noreferrer"-->
<!--                                        class="download-btn">-->
<!--                                            <i class="fas fa-download mr-2"></i>-->
<!--                                            Download Certificate-->
<!--                                        </a>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                        
                        <!-- Benefits of Accreditation -->
                        <div class="benefits-section">
                            <h3 class="text-xl font-semibold mb-5 flex items-center">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.46,13.97L5.82,21L12,17.27Z"/></svg> Benefits of Our Accreditations
                            </h3>
                            
                            <div class="benefits-grid">
                                <div class="benefit-item">
                                    <h4 class="font-semibold mb-2">Recognized Degrees</h4>
                                    <p class="text-sm">Degrees recognized throughout India and abroad for higher education and employment.</p>
                                </div>
                                
                                <div class="benefit-item">
                                    <h4 class="font-semibold mb-2">Quality Assurance</h4>
                                    <p class="text-sm">Regular audits and inspections ensure maintenance of high academic standards.</p>
                                </div>
                                
                                <div class="benefit-item">
                                    <h4 class="font-semibold mb-2">Legal Practice</h4>
                                    <p class="text-sm">Eligibility for graduates to enroll as advocates and practice law in India.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Key Recognition Benefits -->
                        <div class="sidebar-card">
                            <div class="sidebar-header">
                                <h3 class="font-bold text-lg">Recognition Highlights</h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="recognition-items">
                                    <div class="recognition-item">
                                        <div class="recognition-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                                        </div>
                                        <div class="recognition-info">
                                            <p class="recognition-title">CCS University</p>
                                            <p class="recognition-subtitle">Established 1965</p>
                                        </div>
                                    </div>
                                    
                                    <div class="recognition-item">
                                        <div class="recognition-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/></svg>
                                        </div>
                                        <div class="recognition-info">
                                            <p class="recognition-title">Bar Council of India</p>
                                            <p class="recognition-subtitle">Regulatory Approval</p>
                                        </div>
                                    </div>
                                    
                                    <div class="recognition-item">
                                        <div class="recognition-icon">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.7L16.2,16.2Z"/></svg>
                                        </div>
                                        <div class="recognition-info">
                                            <p class="recognition-title">Renewal Period</p>
                                            <p class="recognition-subtitle">5-year accreditation cycle</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Programs -->
                        <div class="sidebar-card">
                            <div class="sidebar-header">
                                <h3 class="font-bold text-lg">Approved Programs</h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="space-y-3">
                                    <?php
                                    $programs = [
                                        ['name' => 'LL.M. (2 Years)', 'year' => '2018'],
                                        ['name' => 'LL.B. (3 Years)', 'year' => '2007'],
                                        ['name' => 'B.A., LL.B. (5 Years)', 'year' => '2007'],
                                        ['name' => 'B.Com., LL.B. (5 Years)', 'year' => '2007']
                                    ];
                                    
                                    foreach($programs as $program) {
                                        echo '<div class="program-item">
                                            <p class="font-medium text-[#1E293B]">' . $program['name'] . '</p>
                                            <p class="text-xs text-gray-500">Approved ' . $program['year'] . '</p>
                                        </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ -->
                        <div class="sidebar-card">
                            <div class="sidebar-header">
                                <h3 class="font-bold text-lg">Common Questions</h3>
                            </div>
                            <div class="sidebar-content">
                                <div class="space-y-5">
                                    <?php
                                    $faqs = [
                                        [
                                            'question' => 'What is the benefit of BCI approval?',
                                            'answer' => 'BCI approval allows graduates to enroll as advocates and practice law in courts across India.'
                                        ],
                                        [
                                            'question' => 'Is university affiliation important?',
                                            'answer' => 'Yes, it ensures your degree is recognized for higher education and employment opportunities.'
                                        ]
                                    ];
                                    
                                    foreach($faqs as $faq) {
                                        echo '<div class="faq-item">
                                            <p class="faq-question">' . $faq['question'] . '</p>
                                            <p class="text-sm text-gray-600">' . $faq['answer'] . '</p>
                                        </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
    // Animation effects when scrolling
    document.addEventListener('DOMContentLoaded', function() {
        const animateElements = document.querySelectorAll('.section-card, .hero-section, .hero-content, .status-badge, .certificate-card, .benefits-section');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        animateElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(el);
        });

        // Add staggered animations for sidebar items
        const sidebarItems = document.querySelectorAll('.sidebar-item, .program-item, .faq-item, .benefit-item');
        sidebarItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = index % 2 === 0 ? 'translateX(-20px)' : 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            item.style.transitionDelay = `${0.1 + (index * 0.1)}s`;
            
            observer.observe(item);
        });
    });
</script>

<?php
// Include footer
include('../includes/footer.php');
?> 
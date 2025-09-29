<?php
$page_title = "Rules & Regulations - Kamkus College of Law";
$page_description = "Comprehensive rules and regulations for students at Kamkus College of Law including admission process, dress code, attendance requirements, and anti-ragging policy";
$current_page = "about";
require_once '../../includes/config.php';

include '../../includes/header.php';
?>

<style>
/* Custom styles for Rules & Regulations page */
/* Teaching & Learning Page Styles */
.teaching-learning-page {
    background: linear-gradient(to bottom, #f8fafc, #ffffff);
    padding-bottom: 4rem;
}

/* Hero Section */
.hero-section {
    position: relative;
    height: 60vh;
    min-height: 400px;
    overflow: hidden;
    border-radius: 1rem;
    margin: 2rem auto;
    max-width: 1200px;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(30, 41, 59, 0.3), rgba(30, 41, 59, 0.8));
    z-index: 1;
}

.hero-image {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-content {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    align-items: flex-end;
    padding: 3rem 0;
}

.hero-text {
    color: #ffffff;
    max-width: 600px;
}

.hero-text .badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    backdrop-filter: blur(4px);
    margin-bottom: 1rem;
}

.hero-text .badge i {
    color: #fcd34d;
}

.hero-text h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.hero-text p {
    font-size: 1.25rem;
    opacity: 0.9;
}

.stats-card {
    position: absolute;
    top: 2rem;
    right: 2rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    padding: 1rem;
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    color: #ffffff;
}

.stats-icon {
    width: 3rem;
    height: 3rem;
    background: rgba(30, 41, 59, 0.5);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stats-text h4 {
    font-size: 0.875rem;
    font-weight: 600;
}

.stats-text p {
    font-size: 0.75rem;
    opacity: 0.8;
}

/* Content Section */
.content-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
}

.content-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section {
        height: 50vh;
    }

    .hero-text h1 {
        font-size: 2rem;
    }

    .stats-card {
        position: static;
        margin-top: 1rem;
    }

    .content-grid {
        grid-template-columns: 1fr;
    }
}

/* Card Styles */
.content-card {
    background: #ffffff;
    border-radius: 0.75rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 2rem;
}

.card-header {
    background: linear-gradient(to right, #1E293B, #364559);
    color: #ffffff;
    padding: 1rem 1.5rem;
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
}

.card-header i {
    font-size: 20px !important;
    line-height: 1 !important;
}

.card-header h3 {
    font-size: 18px !important;
    font-weight: 500 !important;
    margin: 0 !important;
    line-height: 1.2 !important;
}

.card-content {
    padding: 1.5rem 2rem;
}

/* Feature List */
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

.feature-icon i {
    color: #1E293B !important;
    font-size: 20px !important;
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

/* Sidebar Styles */
.program-list,
.resource-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.program-list li,
.resource-list li {
    border-bottom: 1px solid #e2e8f0;
}

.program-list li:last-child,
.resource-list li:last-child {
    border-bottom: none;
}

.program-list a,
.resource-list a {
    display: flex;
    align-items: center;
    padding: 0.75rem 0;
    color: #1E293B;
    text-decoration: none;
    transition: all 0.3s ease;
}

.program-list a:hover,
.resource-list a:hover {
    color: #2563eb;
    transform: translateX(5px);
}

.program-list i,
.resource-list i {
    margin-right: 0.75rem;
    color: #64748b;
    transition: color 0.3s ease;
}

.program-list a:hover i,
.resource-list a:hover i {
    color: #2563eb;
}

/* Contact Card */
.contact-card .card-content {
    background: linear-gradient(135deg, #1E293B, #364559);
    color: white;
}

.contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
    padding: 0.75rem 1.5rem;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    text-decoration: none;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(4px);
}

.contact-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

/* Breadcrumb */
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

/* Rules-specific styles */
.rules-list {
    margin-top: 20px;
}

.rule-item {
    margin-bottom: 24px;
    padding: 20px;
    background: #F8FAFC;
    border: 1px solid rgba(251, 191, 36, 0.1);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.rule-item:hover {
    background: rgba(251, 191, 36, 0.08);
    border-color: rgba(251, 191, 36, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(251, 191, 36, 0.15);
}

.rule-item h4 {
    color: #1E293B;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: 16px;
}

.rule-item p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
}

/* Documents list styles */
.document-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.document-list li {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 12px;
    padding: 16px 20px;
    background: #F8FAFC;
    border: 1px solid rgba(251, 191, 36, 0.1);
    border-radius: 12px;
    transition: all 0.3s ease;
    position: relative;
}

.document-list li:hover {
    background: rgba(251, 191, 36, 0.08);
    border-color: rgba(251, 191, 36, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(251, 191, 36, 0.15);
}

.document-list li:before {
    content: "📄";
    font-size: 16px;
    margin-right: 12px;
    flex-shrink: 0;
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

/* Download Link Styling */
.download-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 12px;
    padding: 10px 16px;
    background: linear-gradient(135deg, #1E293B, #374151);
    color: white !important;
    text-decoration: none;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(30, 41, 59, 0.2);
}

.download-link:hover {
    background: linear-gradient(135deg, #374151, #4B5563);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(30, 41, 59, 0.3);
    color: #fcd34d !important;
}

.download-link i {
    font-size: 14px;
}

/* Additional Responsive Styles */
@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
    }

    .sidebar {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }
}

@media (max-width: 640px) {
    .hero-section {
        margin: 1rem;
        height: 40vh;
    }

    .hero-text h1 {
        font-size: 1.75rem;
    }

    .hero-text p {
        font-size: 1rem;
    }

    .stats-card {
        position: static;
        margin: 1rem 0;
    }

    .content-section {
        padding: 1rem;
    }

    .feature-list {
        grid-template-columns: 1fr;
    }

    .sidebar {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- Main Page Content -->
<main class="teaching-learning-page">
    <!-- Breadcrumb -->
    <div class="content-section">
        <div class="container" style="max-width: 1200px;">
            <div class="breadcrumb">
                <a href="<?php echo $base_url; ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 5px; vertical-align: middle;"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    Home
                </a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <a href="<?php echo $base_url; ?>about/">About</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>Rules & Regulations</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/about/slide1f.jpg" 
             alt="Rules & Regulations - Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                        <span>Guidelines & Policies</span>
                    </div>
                    <h1>Rules & Regulations</h1>
                    <p>Comprehensive guidelines that govern our academic community and foster a conducive learning environment at Kamkus College of Law</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Standards</h4>
                        <p>Academic Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Main Content -->
    <div class="content-section">
        <div class="container">
            <div class="content-grid">

                <!-- Main Content Area -->
                <div class="main-content">
                    <!-- General Rules for Students -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                            <h3>General Rules for Students</h3>
                        </div>
                        <div class="card-content">
                            <p>These comprehensive guidelines are designed to maintain academic excellence and ensure a conducive learning environment for all students at Kamkus College of Law.</p>
                        </div>
                    </div>

                    <!-- Admissions Process -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M1,10V13H4V10H1M6,10V13H9V16H12V13H15V10H12V7H9V10H6Z"/></svg>
                            <h3>Admissions Process</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Application Submission</h4>
                                        <p>Applications for admission must be submitted in person. The duly completed application form, along with the fees, should be presented to the college office.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.7L16.2,16.2Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Provisional Admission</h4>
                                        <p>Please note that, all admissions are provisional and subject to confirmation by the Principal and Chaudhary Charan Singh University, Meerut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Migration Certificate -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,21L15.5,18.5L18.5,19.82L17.18,16.82L20.68,15L17.18,13.18L18.5,10.18L15.5,11.5L13,9L10.5,11.5L7.5,10.18L8.82,13.18L5.32,15L8.82,16.82L7.5,19.82L10.5,18.5L13,21M12,8A3,3 0 0,1 15,5A3,3 0 0,1 18,8A3,3 0 0,1 15,11A3,3 0 0,1 12,8Z"/></svg>
                            <h3>Migration Certificate</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Certificate Submission</h4>
                                        <p>The Migration Certificate is not required to be submitted with the first-semester exam form. However, students are responsible for personally submitting this document to Chaudhary Charan Singh University, Meerut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Dress Code -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A3,3 0 0,1 15,5A3,3 0 0,1 12,8A3,3 0 0,1 9,5A3,3 0 0,1 12,2M21,9V7L15,1H9L3,7V9L1,21L23,21L21,9Z"/></svg>
                            <h3>Student Dress Code</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A3,3 0 0,1 15,5A3,3 0 0,1 12,8A3,3 0 0,1 9,5A3,3 0 0,1 12,2M21,9V7L15,1H9L3,7V9L1,21L23,21L21,9Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Professional Attire</h4>
                                        <p>The college maintains a professional dress code for students. The prescribed attire is a white shirt and black trousers for men. Women may opt for a white shirt, black salwar, and black dupatta.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,13H11V7H13M13,17H11V15H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Mandatory Compliance</h4>
                                        <p>This dress code is mandatory on all working days.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Attendance Requirements -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H18V1H16V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19M10.56,15.54L16,10.1L14.59,8.69L10.56,12.72L8.82,11L7.4,12.41L10.56,15.54Z"/></svg>
                            <h3>Attendance Requirements</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.5,4A1.5,1.5 0 0,1 20,5.5A1.5,1.5 0 0,1 18.5,7A1.5,1.5 0 0,1 17,5.5A1.5,1.5 0 0,1 18.5,4M5.5,17A1.5,1.5 0 0,1 7,18.5A1.5,1.5 0 0,1 5.5,20A1.5,1.5 0 0,1 4,18.5A1.5,1.5 0 0,1 5.5,17M19.07,4.93L4.93,19.07L3.52,17.66L17.66,3.52L19.07,4.93Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>75% Minimum Attendance</h4>
                                        <p>As per Bar Council of India regulations, a minimum attendance of 75% is mandatory for all students. Failure to meet this requirement will result in ineligibility to appear for university examinations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Anti-Ragging Policy -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/></svg>
                            <h3>Anti-Ragging Policy</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2C17.5,2 22,6.5 22,12C22,17.5 17.5,22 12,22C6.5,22 2,17.5 2,12C2,6.5 6.5,2 12,2M4,12C4,16.4 7.6,20 12,20C13.9,20 15.7,19.3 17.1,18.1L5.9,6.9C4.7,8.3 4,10.1 4,12M20,12C20,7.6 16.4,4 12,4C10.1,4 8.3,4.7 6.9,5.9L18.1,17.1C19.3,15.7 20,13.9 20,12Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Zero Tolerance Policy</h4>
                                        <p>Kamkus College of Law maintains a zero-tolerance policy towards ragging. Any student found guilty of participating in ragging activities will face disciplinary action, which may include criminal charges.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prevention of Sexual Harassment -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,14H11V10H13M13,18H11V16H13M1,21H23L12,2L1,21Z"/></svg>
                            <h3>Prevention of Sexual Harassment</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Safe Learning Environment</h4>
                                        <p>The college is firmly committed to providing a safe and respectful learning environment. Sexual harassment is strictly prohibited.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22H9Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Complaints Redressal</h4>
                                        <p>Should any student experience harassment, they are encouraged to file a formal complaint with the college's Complaints Redressal Committee.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inclusivity Statement -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"/></svg>
                            <h3>Inclusivity Statement</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,14H11V10H13M13,18H11V16H13M1,21H23L12,2L1,21Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Embracing Diversity</h4>
                                        <p>Kamkus College of Law fosters an inclusive environment that embraces diversity. We categorically reject discrimination based on gender, caste, religion, or place of birth.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Official Documents & Regulations -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Official Documents & Regulations</h3>
                        </div>
                        <div class="card-content">
                            <p>Download official regulatory documents and guidelines:</p>
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Bar Council of India Rules</h4>
                                        <p>Complete BCI regulations and guidelines for legal education and practice standards.</p>
                                        <a href="https://kamkus.org/assets/pdf/bci-rules.pdf" target="_blank" class="download-link">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"/></svg>
                                            Download BCI Rules PDF
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>CCS University Rules</h4>
                                        <p>Chaudhary Charan Singh University academic regulations and examination guidelines.</p>
                                        <a href="https://kamkus.org/assets/pdf/CCS-UNIVERSITY-RULES.pdf" target="_blank" class="download-link">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"/></svg>
                                            Download CCS University Rules PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Documents to be submitted -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Documents to be Submitted</h3>
                        </div>
                        <div class="card-content">
                            <p>All applicants must provide the following documents during the admission process:</p>
                            <ul class="document-list">
                                <li>Secondary School Leaving Certificate and Marksheet (or equivalent)</li>
                                <li>Higher Secondary School Certificate and Marksheet (10+2)</li>
                                <li>Undergraduate Degree Marksheets (if applicable)</li>
                                <li>Law Degree Marksheets (if applicable)</li>
                                <li>Caste Certificate (SC/ST/OBC) (if applicable)</li>
                                <li>Domicile Certificate for Uttar Pradesh (if applicable)</li>
                                <li>Migration Certificate (if transferring from another university/board)</li>
                                <li>Five Recent Passport-Sized Photographs</li>
                                <li>Government-issued photo Identification (e.g., Aadhar Card)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Educational Programs -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                            <h3>Educational Programs</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Explore all legal education programs offered at Kamkus College
                            </p>
                            
                            <div class="program-grid">
                                <a href="<?php echo $base_url; ?>academics/llm.php" class="program-link">
                                    <div class="program-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,2A3,3 0 0,1 20,5V19A3,3 0 0,1 17,22H7A3,3 0 0,1 4,19V9H6V19A1,1 0 0,0 7,20H17A1,1 0 0,0 18,19V5A1,1 0 0,0 17,4H7A1,1 0 0,0 6,5V7H4V5A3,3 0 0,1 7,2H17Z"/></svg>
                                    </div>
                                    <div class="program-text">
                                        <span>LL.M.</span>
                                        <span class="program-duration">Master's Program • 2 Years</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>academics/llb.php" class="program-link">
                                    <div class="program-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                    </div>
                                    <div class="program-text">
                                        <span>LL.B.</span>
                                        <span class="program-duration">Bachelor's Program • 3 Years</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>academics/ba-llb.php" class="program-link">
                                    <div class="program-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15A1,1 0 0,1 22,16H21A7,7 0 0,1 14,23H10A7,7 0 0,1 3,16H2A1,1 0 0,1 1,15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M12,4.5A0.5,0.5 0 0,0 11.5,4A0.5,0.5 0 0,0 12,3.5A0.5,0.5 0 0,0 12.5,4A0.5,0.5 0 0,0 12,4.5Z"/></svg>
                                    </div>
                                    <div class="program-text">
                                        <span>B.A. LL.B.</span>
                                        <span class="program-duration">Integrated Program • 5 Years</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>academics/bcom-llb.php" class="program-link">
                                    <div class="program-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,11.78L20.24,4.45L21.97,5.45L16.74,14.5L10.23,10.75L5.46,19H22V21H2V3H4V17.54L9.5,8L16,11.78Z"/></svg>
                                    </div>
                                    <div class="program-text">
                                        <span>B.Com. LL.B.</span>
                                        <span class="program-duration">Integrated Program • 5 Years</span>
                                    </div>
                                </a>
                            </div>
                            
                            <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
                                <a href="<?php echo $base_url; ?>academics/academics.php" 
                                   style="display: inline-flex; align-items: center; gap: 8px; color: #1E293B; text-decoration: none; font-size: 14px; font-weight: 500; transition: color 0.3s ease;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle;"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
                                    <span>View All Academic Programs</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="content-card contact-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/></svg>
                            <h3>Contact Us</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 1rem;">For questions about rules and regulations or admission process, please contact us:</p>
                            <p style="margin-bottom: 0.5rem;"><strong>Phone:</strong> +91 93100 06444, +91 87379 06444</p>
                            <p style="margin-bottom: 1rem;"><strong>Email:</strong> kamkus.law@gmail.com</p>
                            <a href="<?php echo $base_url; ?>contact.php" class="contact-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                                Get in Touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
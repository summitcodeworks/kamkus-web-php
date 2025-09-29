<?php
$page_title = "B.Com. LL.B. Programme - Kamkus College of Law";
$page_description = "A five-year integrated program for aspiring legal professionals combining commerce and law at Kamkus College of Law";
$current_page = "academics";
require_once '../../includes/config.php';

include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/academics.css">
<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for B.Com. LL.B Programme page */

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

/* Fix for card headers - vertical center alignment */
.card-header {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding: 16px 20px !important;
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

/* Fix for feature icons to make them round */
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

.program-link.active {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
    border-color: #f59e0b;
    box-shadow: 0 2px 8px rgba(251, 191, 36, 0.3);
}

.program-link.active::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: #dc2626;
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

.program-link.active .program-icon {
    background: rgba(255, 255, 255, 0.2) !important;
}

.program-link.active .program-icon i {
    color: white !important;
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

/* Program grid layout */
.program-grid {
    display: grid;
    gap: 8px;
    margin-top: 16px;
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
                <a href="<?php echo $base_url; ?>academics/academics.php">Academics</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>B.Com. LL.B. Programme</span>
            </div>
        </div>
    </div>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/academics/bcomllb.jpg" 
             alt="B.Com. LL.B. Programme at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,11.78L20.24,4.45L21.97,5.45L16.74,14.5L10.23,10.75L5.46,19H22V21H2V3H4V17.54L9.5,8L16,11.78Z"/></svg>
                        <span>Integrated Commerce & Law</span>
                    </div>
                    <h1>B.Com. LL.B. Programme</h1>
                    <p>A five-year integrated program for aspiring legal professionals combining commerce and law</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Program Duration</h4>
                        <p>5 Years</p>
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
            <!-- Admission Criteria -->
            <div class="content-card">
                <div class="card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,11.78L20.24,4.45L21.97,5.45L16.74,14.5L10.23,10.75L5.46,19H22V21H2V3H4V17.54L9.5,8L16,11.78Z"/></svg>
                    <h3>Admission Criteria</h3>
                </div>
                <div class="card-content">
                    <p>
                        The B.Com. LL.B. programme at Kamkus College of Law is a five-year integrated course that combines commerce education with legal studies. Our admission process ensures that we select dedicated students who are committed to excellence in corporate legal education.
                    </p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Educational Qualification</h4>
                                <p>Applicants must have passed their 10+2 examination or equivalent from a recognized board.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Merit Basis</h4>
                                <p>Admission to the B.Com. LL.B. program is determined on Merit Basis conducted by CCS University, Meerut.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.5,4A1.5,1.5 0 0,1 20,5.5A1.5,1.5 0 0,1 18.5,7A1.5,1.5 0 0,1 17,5.5A1.5,1.5 0 0,1 18.5,4M5.5,17A1.5,1.5 0 0,1 7,18.5A1.5,1.5 0 0,1 5.5,20A1.5,1.5 0 0,1 4,18.5A1.5,1.5 0 0,1 5.5,17M19.07,4.93L4.93,19.07L3.52,17.66L17.66,3.52L19.07,4.93Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Minimum Marks (General/OBC)</h4>
                                <p>Minimum 45% aggregate marks in 10+2 or equivalent examination & for Candidates of Uttar Pradesh OBC Candidates minimum 42% marks required..</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.5,4A1.5,1.5 0 0,1 20,5.5A1.5,1.5 0 0,1 18.5,7A1.5,1.5 0 0,1 17,5.5A1.5,1.5 0 0,1 18.5,4M5.5,17A1.5,1.5 0 0,1 7,18.5A1.5,1.5 0 0,1 5.5,20A1.5,1.5 0 0,1 4,18.5A1.5,1.5 0 0,1 5.5,17M19.07,4.93L4.93,19.07L3.52,17.66L17.66,3.52L19.07,4.93Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Minimum Marks (SC/ST)</h4>
                                <p>For Residence of UP Minimum 40% aggregate marks in 10+2 or equivalent examination.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5,15H13L16.5,19H14.5L11,15H6.5C6.22,15 6,14.78 6,14.5V13.5C6,13.22 6.22,13 6.5,13H10.5C12.43,13 14,11.43 14,9.5S12.43,6 10.5,6H6.5C6.22,6 6,5.78 6,5.5V4.5C6,4.22 6.22,4 6.5,4H17.5C17.78,4 18,4.22 18,4.5V5.5C18,5.78 17.78,6 17.5,6H12.5C12.78,6 13,6.22 13,6.5V8.5C13,8.78 12.78,9 12.5,9H10.5C11.33,9 12,9.67 12,10.5S11.33,12 10.5,12H6.5C6.22,12 6,11.78 6,11.5V10.5C6,10.22 6.22,10 6.5,10H10.5"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Annual Fee</h4>
                                <p>The annual tuition fee for the B.Com. LL.B. program for the 2025-26 session is ₹37,900.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program Highlights -->
            <div class="content-card">
                <div class="card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                    <h3>Program Highlights</h3>
                </div>
                <div class="card-content">
                    <p>
                        The integrated B.Com. LL.B. program offers several advantages for aspiring corporate legal professionals, providing a comprehensive foundation in both commerce and legal education.
                    </p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,16L19.36,10.27L21,9L12,2L3,9L4.63,10.27M12,19.54L4.62,13.81L3,15.08L12,22.08L21,15.08L19.37,13.81M12,13L19.36,7.27L21,6L12,-1L3,6L4.63,7.27"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Integrated Learning</h4>
                                <p>Combines commerce subjects with legal education, providing a strong foundation for corporate law</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.7L16.2,16.2Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Time Efficiency</h4>
                                <p>Complete both degrees in 5 years instead of 6 years if done separately</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M2.81,14.12L5.64,11.29L8.17,10.79C11.39,6.41 17.55,4.22 19.78,4.22C19.78,6.45 17.59,12.61 13.21,15.83L12.71,18.36L9.88,21.19C9.29,21.78 8.28,21.85 7.59,21.17L2.83,16.41C2.15,15.72 2.22,14.71 2.81,14.12M7.68,17.68L9.26,16.1L10.56,16.32L9.38,17.5C8.71,18.17 7.73,18.2 7.06,17.53C6.39,16.86 6.42,15.88 7.09,15.21L8.27,14.03L8.49,15.33L6.91,16.91C6.65,17.17 6.65,17.61 6.91,17.87C7.17,18.13 7.61,18.13 7.87,17.87L7.68,17.68M10.9,11.91C11.36,11.91 11.73,11.54 11.73,11.08C11.73,10.62 11.36,10.25 10.9,10.25C10.44,10.25 10.07,10.62 10.07,11.08C10.07,11.54 10.44,11.91 10.9,11.91Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Early Career Start</h4>
                                <p>Enter the corporate legal profession one year earlier than traditional route</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5,20.5V11.5L12,6.5L17.5,11.5V20.5H14.5V17.5H9.5V20.5H6.5Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Corporate Law Focus</h4>
                                <p>Develop specialized skills in business law, corporate governance, and commercial litigation</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Enhanced Career Opportunities</h4>
                                <p>Access to corporate law firms, MNCs, banks, and financial institutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program Facts -->
            <div class="content-card">
                <div class="card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                    <h3>Program Facts</h3>
                </div>
                <div class="card-content">
                    <p>
                        Key information about the B.Com. LL.B. programme at Kamkus College of Law, including duration, structure, and fee details.
                    </p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Program Duration</h4>
                                <p>5 Years (10 Semesters)</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Affiliated University</h4>
                                <p>CCS University, Meerut</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5,15H13L16.5,19H14.5L11,15H6.5C6.22,15 6,14.78 6,14.5V13.5C6,13.22 6.22,13 6.5,13H10.5C12.43,13 14,11.43 14,9.5S12.43,6 10.5,6H6.5C6.22,6 6,5.78 6,5.5V4.5C6,4.22 6.22,4 6.5,4H17.5C17.78,4 18,4.22 18,4.5V5.5C18,5.78 17.78,6 17.5,6H12.5C12.78,6 13,6.22 13,6.5V8.5C13,8.78 12.78,9 12.5,9H10.5C11.33,9 12,9.67 12,10.5S11.33,12 10.5,12H6.5C6.22,12 6,11.78 6,11.5V10.5C6,10.22 6.22,10 6.5,10H10.5"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Annual Fee (2025-26)</h4>
                                <p>₹37,900 per year</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,21L15.5,18.5L18.5,19.82L17.18,16.82L20.68,15L17.18,13.18L18.5,10.18L15.5,11.5L13,9L10.5,11.5L7.5,10.18L8.82,13.18L5.32,15L8.82,16.82L7.5,19.82L10.5,18.5L13,21M12,8A3,3 0 0,1 15,5A3,3 0 0,1 18,8A3,3 0 0,1 15,11A3,3 0 0,1 12,8Z"/></svg>
                            </div>
                            <div class="feature-text">
                                <h4>Degree Awarded</h4>
                                <p>Bachelor of Commerce, Bachelor of Laws (B.Com. LL.B.)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                
                <!-- Sidebar -->
                <div class="sidebar">
            <!-- Other Programs -->
            <div class="content-card">
                <div class="card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/></svg>
                    <h3>Other Programs</h3>
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
                        
                        <a href="<?php echo $base_url; ?>academics/bcom-llb.php" class="program-link active">
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

            <!-- Academic Resources -->
            <div class="content-card">
                <div class="card-header">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,3H7A2,2 0 0,0 5,5V21L12,18L19,21V5C19,3.89 18.1,3 17,3Z"/></svg>
                    <h3>Academic Resources</h3>
                </div>
                <div class="card-content">
                    <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                        Quick access to essential B.Com. LL.B. program resources and information
                    </p>
                    
                    <div class="resource-grid">
                        <a href="<?php echo $base_url; ?>academics/bcom-llb-syllabus.php" class="resource-link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z"/></svg>
                            <span>Course Syllabus</span>
                        </a>
                        
                        <a href="<?php echo $base_url; ?>academics/teaching-learning.php" class="resource-link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,2H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,2H5C3.9,2 3,2.9 3,4V18C3,19.1 3.9,20 5,20H19C20.1,20 21,19.1 21,18V4C21,2.9 20.1,2 19,2M12,3C12.55,3 13,3.45 13,4C13,4.55 12.55,5 12,5C11.45,5 11,4.55 11,4C11,3.45 11.45,3 12,3Z"/></svg>
                            <span>Teaching Methods</span>
                        </a>
                        
                        <a href="<?php echo $base_url; ?>academics/research.php" class="resource-link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9.5,8A1.5,1.5 0 0,0 8,9.5A1.5,1.5 0 0,0 9.5,11A1.5,1.5 0 0,0 11,9.5A1.5,1.5 0 0,0 9.5,8M11.5,12A2.5,2.5 0 0,1 9,9.5A2.5,2.5 0 0,1 11.5,7A2.5,2.5 0 0,1 14,9.5A2.5,2.5 0 0,1 11.5,12M6,10A1,1 0 0,0 5,11A1,1 0 0,0 6,12A1,1 0 0,0 7,11A1,1 0 0,0 6,10M17,10A1,1 0 0,0 16,11A1,1 0 0,0 17,12A1,1 0 0,0 18,11A1,1 0 0,0 17,10M12,2A1,1 0 0,1 13,3A1,1 0 0,1 12,4A1,1 0 0,1 11,3A1,1 0 0,1 12,2M12,7.5A2,2 0 0,0 10,9.5A2,2 0 0,0 12,11.5A2,2 0 0,0 14,9.5A2,2 0 0,0 12,7.5M12,15A6,6 0 0,1 18,21H6A6,6 0 0,1 12,15Z"/></svg>
                            <span>Research Programs</span>
                        </a>
                        
                        <a href="<?php echo $base_url; ?>contact.php" class="resource-link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,18H13V16H11V18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,6A4,4 0 0,0 8,10H10A2,2 0 0,1 12,8A2,2 0 0,1 14,10C14,12 11,11.75 11,15H13C13,12.75 16,12.5 16,10A4,4 0 0,0 12,6Z"/></svg>
                            <span>Admission Help</span>
                        </a>
                        
                        <a href="<?php echo $base_url; ?>academics/academics.php" class="resource-link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                            <span>All Programs</span>
                        </a>
                        
                        <a href="#" class="resource-link" onclick="window.print(); return false;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"/></svg>
                            <span>Download Info</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="content-card" style="background: linear-gradient(135deg, #1E293B, #364559);">
                <div class="card-header" style="background: transparent;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                    <h3 style="color: white;">Admission Inquiry</h3>
                </div>
                <div class="card-content" style="color: white;">
                    <p style="color: rgba(255, 255, 255, 0.9);">
                        Interested in joining our B.Com. LL.B. program? Contact us for detailed information about admission process, eligibility criteria, and more.
                    </p>
                    
                    <div class="mt-4">
                        <a href="<?php echo $base_url; ?>contact.php" 
                           style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                            Submit Inquiry
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
<?php
$page_title = "Website Committee - Kamkus College of Law";
$page_description = "Learn about the Website Committee at Kamkus College of Law, their initiatives, digital transformation efforts, and commitment to maintaining modern digital infrastructure.";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Website Committee page */

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

/* Committee-specific styling - Website theme */
.initiatives-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 16px;
}

.initiative-item {
    padding: 20px;
    background: rgba(59, 130, 246, 0.05);
    border: 1px solid rgba(59, 130, 246, 0.15);
    border-radius: 12px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.initiative-item:hover {
    background: rgba(59, 130, 246, 0.08);
    border-color: rgba(59, 130, 246, 0.25);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
}

.initiative-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}

.initiative-icon {
    width: 40px;
    height: 40px;
    background: #3b82f6;
    color: white;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}

.initiative-item h4 {
    color: #1E293B;
    margin: 0;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.3;
}

.initiative-item p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
    flex-grow: 1;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.feature-box {
    background: rgba(59, 130, 246, 0.05);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid rgba(59, 130, 246, 0.2);
}

.feature-box h4 {
    color: #1E293B;
    margin-bottom: 12px;
    font-weight: 600;
}

.feature-box ul {
    list-style: none;
    padding: 0;
}

.feature-box li {
    margin-bottom: 8px;
    padding-left: 20px;
    position: relative;
}

.feature-box li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #3b82f6;
    font-weight: bold;
}

.vision-mission .section {
    margin-bottom: 24px;
}

.vision-mission h4 {
    color: #1E293B;
    margin-bottom: 12px;
    font-weight: 600;
}

.member-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #e2e8f0;
}

.member-item:last-child {
    border-bottom: none;
}

.member-name {
    font-weight: 600;
    color: #1E293B;
}

.member-role {
    color: #64748b;
    font-size: 14px;
}

.event-item {
    margin-bottom: 16px;
    padding: 12px;
    background: rgba(59, 130, 246, 0.05);
    border-radius: 8px;
}

.event-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #3b82f6;
    font-size: 14px;
    margin-bottom: 8px;
}

.event-item h4 {
    color: #1E293B;
    margin-bottom: 4px;
    font-weight: 600;
}

.achievement-item {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
    padding: 12px;
    background: rgba(59, 130, 246, 0.05);
    border-radius: 8px;
}

.achievement-icon {
    width: 40px;
    height: 40px;
    background: #3b82f6;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.achievement-icon i {
    color: white;
    font-size: 18px;
}

.achievement-text h4 {
    color: #1E293B;
    margin-bottom: 4px;
    font-weight: 600;
}

.achievement-text p {
    color: #64748b;
    font-size: 14px;
    margin: 0;
}

.committee-list {
    list-style: none;
    padding: 0;
}

.committee-list li {
    margin-bottom: 8px;
}

.committee-list a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: linear-gradient(135deg, #f8fafc, #ffffff);
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    text-decoration: none;
    color: #1E293B;
    font-weight: 500;
    transition: all 0.3s ease;
}

.committee-list a:hover {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
}

.committee-list a i {
    width: 20px;
    text-align: center;
}

/* Sidebar-specific styling */
.responsibility-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.responsibility-item {
    display: flex;
    gap: 12px;
    margin-bottom: 16px;
    padding: 12px;
    background: rgba(59, 130, 246, 0.05);
    border-radius: 8px;
    border-left: 3px solid #3b82f6;
}

.responsibility-number {
    width: 24px;
    height: 24px;
    background: #3b82f6;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 12px;
    flex-shrink: 0;
    margin-top: 2px;
}

.responsibility-item p {
    margin: 0;
    font-size: 13px;
    line-height: 1.5;
    color: #64748b;
}

.key-areas-compact {
    display: grid;
    gap: 12px;
}

.key-area-compact {
    background: rgba(59, 130, 246, 0.05);
    border: 1px solid rgba(59, 130, 246, 0.1);
    border-radius: 8px;
    padding: 12px;
    transition: all 0.3s ease;
}

.key-area-compact:hover {
    background: rgba(59, 130, 246, 0.08);
    border-color: rgba(59, 130, 246, 0.2);
}

.key-area-header {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
}

.key-area-icon {
    width: 28px;
    height: 28px;
    background: #3b82f6;
    color: white;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
}

.key-area-compact h4 {
    font-size: 14px;
    font-weight: 600;
    color: #1E293B;
    margin: 0;
}

.key-area-items {
    list-style: none;
    padding: 0;
    margin: 0;
}

.key-area-items li {
    font-size: 12px;
    color: #64748b;
    margin-bottom: 4px;
    padding-left: 16px;
    position: relative;
}

.key-area-items li:before {
    content: '•';
    position: absolute;
    left: 0;
    color: #3b82f6;
    font-weight: bold;
}

.key-area-items li:last-child {
    margin-bottom: 0;
}

/* Main content focus areas styling */
.focus-areas-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 24px;
    margin-top: 20px;
}

.focus-area-card {
    background: rgba(59, 130, 246, 0.05);
    border: 1px solid rgba(59, 130, 246, 0.15);
    border-radius: 12px;
    padding: 24px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.focus-area-card:hover {
    background: rgba(59, 130, 246, 0.08);
    border-color: rgba(59, 130, 246, 0.25);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
}

.focus-area-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 16px;
}

.focus-area-icon {
    width: 48px;
    height: 48px;
    background: #3b82f6;
    color: white;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    flex-shrink: 0;
}

.focus-area-card h4 {
    color: #1E293B;
    margin: 0;
    font-weight: 600;
    font-size: 18px;
    line-height: 1.3;
}

.focus-area-list {
    list-style: none;
    padding: 0;
    margin: 0;
    flex-grow: 1;
}

.focus-area-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    padding: 8px 0;
    color: #64748b;
    font-size: 14px;
    line-height: 1.5;
}

.focus-area-list li:before {
    content: '';
    width: 6px;
    height: 6px;
    background: #3b82f6;
    border-radius: 50%;
    flex-shrink: 0;
}

.focus-area-list li:last-child {
    margin-bottom: 0;
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
                <a href="<?php echo $base_url; ?>committees/committees.php">Committees</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>Website Committee</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/examination.jpg" 
             alt="Website Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                        <span>Digital Innovation</span>
                    </div>
                    <h1>Website Committee</h1>
                    <p>Leading digital transformation and maintaining cutting-edge web infrastructure at Kamkus College of Law</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8,3A2,2 0 0,0 6,5V9A2,2 0 0,1 4,11H3V13H4A2,2 0 0,1 6,15V19A2,2 0 0,0 8,21H10V19H8V14A2,2 0 0,0 6,12A2,2 0 0,0 8,10V5H10V3M16,3A2,2 0 0,1 18,5V9A2,2 0 0,0 20,11H21V13H20A2,2 0 0,0 18,15V19A2,2 0 0,1 16,21H14V19H16V14A2,2 0 0,1 18,12A2,2 0 0,1 16,10V5H14V3H16Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Digital Excellence</h4>
                        <p>Modern Web Solutions</p>
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
                    <!-- Introduction -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                            <h3>About the Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Website Committee at Kamkus College of Law is dedicated to maintaining and enhancing our institution's digital presence through innovative web technologies and user-centric design. We ensure that our website serves as an effective platform for communication, information dissemination, and engagement with students, faculty, alumni, and the broader community.</p>
                            <p>Our committee focuses on creating a seamless digital experience that reflects the excellence and values of Kamkus College of Law. We work continuously to improve website functionality, accessibility, and content quality while ensuring compliance with modern web standards and best practices in digital security.</p>
                        </div>
                    </div>

                    <!-- Vision and Mission -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"/></svg>
                            <h3>Vision and Mission</h3>
                        </div>
                        <div class="card-content">
                            <div class="vision-mission">
                                <div class="section">
                                    <h4>Our Vision</h4>
                                    <p>To establish Kamkus College of Law as a leader in digital innovation within legal education, providing a world-class online platform that enhances learning, communication, and institutional reputation.</p>
                                </div>
                                <div class="section">
                                    <h4>Our Mission</h4>
                                    <ul>
                                        <li>To maintain a modern, responsive, and user-friendly website</li>
                                        <li>To ensure seamless information accessibility for all stakeholders</li>
                                        <li>To implement cutting-edge web technologies and security measures</li>
                                        <li>To provide timely updates and accurate information</li>
                                        <li>To enhance user experience through intuitive design and navigation</li>
                                        <li>To support digital transformation initiatives across the institution</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Key Initiatives -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,10H2V12H14V10M14,6H2V8H14V6M2,16H10V14H2V16M21.5,11.5L23,13L16,20L11.5,15.5L13,14L16,17L21.5,11.5Z"/></svg>
                            <h3>Key Initiatives</h3>
                        </div>
                        <div class="card-content">
                            <?php
                            $initiatives = [
                                [
                                    "title" => "Website Modernization",
                                    "description" => "Continuous upgrade of website infrastructure, design, and functionality to meet current web standards and user expectations.",
                                    "icon" => "fa-rocket"
                                ],
                                [
                                    "title" => "Content Management System",
                                    "description" => "Implementation and maintenance of robust CMS solutions for efficient content updates and multi-user collaboration.",
                                    "icon" => "fa-edit"
                                ],
                                [
                                    "title" => "Mobile Optimization",
                                    "description" => "Ensuring responsive design and optimal performance across all devices and screen sizes for enhanced user accessibility.",
                                    "icon" => "fa-mobile-alt"
                                ],
                                [
                                    "title" => "SEO and Digital Marketing",
                                    "description" => "Strategic search engine optimization and digital marketing initiatives to improve online visibility and reach.",
                                    "icon" => "fa-search"
                                ],
                                [
                                    "title" => "Security and Performance",
                                    "description" => "Implementation of advanced security measures and performance optimization techniques to ensure reliable service.",
                                    "icon" => "fa-shield-alt"
                                ],
                                [
                                    "title" => "User Training and Support",
                                    "description" => "Regular training sessions for faculty and staff on website management and digital content creation.",
                                    "icon" => "fa-users-cog"
                                ]
                            ];

                            echo '<div class="initiatives-grid">';
                            foreach ($initiatives as $initiative) {
                                echo '<div class="initiative-item">';
                                echo '<div class="initiative-header">';
                                echo '<div class="initiative-icon"><i class="fas ' . $initiative["icon"] . '"></i></div>';
                                echo '<h4>' . $initiative["title"] . '</h4>';
                                echo '</div>';
                                echo '<p>' . $initiative["description"] . '</p>';
                                echo '</div>';
                            }
                            echo '</div>';
                            ?>
                        </div>
                    </div>



                    <!-- Technical Approach -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.22,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.22,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.68 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z"/></svg>
                            <h3>Technical Approach</h3>
                        </div>
                        <div class="card-content">
                            <p>Our committee employs modern web development practices and technologies to deliver a superior digital experience:</p>
                            
                            <div class="feature-grid">
                                <div class="feature-box">
                                    <h4>Frontend Development</h4>
                                    <ul>
                                        <li>Responsive web design principles</li>
                                        <li>Modern HTML5, CSS3, and JavaScript</li>
                                        <li>Cross-browser compatibility</li>
                                        <li>Performance optimization</li>
                                        <li>Accessibility standards compliance</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Backend Infrastructure</h4>
                                    <ul>
                                        <li>Secure server configurations</li>
                                        <li>Database management and optimization</li>
                                        <li>API development and integration</li>
                                        <li>Automated backup systems</li>
                                        <li>Load balancing and scaling</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Content Management</h4>
                                    <ul>
                                        <li>User-friendly admin interfaces</li>
                                        <li>Version control and content history</li>
                                        <li>Multi-media support</li>
                                        <li>SEO-friendly content structure</li>
                                        <li>Social media integration</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Security & Monitoring</h4>
                                    <ul>
                                        <li>SSL encryption and HTTPS protocols</li>
                                        <li>Regular security audits</li>
                                        <li>Real-time monitoring systems</li>
                                        <li>Data protection compliance</li>
                                        <li>Backup and disaster recovery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Key Areas of Focus -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M3,3H11V11H3V3M13,3H21V11H13V3M3,13H11V21H3V13M13,13H21V21H13V13Z"/></svg>
                            <h3>Key Areas of Focus</h3>
                        </div>
                        <div class="card-content">
                            <p>Our committee focuses on four main areas to ensure comprehensive website management and digital excellence:</p>
                            
                            <?php
                            $key_areas = [
                                [
                                    "title" => "Content Management",
                                    "icon" => "fa-file-alt",
                                    "items" => [
                                        "Regular updates of institutional information",
                                        "Curriculum and course details maintenance",
                                        "Faculty and staff profiles management",
                                        "Student achievements and activities showcasing",
                                        "News and announcements publishing"
                                    ]
                                ],
                                [
                                    "title" => "Technical Support",
                                    "icon" => "fa-cogs",
                                    "items" => [
                                        "Website functionality monitoring",
                                        "Security updates implementation",
                                        "Mobile compatibility assurance",
                                        "Performance optimization",
                                        "Server maintenance and backups"
                                    ]
                                ],
                                [
                                    "title" => "Design & User Experience",
                                    "icon" => "fa-paint-brush",
                                    "items" => [
                                        "Interface consistency and aesthetics",
                                        "Navigation structure optimization",
                                        "Accessibility compliance standards",
                                        "Interactive elements enhancement",
                                        "Visual design improvements"
                                    ]
                                ],
                                [
                                    "title" => "Digital Marketing & SEO",
                                    "icon" => "fa-chart-line",
                                    "items" => [
                                        "Search engine optimization",
                                        "Social media integration",
                                        "Online visibility enhancement",
                                        "Analytics and performance tracking",
                                        "Digital marketing strategies"
                                    ]
                                ]
                            ];

                            echo '<div class="focus-areas-grid">';
                            foreach ($key_areas as $area) {
                                echo '<div class="focus-area-card">';
                                echo '<div class="focus-area-header">';
                                echo '<div class="focus-area-icon"><i class="fas ' . $area["icon"] . '"></i></div>';
                                echo '<h4>' . $area["title"] . '</h4>';
                                echo '</div>';
                                echo '<ul class="focus-area-list">';
                                foreach ($area["items"] as $item) {
                                    echo '<li>' . $item . '</li>';
                                }
                                echo '</ul>';
                                echo '</div>';
                            }
                            echo '</div>';
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Committee Members -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                            <h3>Committee Members</h3>
                        </div>
                        <div class="card-content">
                            <?php
                            $committee_members = [
                                ["name" => "Dr. Ambuj Sharma", "role" => "Chairperson"],
                                ["name" => "Dr. Neetu Mankotia", "role" => "Member"],
                                ["name" => "Mr. Abhay Srivastava", "role" => "Member"],
                                ["name" => "Mr. Arun Kumar Maurya", "role" => "Member"],
                            ];

                            foreach ($committee_members as $member) {
                                echo '<div class="member-item">';
                                echo '<div class="member-name">' . $member["name"] . '</div>';
                                echo '<div class="member-role">' . $member["role"] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Responsibilities -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M10.5,14.5L7.5,11.5L8.91,10.09L10.5,11.68L15.09,7.09L16.5,8.5L10.5,14.5Z"/></svg>
                            <h3>Key Responsibilities</h3>
                        </div>
                        <div class="card-content">
                            <?php
                            $responsibilities = [
                                "Maintain website content accuracy and freshness by consistently updating information, dates, and announcements across all sections.",
                                "Proactively gather and publish news of the College's latest events, achievements, and milestones through engaging write-ups and visuals.",
                                "Guarantee timely dissemination of all communications, notices, and announcements by updating them regularly on the website."
                            ];

                            echo '<div class="responsibility-list">';
                            foreach ($responsibilities as $index => $responsibility) {
                                echo '<div class="responsibility-item">';
                                echo '<div class="responsibility-number">' . ($index + 1) . '</div>';
                                echo '<p>' . $responsibility . '</p>';
                                echo '</div>';
                            }
                            echo '</div>';
                            ?>
                        </div>
                    </div>



                    <!-- Technical Resources -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13.78 15.3L19.78 21.3L21.89 19.14L15.89 13.14L13.78 15.3M17.5 10.1C17.11 10.1 16.69 10.05 16.36 9.91L4.97 21.25L2.86 19.14L10.27 11.74L8.5 9.96L7.78 10.66L6.33 9.25L12.92 2.66C13.54 2 14.76 2.05 15.62 2.91L16.08 3.37C16.13 3.42 16.69 3.99 17.05 4.81C17.92 6.33 17.84 8.1 17.5 10.1M9.89 11.24L11.15 12.5L13.81 9.84L12.55 8.58L9.89 11.24Z"/></svg>
                            <h3>Technical Resources</h3>
                        </div>
                        <div class="card-content">
                            <div class="event-list">
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M4,1H20A1,1 0 0,1 21,2V6A1,1 0 0,1 20,7H4A1,1 0 0,1 3,6V2A1,1 0 0,1 4,1M4,9H20A1,1 0 0,1 21,10V14A1,1 0 0,1 20,15H4A1,1 0 0,1 3,14V10A1,1 0 0,1 4,9M4,17H20A1,1 0 0,1 21,18V22A1,1 0 0,1 20,23H4A1,1 0 0,1 3,22V18A1,1 0 0,1 4,17M5,2V6H7V2H5M8,2V6H10V2H8M5,10V14H7V10H5M8,10V14H10V10H8M5,18V22H7V18H5M8,18V22H10V18H8Z"/></svg>
                                        <span>Web Hosting</span>
                                    </div>
                                    <h4>Cloud Infrastructure</h4>
                                    <p>High-performance hosting solutions</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3C16.42,3 20,4.79 20,7C20,9.21 16.42,11 12,11C7.58,11 4,9.21 4,7C4,4.79 7.58,3 12,3M4,9V12C4,14.21 7.58,16 12,16C16.42,16 20,14.21 20,12V9C20,11.21 16.42,13 12,13C7.58,13 4,11.21 4,9M4,14V17C4,19.21 7.58,21 12,21C16.42,21 20,19.21 20,17V14C20,16.21 16.42,18 12,18C7.58,18 4,16.21 4,14Z"/></svg>
                                        <span>Database</span>
                                    </div>
                                    <h4>MySQL Database</h4>
                                    <p>Optimized data storage and retrieval</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                                        <span>Security</span>
                                    </div>
                                    <h4>SSL Certificate</h4>
                                    <p>Enhanced security and encryption</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Updates -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,8H4A2,2 0 0,0 2,10V14A2,2 0 0,0 4,16H5V20A1,1 0 0,0 6,21H8A1,1 0 0,0 9,20V16H12L17,20V4L12,8Z"/></svg>
                            <h3>Latest Updates</h3>
                        </div>
                        <div class="card-content">
                            <div class="achievement-list">
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3C19,1.89 18.1,1 17,1Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Mobile Optimization</h4>
                                        <p>Enhanced mobile experience launched</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>SEO Enhancement</h4>
                                        <p>Improved search engine visibility</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Security Update</h4>
                                        <p>Latest security patches implemented</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- All Committees -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22,11V3H15V6H9V3H2V11H9V8H11V11H13V16H10V24H17V16H14V11H22Z"/></svg>
                            <h3>All Committees</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Explore all committees at Kamkus College of Law
                            </p>
                            
                            <ul class="committee-list">
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/environmental.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z"/></svg>
                                        Environmental Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/cultural.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8.5,12A1.5,1.5 0 0,0 10,10.5A1.5,1.5 0 0,0 8.5,9A1.5,1.5 0 0,0 7,10.5A1.5,1.5 0 0,0 8.5,12M15.5,12A1.5,1.5 0 0,0 17,10.5A1.5,1.5 0 0,0 15.5,9A1.5,1.5 0 0,0 14,10.5A1.5,1.5 0 0,0 15.5,12M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9V7L15,1H9L3,7V9L21,9Z"/></svg>
                                        Cultural Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/examination.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        Examination Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/legal-aid.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                        Legal Aid Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/anti-ragging.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                                        Anti-Ragging Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/website.php" style="background: linear-gradient(135deg, #3b82f6, #2563eb); color: white; border-color: #2563eb;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                                        Website Committee
                                    </a>
                                </li>
                            </ul>
                            
                            <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
                                <a href="<?php echo $base_url; ?>committees/committees.php"
                                   style="display: inline-flex; align-items: center; gap: 8px; color: #1E293B; text-decoration: none; font-size: 14px; font-weight: 500; transition: color 0.3s ease;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle;"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
                                    <span>View All Committees</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="content-card" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Get In Touch</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Have suggestions for website improvements or need technical support? We're here to help!
                            </p>
                            
                            <div class="mt-4">
                                <a href="mailto:kamkus.law@gmail.com" 
                                   style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease; margin-bottom: 8px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                                    Email: kamkus.law@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
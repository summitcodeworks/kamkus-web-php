<?php
$page_title = "Examination Committee - Kamkus College of Law";
$page_description = "Learn about the Examination Committee at Kamkus College of Law, responsible for planning, coordinating, and executing all examination-related activities.";
$current_page = 'committees';

require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Examination Committee page */

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
    background: rgba(37, 99, 235, 0.1) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    margin-top: 2px !important;
}

.feature-icon i {
    color: #2563eb !important;
    font-size: 20px !important;
}

.feature-icon .number {
    color: #2563eb !important;
    font-weight: bold !important;
    font-size: 18px !important;
}

/* Examination committee specific styling */
.initiative-item {
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(37, 99, 235, 0.05);
    border-left: 4px solid #2563eb;
    border-radius: 8px;
}

.initiative-item h4 {
    color: #1E293B;
    margin-bottom: 8px;
    font-weight: 600;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.feature-box {
    background: rgba(37, 99, 235, 0.05);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid rgba(37, 99, 235, 0.2);
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
    color: #2563eb;
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
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(37, 99, 235, 0.05);
    border-left: 4px solid #2563eb;
    border-radius: 8px;
}

.event-item h4 {
    color: #1E293B;
    margin-bottom: 8px;
    font-weight: 600;
}

.event-item .date,
.event-item .location {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #2563eb;
    font-size: 14px;
    margin-bottom: 4px;
}

.event-item .description {
    color: #64748b;
    font-size: 14px;
    margin: 8px 0 0 0;
}

.resource-list {
    list-style: none;
    padding: 0;
}

.resource-list > li {
    margin-bottom: 8px;
    padding: 8px 0;
    border-bottom: 1px solid #e2e8f0;
}

.resource-list > li:last-child {
    border-bottom: none;
}

.resource-list a {
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

.resource-list a:hover {
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
}

.resource-list a i {
    width: 20px;
    text-align: center;
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
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    border-color: #2563eb;
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

/* Committee list styling */
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
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
}

.committee-list a i {
    width: 20px;
    text-align: center;
}

/* Enhanced Member Item Styling */
.enhanced-member-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px;
    margin-bottom: 12px;
    background: linear-gradient(135deg, #ffffff, #f8fafc);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.enhanced-member-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    border-color: #cbd5e1;
}

.enhanced-member-item:last-child {
    margin-bottom: 0;
}

.member-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.member-avatar i {
    color: white;
    font-size: 20px;
}

.member-details {
    flex: 1;
}

.member-details .member-name {
    font-size: 16px;
    font-weight: 600;
    color: #1E293B;
    margin: 0 0 4px 0;
    line-height: 1.2;
}

.member-details .member-position {
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    opacity: 0.8;
}

/* Enhanced Responsibilities Grid */
.responsibilities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 8px;
}

.enhanced-responsibility-card {
    background: linear-gradient(135deg, #ffffff, #f8fafc);
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
    position: relative;
    overflow: hidden;
}

.enhanced-responsibility-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #2563eb, #dc2626, #059669, #7c3aed, #ea580c);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.enhanced-responsibility-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: #cbd5e1;
}

.enhanced-responsibility-card:hover::before {
    opacity: 1;
}

.responsibility-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 16px;
}

.responsibility-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.responsibility-icon i {
    color: white;
    font-size: 20px;
}

.responsibility-number {
    font-size: 24px;
    font-weight: 700;
    opacity: 0.3;
}

.responsibility-content {
    flex: 1;
}

.responsibility-title {
    font-size: 18px;
    font-weight: 600;
    color: #1E293B;
    margin: 0 0 8px 0;
    line-height: 1.3;
}

.responsibility-description {
    color: #64748b;
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .responsibilities-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
         .enhanced-responsibility-card {
         padding: 20px;
     }
 }

/* Enhanced Calendar Timeline */
.calendar-timeline {
    position: relative;
    padding-left: 0;
}

.calendar-timeline::before {
    content: '';
    position: absolute;
    left: 22px;
    top: 22px;
    bottom: 22px;
    width: 2px;
    background: linear-gradient(180deg, #e2e8f0, #cbd5e1, #e2e8f0);
    z-index: 1;
}

.enhanced-calendar-item {
    position: relative;
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 28px;
    transition: all 0.3s ease;
}

.enhanced-calendar-item:last-child {
    margin-bottom: 0;
}

.enhanced-calendar-item:last-child .calendar-timeline::before {
    bottom: 50%;
}

.calendar-timeline-marker {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    position: relative;
    z-index: 2;
    border: 3px solid #ffffff;
}

.calendar-timeline-marker i {
    color: white;
    font-size: 18px;
}

.calendar-content {
    flex: 1;
    background: linear-gradient(135deg, #ffffff, #f8fafc);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 18px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    min-height: 80px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.enhanced-calendar-item:hover .calendar-content {
    transform: translateX(8px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-color: #cbd5e1;
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
}

.exam-title {
    font-size: 16px;
    font-weight: 600;
    color: #1E293B;
    margin: 0;
    line-height: 1.3;
}

.exam-status {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.exam-status.completed {
    background: rgba(34, 197, 94, 0.1);
    color: #059669;
    border: 1px solid rgba(34, 197, 94, 0.2);
}

.exam-status.current {
    background: rgba(220, 38, 38, 0.1);
    color: #dc2626;
    border: 1px solid rgba(220, 38, 38, 0.2);
}

.exam-status.upcoming {
    background: rgba(234, 88, 12, 0.1);
    color: #ea580c;
    border: 1px solid rgba(234, 88, 12, 0.2);
}

.calendar-meta {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.calendar-date,
.calendar-type {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
}

.calendar-date {
    color: #1E293B;
    font-weight: 500;
}

.calendar-type {
    color: #64748b;
}

.calendar-date i,
.calendar-type i {
    width: 16px;
    text-align: center;
    opacity: 0.7;
}

/* Status-based styling */
.exam-completed .calendar-timeline-marker {
    opacity: 0.8;
}

.exam-current .calendar-timeline-marker {
    animation: pulse 2s infinite;
}

.exam-upcoming .calendar-timeline-marker {
    opacity: 0.9;
}

@keyframes pulse {
    0% {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(220, 38, 38, 0.7);
    }
    70% {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 10px rgba(220, 38, 38, 0);
    }
    100% {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(220, 38, 38, 0);
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .calendar-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
    }
    
    .calendar-timeline::before {
        left: 18px;
    }
    
    .enhanced-calendar-item {
        gap: 16px;
    }
    
    .calendar-timeline-marker {
        width: 36px;
        height: 36px;
        border-width: 2px;
    }
    
    .calendar-timeline-marker i {
        font-size: 14px;
    }
    
    .calendar-content {
        padding: 16px;
        min-height: 70px;
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
                <a href="<?php echo $base_url; ?>committees/committees.php">Committees</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>Examination Committee</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/examination.jpg" 
             alt="Examination Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M10.5,14.5L7.5,11.5L8.91,10.09L10.5,11.68L15.09,7.09L16.5,8.5L10.5,14.5Z"/></svg>
                        <span>Academic Excellence</span>
                    </div>
                    <h1>Examination Committee</h1>
                    <p>Ensuring fair, transparent, and effective assessment of academic performance</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Annual Examinations</h4>
                        <p>1000+ Students Assessed</p>
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
                    <!-- About Section -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M10.5,14.5L7.5,11.5L8.91,10.09L10.5,11.68L15.09,7.09L16.5,8.5L10.5,14.5Z"/></svg>
                            <h3>About the Committee</h3>
                        </div>
                    <div class="card-content">
                        <p>The Examination Committee at Kamkus College of Law is tasked with the crucial responsibility 
                        of planning, coordinating, and executing all examination-related activities within the institution. 
                        As the cornerstone of the college's assessment system, the committee ensures that examinations are 
                        conducted with the highest standards of fairness, integrity, and efficiency.</p>
                        
                        <p>Our committee comprises experienced faculty members who bring their expertise to design comprehensive 
                        assessment strategies that accurately evaluate students' understanding of legal concepts, analytical abilities, 
                        and practical skills. We are committed to maintaining the academic rigor expected of a premier law college 
                        while incorporating modern evaluation methodologies.</p>

                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H18V1H16V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19M10.56,15.54L16,10.1L14.59,8.69L10.56,12.72L8.82,11L7.4,12.41L10.56,15.54Z"/></svg>
                                </div>
                                <div class="feature-text">
                                    <h4>Exam Scheduling</h4>
                                    <p>Strategic planning of examination schedules</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                                </div>
                                <div class="feature-text">
                                    <h4>Quality Assurance</h4>
                                    <p>Maintaining examination standards</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,11.78L20.24,4.45L21.97,5.45L16.74,14.5L10.23,10.75L5.46,19H22V21H2V3H4V17.54L9.5,8L16,11.78Z"/></svg>
                                </div>
                                <div class="feature-text">
                                    <h4>Performance Analysis</h4>
                                    <p>Comprehensive result evaluation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Committee Members -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                            <h3>Committee Members</h3>
                        </div>
                        <div class="card-content">
                            <?php
                            $committee_members = [
                                ["name" => "Dr. Ambuj Sharma", "role" => "Principal", "icon" => "svg", "color" => "#dc2626"],
                                ["name" => "Mr. Abhay Srivastava", "role" => "Member", "icon" => "svg", "color" => "#059669"],
                                ["name" => "Dr. Neetu Mankotia", "role" => "Member", "icon" => "svg", "color" => "#059669"],
                                ["name" => "Dr. Neelima Agarwal", "role" => "Member", "icon" => "svg", "color" => "#059669"],
                                ["name" => "Dr. Tabassum Baig", "role" => "Member", "icon" => "svg", "color" => "#059669"],
                                ["name" => "Mr. Arun Mourya", "role" => "Member", "icon" => "svg", "color" => "#059669"]
                            ];

                            foreach ($committee_members as $member) {
                                echo '<div class="enhanced-member-item">';
                                echo '<div class="member-avatar" style="background: linear-gradient(135deg, ' . $member["color"] . ', ' . $member["color"] . '80);">';
                                echo '<i class="' . $member["icon"] . '"></i>';
                                echo '</div>';
                                echo '<div class="member-details">';
                                echo '<h4 class="member-name">' . $member["name"] . '</h4>';
                                echo '<span class="member-position" style="color: ' . $member["color"] . ';">' . $member["role"] . '</span>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                </div>

                    <!-- Responsibilities Section -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,10H2V12H14V10M14,6H2V8H14V6M2,16H10V14H2V16M21.5,11.5L23,13L16,20L11.5,15.5L13,14L16,17L21.5,11.5Z"/></svg>
                            <h3>Key Responsibilities</h3>
                        </div>
                        <div class="card-content">
                            <div class="responsibilities-grid">
                                <?php
                                $responsibilities = [
                                    [
                                        "title" => "Exam Scheduling",
                                        "description" => "Plan and publish examination schedules ensuring minimal conflicts and optimal distribution.",
                                        "icon" => "svg",
                                        "color" => "#2563eb"
                                    ],
                                    [
                                        "title" => "Question Paper Management",
                                        "description" => "Oversee the preparation, moderation, and security of question papers.",
                                        "icon" => "svg",
                                        "color" => "#dc2626"
                                    ],
                                    [
                                        "title" => "Evaluation Oversight",
                                        "description" => "Coordinate the assessment process and ensure timely evaluation of answer scripts.",
                                        "icon" => "svg",
                                        "color" => "#059669"
                                    ],
                                    [
                                        "title" => "Result Publication",
                                        "description" => "Verify and approve results before publication and manage the re-evaluation process.",
                                        "icon" => "svg",
                                        "color" => "#7c3aed"
                                    ],
                                    [
                                        "title" => "Examination Reform",
                                        "description" => "Regularly review and update examination policies and procedures for improvement.",
                                        "icon" => "svg",
                                        "color" => "#ea580c"
                                    ]
                                ];

                                foreach ($responsibilities as $index => $responsibility) {
                                    echo '<div class="enhanced-responsibility-card">';
                                    echo '<div class="responsibility-header">';
                                    echo '<div class="responsibility-icon" style="background: linear-gradient(135deg, ' . $responsibility["color"] . ', ' . $responsibility["color"] . '80);">';
                                    echo '<i class="' . $responsibility["icon"] . '"></i>';
                                    echo '</div>';
                                    echo '<div class="responsibility-number" style="color: ' . $responsibility["color"] . ';">' . sprintf('%02d', $index + 1) . '</div>';
                                    echo '</div>';
                                    echo '<div class="responsibility-content">';
                                    echo '<h4 class="responsibility-title">' . $responsibility["title"] . '</h4>';
                                    echo '<p class="responsibility-description">' . $responsibility["description"] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                </div>
            </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Important Information -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                            <h3>Important Information</h3>
                        </div>
                    <div class="card-content">
                        <div class="info-block">
                            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.7L16.2,16.2Z"/></svg> Office Hours</h4>
                            <p>Monday to Saturday: 9:00 AM - 5:00 PM<br>
                            (Closed on Sundays and Public Holidays)</p>
                        </div>
                        
                        <div class="info-block">
                            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg> Contact Information</h4>
                            <p>Email: kamkus.law@gmail.com<br>
                            Phone: +91 93100 06444, +91 87379 06444<br>
                            Location: B Block, Sector 23, Sanjay Nagar, Ghaziabad, Uttar Pradesh, 201002</p>
                        </div>
                        
                        <div class="info-block">
                            <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg> Important Forms</h4>
                            <ul class="document-list">
                                <li><a href="#"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"/></svg> Re-evaluation Application</a></li>
                                <li><a href="#"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"/></svg> Medical Certificate Form</a></li>
                                <li><a href="#"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"/></svg> Supplementary Exam Form</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                    <!-- Examination Calendar -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                            <h3>Examination Calendar 2023-24</h3>
                        </div>
                        <div class="card-content">
                            <div class="calendar-timeline">
                                <?php
                                $exam_calendar = [
                                    [
                                        "term" => "Mid-Semester Examinations",
                                        "period" => "September 15-30, 2023",
                                        "details" => "Internal assessments",
                                        "icon" => "svg",
                                        "color" => "#2563eb",
                                        "status" => "completed"
                                    ],
                                    [
                                        "term" => "Practical Examinations",
                                        "period" => "November 20-30, 2023",
                                        "details" => "Moot courts and viva",
                                        "icon" => "svg",
                                        "color" => "#059669",
                                        "status" => "completed"
                                    ],
                                    [
                                        "term" => "End-Semester Examinations",
                                        "period" => "December 1-15, 2023",
                                        "details" => "Final examinations",
                                        "icon" => "svg",
                                        "color" => "#dc2626",
                                        "status" => "current"
                                    ],
                                    [
                                        "term" => "Supplementary Examinations",
                                        "period" => "January 10-20, 2024",
                                        "details" => "For failed subjects",
                                        "icon" => "svg",
                                        "color" => "#ea580c",
                                        "status" => "upcoming"
                                    ]
                                ];

                                foreach ($exam_calendar as $index => $exam) {
                                    $statusClass = 'exam-' . $exam["status"];
                                    echo '<div class="enhanced-calendar-item ' . $statusClass . '">';
                                    echo '<div class="calendar-timeline-marker" style="background: ' . $exam["color"] . ';">';
                                    echo '<i class="' . $exam["icon"] . '"></i>';
                                    echo '</div>';
                                    echo '<div class="calendar-content">';
                                    echo '<div class="calendar-header">';
                                    echo '<h4 class="exam-title">' . $exam["term"] . '</h4>';
                                    echo '<div class="exam-status ' . $exam["status"] . '">' . ucfirst($exam["status"]) . '</div>';
                                    echo '</div>';
                                    echo '<div class="calendar-meta">';
                                    echo '<div class="calendar-date">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>';
                                    echo '<span>' . $exam["period"] . '</span>';
                                    echo '</div>';
                                    echo '<div class="calendar-type">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>';
                                    echo '<span>' . $exam["details"] . '</span>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                </div>

                    <!-- Quick Links -->
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
                                    <a href="<?php echo $base_url; ?>committees/examination.php" style="background: linear-gradient(135deg, #2563eb, #1d4ed8); color: white; border-color: #1d4ed8;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M10.5,14.5L7.5,11.5L8.91,10.09L10.5,11.68L15.09,7.09L16.5,8.5L10.5,14.5Z"/></svg>
                                        Examination Committee
                                    </a>
                                </li>
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
            </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
<?php
$page_title = "Cultural Committee - Kamkus College of Law";
$page_description = "Cultural Committee of Kamkus College of Law - Fostering creativity, celebrating diversity, and enriching campus life through cultural expression";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Cultural Committee page */

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
    background: rgba(168, 85, 247, 0.1) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    margin-top: 2px !important;
}

.feature-icon i {
    color: #a855f7 !important;
    font-size: 20px !important;
}

.feature-icon .number {
    color: #a855f7 !important;
    font-weight: bold !important;
    font-size: 18px !important;
}

/* Cultural committee specific styling */
.initiative-item {
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(168, 85, 247, 0.05);
    border-left: 4px solid #a855f7;
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
    background: rgba(168, 85, 247, 0.05);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid rgba(168, 85, 247, 0.2);
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
    content: '♪';
    position: absolute;
    left: 0;
    color: #a855f7;
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

.activity-list {
    list-style: none;
    padding: 0;
    margin: 8px 0 0 0;
}

.activity-list li {
    margin-bottom: 6px;
    padding-left: 20px;
    position: relative;
    color: #64748b;
    font-size: 14px;
}

.activity-list li:before {
    content: '♪';
    position: absolute;
    left: 0;
    color: #a855f7;
    font-weight: bold;
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
    background: rgba(168, 85, 247, 0.05);
    border-radius: 8px;
}

.event-date {
    color: #a855f7;
    font-weight: 500;
    font-size: 14px;
}

.event-location {
    color: #64748b;
    font-size: 14px;
}

.event-description {
    color: #64748b;
    font-size: 14px;
    margin: 4px 0;
}

/* Cultural Events Section Styles */
.cultural-events-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.cultural-event-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
    transition: all 0.3s ease;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}

.cultural-event-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(168, 85, 247, 0.1);
    border-color: rgba(168, 85, 247, 0.2);
}

.event-card-header {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
}

.event-icon-wrapper {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: linear-gradient(135deg, #a855f7, #9333ea);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(168, 85, 247, 0.2);
}

.event-icon-wrapper svg {
    color: white;
}

.event-info {
    flex: 1;
}

.event-date-badge {
    background: rgba(168, 85, 247, 0.1);
    color: #a855f7;
    font-size: 12px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 20px;
    margin-bottom: 8px;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.event-info h4 {
    color: #1E293B;
    font-size: 18px;
    font-weight: 600;
    margin: 0;
    line-height: 1.3;
}

.event-description {
    color: #64748b;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.event-actions {
    display: flex;
    justify-content: flex-start;
}

.event-pdf-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #a855f7, #9333ea);
    color: white;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    padding: 12px 20px;
    border-radius: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(168, 85, 247, 0.2);
    border: none;
}

.event-pdf-btn:hover {
    background: linear-gradient(135deg, #9333ea, #7c3aed);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(168, 85, 247, 0.3);
    color: white;
    text-decoration: none;
}

.event-pdf-btn svg:first-child {
    opacity: 0.9;
}

.event-pdf-btn svg:last-child {
    opacity: 0.8;
    transition: transform 0.3s ease;
}

.event-pdf-btn:hover svg:last-child {
    transform: translateX(2px);
}

.event-pdf-btn span {
    font-weight: 500;
}

/* Responsive Design for Cultural Event Cards */
@media (max-width: 768px) {
    .cultural-event-card {
        padding: 20px;
    }
    
    .event-card-header {
        gap: 12px;
    }
    
    .event-icon-wrapper {
        width: 48px;
        height: 48px;
    }
    
    .event-icon-wrapper svg {
        width: 20px;
        height: 20px;
    }
    
    .event-info h4 {
        font-size: 16px;
    }
    
    .event-pdf-btn {
        padding: 10px 16px;
        font-size: 13px;
    }
}

/* Cultural Reports Section Styles */
.cultural-reports-section {
    margin-top: 2rem;
}

.reports-heading {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0 0 0.5rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.reports-description {
    color: #64748b;
    line-height: 1.6;
    margin: 0 0 1.5rem 0;
    font-size: 0.9rem;
}

.cultural-reports-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.cultural-report-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.cultural-report-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border-color: #a855f7;
}

.report-card-header {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1rem;
}

.report-icon-wrapper {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #a855f7, #8b5cf6);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(168, 85, 247, 0.3);
}

.report-icon-wrapper svg {
    color: white;
}

.report-info {
    flex: 1;
}

.report-year-badge {
    display: inline-block;
    background: linear-gradient(135deg, #a855f7, #8b5cf6);
    color: white;
    padding: 0.3rem 0.8rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.report-info h5 {
    margin: 0;
    font-size: 1.1rem;
    font-weight: 600;
    color: #1e293b;
    line-height: 1.3;
}

.report-period {
    color: #64748b;
    font-size: 0.8rem;
    margin: 0.25rem 0 0 0;
    font-weight: 500;
}

.report-description {
    color: #64748b;
    line-height: 1.6;
    margin: 0 0 1rem 0;
    font-size: 0.9rem;
}

.section-description {
    color: #64748b;
    line-height: 1.6;
    margin: 0 0 1.5rem 0;
    font-size: 0.95rem;
    background: #f8fafc;
    padding: 1rem;
    border-radius: 8px;
    border-left: 4px solid #a855f7;
}

/* Responsive Design for Cultural Report Cards */
@media (max-width: 768px) {
    .cultural-reports-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .cultural-report-card {
        padding: 1.25rem;
    }
    
    .report-card-header {
        gap: 0.75rem;
    }
    
    .report-icon-wrapper {
        width: 40px;
        height: 40px;
    }
    
    .report-info h5 {
        font-size: 1rem;
    }
    
    .reports-heading {
        font-size: 1.1rem;
    }
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
    background: linear-gradient(135deg, #a855f7, #9333ea);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(168, 85, 247, 0.2);
}

.committee-list a i {
    width: 20px;
    text-align: center;
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
                <span>Cultural Committee</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/cultural_new.JPG" 
             alt="Cultural Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3V13.55C11.41,13.21 10.73,13 10,13A4,4 0 0,0 6,17A4,4 0 0,0 10,21A4,4 0 0,0 14,17V7H18V5H12V3Z"/></svg>
                        <span>Arts & Culture</span>
                    </div>
                    <h1>Cultural Committee</h1>
                    <p>Fostering creativity, celebrating diversity, and enriching campus life through cultural expression</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Annual Events</h4>
                        <p>10+ Major Cultural Events</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"/></svg>
                            <h3>About the Cultural Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Cultural Committee of Kamkus College of Law is the vibrant heart of our campus life, dedicated to 
                            nurturing the artistic talents and cultural awareness of our student community. Understanding that legal 
                            education extends beyond textbooks and courtrooms, we create opportunities for students to explore their 
                            creative potential while celebrating India's rich cultural tapestry.</p>
                            
                            <p>Our committee organizes a diverse range of activities throughout the academic year, from traditional 
                            celebrations to contemporary performances, literary competitions to visual arts exhibitions. These events 
                            not only showcase student talents but also provide valuable lessons in teamwork, leadership, time management, 
                            and public presentation – skills essential for future legal professionals.</p>
                            
                            <p>Beyond entertainment, our cultural initiatives serve as important bridges between different disciplines, 
                            communities, and perspectives. They create spaces for dialogue, reflection, and expression that complement 
                            the analytical rigor of legal studies and contribute to the holistic development of our students.</p>
                        </div>
                    </div>

                    <!-- Objectives Section -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                            <h3>Objectives</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <?php
                                $objectives = [
                                    [
                                        "title" => "Cultural Heritage",
                                        "description" => "Promote awareness and appreciation of India's rich cultural heritage and diversity."
                                    ],
                                    [
                                        "title" => "Artistic Expression",
                                        "description" => "Provide platforms for students to express their artistic talents and creative abilities."
                                    ],
                                    [
                                        "title" => "Holistic Development",
                                        "description" => "Contribute to the overall personality development of students through cultural activities."
                                    ],
                                    [
                                        "title" => "Community Engagement",
                                        "description" => "Foster a vibrant campus community through collaborative cultural initiatives and events."
                                    ]
                                ];

                                foreach ($objectives as $objective) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.46,13.97L5.82,21L12,17.27Z"/></svg>';
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $objective["title"] . '</h4>';
                                    echo '<p>' . $objective["description"] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Activities Section -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Committee Events</h3>
                        </div>
                        <div class="card-content">
                            <div class="cultural-events-list">
                                <div class="cultural-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M8.5,12A1.5,1.5 0 0,0 10,10.5A1.5,1.5 0 0,0 8.5,9A1.5,1.5 0 0,0 7,10.5A1.5,1.5 0 0,0 8.5,12M15.5,12A1.5,1.5 0 0,0 17,10.5A1.5,1.5 0 0,0 15.5,9A1.5,1.5 0 0,0 14,10.5A1.5,1.5 0 0,0 15.5,12M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9V7L15,1H9L3,7V9L21,9Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">Annual</div>
                                            <h4>Annual Days</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">Annual celebration featuring cultural performances, achievements showcase, awards ceremony, and recognition of outstanding contributions by students and faculty.</p>
                                </div>
                                
                                <div class="cultural-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">November 26</div>
                                            <h4>Constitutional Day</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">Celebration of Constitution Day with cultural programs highlighting the significance of the Indian Constitution, featuring debates, speeches, and educational performances.</p>
                                </div>
                                
                                <div class="cultural-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9V7L15,1H9L3,7V9L21,9Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">Beginning of Session</div>
                                            <h4>Freshers' Welcome</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">A vibrant welcome ceremony for new students featuring cultural performances, interactive sessions, talent showcases, and the popular Mr. & Ms. Fresher competition.</p>
                                </div>

                                <div class="cultural-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M10.5,7H13.5C14.31,7 15,7.69 15,8.5V10.5H9V8.5C9,7.69 9.69,7 10.5,7Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">Cultural</div>
                                            <h4>Traditional Day</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">A celebration of India's diverse cultural heritage where students and faculty dress in traditional attire, enjoy regional cuisines, and participate in folk performances and cultural activities.</p>
                                </div>

                                <div class="cultural-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">End of Session</div>
                                            <h4>Farewell Ceremony</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">A memorable send-off for graduating students with cultural performances, reminiscences, awards presentation, and celebration of their academic journey and achievements.</p>
                                </div>

                                <div class="cultural-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">March 8</div>
                                            <h4>International Women's Day Celebration</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">Special cultural programs celebrating women's achievements and contributions with performances, discussions, panel sessions, and empowerment activities honoring women in law and society.</p>
                                </div>

                                <div class="cultural-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">June 21</div>
                                            <h4>Yoga Day</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">International Yoga Day celebration promoting health, wellness, and mindful living practices through yoga demonstrations, awareness programs, and cultural performances focusing on holistic well-being.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Participation Guidelines -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Participation Guidelines</h3>
                        </div>
                        <div class="card-content">
                            <ul class="resource-list">
                                <li>All students of Kamkus College of Law are eligible to participate in cultural activities</li>
                                <li>Registration for events opens two weeks prior to the scheduled date</li>
                                <li>Participants must adhere to the specific rules of each competition</li>
                                <li>Certificates and prizes are awarded to winners and notable performances</li>
                                <li>Content must be appropriate and align with the college's values and ethos</li>
                            </ul>
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
                                    <a href="<?php echo $base_url; ?>committees/cultural.php" style="background: linear-gradient(135deg, #a855f7, #9333ea); color: white; border-color: #9333ea;">
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
                    <div class="content-card" style="background: linear-gradient(135deg, #a855f7, #9333ea);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V12H20V18Z"/></svg>
                            <h3 style="color: white;">Join Cultural Activities</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Interested in showcasing your talents and participating in cultural events? Join our vibrant cultural community and contribute to the rich artistic life of Kamkus College.
                            </p>
                            
                            <div class="mt-4">
                                <a href="<?php echo $base_url; ?>contact.php" 
                                   style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                    Contact Committee
                                </a>
                            </div>
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
                            $committeeMembers = [
                                ["name" => "Dr. Ambuj Sharma", "role" => "Chairperson"],
                                ["name" => "Dr. Seema Singh", "role" => "Member"],
                                ["name" => "Dr. Neetu Monkatia", "role" => "Member"],
                                ["name" => "Ms. Mohini Dobhal", "role" => "Member"],
                                ["name" => "Mr. Deepak Mishra", "role" => "Member (Student)"],
                                ["name" => "Mr. Deepanshu Gupta", "role" => "Member (Student)"]
                            ];

                            foreach ($committeeMembers as $member) {
                                echo '<div class="member-item">';
                                echo '<div class="member-name">' . $member["name"] . '</div>';
                                echo '<div class="member-role">' . $member["role"] . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Cultural Activities -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Cultural Activities</h3>
                        </div>
                        <div class="card-content">
                            <p class="section-description">
                                Our Cultural Committee organizes a diverse range of activities throughout the academic year to foster creativity, celebrate cultural diversity, and enrich campus life. These activities include annual celebrations, cultural festivals, competitions, traditional events, and various programs that promote artistic expression and cultural awareness among students and faculty.
                            </p>
                            
                            <div class="cultural-reports-section">
                                <h4 class="reports-heading">Cultural Activities Reports</h4>
                                <p class="reports-description">
                                    View comprehensive reports of all cultural activities conducted during each academic year, including detailed documentation of events, performances, competitions, and celebrations.
                                </p>
                                
                                <div class="cultural-reports-grid">
                                    <div class="cultural-report-card">
                                        <div class="report-card-header">
                                            <div class="report-icon-wrapper">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                            </div>
                                            <div class="report-info">
                                                <div class="report-year-badge">2024-2025</div>
                                                <h5>Cultural Activities Report</h5>
                                                <p class="report-period">Current Academic Year</p>
                                            </div>
                                        </div>
                                        <p class="report-description">
                                            Comprehensive documentation of all cultural activities, events, competitions, and celebrations organized during the 2024-2025 academic year.
                                        </p>
                                        <a href="<?php echo $base_url; ?>src/assets/public/pdfs/Cultural Activities 2024-2025.pdf" target="_blank" class="event-pdf-btn">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            <span>View PDF Report</span>
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="cultural-report-card">
                                        <div class="report-card-header">
                                            <div class="report-icon-wrapper">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                            </div>
                                            <div class="report-info">
                                                <div class="report-year-badge">2023-2024</div>
                                                <h5>Cultural Activities Report</h5>
                                                <p class="report-period">Previous Academic Year</p>
                                            </div>
                                        </div>
                                        <p class="report-description">
                                            Complete record of cultural activities, festivals, competitions, and special events conducted during the 2023-2024 academic year.
                                        </p>
                                        <a href="<?php echo $base_url; ?>src/assets/public/pdfs/Cultural Activities 2023-2024.pdf" target="_blank" class="event-pdf-btn">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                                            </svg>
                                            <span>View PDF Report</span>
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/>
                                            </svg>
                                        </a>
                                    </div>
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
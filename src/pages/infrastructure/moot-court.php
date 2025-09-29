<?php
$page_title = "Moot Court - Kamkus College of Law";
$page_description = "Experience our state-of-the-art Moot Court facility at Kamkus College of Law. A professional courtroom simulation space for developing advocacy skills.";
$current_page = 'infrastructure';

require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Moot Court page */

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

/* Moot Court specific styling */
.activity-item {
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(99, 102, 241, 0.05);
    border-left: 4px solid #6366f1;
    border-radius: 8px;
}

.activity-item h4 {
    color: #1E293B;
    margin-bottom: 8px;
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
    background: rgba(99, 102, 241, 0.05);
    border-radius: 8px;
}

.event-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #6366f1;
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
    background: rgba(99, 102, 241, 0.05);
    border-radius: 8px;
}

.achievement-icon {
    width: 40px;
    height: 40px;
    background: #6366f1;
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

.infrastructure-list {
    list-style: none;
    padding: 0;
}

.infrastructure-list li {
    margin-bottom: 8px;
}

.infrastructure-list a {
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

.infrastructure-list a:hover {
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.2);
}

.infrastructure-list a i {
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
                <a href="<?php echo $base_url; ?>infrastructure/infrastructure.php">Infrastructure</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>Moot Court</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/infra/mootn.jpg" alt="Moot Court at Kamkus" class="hero-image">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                        <span>Practical Learning</span>
                    </div>
                    <h1>Moot Court</h1>
                    <p>A professional courtroom simulation space for students to develop advocacy skills</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Seating Capacity</h4>
                        <p>80+ Participants</p>
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
                    <!-- About Our Moot Court -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15A1,1 0 0,1 22,16H21A7,7 0 0,1 14,23H10A7,7 0 0,1 3,16H2A1,1 0 0,1 1,15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M12,4.5A0.5,0.5 0 0,0 11.5,4A0.5,0.5 0 0,0 12,3.5A0.5,0.5 0 0,0 12.5,4A0.5,0.5 0 0,0 12,4.5Z"/></svg>
                            <h3>About Our Moot Court</h3>
                        </div>
                        <div class="card-content">
                            <p>The Moot Court at Kamkus College of Law is a state-of-the-art facility designed to replicate an actual courtroom 
                            environment, providing students with practical exposure to court proceedings and advocacy. Equipped with authentic 
                            courtroom furniture and modern technology, our moot court offers an immersive learning experience.</p>
                            
                            <p>This purpose-built space allows students to develop crucial skills in legal argumentation, witness examination, 
                            and courtroom etiquette under conditions that closely mirror real-world legal settings. Regular moot court 
                            competitions and practice sessions conducted here help students gain confidence and proficiency in advocacy.</p>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15A1,1 0 0,1 22,16H21A7,7 0 0,1 14,23H10A7,7 0 0,1 3,16H2A1,1 0 0,1 1,15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M12,4.5A0.5,0.5 0 0,0 11.5,4A0.5,0.5 0 0,0 12,3.5A0.5,0.5 0 0,0 12.5,4A0.5,0.5 0 0,0 12,4.5Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Authentic Court Setting</h4>
                                        <p>Featuring judge's bench, witness stand, jury box, and counsel tables</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,3H3C1.89,3 1,3.89 1,5V17A2,2 0 0,0 3,19H8V21H16V19H21A2,2 0 0,0 23,17V5C23,3.89 22.1,3 21,3M21,17H3V5H21V17Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Modern Technology</h4>
                                        <p>Advanced audio-visual and recording facilities</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Seating Capacity</h4>
                                        <p>Accommodates 80+ participants comfortably</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Moot Court Activities -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                            <h3>Moot Court Activities</h3>
                        </div>
                        <div class="card-content">
                            <p>Our moot court hosts various activities throughout the academic year, providing students with opportunities to develop their advocacy skills:</p>
                            
                            <?php
                            $activities = [
                                [
                                    "title" => "Internal Competitions",
                                    "description" => "Regular inter-semester and inter-class moot court competitions"
                                ],
                                [
                                    "title" => "National Events",
                                    "description" => "Annual national-level moot court competition with participation from top law schools"
                                ],
                                [
                                    "title" => "Guest Lectures",
                                    "description" => "Distinguished judges and advocates share their expertise"
                                ],
                                [
                                    "title" => "Practice Sessions",
                                    "description" => "Regular mooting practice and training sessions"
                                ]
                            ];

                            foreach ($activities as $activity) {
                                echo '<div class="activity-item">';
                                echo '<h4>' . $activity["title"] . '</h4>';
                                echo '<p>' . $activity["description"] . '</p>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Facilities -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5,20.5V11.5L12,6.5L17.5,11.5V20.5H14.5V17.5H9.5V20.5H6.5Z"/></svg>
                            <h3>Facilities</h3>
                        </div>
                        <div class="card-content">
                            <ul class="resource-list">
                                <?php
                                $facilities = [
                                    ["name" => "Judge's Bench & Gallery", "icon" => "fa-gavel"],
                                    ["name" => "Audio-Visual System", "icon" => "fa-tv"],
                                    ["name" => "Recording Equipment", "icon" => "fa-microphone"],
                                    ["name" => "Legal Reference Library", "icon" => "fa-book-open"]
                                ];

                                foreach ($facilities as $facility) {
                                    echo '<li>';
                                    echo '<span class="resource-item">';
                                    echo '<i class="fas ' . $facility["icon"] . '"></i>';
                                    echo $facility["name"];
                                    echo '</span>';
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                            <h3>Upcoming Moot Events</h3>
                        </div>
                        <div class="card-content">
                            <div class="event-list">
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                                        <span>January 15, 2025</span>
                                    </div>
                                    <h4>Inter-College Moot Competition</h4>
                                    <p>Moot Court Hall</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                                        <span>February 20, 2025</span>
                                    </div>
                                    <h4>Constitutional Law Moot</h4>
                                    <p>Moot Court Hall</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                                        <span>March 10, 2025</span>
                                    </div>
                                    <h4>International Arbitration Moot</h4>
                                    <p>Moot Court Hall</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Achievements -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,5H16.5L15.5,4H8.5L7.5,5H5A2,2 0 0,0 3,7V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7A2,2 0 0,0 19,5M19,19H5V8H19V19Z"/></svg>
                            <h3>Our Achievements</h3>
                        </div>
                        <div class="card-content">
                            <div class="achievement-list">
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Best Moot Court 2023</h4>
                                        <p>State-level recognition for excellence in advocacy training</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>1000+ Students Trained</h4>
                                        <p>In advocacy skills since our establishment</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>National Competition Host</h4>
                                        <p>Annual Kamkus National Moot Court Competition</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- All Infrastructure -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22,11V3H15V6H9V3H2V11H9V8H11V11H13V16H10V24H17V16H14V11H22Z"/></svg>
                            <h3>All Infrastructure</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Explore all infrastructure at Kamkus College of Law
                            </p>
                            
                            <ul class="infrastructure-list">
                                <li>
                                    <a href="<?php echo $base_url; ?>infrastructure/moot-court.php" style="background: linear-gradient(135deg, #6366f1, #4f46e5); color: white; border-color: #4f46e5;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                        Moot Court
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>infrastructure/library.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,8A3,3 0 0,0 9,11A3,3 0 0,0 12,14A3,3 0 0,0 15,11A3,3 0 0,0 12,8M12,16A1,1 0 0,1 11,15A1,1 0 0,1 12,14A1,1 0 0,1 13,15A1,1 0 0,1 12,16M12,10A1,1 0 0,1 13,11A1,1 0 0,1 12,12A1,1 0 0,1 11,11A1,1 0 0,1 12,10M7,18A4,4 0 0,1 3,14A4,4 0 0,1 7,10C8.2,10 9.27,10.53 10,11.41L8,13.41C7.8,13.2 7.42,13 7,13A1,1 0 0,0 6,14A1,1 0 0,0 7,15C7.42,15 7.8,14.8 8,14.59L10,16.59C9.27,17.47 8.2,18 7,18M17,18C15.8,18 14.73,17.47 14,16.59L16,14.59C16.2,14.8 16.58,15 17,15A1,1 0 0,0 18,14A1,1 0 0,0 17,13C16.58,13 16.2,13.2 16,13.41L14,11.41C14.73,10.53 15.8,10 17,10A4,4 0 0,1 21,14A4,4 0 0,1 17,18Z"/></svg>
                                        Library
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>infrastructure/computer-lab.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,3H3A1,1 0 0,0 2,4V16A1,1 0 0,0 3,17H10V19H8V21H16V19H14V17H21A1,1 0 0,0 22,16V4A1,1 0 0,0 21,3M20,15H4V5H20V15Z"/></svg>
                                        Computer Lab
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>infrastructure/seminar-hall.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8.5,12A1.5,1.5 0 0,0 10,10.5A1.5,1.5 0 0,0 8.5,9A1.5,1.5 0 0,0 7,10.5A1.5,1.5 0 0,0 8.5,12M15.5,12A1.5,1.5 0 0,0 17,10.5A1.5,1.5 0 0,0 15.5,9A1.5,1.5 0 0,0 14,10.5A1.5,1.5 0 0,0 15.5,12M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9V7L15,1H9L3,7V9L21,9Z"/></svg>
                                        Seminar Hall
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>infrastructure/cafeteria.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.06 22.99H1.94C1.5 22.99 1.1 22.64 1.1 22.19V21.81C1.1 21.36 1.5 21.01 1.94 21.01H18.06C18.5 21.01 18.9 21.36 18.9 21.81V22.19C18.9 22.64 18.5 22.99 18.06 22.99M20 2H4C2.9 2 2 2.9 2 4V20C2 21.1 2.9 22 4 22H20C21.1 22 22 21.1 22 20V4C22 2.9 21.1 2 20 2M20 20H4V4H20V20Z"/></svg>
                                        Cafeteria
                                    </a>
                                </li>
                            </ul>
                            
                            <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
                                <a href="<?php echo $base_url; ?>infrastructure/infrastructure.php"
                                   style="display: inline-flex; align-items: center; gap: 8px; color: #1E293B; text-decoration: none; font-size: 14px; font-weight: 500; transition: color 0.3s ease;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle;"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
                                    <span>View All Infrastructure</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Join CTA -->
                    <div class="content-card" style="background: linear-gradient(135deg, #6366f1, #4f46e5);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M1,10V13H4V10H1M6,10V13H9V16H12V13H15V10H12V7H9V10H6Z"/></svg>
                            <h3 style="color: white;">Join Moot Society</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Enhance your advocacy skills by joining our moot court society. We offer coaching, resources, and opportunities to compete.
                            </p>
                            
                            <div class="mt-4">
                                <a href="<?php echo $base_url; ?>contact.php" 
                                   style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
                                    Get Started
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
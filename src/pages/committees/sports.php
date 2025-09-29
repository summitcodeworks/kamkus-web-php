<?php
$page_title = "Sports Committee - Kamkus College of Law";
$page_description = "Learn about the Sports Committee at Kamkus College of Law, their initiatives, sporting events, and commitment to promoting physical fitness and athletics.";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Sports Committee page */

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

/* Committee-specific styling - Sports theme */
.initiatives-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 16px;
}

.initiative-item {
    padding: 20px;
    background: rgba(249, 115, 22, 0.05);
    border: 1px solid rgba(249, 115, 22, 0.15);
    border-radius: 12px;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.initiative-item:hover {
    background: rgba(249, 115, 22, 0.08);
    border-color: rgba(249, 115, 22, 0.25);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(249, 115, 22, 0.15);
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
    background: #f97316;
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
    background: rgba(249, 115, 22, 0.05);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid rgba(249, 115, 22, 0.2);
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
    color: #f97316;
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
    background: rgba(249, 115, 22, 0.05);
    border-radius: 8px;
}

.event-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #f97316;
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
    background: rgba(249, 115, 22, 0.05);
    border-radius: 8px;
}

.achievement-icon {
    width: 40px;
    height: 40px;
    background: #f97316;
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
    background: linear-gradient(135deg, #f97316, #ea580c);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(249, 115, 22, 0.2);
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
                <span>Sports Committee</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/sports.jpg" 
             alt="Sports Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,16L3,5L5.5,7L9,4L12,7L15,4L18.5,7L21,5L19,16H5M12,18A2,2 0 0,0 10,20A2,2 0 0,0 12,22A2,2 0 0,0 14,20A2,2 0 0,0 12,18Z"/></svg>
                        <span>Athletics</span>
                    </div>
                    <h1>Sports Committee</h1>
                    <p>Promoting physical fitness, sportsmanship, and athletic excellence at Kamkus College of Law</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,5H16.5L15.5,4H8.5L7.5,5H5A2,2 0 0,0 3,7V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7A2,2 0 0,0 19,5M19,19H5V8H19V19Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Athletic Excellence</h4>
                        <p>15+ Sports Events</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5,5.5C14.59,5.5 15.5,4.59 15.5,3.5S14.59,1.5 13.5,1.5S11.5,2.41 11.5,3.5S12.41,5.5 13.5,5.5M9.89,19.38L10.89,15L13,17V23H15V15.5L12.89,13.5L13.5,10.5C14.79,12 16.79,13 19,13V11C17.09,11 15.5,10 14.69,8.58L13.69,7.08C13.29,6.38 12.69,6 12,6C11.69,6 11.5,6.08 11.19,6.08L6,8.28V12H8V9.58L9.79,8.88L8.19,17L3.29,16L2.89,18L9.89,19.38Z"/></svg>
                            <h3>About the Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Sports Committee at Kamkus College of Law is dedicated to fostering a culture of physical fitness, healthy competition, and team spirit among students and faculty. We believe that a sound mind resides in a sound body, and sports activities play a crucial role in the holistic development of future legal professionals.</p>
                            <p>Our committee organizes various sporting events throughout the academic year, maintains sports facilities, and encourages participation in inter-collegiate competitions. We aim to develop leadership skills, teamwork, and discipline through sports while providing a platform for students to showcase their athletic talents and maintain physical well-being.</p>
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
                                    <p>To establish Kamkus College of Law as a premier institution that balances academic excellence with athletic achievement, creating well-rounded individuals who excel both in the courtroom and on the field.</p>
                                </div>
                                <div class="section">
                                    <h4>Our Mission</h4>
                                    <ul>
                                        <li>To promote physical fitness and healthy lifestyle choices among students and faculty</li>
                                        <li>To organize competitive sporting events that build character and team spirit</li>
                                        <li>To maintain and upgrade sports facilities and equipment</li>
                                        <li>To encourage participation in inter-collegiate and national level competitions</li>
                                        <li>To recognize and celebrate athletic achievements and sportsmanship</li>
                                        <li>To integrate sports activities with academic schedules for balanced development</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Functions -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,9H2V7H11V9M11,5H2V3H11V5M2,13H11V11H2V13M2,17H7V15H2V17M2,21H7V19H2V21M13.59,17.59L15.17,16L19,19.83L22.83,16L24.41,17.59L19,23L13.59,17.59Z"/></svg>
                            <h3>Functions</h3>
                        </div>
                        <div class="card-content">
                            <?php
                            $functions = [
                                [
                                    "title" => "Cultivate Enthusiasm",
                                    "description" => "Cultivate a spirit of enthusiasm for sports among both students and faculty.",
                                    "icon" => "fa-heart"
                                ],
                                [
                                    "title" => "Comprehensive Training",
                                    "description" => "Offer comprehensive training, coaching, and sports education programs accessible to all.",
                                    "icon" => "fa-graduation-cap"
                                ],
                                [
                                    "title" => "Organize Competitions",
                                    "description" => "Organize diverse competitions in sports like football, cricket, basketball, volleyball, and more.",
                                    "icon" => "fa-trophy"
                                ],
                                [
                                    "title" => "Promote Well-being",
                                    "description" => "Promote holistic well-being for all students through physical activities and sports.",
                                    "icon" => "fa-heart-pulse"
                                ],
                                [
                                    "title" => "Inculcate Life Skills",
                                    "description" => "Develop valuable life skills such as sportsmanship, teamwork, and leadership.",
                                    "icon" => "fa-users-gear"
                                ],
                                [
                                    "title" => "Infrastructure Management",
                                    "description" => "Maintain and manage sports facilities and equipment for optimal utilization.",
                                    "icon" => "fa-gear"
                                ]
                            ];

                            echo '<div class="initiatives-grid">';
                            foreach ($functions as $function) {
                                echo '<div class="initiative-item">';
                                echo '<div class="initiative-header">';
                                echo '<div class="initiative-icon"><i class="fas ' . $function["icon"] . '"></i></div>';
                                echo '<h4>' . $function["title"] . '</h4>';
                                echo '</div>';
                                echo '<p>' . $function["description"] . '</p>';
                                echo '</div>';
                            }
                            echo '</div>';
                            ?>
                        </div>
                    </div>

                    <!-- Responsibilities -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M7,7H17V9H7V7M7,11H17V13H7V11M7,15H13V17H7V15Z"/></svg>
                            <h3>Responsibilities</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <?php
                                $responsibilities = [
                                    [
                                        "description" => "Promote active participation in sports by fostering enthusiasm among students and faculty.",
                                        "icon" => "fa-users"
                                    ],
                                    [
                                        "description" => "Cultivate a culture of healthy competition that fosters teamwork and sportsmanship.",
                                        "icon" => "fa-handshake"
                                    ],
                                    [
                                        "description" => "Organize regular sporting events to identify and train promising athletes for competitions.",
                                        "icon" => "fa-calendar-check"
                                    ],
                                    [
                                        "description" => "Secure access to high-quality coaching and improved training facilities.",
                                        "icon" => "fa-graduation-cap"
                                    ],
                                    [
                                        "description" => "Ensure proper maintenance and upkeep of all sports equipment.",
                                        "icon" => "fa-gear"
                                    ],
                                    [
                                        "description" => "Develop and maintain necessary sports infrastructure to support a thriving sports program.",
                                        "icon" => "fa-building"
                                    ],
                                    [
                                        "description" => "Maintain comprehensive records of all sports activities for future reference.",
                                        "icon" => "fa-file-lines"
                                    ]
                                ];

                                foreach ($responsibilities as $responsibility) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo '<i class="fas ' . $responsibility["icon"] . '"></i>';
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<p>' . $responsibility["description"] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Tenure and Procedure -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                            <h3>Tenure and Procedure</h3>
                        </div>
                        <div class="card-content">
                            <div class="mb-6">
                                <h4 class="text-lg font-semibold mb-2">Tenure</h4>
                                <p>The Sports Committee is constituted for a two-year term. To ensure effective operation, a minimum of two-thirds of members constitute a quorum for meetings, which are convened as needed to plan and execute upcoming events.</p>
                            </div>
                            
                            <div>
                                <h4 class="text-lg font-semibold mb-2">Procedure of Meetings</h4>
                                <p>The Sports Committee convenes meetings as necessary to plan upcoming events. Members receive timely notification prior to each meeting to ensure their attendance. Following each meeting, the Committee takes concrete steps to implement the agenda items discussed.</p>
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
                                    "title" => "Annual Sports Meet",
                                    "description" => "Organizing comprehensive annual sports competitions featuring multiple events including athletics, team sports, and indoor games.",
                                    "icon" => "fa-medal"
                                ],
                                [
                                    "title" => "Inter-College Competitions",
                                    "description" => "Facilitating participation in inter-collegiate tournaments and representing the college at regional and national levels.",
                                    "icon" => "fa-university"
                                ],
                                [
                                    "title" => "Fitness Programs",
                                    "description" => "Regular fitness sessions, yoga classes, and wellness programs to promote healthy lifestyle habits among students and staff.",
                                    "icon" => "fa-dumbbell"
                                ],
                                [
                                    "title" => "Sports Infrastructure",
                                    "description" => "Maintaining and upgrading sports facilities, equipment, and creating new sporting venues for enhanced athletic activities.",
                                    "icon" => "fa-building"
                                ],
                                [
                                    "title" => "Sports Scholarships",
                                    "description" => "Recognition and support for outstanding athletes through scholarships and special training opportunities.",
                                    "icon" => "fa-graduation-cap"
                                ],
                                [
                                    "title" => "Health Awareness",
                                    "description" => "Educational programs on sports nutrition, injury prevention, and the importance of physical activity in professional life.",
                                    "icon" => "fa-heartbeat"
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

                    <!-- Sports Activities -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M8.5,7.5L12,6L15.5,7.5L16.5,11L13.5,13L10.5,13L7.5,11L8.5,7.5M12,8.5L10.5,9L10.5,10.5L12,11.5L13.5,10.5L13.5,9L12,8.5Z"/></svg>
                            <h3>Sports Activities & Facilities</h3>
                        </div>
                        <div class="card-content">
                            <p>Our Sports Committee oversees a comprehensive range of sporting activities and maintains state-of-the-art facilities to support athletic endeavors:</p>
                            
                            <div class="feature-grid">
                                <div class="feature-box">
                                    <h4>Outdoor Sports</h4>
                                    <ul>
                                        <li>Cricket with dedicated pitch</li>
                                        <li>Football/Soccer field</li>
                                        <li>Basketball court</li>
                                        <li>Volleyball court</li>
                                        <li>Badminton courts</li>
                                        <li>Athletics track</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Indoor Sports</h4>
                                    <ul>
                                        <li>Table tennis facility</li>
                                        <li>Chess and board games</li>
                                        <li>Gymnasium with modern equipment</li>
                                        <li>Indoor badminton courts</li>
                                        <li>Fitness and weight training</li>
                                        <li>Yoga and meditation hall</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Competitive Events</h4>
                                    <ul>
                                        <li>Annual Inter-batch tournaments</li>
                                        <li>Faculty vs Students matches</li>
                                        <li>Inter-college competitions</li>
                                        <li>National level participation</li>
                                        <li>Sports week celebrations</li>
                                        <li>Award ceremonies</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Support Services</h4>
                                    <ul>
                                        <li>Sports equipment lending</li>
                                        <li>Coaching and training support</li>
                                        <li>First aid and medical assistance</li>
                                        <li>Nutrition guidance</li>
                                        <li>Sports psychology counseling</li>
                                        <li>Performance monitoring</li>
                                    </ul>
                                </div>
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
                            $committee_members = [
                                ["name" => "Dr. Ambuj Sharma", "role" => "Chairperson"],
                                ["name" => "Dr. Neetu Mankotia", "role" => "Member"],
                                ["name" => "Ms. Abha Tyagi", "role" => "Member"],
                                ["name" => "Ms. Mohini Dobhal", "role" => "Member"],
                                ["name" => "Mr. Abhay Srivastava", "role" => "Member"],
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

                    <!-- Quick Links -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M3.9,12C3.9,10.29 5.29,8.9 7,8.9H11V7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H11V15.1H7C5.29,15.1 3.9,13.71 3.9,12M8,13H16V11H8V13M17,7H13V8.9H17C18.71,8.9 20.1,10.29 20.1,12C20.1,13.71 18.71,15.1 17,15.1H13V17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7Z"/></svg>
                            <h3>Quick Links</h3>
                        </div>
                        <div class="card-content">
                            <ul class="quick-links-list">
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/committees.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                        All Committees
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>infrastructure/infrastructure.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,15H19V17H17V15M7,15H9V17H7V15M17,11H19V13H17V11M7,11H9V13H7V11M17,7H19V9H17V7M7,7H9V9H7V7M3,21H11V19H13V21H21V3H3V21M5,5H19V19H13V17H11V19H5V5Z"/></svg>
                                        Infrastructure
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>academics/academics.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                                        Academic Programs
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>contact.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                            <h3>Sports Events</h3>
                        </div>
                        <div class="card-content">
                            <div class="event-list">
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                                        <span>January 15, 2024</span>
                                    </div>
                                    <h4>Annual Sports Meet</h4>
                                    <p>College-wide athletic competitions</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,5H16.5L15.5,4H8.5L7.5,5H5A2,2 0 0,0 3,7V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7A2,2 0 0,0 19,5M19,19H5V8H19V19Z"/></svg>
                                        <span>February 5, 2024</span>
                                    </div>
                                    <h4>Inter-College Cricket Tournament</h4>
                                    <p>Regional cricket championship</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5,5.5C14.59,5.5 15.5,4.59 15.5,3.5S14.59,1.5 13.5,1.5S11.5,2.41 11.5,3.5S12.41,5.5 13.5,5.5M9.89,19.38L10.89,15L13,17V23H15V15.5L12.89,13.5L13.5,10.5C14.79,12 16.79,13 19,13V11C17.09,11 15.5,10 14.69,8.58L13.69,7.08C13.29,6.38 12.69,6 12,6C11.69,6 11.5,6.08 11.19,6.08L6,8.28V12H8V9.58L9.79,8.88L8.19,17L3.29,16L2.89,18L9.89,19.38Z"/></svg>
                                        <span>March 10, 2024</span>
                                    </div>
                                    <h4>Marathon Run</h4>
                                    <p>5K & 10K fitness challenge</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Achievements -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.46,13.97L5.82,21L12,17.27Z"/></svg>
                            <h3>Recent Achievements</h3>
                        </div>
                        <div class="card-content">
                            <div class="achievement-list">
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,5H16.5L15.5,4H8.5L7.5,5H5A2,2 0 0,0 3,7V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7A2,2 0 0,0 19,5M19,19H5V8H19V19Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Cricket Championship</h4>
                                        <p>Won regional inter-college tournament</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,16L3,5L5.5,7L9,4L12,7L15,4L18.5,7L21,5L19,16H5M12,18A2,2 0 0,0 10,20A2,2 0 0,0 12,22A2,2 0 0,0 14,20A2,2 0 0,0 12,18Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Athletics Excellence</h4>
                                        <p>3 gold medals at state level</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Team Spirit Award</h4>
                                        <p>Best sports committee recognition</p>
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
                                    <a href="<?php echo $base_url; ?>committees/website.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                                        Website Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/sports.php" style="background: linear-gradient(135deg, #f97316, #ea580c); color: white; border-color: #ea580c;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5,5.5C14.59,5.5 15.5,4.59 15.5,3.5S14.59,1.5 13.5,1.5S11.5,2.41 11.5,3.5S12.41,5.5 13.5,5.5M9.89,19.38L10.89,15L13,17V23H15V15.5L12.89,13.5L13.5,10.5C14.79,12 16.79,13 19,13V11C17.09,11 15.5,10 14.69,8.58L13.69,7.08C13.29,6.38 12.69,6 12,6C11.69,6 11.5,6.08 11.19,6.08L6,8.28V12H8V9.58L9.79,8.88L8.19,17L3.29,16L2.89,18L9.89,19.38Z"/></svg>
                                        Sports Committee
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
                    <div class="content-card" style="background: linear-gradient(135deg, #f97316, #ea580c);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Get In Touch</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Interested in joining sports activities or need more information? Contact our Sports Committee!
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
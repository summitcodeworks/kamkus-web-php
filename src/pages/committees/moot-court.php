<?php
$page_title = "Moot Court Committee - Kamkus College of Law";
$page_description = "The Moot Court Committee at Kamkus College of Law - Cultivating the art of mooting, fostering legal research, and developing advocacy skills among students.";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Moot Court Committee page */

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

/* Moot Court Committee specific styling */
.initiative-item {
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(220, 38, 127, 0.05);
    border-left: 4px solid #dc2626;
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
    background: rgba(220, 38, 127, 0.05);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid rgba(220, 38, 127, 0.2);
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
    color: #dc2626;
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

.event-item, .competition-item {
    margin-bottom: 16px;
    padding: 12px;
    background: rgba(220, 38, 127, 0.05);
    border-radius: 8px;
}

.event-date, .competition-header {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #dc2626;
    font-size: 14px;
    margin-bottom: 8px;
}

.competition-header {
    margin-bottom: 12px;
}

.competition-header svg {
    color: #dc2626;
    flex-shrink: 0;
}

.event-item h4, .competition-item h4 {
    color: #1E293B;
    margin-bottom: 4px;
    font-weight: 600;
    font-size: 16px;
}

.achievement-item {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
    padding: 12px;
    background: rgba(220, 38, 127, 0.05);
    border-radius: 8px;
}

.achievement-icon {
    width: 40px;
    height: 40px;
    background: #dc2626;
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
    background: linear-gradient(135deg, #dc2626, #b91c1c);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
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
                <span>Moot Court Committee</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/moot1.jpg" 
             alt="Moot Court Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                        <span>Legal Advocacy</span>
                    </div>
                    <h1>Moot Court Committee</h1>
                    <p>Cultivating the art of mooting, fostering legal research, and developing advocacy skills among students</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Advocacy Training</h4>
                        <p>1000+ Students Trained</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                            <h3>About the Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>Established at the very foundation of the Faculty of Law at KCL, the Moot Court Committee (MCC) is a student-led initiative overseen by a faculty advisor. Its core mission is to cultivate the art of mooting among students. The Committee facilitates, regulates, and promotes mooting activities within the College, ensuring a fair and equitable environment that fosters a passion for legal research.</p>
                            <p>A moot court provides law students with a simulated courtroom experience, offering them the intellectual freedom to interpret legal principles and apply them to real-world scenarios. During a moot court competition, students replicate a court hearing, engaging in a comprehensive process that includes analyzing the problem, researching applicable law, crafting written submissions, and delivering persuasive oral arguments.</p>
                        </div>
                    </div>

                    <!-- Objectives and Functions -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Objectives and Functions</h3>
                        </div>
                        <div class="card-content">
                            <?php
                            $objectives = [
                                [
                                    "title" => "Competition Organization",
                                    "description" => "Organize and administer moot court competitions within the Faculty of Law, encompassing both internal and external events."
                                ],
                                [
                                    "title" => "Team Selection",
                                    "description" => "Select and authorize student teams to represent the Faculty in external competitions through rigorous selection processes."
                                ],
                                [
                                    "title" => "Skill Development",
                                    "description" => "Offer workshops on moot court advocacy and other relevant legal skills to enhance student capacity and expertise."
                                ],
                                [
                                    "title" => "Legal Research",
                                    "description" => "Promote intensive legal research on contemporary issues and emerging areas of law through moot court problem analysis."
                                ]
                            ];

                            foreach ($objectives as $objective) {
                                echo '<div class="initiative-item">';
                                echo '<h4>' . $objective["title"] . '</h4>';
                                echo '<p>' . $objective["description"] . '</p>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Significance of Moot Courts -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15A1,1 0 0,1 22,16H21A7,7 0 0,1 14,23H10A7,7 0 0,1 3,16H2A1,1 0 0,1 1,15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M12,4.5A0.5,0.5 0 0,0 11.5,4A0.5,0.5 0 0,0 12,3.5A0.5,0.5 0 0,0 12.5,4A0.5,0.5 0 0,0 12,4.5Z"/></svg>
                            <h3>Significance of Moot Courts</h3>
                        </div>
                        <div class="card-content">
                            <p>Moot problems are often centered on unsettled areas of law or recent legal developments. Each side then presents their arguments within the established legal framework and jurisdiction. This process develops essential skills for future legal practitioners.</p>
                            
                            <div class="feature-grid">
                                <div class="feature-box">
                                    <h4>Skills Developed</h4>
                                    <ul>
                                        <li>Legal research and analysis</li>
                                        <li>Oral advocacy and presentation</li>
                                        <li>Written submission drafting</li>
                                        <li>Critical thinking and reasoning</li>
                                        <li>Courtroom etiquette and protocol</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Competition Benefits</h4>
                                    <ul>
                                        <li>Practical courtroom experience</li>
                                        <li>Exposure to contemporary legal issues</li>
                                        <li>Networking with legal professionals</li>
                                        <li>Enhanced confidence in advocacy</li>
                                        <li>Recognition and accolades</li>
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
                                ["name" => "Dr. Tabassum Baig", "role" => "Member"],
                                ["name" => "Mr. Harshit Bhatti", "role" => "Member (Student)"],
                                ["name" => "Mr. Vishal Tiwari", "role" => "Member (Student)"],
                                ["name" => "Mr. Deepak Mishra", "role" => "Member (Student)"]
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

                    <!-- Moot Court Competitions -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Moot Court Competitions</h3>
                        </div>
                        <div class="card-content">
                            <div class="competition-list">
                                <div class="competition-item">
                                    <div class="competition-header">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        <h4>NATIONAL & INT. MOOT COURT Annual Report 2024-25</h4>
                                    </div>
                                    <p style="margin: 8px 0; color: #64748b; font-size: 14px;">Annual report on national and international moot court competitions</p>
                                    <a href="<?php echo $base_url; ?>src/assets/public/pdfs/NATIONAL & INT. MOOT COURT Annual Report 2024-25.pdf" 
                                       target="_blank" 
                                       style="display: inline-flex; align-items: center; gap: 6px; color: #dc2626; text-decoration: none; font-size: 14px; font-weight: 500; padding: 6px 12px; border: 1px solid #dc2626; border-radius: 6px; transition: all 0.3s ease;"
                                       onmouseover="this.style.background='#dc2626'; this.style.color='white';"
                                       onmouseout="this.style.background='transparent'; this.style.color='#dc2626';">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                        View PDF
                                    </a>
                                </div>
                                
                                <div class="competition-item">
                                    <div class="competition-header">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        <h4>KAMLA SUKUL MEMORIAL INTRA-MOOT COURT COMPETITION 2025</h4>
                                    </div>
                                    <p style="margin: 8px 0; color: #64748b; font-size: 14px;">Memorial intra-moot court competition for the academic year 2025</p>
                                    <a href="<?php echo $base_url; ?>src/assets/public/pdfs/KAMLA SUKUL MEMORIAL INTRA-MOOT COURT COMPETITION 2025.pdf" 
                                       target="_blank" 
                                       style="display: inline-flex; align-items: center; gap: 6px; color: #dc2626; text-decoration: none; font-size: 14px; font-weight: 500; padding: 6px 12px; border: 1px solid #dc2626; border-radius: 6px; transition: all 0.3s ease;"
                                       onmouseover="this.style.background='#dc2626'; this.style.color='white';"
                                       onmouseout="this.style.background='transparent'; this.style.color='#dc2626';">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                        View PDF
                                    </a>
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
                                    <a href="<?php echo $base_url; ?>committees/moot-court.php" style="background: linear-gradient(135deg, #dc2626, #b91c1c); color: white; border-color: #b91c1c;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                        Moot Court Committee
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
                    <div class="content-card" style="background: linear-gradient(135deg, #dc2626, #b91c1c);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Join Moot Society</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Enhance your advocacy skills by joining our moot court society. We offer coaching, resources, and opportunities to compete at national level.
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
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
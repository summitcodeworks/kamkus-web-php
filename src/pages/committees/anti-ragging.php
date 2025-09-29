<?php
$page_title = "Anti-Ragging Committee - Kamkus College of Law";
$page_description = "Learn about the Anti-Ragging Committee at Kamkus College of Law, their initiatives, policies, and commitment to maintaining a safe campus environment.";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Anti-Ragging Committee page */

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

/* Committee-specific styling - Anti-Ragging theme */
.initiative-item {
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(239, 68, 68, 0.05);
    border-left: 4px solid #ef4444;
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
    background: rgba(239, 68, 68, 0.05);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid rgba(239, 68, 68, 0.2);
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
    color: #ef4444;
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
    background: rgba(239, 68, 68, 0.05);
    border-radius: 8px;
}

.event-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #ef4444;
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
    background: rgba(239, 68, 68, 0.05);
    border-radius: 8px;
}

.achievement-icon {
    width: 40px;
    height: 40px;
    background: #ef4444;
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
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
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
                <span>Anti-Ragging Committee</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/examination.jpg" 
             alt="Anti-Ragging Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                        <span>Safety & Protection</span>
                    </div>
                    <h1>Anti-Ragging Committee</h1>
                    <p>Ensuring a safe, secure, and ragging-free environment for all students at Kamkus College of Law</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10.5,7A1.5,1.5 0 0,1 12,8.5A1.5,1.5 0 0,1 10.5,10A1.5,1.5 0 0,1 9,8.5A1.5,1.5 0 0,1 10.5,7M13.5,7A1.5,1.5 0 0,1 15,8.5A1.5,1.5 0 0,1 13.5,10A1.5,1.5 0 0,1 12,8.5A1.5,1.5 0 0,1 13.5,7M13,14C13,15.11 12.66,16.11 12,17C11.34,16.11 11,15.11 11,14H13Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Zero Tolerance</h4>
                        <p>100% Safe Campus</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                            <h3>About the Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Anti-Ragging Committee at Kamkus College of Law is dedicated to creating and maintaining a safe, secure, and harassment-free environment for all students. Established in compliance with UGC regulations and Supreme Court directives, our committee works tirelessly to prevent, prohibit, and eliminate the scourge of ragging within our educational institution.</p>
                            <p>We are committed to fostering a culture of discipline, mutual respect, and harmonious coexistence among students. Our committee implements comprehensive preventive measures, monitors sensitive areas, and ensures prompt action against any reported incidents. We believe that an environment free from fear and intimidation is essential for the holistic development of students and their academic excellence.</p>
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
                                    <p>To create and maintain a campus environment that is completely free from ragging, where every student feels safe, respected, and can pursue their academic goals without fear of harassment or intimidation.</p>
                                </div>
                                <div class="section">
                                    <h4>Our Mission</h4>
                                    <ul>
                                        <li>To implement and enforce a zero-tolerance policy against ragging</li>
                                        <li>To conduct regular awareness programs and orientation sessions</li>
                                        <li>To establish effective monitoring and reporting mechanisms</li>
                                        <li>To ensure swift and fair action against any incidents of ragging</li>
                                        <li>To promote a culture of mutual respect and healthy interaction among students</li>
                                        <li>To provide support and counseling to victims of ragging</li>
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
                                    "title" => "Orientation and Awareness Programs",
                                    "description" => "Comprehensive orientation sessions for new students and regular awareness programs about anti-ragging policies and their importance."
                                ],
                                [
                                    "title" => "24/7 Monitoring System",
                                    "description" => "Round-the-clock surveillance in hostels, common areas, and campus premises to prevent any incidents of ragging."
                                ],
                                [
                                    "title" => "Anonymous Complaint System",
                                    "description" => "Confidential reporting mechanisms including helpline numbers, email, and complaint boxes for reporting incidents."
                                ],
                                [
                                    "title" => "Peer Support Groups",
                                    "description" => "Formation of student support groups to create a network of peer mentors and counselors for new students."
                                ],
                                [
                                    "title" => "Regular Inspection Drives",
                                    "description" => "Surprise inspections in hostels, canteens, and other campus areas to ensure compliance with anti-ragging guidelines."
                                ],
                                [
                                    "title" => "Counseling and Support Services",
                                    "description" => "Professional counseling services for students who have experienced or witnessed ragging incidents."
                                ]
                            ];

                            foreach ($initiatives as $initiative) {
                                echo '<div class="initiative-item">';
                                echo '<h4>' . $initiative["title"] . '</h4>';
                                echo '<p>' . $initiative["description"] . '</p>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Preventive Measures -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1Z"/></svg>
                            <h3>Preventive Measures</h3>
                        </div>
                        <div class="card-content">
                            <p>Our institution implements comprehensive preventive measures to ensure a ragging-free environment:</p>
                            
                            <div class="feature-grid">
                                <div class="feature-box">
                                    <h4>Campus Surveillance</h4>
                                    <ul>
                                        <li>CCTV monitoring in common areas</li>
                                        <li>Regular patrol by security personnel</li>
                                        <li>Faculty presence in hostels and campus</li>
                                        <li>Emergency response systems</li>
                                        <li>Strict access control measures</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Awareness and Education</h4>
                                    <ul>
                                        <li>Mandatory orientation programs</li>
                                        <li>Anti-ragging pledge ceremonies</li>
                                        <li>Regular workshops and seminars</li>
                                        <li>Distribution of awareness materials</li>
                                        <li>Legal awareness sessions</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Support Systems</h4>
                                    <ul>
                                        <li>24/7 helpline services</li>
                                        <li>Counseling and psychological support</li>
                                        <li>Mentor-mentee programs</li>
                                        <li>Anonymous reporting mechanisms</li>
                                        <li>Victim support and rehabilitation</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Strict Enforcement</h4>
                                    <ul>
                                        <li>Zero tolerance policy</li>
                                        <li>Swift investigation procedures</li>
                                        <li>Disciplinary action committees</li>
                                        <li>Legal action when required</li>
                                        <li>Record maintenance and reporting</li>
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
                                ["name" => "Dr. Ambuj sharma", "role" => "Chairperson"],
                                ["name" => "Dr. Neetu Mankotia", "role" => "Member"],
                                ["name" => "Ms. Somna Singhal", "role" => "Member"],
                                ["name" => "Mr. Kirpal Singh", "role" => "Member"],
                                ["name" => "Mr. Prakhar Dwiwedi", "role" => "Member (Student)"],
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

                    <!-- Emergency Contacts -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/></svg>
                            <h3>Emergency Contacts</h3>
                        </div>
                        <div class="card-content">
                            <div class="event-list">
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/></svg>
                                        <span>Anti-Ragging Helpline</span>
                                    </div>
                                    <h4>1800-180-5522 (24/7)</h4>
                                    <p>National Anti-Ragging Helpline</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,19H7V5H17M17,1H7C5.89,1 5,1.89 5,3V21A2,2 0 0,0 7,23H17A2,2 0 0,0 19,21V3C19,1.89 18.1,1 17,1Z"/></svg>
                                        <span>Committee Chairperson</span>
                                    </div>
                                    <h4>+91 93100 06444</h4>
                                    <p>Direct contact for urgent matters</p>
                                </div>
                                <div class="event-item">
                                    <div class="event-date">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                                        <span>Email Support</span>
                                    </div>
                                    <h4>kamkus.law@gmail.com</h4>
                                    <p>Confidential email reporting</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- How to Report -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M12,3A1,1 0 0,1 13,4A1,1 0 0,1 12,5A1,1 0 0,1 11,4A1,1 0 0,1 12,3M7,7H17V9H7V7M7,11H17V13H7V11M7,15H13V17H7V15Z"/></svg>
                            <h3>How to Report</h3>
                        </div>
                        <div class="card-content">
                            <div class="achievement-list">
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Call Helpline</h4>
                                        <p>24/7 national anti-ragging helpline available</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Email Report</h4>
                                        <p>Send confidential reports to committee email</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2L2,7L12,12L22,7L12,2M2,17L12,22L22,17V9L12,14L2,9V17Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Complaint Box</h4>
                                        <p>Anonymous reporting through complaint boxes</p>
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
                                    <a href="<?php echo $base_url; ?>committees/anti-ragging.php" style="background: linear-gradient(135deg, #ef4444, #dc2626); color: white; border-color: #dc2626;">
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
                    <div class="content-card" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                            <h3 style="color: white;">Report Ragging</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                If you witness or experience any form of ragging, don't hesitate to report. Your identity will be kept confidential and we ensure swift action.
                            </p>
                            
                            <div class="mt-4">
                                <a href="tel:18001805522" 
                                   style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease; margin-bottom: 8px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/></svg>
                                    Call Helpline: 1800-180-5522
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
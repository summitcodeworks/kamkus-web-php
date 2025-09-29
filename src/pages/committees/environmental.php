<?php
$page_title = "Environmental Committee - Kamkus College of Law";
$page_description = "Learn about the Environmental Committee at Kamkus College of Law, their initiatives, achievements, and commitment to sustainability.";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Environmental Committee page */

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

/* Committee-specific styling */
.initiative-item {
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(34, 197, 94, 0.05);
    border-left: 4px solid #22c55e;
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
    background: rgba(34, 197, 94, 0.05);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid rgba(34, 197, 94, 0.2);
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
    color: #22c55e;
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
    background: rgba(34, 197, 94, 0.05);
    border-radius: 8px;
}

.event-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #22c55e;
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
    background: rgba(34, 197, 94, 0.05);
    border-radius: 8px;
}

.achievement-icon {
    width: 40px;
    height: 40px;
    background: #22c55e;
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
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(34, 197, 94, 0.2);
}

.committee-list a i {
    width: 20px;
    text-align: center;
}

/* Enhanced Environmental Events Styling */
.environmental-events-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.environmental-event-card {
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.03), rgba(16, 185, 129, 0.03));
    border: 1px solid rgba(34, 197, 94, 0.15);
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.environmental-event-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #22c55e, #16a34a);
    border-radius: 0 4px 4px 0;
}

.environmental-event-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(34, 197, 94, 0.15);
    border-color: rgba(34, 197, 94, 0.3);
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
    background: linear-gradient(135deg, #22c55e, #16a34a);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(34, 197, 94, 0.25);
}

.event-icon-wrapper svg {
    color: white;
    filter: drop-shadow(0 1px 2px rgba(0, 0, 0, 0.1));
}

.event-info {
    flex: 1;
    min-width: 0;
}

.event-date-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(34, 197, 94, 0.1);
    color: #16a34a;
    font-size: 12px;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 20px;
    margin-bottom: 8px;
    border: 1px solid rgba(34, 197, 94, 0.2);
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
    margin: 0 0 20px 0;
    padding-left: 2px;
}

.event-actions {
    display: flex;
    justify-content: flex-start;
}

.event-pdf-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: white;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    padding: 12px 20px;
    border-radius: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(34, 197, 94, 0.2);
    border: none;
}

.event-pdf-btn:hover {
    background: linear-gradient(135deg, #16a34a, #15803d);
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);
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

/* Responsive Design for Event Cards */
@media (max-width: 768px) {
    .environmental-event-card {
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
                <span>Environmental Committee</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/environment3.jpg" 
             alt="Environmental Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z"/></svg>
                        <span>Sustainability</span>
                    </div>
                    <h1>Environmental Committee</h1>
                    <p>Promoting sustainable practices and environmental consciousness at Kamkus College of Law</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21.82,15.42L19.32,19.75C18.83,20.61 18,21 17.07,21H14.93C14,21 13.17,20.61 12.68,19.75L11.5,17.67L12.5,16.33L13.68,18.25C13.92,18.66 14.4,19 14.93,19H17.07C17.6,19 18.08,18.66 18.32,18.25L20.82,13.92L21.82,15.42M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9L18,14L15,9H21M18,10.5L16.5,13H19.5L18,10.5M3,9L6,14L9,9H3M6,10.5L4.5,13H7.5L6,10.5M12,8C13.1,8 14,8.9 14,10V14C14,15.1 13.1,16 12,16H8C6.9,16 6,15.1 6,14V10C6,8.9 6.9,8 8,8H12M12,10H8V14H12V10Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Green Initiatives</h4>
                        <p>500+ Trees Planted</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21.82,15.42L19.32,19.75C18.83,20.61 18,21 17.07,21H14.93C14,21 13.17,20.61 12.68,19.75L11.5,17.67L12.5,16.33L13.68,18.25C13.92,18.66 14.4,19 14.93,19H17.07C17.6,19 18.08,18.66 18.32,18.25L20.82,13.92L21.82,15.42M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9L18,14L15,9H21M18,10.5L16.5,13H19.5L18,10.5M3,9L6,14L9,9H3M6,10.5L4.5,13H7.5L6,10.5M12,8C13.1,8 14,8.9 14,10V14C14,15.1 13.1,16 12,16H8C6.9,16 6,15.1 6,14V10C6,8.9 6.9,8 8,8H12M12,10H8V14H12V10Z"/></svg>
                            <h3>About the Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Environmental Committee at Kamkus College of Law is committed to fostering ecological consciousness and sustainable practices within our institution and beyond. Established with the vision of creating a green and environmentally responsible campus, our committee works at the intersection of environmental advocacy and legal education.</p>
                            <p>As future legal professionals, we believe in the importance of understanding environmental laws and policies, and actively participating in conservation efforts. Our committee implements various initiatives to reduce the college's ecological footprint, raise awareness about environmental issues, and promote sustainable living practices among students and staff.</p>
                        </div>
                    </div>

                    <!-- Vision and Mission -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,21V16.74C10.53,16.91 10.03,17 9.5,17C7,17 5,15 5,12.5C5,11.23 5.5,10.09 6.36,9.27C6.13,8.73 6,8.13 6,7.5C6,5 8,3 10.5,3C12.59,3 14.34,4.46 14.82,6.5H15.5C17.43,6.5 19,8.07 19,10C19,11.93 17.43,13.5 15.5,13.5H15V16H13V21H11Z"/></svg>
                            <h3>Vision and Mission</h3>
                        </div>
                        <div class="card-content">
                            <div class="vision-mission">
                                <div class="section">
                                    <h4>Our Vision</h4>
                                    <p>To establish Kamkus College of Law as a model institution for environmental sustainability, where ecological consciousness is integrated into legal education, institutional practices, and community engagement.</p>
                                </div>
                                <div class="section">
                                    <h4>Our Mission</h4>
                                    <ul>
                                        <li>To implement and maintain sustainable practices across all aspects of campus operations</li>
                                        <li>To raise awareness about environmental issues and promote eco-friendly habits</li>
                                        <li>To bridge the gap between environmental advocacy and legal education</li>
                                        <li>To engage with the wider community through environmental outreach programs</li>
                                        <li>To support research and advocacy on environmental laws and policies</li>
                                        <li>To collaborate with other institutions for broader environmental impact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Key Initiatives -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Key Initiatives</h3>
                        </div>
                        <div class="card-content">
                            <?php
                            $initiatives = [
                                [
                                    "title" => "Green Campus Initiative",
                                    "description" => "Implementing sustainable practices across campus, including waste management, water conservation, and energy efficiency measures."
                                ],
                                [
                                    "title" => "Tree Plantation Drives",
                                    "description" => "Organizing regular tree plantation activities both on campus and in nearby communities to increase green cover."
                                ],
                                [
                                    "title" => "Environmental Awareness Campaigns",
                                    "description" => "Conducting workshops, seminars, and awareness programs on environmental issues and sustainable living practices."
                                ],
                                [
                                    "title" => "Waste Management System",
                                    "description" => "Establishing effective waste segregation and recycling infrastructure throughout the college premises."
                                ],
                                [
                                    "title" => "Environmental Law Advocacy",
                                    "description" => "Promoting research and advocacy on environmental laws and policies through moot courts and legal aid activities."
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

                    <!-- Waste Management System -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z"/></svg>
                            <h3>Campus Waste Management System</h3>
                        </div>
                        <div class="card-content">
                            <p>Our flagship initiative is the comprehensive waste management system implemented across the college campus. This system encompasses several key components designed to minimize waste generation and maximize resource recovery.</p>
                            
                            <div class="feature-grid">
                                <div class="feature-box">
                                    <h4>Segregation Infrastructure</h4>
                                    <ul>
                                        <li>Color-coded bins for different waste types</li>
                                        <li>Clearly labeled disposal instructions</li>
                                        <li>Strategic placement of collection points</li>
                                        <li>Special containers for hazardous waste</li>
                                        <li>E-waste collection centers</li>
                                    </ul>
                                </div>
                                <div class="feature-box">
                                    <h4>Recycling and Composting</h4>
                                    <ul>
                                        <li>Paper recycling program with collection points</li>
                                        <li>Plastic reduction and recycling initiatives</li>
                                        <li>Composting of organic waste from cafeteria</li>
                                        <li>Use of compost in campus gardens</li>
                                        <li>Partnerships with local recycling agencies</li>
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
                                ["name" => "Dr. Seema Singh", "role" => "Member"],
                                ["name" => "Dr. Neetu Monkatia", "role" => "Member"],
                                ["name" => "Ms. Abha Tyagi", "role" => "Member"],
                                ["name" => "Mr. Deepak Mishra", "role" => "Member (Student)"],
                                ["name" => "Mr. Ritik", "role" => "Member (Student)"]
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

                    <!-- Environmental Events -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Environmental Events</h3>
                        </div>
                        <div class="card-content">
                            <div class="environmental-events-list">
                                <div class="environmental-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">June 5, 2024</div>
                                            <h4>World Environment Day Celebration</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">Comprehensive report on World Environment Day celebration at Kamkus College of Law with tree plantation drives, awareness programs, and environmental pledge ceremonies.</p>
                                    <div class="event-actions">
                                        <a href="<?php echo $base_url; ?>src/assets/public/whats_new/Report on Environment Day 5th June 2024_240904_111101.pdf" 
                                           target="_blank" 
                                           class="event-pdf-btn">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                            <span>View Full Report</span>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="environmental-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">April 10, 2024</div>
                                            <h4>National Green Tribunal Visit</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">Educational visit to National Green Tribunal to understand environmental law in practice, featuring interactive sessions with legal experts and case study discussions.</p>
                                    <div class="event-actions">
                                        <a href="<?php echo $base_url; ?>src/assets/public/whats_new/Report on NGT Visit 10.04.2024.pdf" 
                                           target="_blank" 
                                           class="event-pdf-btn">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                            <span>View Full Report</span>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="environmental-event-card">
                                    <div class="event-card-header">
                                        <div class="event-icon-wrapper">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z"/></svg>
                                        </div>
                                        <div class="event-info">
                                            <div class="event-date-badge">June 5, 2024</div>
                                            <h4>International Yoga Day</h4>
                                        </div>
                                    </div>
                                    <p class="event-description">International Yoga Day celebration promoting health and environmental awareness through mindful living practices and connection with nature.</p>
                                    <div class="event-actions">
                                        <a href="<?php echo $base_url; ?>src/assets/public/whats_new/Report On Yoga Day 05.06.2024.pdf" 
                                           target="_blank" 
                                           class="event-pdf-btn">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                            <span>View Full Report</span>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                        </a>
                                    </div>
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
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,21V16.74C10.53,16.91 10.03,17 9.5,17C7,17 5,15 5,12.5C5,11.23 5.5,10.09 6.36,9.27C6.13,8.73 6,8.13 6,7.5C6,5 8,3 10.5,3C12.59,3 14.34,4.46 14.82,6.5H15.5C17.43,6.5 19,8.07 19,10C19,11.93 17.43,13.5 15.5,13.5H15V16H13V21H11Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>500+ Trees Planted</h4>
                                        <p>Through our annual plantation drives since 2019</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21.82,15.42L19.32,19.75C18.83,20.61 18,21 17.07,21H14.93C14,21 13.17,20.61 12.68,19.75L11.5,17.67L12.5,16.33L13.68,18.25C13.92,18.66 14.4,19 14.93,19H17.07C17.6,19 18.08,18.66 18.32,18.25L20.82,13.92L21.82,15.42M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9L18,14L15,9H21M18,10.5L16.5,13H19.5L18,10.5M3,9L6,14L9,9H3M6,10.5L4.5,13H7.5L6,10.5M12,8C13.1,8 14,8.9 14,10V14C14,15.1 13.1,16 12,16H8C6.9,16 6,15.1 6,14V10C6,8.9 6.9,8 8,8H12M12,10H8V14H12V10Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>40% Waste Reduction</h4>
                                        <p>Achieved through our comprehensive waste management system</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Green Campus Award 2023</h4>
                                        <p>Recognized for our sustainable campus initiatives</p>
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
                                    <a href="<?php echo $base_url; ?>committees/environmental.php" style="background: linear-gradient(135deg, #22c55e, #16a34a); color: white; border-color: #16a34a;">
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
                    <div class="content-card" style="background: linear-gradient(135deg, #22c55e, #16a34a);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Join Green Initiatives</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Interested in contributing to our environmental initiatives? Join us in making Kamkus College a greener, more sustainable campus for future generations.
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
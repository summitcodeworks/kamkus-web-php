<?php
$page_title = "Legal Aid Committee - Kamkus College of Law";
$page_description = "The Legal Aid Committee at Kamkus College of Law provides free legal assistance and promotes legal awareness in the community through various initiatives and programs.";
$current_page = 'committees';
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Legal Aid Committee page */

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

/* Committee-specific styling for Legal Aid */
.initiative-item {
    margin-bottom: 20px;
    padding: 16px;
    background: rgba(59, 130, 246, 0.05);
    border-left: 4px solid #3b82f6;
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

.event-item, .competition-item {
    margin-bottom: 20px;
    padding: 20px;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.06), rgba(147, 197, 253, 0.04));
    border: 1px solid rgba(59, 130, 246, 0.12);
    border-radius: 12px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(59, 130, 246, 0.08);
}

.event-item:hover, .competition-item:hover {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.08), rgba(147, 197, 253, 0.06));
    border-color: rgba(59, 130, 246, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(59, 130, 246, 0.15);
}

.event-date, .competition-header {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #3b82f6;
    font-size: 14px;
    margin-bottom: 12px;
    font-weight: 500;
}

.competition-header {
    margin-bottom: 16px;
}

.competition-header svg {
    color: #3b82f6;
    flex-shrink: 0;
    padding: 8px;
    background: rgba(59, 130, 246, 0.1);
    border-radius: 8px;
}

.event-item h4, .competition-item h4 {
    color: #1E293B;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: 17px;
    line-height: 1.4;
}

.competition-item p {
    color: #64748b !important;
    font-size: 14px !important;
    line-height: 1.6 !important;
    margin: 12px 0 16px 0 !important;
}

.competition-item a {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    color: #3b82f6 !important;
    text-decoration: none !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    padding: 10px 16px !important;
    border: 1.5px solid #3b82f6 !important;
    border-radius: 8px !important;
    transition: all 0.3s ease !important;
    background: rgba(59, 130, 246, 0.05) !important;
}

.competition-item a:hover {
    background: #3b82f6 !important;
    color: white !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3) !important;
}

.competition-item a svg {
    transition: transform 0.3s ease !important;
}

.competition-item a:hover svg {
    transform: translateX(2px) !important;
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

.committee-links {
    list-style: none;
    padding: 0;
}

.committee-links li {
    margin-bottom: 8px;
}

.committee-links a {
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

.committee-links a:hover {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
}

.committee-links a i {
    width: 20px;
    text-align: center;
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

.badge {
    background: rgba(59, 130, 246, 0.1);
    color: #3b82f6;
    border: 1px solid rgba(59, 130, 246, 0.2);
}

.feature-item .badge {
    background: rgba(59, 130, 246, 0.1);
    color: #3b82f6;
    border: 1px solid rgba(59, 130, 246, 0.2);
    padding: 4px 8px;
    border-radius: 16px;
    font-size: 12px;
    font-weight: 500;
    margin-top: 8px;
    display: inline-block;
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
                <span>Legal Aid Committee</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/legalaid1.jpg" 
             alt="Legal Aid Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7,4V2A1,1 0 0,1 8,1H16A1,1 0 0,1 17,2V4H20A1,1 0 0,1 21,5V6A1,1 0 0,1 20,7H4A1,1 0 0,1 3,6V5A1,1 0 0,1 4,4H7M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V9H6V19Z"/></svg>
                        <span>Access to Justice</span>
                    </div>
                    <h1>Legal Aid Committee</h1>
                    <p>Bridging the gap between legal knowledge and community needs through service and education</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,17H4A2,2 0 0,1 2,15V10A2,2 0 0,1 4,8H5L7,6V4A2,2 0 0,1 9,2H15A2,2 0 0,1 17,4V6L19,8H20A2,2 0 0,1 22,10V15A2,2 0 0,1 20,17H13L11,15V17M13,13L15,15H20V10H18L16,8V4H10V8L8,10H4V15H9L11,13V15L13,13M15,10A1,1 0 0,1 16,11A1,1 0 0,1 15,12A1,1 0 0,1 14,11A1,1 0 0,1 15,10Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Legal Aid Cases</h4>
                        <p>300+ Cases Annually</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7,4V2A1,1 0 0,1 8,1H16A1,1 0 0,1 17,2V4H20A1,1 0 0,1 21,5V6A1,1 0 0,1 20,7H4A1,1 0 0,1 3,6V5A1,1 0 0,1 4,4H7M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V9H6V19Z"/></svg>
                            <h3>About the Legal Aid Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Legal Aid Committee of Kamkus College of Law was established with the vision of ensuring that legal services are accessible to all segments of society, regardless of economic or social barriers. The committee operates with a dual focus: providing practical legal education to our students while serving the legal needs of the underprivileged.</p>
                            <p>Through our various initiatives, we strive to cultivate a sense of social responsibility among students while preparing them for the challenges of legal practice. The committee actively collaborates with legal practitioners, NGOs, and government bodies to expand its reach and effectiveness.</p>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Community Impact</h4>
                                        <p>Serving underprivileged communities through legal assistance</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Student Development</h4>
                                        <p>Practical legal training through hands-on experience</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,17H4A2,2 0 0,1 2,15V10A2,2 0 0,1 4,8H5L7,6V4A2,2 0 0,1 9,2H15A2,2 0 0,1 17,4V6L19,8H20A2,2 0 0,1 22,10V15A2,2 0 0,1 20,17H13L11,15V17M13,13L15,15H20V10H18L16,8V4H10V8L8,10H4V15H9L11,13V15L13,13M15,10A1,1 0 0,1 16,11A1,1 0 0,1 15,12A1,1 0 0,1 14,11A1,1 0 0,1 15,10Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Collaborative Approach</h4>
                                        <p>Partnerships with legal practitioners and organizations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Objectives -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10Z"/></svg>
                            <h3>Our Objectives</h3>
                        </div>
                        <div class="card-content">
                            <div class="feature-list">
                                <?php
                                $objectives = [
                                    [
                                        "title" => "Legal Awareness",
                                        "description" => "Conduct workshops and seminars to increase legal literacy among students and the local community.",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.9,3 3,3.9 3,5V19C3,20.1 3.9,21 5,21H19C20.1,21 21,20.1 21,19V5C21,3.9 20.1,3 19,3M19,19H5V5H19V19M17,17V15.5C17,14.1 15.9,13 14.5,13H9.5C8.1,13 7,14.1 7,15.5V17H17M12,7A2.5,2.5 0 0,0 9.5,9.5A2.5,2.5 0 0,0 12,12A2.5,2.5 0 0,0 14.5,9.5A2.5,2.5 0 0,0 12,7Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Pro Bono Services",
                                        "description" => "Provide free legal consultation and assistance to the underprivileged sections of society.",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Clinical Legal Education",
                                        "description" => "Offer practical legal training to students through real case exposure and field work.",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Community Outreach",
                                        "description" => "Organize legal aid camps in surrounding rural and urban areas to address local legal issues.",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z"/></svg>'
                                    ]
                                ];

                                foreach ($objectives as $objective) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo $objective["icon"];
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

                    <!-- Services -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,17H4A2,2 0 0,1 2,15V10A2,2 0 0,1 4,8H5L7,6V4A2,2 0 0,1 9,2H15A2,2 0 0,1 17,4V6L19,8H20A2,2 0 0,1 22,10V15A2,2 0 0,1 20,17H13L11,15V17M13,13L15,15H20V10H18L16,8V4H10V8L8,10H4V15H9L11,13V15L13,13M15,10A1,1 0 0,1 16,11A1,1 0 0,1 15,12A1,1 0 0,1 14,11A1,1 0 0,1 15,10Z"/></svg>
                            <h3>Services Offered</h3>
                        </div>
                        <div class="card-content">
                            <p>Our committee provides a wide range of legal services to ensure access to justice for all. These services are designed to address various legal needs while providing practical experience to our students.</p>
                            
                            <div class="feature-list">
                                <?php
                                $services = [
                                    [
                                        "title" => "Legal Consultation",
                                        "description" => "Free legal advice and consultation for those who cannot afford legal services",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4C22,2.89 21.1,2 20,2Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Document Drafting",
                                        "description" => "Assistance in drafting legal documents, petitions, and applications",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Legal Literacy",
                                        "description" => "Workshops and seminars on various legal topics for students and community members",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V5H19V19M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Dispute Resolution",
                                        "description" => "Alternative dispute resolution mechanisms to help resolve issues without litigation",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L9,9H1L7.5,14L5,22L12,17L19,22L16.5,14L23,9H15L12,1Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Rights Awareness",
                                        "description" => "Programs focused on making citizens aware of their fundamental rights and duties",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Legal Research",
                                        "description" => "Research support on various legal issues to help underprivileged clients",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"/></svg>'
                                    ]
                                ];

                                foreach ($services as $service) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo $service["icon"];
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $service["title"] . '</h4>';
                                    echo '<p>' . $service["description"] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Activities & Impact -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,11.78L20.24,4.45L21.97,5.45L16.74,14.5L10.23,10.75L5.46,19H22V21H2V3H4V17.54L9.5,8L16,11.78Z"/></svg>
                            <h3>Activities & Impact</h3>
                        </div>
                        <div class="card-content">
                            <p>The Legal Aid Committee conducts various activities throughout the academic year, making a significant impact on both our students and the community. Here are some of our key achievements:</p>
                            
                            <div class="feature-list">
                                <?php
                                $achievements = [
                                    [
                                        "title" => "Legal Literacy Camps",
                                        "description" => "Organized over 25 legal literacy camps in surrounding villages and urban slums",
                                        "stat" => "1,500+ People Educated",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Legal Aid Clinics",
                                        "description" => "Weekly legal aid clinics providing consultations under faculty supervision",
                                        "stat" => "300+ Cases Handled",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L9,9H1L7.5,14L5,22L12,17L19,22L16.5,14L23,9H15L12,1Z"/></svg>'
                                    ],
                                    [
                                        "title" => "Paralegal Training",
                                        "description" => "Training community volunteers as the first point of legal contact",
                                        "stat" => "150+ Volunteers Trained",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>'
                                    ],
                                    [
                                        "title" => "DLSA Collaboration",
                                        "description" => "Partnership with District Legal Services Authority for various initiatives",
                                        "stat" => "20+ Joint Programs",
                                        "icon" => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7.5,4A5.5,5.5 0 0,0 2,9.5C2,10 2.04,10.5 2.12,11H6.18C6.06,10.5 6,10 6,9.5A1.5,1.5 0 0,1 7.5,8A1.5,1.5 0 0,1 9,9.5C9,10 8.94,10.5 8.82,11H12.18C12.06,10.5 12,10 12,9.5A5.5,5.5 0 0,0 6.5,4H7.5M16.5,4A5.5,5.5 0 0,0 11,9.5C11,10 11.04,10.5 11.12,11H15.18C15.06,10.5 15,10 15,9.5A1.5,1.5 0 0,1 16.5,8A1.5,1.5 0 0,1 18,9.5C18,10 17.94,10.5 17.82,11H21.88C21.96,10.5 22,10 22,9.5A5.5,5.5 0 0,0 16.5,4M2.12,13C2.04,13.5 2,14 2,14.5A5.5,5.5 0 0,0 7.5,20H6.5A5.5,5.5 0 0,0 12,14.5C12,14 11.96,13.5 11.88,13H2.12M22,14.5C22,14 21.96,13.5 21.88,13H12.12C12.04,13.5 12,14 12,14.5A5.5,5.5 0 0,0 17.5,20H16.5A5.5,5.5 0 0,0 22,14.5Z"/></svg>'
                                    ]
                                ];

                                foreach ($achievements as $achievement) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo $achievement["icon"];
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $achievement["title"] . '</h4>';
                                    echo '<p>' . $achievement["description"] . '</p>';
                                    echo '<span class="badge">' . $achievement["stat"] . '</span>';
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
                                ["name" => "Dr. Neelima Agarwal", "role" => "Member"],
                                ["name" => "Ms. Somna Singhal", "role" => "Member"],
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

                    <!-- Legal Aid Camp Reports -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Legal Aid Events</h3>
                        </div>
                        <div class="card-content">
                            <div class="competition-list">
                                <div class="competition-item">
                                    <div class="competition-header">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        <h4>Legal Aid Camp Report (Didauli) Ghaziabad 19-10-2024</h4>
                                    </div>
                                    <p style="margin: 8px 0; color: #64748b; font-size: 14px;">Report on legal aid camp conducted in Didauli, Ghaziabad on October 19, 2024</p>
                                    <a href="<?php echo $base_url; ?>src/assets/public/pdfs/legal aid camp report (Didauli) Ghaziabad 19-10-2024.pdf" 
                                       target="_blank" 
                                       style="display: inline-flex; align-items: center; gap: 6px; color: #3b82f6; text-decoration: none; font-size: 14px; font-weight: 500; padding: 6px 12px; border: 1px solid #3b82f6; border-radius: 6px; transition: all 0.3s ease;"
                                       onmouseover="this.style.background='#3b82f6'; this.style.color='white';"
                                       onmouseout="this.style.background='transparent'; this.style.color='#3b82f6';">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                        View PDF
                                    </a>
                                </div>
                                
                                <div class="competition-item">
                                    <div class="competition-header">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        <h4>Legal Aid Camp Report (Sarna) Ghaziabad 07-03-2025</h4>
                                    </div>
                                    <p style="margin: 8px 0; color: #64748b; font-size: 14px;">Report on legal aid camp conducted in Sarna, Ghaziabad on March 07, 2025</p>
                                    <a href="<?php echo $base_url; ?>src/assets/public/pdfs/legal aid camp report (Sarna) Ghaziabad 07-03-2025.pdf" 
                                       target="_blank" 
                                       style="display: inline-flex; align-items: center; gap: 6px; color: #3b82f6; text-decoration: none; font-size: 14px; font-weight: 500; padding: 6px 12px; border: 1px solid #3b82f6; border-radius: 6px; transition: all 0.3s ease;"
                                       onmouseover="this.style.background='#3b82f6'; this.style.color='white';"
                                       onmouseout="this.style.background='transparent'; this.style.color='#3b82f6';">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                        View PDF
                                    </a>
                                </div>
                                
                                <div class="competition-item">
                                    <div class="competition-header">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        <h4>Legal Aid Camp Report (Tatarpur) Ghaziabad 09-11-2024</h4>
                                    </div>
                                    <p style="margin: 8px 0; color: #64748b; font-size: 14px;">Report on legal aid camp conducted in Tatarpur, Ghaziabad on November 09, 2024</p>
                                    <a href="<?php echo $base_url; ?>src/assets/public/pdfs/legal aid camp report (Tatarpur) Ghaziabad 09-11-2024.pdf" 
                                       target="_blank" 
                                       style="display: inline-flex; align-items: center; gap: 6px; color: #3b82f6; text-decoration: none; font-size: 14px; font-weight: 500; padding: 6px 12px; border: 1px solid #3b82f6; border-radius: 6px; transition: all 0.3s ease;"
                                       onmouseover="this.style.background='#3b82f6'; this.style.color='white';"
                                       onmouseout="this.style.background='transparent'; this.style.color='#3b82f6';">
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
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>1,500+ People Helped</h4>
                                        <p>Through our legal literacy camps and counseling sessions</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7,4V2A1,1 0 0,1 8,1H16A1,1 0 0,1 17,2V4H20A1,1 0 0,1 21,5V6A1,1 0 0,1 20,7H4A1,1 0 0,1 3,6V5A1,1 0 0,1 4,4H7M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V9H6V19Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>300+ Legal Cases</h4>
                                        <p>Successfully handled through our legal aid clinics</p>
                                    </div>
                                </div>
                                <div class="achievement-item">
                                    <div class="achievement-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                                    </div>
                                    <div class="achievement-text">
                                        <h4>Best Legal Aid Committee 2023</h4>
                                        <p>Recognized for outstanding community service</p>
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
                                    <a href="<?php echo $base_url; ?>committees/legal-aid.php" style="background: linear-gradient(135deg, #3b82f6, #2563eb); color: white; border-color: #2563eb;">
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
                    <div class="content-card" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Join Legal Aid Initiatives</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Interested in contributing to our legal aid initiatives? Join us in providing access to justice and legal education for underprivileged communities.
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
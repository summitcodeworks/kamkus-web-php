<?php
$page_title = "Research & Innovation - Kamkus College of Law";
$page_description = "Explore research initiatives, publications, and academic excellence at Kamkus College of Law. Learn about our research centers and ongoing projects.";
$current_page = 'academics';


include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Research & Innovation page */

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
                <span>Research & Innovation</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/academics/research.jpg" 
             alt="Research & Innovation at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9.5,8A1.5,1.5 0 0,0 8,9.5A1.5,1.5 0 0,0 9.5,11A1.5,1.5 0 0,0 11,9.5A1.5,1.5 0 0,0 9.5,8M11.5,12A2.5,2.5 0 0,1 9,9.5A2.5,2.5 0 0,1 11.5,7A2.5,2.5 0 0,1 14,9.5A2.5,2.5 0 0,1 11.5,12M6,10A1,1 0 0,0 5,11A1,1 0 0,0 6,12A1,1 0 0,0 7,11A1,1 0 0,0 6,10M17,10A1,1 0 0,0 16,11A1,1 0 0,0 17,12A1,1 0 0,0 18,11A1,1 0 0,0 17,10M12,2A1,1 0 0,1 13,3A1,1 0 0,1 12,4A1,1 0 0,1 11,3A1,1 0 0,1 12,2M12,7.5A2,2 0 0,0 10,9.5A2,2 0 0,0 12,11.5A2,2 0 0,0 14,9.5A2,2 0 0,0 12,7.5M12,15A6,6 0 0,1 18,21H6A6,6 0 0,1 12,15Z"/></svg>
                        <span>Academic Excellence</span>
                    </div>
                    <h1>Research & Innovation</h1>
                    <p>Advancing legal knowledge through innovative research and scholarly publications</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Research Publications</h4>
                        <p>50+ Publications Annually</p>
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
                    <!-- Research Overview -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z"/></svg>
                            <h3>Research Overview</h3>
                        </div>
                        <div class="card-content">
                            <p>Research at Kamkus College of Law is dedicated to advancing legal knowledge and contributing to societal progress through scholarly inquiry. Our faculty and students engage in cutting-edge research across various legal disciplines, addressing contemporary legal challenges and developing innovative solutions.</p>
                            <p>The college promotes interdisciplinary research to tackle complex legal issues from multiple perspectives. We maintain collaborations with other academic institutions, legal practitioners, and policymakers to ensure our research has real-world impact and practical applications.</p>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Collaborative Research</h4>
                                        <p>Partnerships with leading institutions and experts</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Global Impact</h4>
                                        <p>Research with international significance</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A7,7 0 0,0 5,9C5,11.38 6.19,13.47 8,14.74V17A1,1 0 0,0 9,18H15A1,1 0 0,0 16,17V14.74C17.81,13.47 19,11.38 19,9A7,7 0 0,0 12,2M9,21A1,1 0 0,0 10,22H14A1,1 0 0,0 15,21V20H9V21Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Innovation Focus</h4>
                                        <p>Cutting-edge legal research initiatives</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Research Focus Areas -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10Z"/></svg>
                            <h3>Research Focus Areas</h3>
                        </div>
                        <div class="card-content">
                            <p>Our research initiatives span across various critical areas of law, focusing on contemporary challenges and emerging legal frameworks. Each focus area represents our commitment to advancing legal knowledge and practice.</p>
                            
                            <div class="feature-list">
                                <?php
                                $focus_areas = [
                                    [
                                        "title" => "Constitutional Law",
                                        "description" => "Examining constitutional principles, fundamental rights, and governance frameworks",
                                        "icon" => "fa-balance-scale"
                                    ],
                                    [
                                        "title" => "Human Rights Law",
                                        "description" => "Researching protection mechanisms for human rights in domestic and international contexts",
                                        "icon" => "fa-hands-helping"
                                    ],
                                    [
                                        "title" => "Environmental Law",
                                        "description" => "Studying legal frameworks for environmental protection and sustainable development",
                                        "icon" => "fa-leaf"
                                    ],
                                    [
                                        "title" => "Corporate Law",
                                        "description" => "Analyzing corporate governance, regulations, and business ethics in the legal context",
                                        "icon" => "fa-building"
                                    ],
                                    [
                                        "title" => "Intellectual Property",
                                        "description" => "Exploring legal protection for innovations, creative works, and knowledge assets",
                                        "icon" => "fa-lightbulb"
                                    ],
                                    [
                                        "title" => "Legal Technology",
                                        "description" => "Investigating technological innovations and their impact on legal practice and education",
                                        "icon" => "fa-microchip"
                                    ]
                                ];

                                foreach ($focus_areas as $area) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo '<i class="fas ' . $area["icon"] . '"></i>';
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $area["title"] . '</h4>';
                                    echo '<p>' . $area["description"] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Research Publications -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Recent Publications</h3>
                        </div>
                        <div class="card-content">
                            <p>Our faculty members regularly publish research papers in prestigious national and international law journals. Here are some recent publications:</p>
                            
                            <div class="feature-list">
                                <?php
                                $publications = [
                                    [
                                        "title" => "Digital Rights and Data Protection in India",
                                        "author" => "Dr. Rajesh Sharma",
                                        "journal" => "International Journal of Law and Technology",
                                        "year" => "2023"
                                    ],
                                    [
                                        "title" => "Environmental Justice and Constitutional Rights",
                                        "author" => "Prof. Anita Desai",
                                        "journal" => "Journal of Environmental Law",
                                        "year" => "2023"
                                    ],
                                    [
                                        "title" => "Corporate Social Responsibility Framework",
                                        "author" => "Dr. Priya Singh",
                                        "journal" => "Corporate Law Review",
                                        "year" => "2022"
                                    ]
                                ];

                                foreach ($publications as $pub) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>';
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $pub["title"] . '</h4>';
                                    echo '<p>' . $pub["author"] . ' - ' . $pub["journal"] . '</p>';
                                    echo '<span class="badge">' . $pub["year"] . '</span>';
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
                    <!-- Academic Programs -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/></svg>
                            <h3>Academic Programs</h3>
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
                                
                                <a href="<?php echo $base_url; ?>academics/bcom-llb.php" class="program-link">
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

                    <!-- Research Resources -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,3H7A2,2 0 0,0 5,5V21L12,18L19,21V5C19,3.89 18.1,3 17,3Z"/></svg>
                            <h3>Research Resources</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Quick access to essential research resources and academic information
                            </p>
                            
                            <div class="resource-grid">
                                <a href="<?php echo $base_url; ?>academics/teaching-learning.php" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,2H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,2H5C3.9,2 3,2.9 3,4V18C3,19.1 3.9,20 5,20H19C20.1,20 21,19.1 21,18V4C21,2.9 20.1,2 19,2M12,3C12.55,3 13,3.45 13,4C13,4.55 12.55,5 12,5C11.45,5 11,4.55 11,4C11,3.45 11.45,3 12,3Z"/></svg>
                                    <span>Teaching Methods</span>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>academics/academics.php" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                                    <span>All Programs</span>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>infrastructure/library.php" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2C13.1,2 14,2.9 14,4C14,5.1 13.1,6 12,6C10.9,6 10,5.1 10,4C10,2.9 10.9,2 12,2M21,9V7L15,4V6C15,6.65 14.75,7.2 14.35,7.65L16.5,9.5C17.1,8.93 17.85,8.5 18.67,8.34C19.64,8.14 20.63,8.39 21.41,8.93C21.73,9.12 22,9.4 22,9.78V9M9,7V9C9,10.1 8.1,11 7,11H5V12L6.5,13L5,14V22H7V15L8.5,14L7,12V11H8C8.55,11 9,10.55 9,10V7H9Z"/></svg>
                                    <span>Library Resources</span>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>contact.php" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,18H13V16H11V18M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,6A4,4 0 0,0 8,10H10A2,2 0 0,1 12,8A2,2 0 0,1 14,10C14,12 11,11.75 11,15H13C13,12.75 16,12.5 16,10A4,4 0 0,0 12,6Z"/></svg>
                                    <span>Research Inquiry</span>
                                </a>
                                
                                <a href="#" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                    <span>Research Centers</span>
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
                            <h3 style="color: white;">Research Inquiry</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Interested in our research programs, publications, or collaboration opportunities? Contact our research coordinators for detailed information.
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
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
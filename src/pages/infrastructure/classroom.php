<?php
$page_title = "Classrooms - Kamkus College of Law";
$page_description = "Modern, tech-enabled classrooms designed for interactive legal education at Kamkus College of Law";
$current_page = "infrastructure";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Classroom page */

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

/* Enhanced Infrastructure Links */
.infrastructure-link {
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

.infrastructure-link:hover {
    background: linear-gradient(135deg, #1E293B, #374151);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(30, 41, 59, 0.2);
    border-color: #1E293B;
}

.infrastructure-link.active {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
    border-color: #f59e0b;
    box-shadow: 0 2px 8px rgba(251, 191, 36, 0.3);
}

.infrastructure-link.active::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: #dc2626;
}

.infrastructure-icon {
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

.infrastructure-icon i {
    color: #1E293B !important;
    font-size: 18px !important;
    transition: color 0.3s ease;
}

.infrastructure-link:hover .infrastructure-icon {
    background: rgba(255, 255, 255, 0.2) !important;
}

.infrastructure-link:hover .infrastructure-icon i {
    color: #fcd34d !important;
}

.infrastructure-link.active .infrastructure-icon {
    background: rgba(255, 255, 255, 0.2) !important;
}

.infrastructure-link.active .infrastructure-icon i {
    color: white !important;
}

.infrastructure-text {
    font-size: 14px;
    font-weight: 500;
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.infrastructure-description {
    font-size: 12px;
    opacity: 0.7;
    font-weight: 400;
}

/* Infrastructure grid layout */
.infrastructure-grid {
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
                <a href="<?php echo $base_url; ?>infrastructure/infrastructure.php">Infrastructure</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>Classrooms</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/infra/classroom.jpg" 
             alt="Classrooms at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/></svg>
                        <span>Learning Environment</span>
                    </div>
                    <h1>Classrooms</h1>
                    <p>Modern, tech-enabled spaces designed for interactive legal education</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,2H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,2H5C3.9,2 3,2.9 3,4V18C3,19.1 3.9,20 5,20H19C20.1,20 21,19.1 21,18V4C21,2.9 20.1,2 19,2M12,3C12.55,3 13,3.45 13,4C13,4.55 12.55,5 12,5C11.45,5 11,4.55 11,4C11,3.45 11.45,3 12,3Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Modern Facilities</h4>
                        <p>12+ Smart Classrooms</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M3,3H11V11H3V3M13,3H21V11H13V3M3,13H11V21H3V13M13,13H21V21H13V13Z"/></svg>
                            <h3>About Our Classrooms</h3>
                        </div>
                        <div class="card-content">
                            <p>At Kamkus College of Law, our classrooms are designed to provide an optimal learning environment 
                            that blends traditional teaching methods with modern technology. Spacious, well-lit, and ergonomically 
                            designed, our classrooms facilitate focused learning and active participation.</p>
                            
                            <p>Each classroom is equipped with modern audio-visual systems, high-speed internet connectivity, and 
                            comfortable seating arrangements. The design promotes both lecture-style teaching and interactive 
                            discussions, enabling various pedagogical approaches needed for comprehensive legal education.</p>
                        </div>
                    </div>

                    <!-- Features Section -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M4,6H20V16H4M20,18A2,2 0 0,0 22,16V6C22,4.89 21.1,4 20,4H4C2.89,4 2,4.89 2,6V16A2,2 0 0,0 4,18H0V20H24V18H20Z"/></svg>
                            <h3>Classroom Features</h3>
                        </div>
                        <div class="card-content">
                            <p>Our classrooms are equipped with state-of-the-art technology to enhance the learning experience:</p>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,3H3C1.89,3 1,3.89 1,5V17A2,2 0 0,0 3,19H8V21H16V19H21A2,2 0 0,0 23,17V5C23,3.89 22.1,3 21,3M21,17H3V5H21V17Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Multimedia Equipped</h4>
                                        <p>High-definition smart displays for presentations, case analyses, and interactive teaching sessions 
                                        with touch functionality and wireless connectivity.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Interactive Layout</h4>
                                        <p>Thoughtfully designed seating arrangements, optimal lighting conditions, and acoustic treatments 
                                        to create a comfortable and productive learning environment.</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Learning Environment</h4>
                                        <p>Advanced recording systems to capture lectures for later review, enabling students to revisit 
                                        complex legal concepts and discussions at their own pace.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,21L15.6,16.2C14.6,15.45 13.35,15 12,15C10.65,15 9.4,15.45 8.4,16.2L12,21M12,9C9.3,9 6.81,10.14 4.93,12.36L3.5,10.67C6.18,7.64 8.97,6 12,6C15.03,6 17.82,7.64 20.5,10.67L19.07,12.36C17.19,10.14 14.7,9 12,9M12,3C7.95,3 4.21,4.34 1.2,6.6L2.62,8.3C5.1,6.45 8.45,5.5 12,5.5C15.55,5.5 18.9,6.45 21.38,8.3L22.8,6.6C19.79,4.34 16.05,3 12,3Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Wi-Fi Connectivity</h4>
                                        <p>Enterprise-grade Wi-Fi throughout all classrooms enabling seamless access to online research 
                                        databases, e-learning resources, and cloud storage for coursework.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Classroom Types -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5,20.5V11.5L12,6.5L17.5,11.5V20.5H14.5V17.5H9.5V20.5H6.5Z"/></svg>
                            <h3>Classroom Types</h3>
                        </div>
                        <div class="card-content">
                            <p>We offer different types of classrooms to accommodate various teaching methodologies and group sizes:</p>
                            
                            <div class="feature-list">
                                <?php
                                $classroom_types = [
                                    [
                                        "title" => "Lecture Halls",
                                        "description" => "Large, tiered seating facilities that can accommodate up to 100 students, ideal for guest lectures and core courses",
                                        "icon" => "fa-chalkboard-teacher"
                                    ],
                                    [
                                        "title" => "Seminar Rooms",
                                        "description" => "Medium-sized classrooms with flexible seating arrangements for group discussions and interactive sessions",
                                        "icon" => "fa-users"
                                    ],
                                    [
                                        "title" => "Tutorial Rooms",
                                        "description" => "Smaller rooms designed for tutorial sessions, specialized subjects, and focused group learning with 15-20 students",
                                        "icon" => "fa-user-friends"
                                    ],
                                    [
                                        "title" => "Tech-Enhanced Learning Spaces",
                                        "description" => "Specialized classrooms equipped with additional technology for simulations, digital presentations, and virtual learning experiences",
                                        "icon" => "fa-laptop"
                                    ]
                                ];

                                foreach ($classroom_types as $type) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo '<i class="fas ' . $type["icon"] . '"></i>';
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $type["title"] . '</h4>';
                                    echo '<p>' . $type["description"] . '</p>';
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
                    <!-- Infrastructure Facilities -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5,20.5V11.5L12,6.5L17.5,11.5V20.5H14.5V17.5H9.5V20.5H6.5Z"/></svg>
                            <h3>Infrastructure Facilities</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Explore all infrastructure facilities at Kamkus College
                            </p>
                            
                            <div class="infrastructure-grid">
                                <a href="<?php echo $base_url; ?>infrastructure/seminar-hall.php" class="infrastructure-link">
                                    <div class="infrastructure-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                                    </div>
                                    <div class="infrastructure-text">
                                        <span>Seminar Hall</span>
                                        <span class="infrastructure-description">Modern Conference Facility</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>infrastructure/library.php" class="infrastructure-link">
                                    <div class="infrastructure-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18,22A2,2 0 0,0 20,20V4A2,2 0 0,0 18,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18M6,4H18V20H6V4Z"/></svg>
                                    </div>
                                    <div class="infrastructure-text">
                                        <span>Library</span>
                                        <span class="infrastructure-description">Comprehensive Legal Collection</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>infrastructure/moot-court.php" class="infrastructure-link">
                                    <div class="infrastructure-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>
                                    </div>
                                    <div class="infrastructure-text">
                                        <span>Moot Court</span>
                                        <span class="infrastructure-description">Courtroom Simulation</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>infrastructure/classroom.php" class="infrastructure-link active">
                                    <div class="infrastructure-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,3H4A2,2 0 0,0 2,5V15A2,2 0 0,0 4,17H11V19.17L9.5,20.67L10.92,22.09L12,21L13.08,22.09L14.5,20.67L13,19.17V17H20A2,2 0 0,0 22,15V5A2,2 0 0,0 20,3M20,15H4V5H20V15Z"/></svg>
                                    </div>
                                    <div class="infrastructure-text">
                                        <span>Classrooms</span>
                                        <span class="infrastructure-description">Modern Learning Spaces</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>infrastructure/computer-lab.php" class="infrastructure-link">
                                    <div class="infrastructure-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,2H3C1.89,2 1,2.89 1,4V16A2,2 0 0,0 3,18H10V20H8V22H16V20H14V18H21A2,2 0 0,0 23,16V4C23,2.89 22.1,2 21,2M21,16H3V4H21V16Z"/></svg>
                                    </div>
                                    <div class="infrastructure-text">
                                        <span>Computer Labs</span>
                                        <span class="infrastructure-description">Technology Center</span>
                                    </div>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>infrastructure/cafeteria.php" class="infrastructure-link">
                                    <div class="infrastructure-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8.1,13.34L3.91,9.16C2.35,7.59 2.35,5.06 3.91,3.5L10.93,10.5L8.1,13.34M14.88,11.53C16.32,12.97 16.32,15.24 14.88,16.69C13.44,18.13 11.17,18.13 9.72,16.69L8.41,15.38L9.72,14.07L11.5,15.85C11.64,15.99 11.87,15.99 12.01,15.85C12.15,15.71 12.15,15.47 12.01,15.34L10.23,13.56L11.54,12.25L14.88,11.53M12.36,2.95C14.43,2.95 16.07,4.59 16.07,6.66C16.07,8.73 14.43,10.37 12.36,10.37C10.29,10.37 8.65,8.73 8.65,6.66C8.65,4.59 10.29,2.95 12.36,2.95Z"/></svg>
                                    </div>
                                    <div class="infrastructure-text">
                                        <span>Cafeteria</span>
                                        <span class="infrastructure-description">Dining Facility</span>
                                    </div>
                                </a>
                            </div>
                            
                            <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
                                <a href="<?php echo $base_url; ?>infrastructure/infrastructure.php"
                                   style="display: inline-flex; align-items: center; gap: 8px; color: #1E293B; text-decoration: none; font-size: 14px; font-weight: 500; transition: color 0.3s ease;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle;"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
                                    <span>View All Infrastructure</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Classroom Quick Facts -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,3H7A2,2 0 0,0 5,5V21L12,18L19,21V5C19,3.89 18.1,3 17,3Z"/></svg>
                            <h3>Classroom Quick Facts</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Essential information about our classroom facilities and policies
                            </p>
                            
                            <div class="resource-grid">
                                <a href="#" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5,20.5V11.5L12,6.5L17.5,11.5V20.5H14.5V17.5H9.5V20.5H6.5Z"/></svg>
                                    <span>12 Modern Classrooms</span>
                                </a>
                                
                                <a href="#" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    <span>40 Students Capacity</span>
                                </a>
                                
                                <a href="#" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.7L16.2,16.2Z"/></svg>
                                    <span>60-90 Minutes Sessions</span>
                                </a>
                                
                                <a href="#" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,3H3C1.89,3 1,3.89 1,5V17A2,2 0 0,0 3,19H8V21H16V19H21A2,2 0 0,0 23,17V5C23,3.89 22.1,3 21,3M21,17H3V5H21V17Z"/></svg>
                                    <span>Smart Display Technology</span>
                                </a>
                                
                                <a href="#" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,21L15.6,16.2C14.6,15.45 13.35,15 12,15C10.65,15 9.4,15.45 8.4,16.2L12,21M12,9C9.3,9 6.81,10.14 4.93,12.36L3.5,10.67C6.18,7.64 8.97,6 12,6C15.03,6 17.82,7.64 20.5,10.67L19.07,12.36C17.19,10.14 14.7,9 12,9M12,3C7.95,3 4.21,4.34 1.2,6.6L2.62,8.3C5.1,6.45 8.45,5.5 12,5.5C15.55,5.5 18.9,6.45 21.38,8.3L22.8,6.6C19.79,4.34 16.05,3 12,3Z"/></svg>
                                    <span>High-Speed Wi-Fi</span>
                                </a>
                                
                                <a href="#" class="resource-link" onclick="window.print(); return false;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z"/></svg>
                                    <span>Classroom Guidelines</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="content-card" style="background: linear-gradient(135deg, #1E293B, #364559);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Teaching Methodologies</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Our classrooms support diverse teaching approaches including case studies, Socratic method, group discussions, simulations, and technology-enhanced learning experiences.
                            </p>
                            
                            <div class="mt-4">
                                <a href="<?php echo $base_url; ?>academics/teaching-learning.php" 
                                   style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                    Learn More About Teaching
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once('../includes/footer.php'); ?> 
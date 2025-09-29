<?php
$page_title = "Student Participation - Kamkus College of Law";
$page_description = "Explore student participation opportunities at Kamkus College of Law including cultural activities, educational visits, and institutional initiatives for holistic development.";
$current_page = 'student-corner';

require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Student Participation page */

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

/* Fix for program icons in sidebar to make them round */
.program-icon {
    width: 32px !important;
    height: 32px !important;
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
    font-size: 16px !important;
}

.program-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px;
    border-radius: 8px;
    text-decoration: none;
    color: #374151;
    font-weight: 500;
    transition: all 0.3s ease;
    margin: -8px;
}

.program-link:hover {
    background: rgba(30, 41, 59, 0.05);
    color: #1E293B;
    transform: translateX(4px);
}

.program-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(30, 41, 59, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.program-link:hover .program-icon {
    background: rgba(30, 41, 59, 0.2);
}

.program-icon i {
    color: #1E293B;
    font-size: 16px;
}

.resource-link {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 0;
    border-bottom: 1px solid #f3f4f6;
    text-decoration: none;
    color: #1E293B;
    font-weight: 500;
    transition: all 0.3s ease;
}

.resource-link:last-child {
    border-bottom: none;
}

.resource-link:hover {
    text-decoration: underline;
    transform: translateX(2px);
}

.resource-link i {
    width: 16px;
    height: 16px;
    font-size: 16px;
}
</style>

<main class="teaching-learning-page">
    <!-- Breadcrumb -->
    <div class="content-section">
        <div class="container" style="max-width: 1200px;">
            <div class="breadcrumb">
                <a href="<?php echo $base_url; ?>">
                    <i class="fas fa-home"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo $base_url; ?>student-corner/">Student Corner</a>
                <i class="fas fa-chevron-right"></i>
                <span>Student Participation</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/gallery/yoga day.jpg" 
             alt="Student Participation at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <i class="fas fa-users"></i>
                        <span>Student Engagement</span>
                    </div>
                    <h1>Student Participation</h1>
                    <p>Engaging students in academic, cultural, and community development activities</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="stats-text">
                        <h4>Student Activities</h4>
                        <p>Holistic Development</p>
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
                            <i class="fas fa-users"></i>
                            <h3>Student Participation</h3>
                        </div>
                    <div class="card-content">
                        <p>
                            At Kamkus College of Law, we believe that student participation in various curricular, co-curricular, and extracurricular activities is crucial for holistic development. We encourage students to engage in a wide range of activities that complement their academic learning and help them develop essential skills required for their professional growth.
                        </p>
                        <p>
                            Our commitment to student participation extends beyond classroom learning, providing opportunities for students to showcase their talents, develop leadership skills, engage in community service, and participate in various legal and cultural activities. These experiences enrich their educational journey and prepare them for successful legal careers.
                        </p>
                    </div>
                </div>

                <!-- Briefing of Visits -->
                <div class="content-card">
                    <div class="card-header">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>Briefing of Visits</h3>
                    </div>
                    <div class="card-content">
                        <p>
                            Our students regularly participate in educational visits to courts, legal institutions, and other establishments to gain practical exposure and understand the real-world application of legal principles. These visits provide valuable insights and help bridge the gap between theory and practice.
                        </p>
                        
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Court Visits</h4>
                                    <p>Regular visits to the Supreme Court, High Courts, and District Courts to observe proceedings and understand court practices and procedures.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Law Firm Exposure</h4>
                                    <p>Visits to prestigious law firms providing students with insights into corporate legal practices and professional work environments.</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Legal Aid Clinics</h4>
                                    <p>Participation in legal aid clinics and camps to understand the practical aspects of providing legal assistance to underprivileged sections of society.</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Institutional Visits</h4>
                                    <p>Visits to various governmental and non-governmental institutions to understand their functioning and role in the legal system.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cultural Activities -->
                <div class="content-card">
                    <div class="card-header">
                        <i class="fas fa-calendar-alt"></i>
                        <h3>Cultural Activities (2017-2023)</h3>
                    </div>
                    <div class="card-content">
                        <p>
                            Our college organizes and participates in various cultural activities that provide students with opportunities to showcase their talents and develop their creative skills. These activities foster teamwork, leadership, and cultural awareness among students.
                        </p>
                        
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Annual Cultural Fest</h4>
                                    <p>Our flagship cultural event featuring music, dance, drama, and literary competitions that showcase student talents</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Law Day Celebrations</h4>
                                    <p>Special events organized to commemorate Constitution Day, Human Rights Day, and other significant legal milestones</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Inter-College Competitions</h4>
                                    <p>Active participation in various inter-college cultural and legal competitions across the region</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Cultural Exchange Programs</h4>
                                    <p>Opportunities for students to participate in cultural exchange programs with other institutions</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Talent Showcases</h4>
                                    <p>Regular events allowing students to display their artistic, literary, and performing arts abilities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Institutional Efforts -->
                <div class="content-card">
                    <div class="card-header">
                        <i class="fas fa-bullseye"></i>
                        <h3>Institutional Efforts / Initiatives</h3>
                    </div>
                    <div class="card-content">
                        <p>
                            Kamkus College of Law takes various initiatives to encourage and facilitate student participation in diverse activities. Our institutional efforts aim to create an environment that nurtures student growth and development.
                        </p>
                        
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Student Committees</h4>
                                    <p>Formation of various student-led committees for cultural activities, moot courts, legal aid, sports, and other areas, giving students leadership opportunities</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Mentorship Programs</h4>
                                    <p>Connecting senior students with juniors to provide guidance and support in academic and co-curricular activities</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Recognition and Awards</h4>
                                    <p>Special recognitions and awards for students who excel in various activities, motivating greater participation</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Financial Support</h4>
                                    <p>Providing financial assistance for students participating in national and international competitions and events</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Academic Programs -->
                    <div class="content-card">
                        <div class="card-header">
                            <i class="fas fa-graduation-cap"></i>
                            <h3>Academic Programs</h3>
                        </div>
                    <div class="card-content">
                        <p style="color: #374151; margin-bottom: 16px;">
                            Explore our comprehensive range of law programs:
                        </p>
                        
                        <div style="display: flex; flex-direction: column; gap: 16px;">
                            <a href="<?php echo $base_url; ?>academics/llm.php" class="program-link">
                                <div class="program-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <span>LL.M. (2 Years)</span>
                            </a>
                            
                            <a href="<?php echo $base_url; ?>academics/llb.php" class="program-link">
                                <div class="program-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <span>LL.B. (3 Years)</span>
                            </a>
                            
                            <a href="<?php echo $base_url; ?>academics/ba-llb.php" class="program-link">
                                <div class="program-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <span>B.A., LL.B. (5 Years)</span>
                            </a>
                            
                            <a href="<?php echo $base_url; ?>academics/bcom-llb.php" class="program-link">
                                <div class="program-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <span>B.Com., LL.B. (5 Years)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Resources -->
                <div class="content-card">
                    <div class="card-header">
                        <i class="fas fa-book-open"></i>
                        <h3>Student Resources</h3>
                    </div>
                    <div class="card-content">
                        <p style="color: #374151; margin-bottom: 16px;">
                            Access important student resources:
                        </p>
                        
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            <a href="https://kamkus.org/assets/pdf/culturalactivities.pdf" class="resource-link">
                                <i class="fas fa-calendar-alt"></i>
                                Cultural Activities
                            </a>
                            
                            <a href="https://kamkus.org/assets/pdf/guestlecture.pdf" class="resource-link">
                                <i class="fas fa-users"></i>
                                Guest Lectures
                            </a>
                            
                            <a href="<?php echo $base_url; ?>student-corner/feedback-suggestions.php" class="resource-link">
                                <i class="fas fa-file-alt"></i>
                                Feedback & Suggestions
                            </a>
                            
                            <a href="<?php echo $base_url; ?>student-corner/value-added-program.php" class="resource-link">
                                <i class="fas fa-book-open"></i>
                                Value Added Program
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Join Our Activities -->
                <div style="background: linear-gradient(135deg, #1E293B, #364559); border-radius: 12px; padding: 24px; color: white; position: relative; overflow: hidden; box-shadow: 0 10px 25px -3px rgba(30, 41, 59, 0.3);">
                    <!-- Background decorations -->
                    <div style="position: absolute; right: -40px; bottom: -40px; width: 160px; height: 160px; background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
                    <div style="position: absolute; right: 40px; top: 40px; width: 80px; height: 80px; background: rgba(255, 255, 255, 0.05); border-radius: 50%;"></div>
                    
                    <h3 style="font-weight: bold; font-size: 18px; margin-bottom: 12px;">Join Our Activities</h3>
                    <p style="font-size: 14px; color: rgba(255, 255, 255, 0.8); margin-bottom: 20px;">
                        Interested in participating in our student activities? Contact the Student Activities Coordinator for more information.
                    </p>
                    
                    <a href="<?php echo $base_url; ?>contact.php" style="display: inline-flex; align-items: center; background: rgba(255, 255, 255, 0.1); color: white; padding: 8px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease; backdrop-filter: blur(4px);" onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                        <i class="fas fa-comments" style="margin-right: 8px;"></i>
                        Contact Coordinator
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
<?php
$page_title = "Library Advisory Committee - Kamkus College of Law";
$page_description = "Library Advisory Committee of Kamkus College of Law - Guiding library operations, collection development, and promoting academic excellence through strategic library services";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Library Advisory Committee page */

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
    background: rgba(59, 130, 246, 0.1) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    margin-top: 2px !important;
}

.feature-icon svg {
    color: #3b82f6 !important;
    width: 20px;
    height: 20px;
}

/* Committee Members Section Styles */
.committee-members-section {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    margin-top: 16px;
}

.committee-members-header {
    background: linear-gradient(135deg, #334155, #1e293b);
    color: white;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 600;
    font-size: 16px;
}

.committee-members-header svg {
    color: white;
    width: 20px;
    height: 20px;
}

.committee-members-list {
    padding: 0;
    margin: 0;
    list-style: none;
}

.committee-member-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 20px;
    border-bottom: 1px solid #f1f5f9;
    transition: background-color 0.3s ease;
}

.committee-member-item:last-child {
    border-bottom: none;
}

.committee-member-item:hover {
    background-color: #f8fafc;
}

.member-name {
    font-weight: 600;
    color: #1e293b;
    font-size: 15px;
}

.member-position {
    color: #64748b;
    font-size: 14px;
    font-weight: 500;
}



/* Function cards styling */
.functions-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.function-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 0;
    padding: 16px;
    background: rgba(59, 130, 246, 0.05);
    border-radius: 12px;
    border-left: 4px solid #3b82f6;
}

.function-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);
}

.function-icon svg {
    color: white;
    width: 24px;
    height: 24px;
}

.function-content h4 {
    color: #1E293B;
    margin: 0 0 8px 0;
    font-weight: 600;
    font-size: 16px;
}

.function-content p {
    color: #64748b;
    margin: 0;
    line-height: 1.6;
    font-size: 14px;
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
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
}

.committee-list a i {
    width: 20px;
    text-align: center;
}

/* Responsive design */
@media (max-width: 768px) {
    .committee-members-header {
        padding: 14px 16px;
        font-size: 15px;
    }
    
    .committee-member-item {
        padding: 14px 16px;
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
    
    .member-name {
        font-size: 14px;
    }
    
    .member-position {
        font-size: 13px;
    }
    
    .functions-list {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .function-item {
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }
    
    .function-icon {
        margin: 0 auto;
    }
}

/* Tablet responsive design */
@media (max-width: 1024px) and (min-width: 769px) {
    .functions-list {
        gap: 16px;
    }
    
    .function-item {
        padding: 14px;
    }
    
    .function-content h4 {
        font-size: 15px;
    }
    
    .function-content p {
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
                <span>Library Advisory Committee</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/lib1.jpg" 
             alt="Library Advisory Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19Z"/></svg>
                        <span>Library Services</span>
                    </div>
                    <h1>Library Advisory Committee</h1>
                    <p>Guiding library operations, collection development, and promoting academic excellence through strategic library services</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Academic Year</h4>
                        <p>2024-2025</p>
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
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19Z"/></svg>
                            <h3>About the Library Advisory Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Library Advisory Committee (LAC) serves as the central guiding force for the library's operations and growth. Empowered by the principal to nominate its members, the LAC plays a critical role in:</p>
                            
                            <div class="feature-list" style="margin-top: 20px;">
                                <div class="feature-item" style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9,4V6H15V4H17V6H21V8H3V6H7V4H9M3,10H21V20A2,2 0 0,1 19,22H5A2,2 0 0,1 3,20V10Z"/></svg>
                                    </div>
                                    <div>
                                        <strong>Policy Formulation:</strong> The LAC crafts and implements policies that ensure the smooth functioning and development of the library, fostering a vibrant learning environment.
                                    </div>
                                </div>
                                
                                <div class="feature-item" style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17M11,9H13V7H11V9Z"/></svg>
                                    </div>
                                    <div>
                                        <strong>Performance Oversight:</strong> The LAC holds the library accountable for the effective execution of its duties and responsibilities.
                                    </div>
                                </div>
                                
                                <div class="feature-item" style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z"/></svg>
                                    </div>
                                    <div>
                                        <strong>Advocacy and Development:</strong> The LAC acts as a champion for the library's development plans, actively advocating for necessary resources and support from the management.
                                    </div>
                                </div>
                            </div>
                            
                            <p style="margin-top: 16px;">Through this collaborative effort, the LAC ensures the library's continued growth and ability to serve the needs of the community.</p>
                            
                            <p>With great pleasure, we announce the formation of the Library Advisory Committee (LAC) for the academic year 2024-2025. The LAC, chaired by esteemed Principal Sir, will play a pivotal role in guiding the library's growth and ensuring its smooth operation, ultimately serving the best interests of our valued users.</p>
                        </div>
                    </div>



                    <!-- Duties and Functions -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                            <h3>Duties and Functions of the Library Advisory Committee</h3>
                        </div>
                        <div class="card-content">
                            <p>The Library Advisory Committee (LAC) serves as a strategic advisor to the library, providing essential guidance in several key areas:</p>
                            
                            <div class="functions-list" style="margin-top: 24px;">
                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15V18A1,1 0 0,1 22,19H21V20A2,2 0 0,1 19,22H5A2,2 0 0,1 3,20V19H2A1,1 0 0,1 1,18V15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2M7.5,13A0.5,0.5 0 0,0 7,13.5A0.5,0.5 0 0,0 7.5,14A0.5,0.5 0 0,0 8,13.5A0.5,0.5 0 0,0 7.5,13M16.5,13A0.5,0.5 0 0,0 16,13.5A0.5,0.5 0 0,0 16.5,14A0.5,0.5 0 0,0 17,13.5A0.5,0.5 0 0,0 16.5,13Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Vision & Direction</h4>
                                        <p>The LAC establishes a clear vision for the library's future, outlining its overall goals and direction.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V10.5C3.8,10.5 4.5,11.2 4.5,12C4.5,12.8 3.8,13.5 3,13.5V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5C16.2,13.5 15.5,12.8 15.5,12C15.5,11.2 16.2,10.5 17,10.5M21,16H19V19H16V21H19A2,2 0 0,0 21,19V16M16,3V5H19V8H21V5A2,2 0 0,0 19,3H16M5,3H8V5H5V8H3V5A2,2 0 0,0 5,3M3,16V19A2,2 0 0,0 5,21H8V19H5V16H3Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Collection Development</h4>
                                        <p>The LAC plays a crucial role in shaping the library's collection and development policy, ensuring it remains relevant and responsive to user needs.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17,17H7V14L9.5,9.5L12.5,12.5L17,17M12.5,11A1.5,1.5 0 0,0 14,9.5A1.5,1.5 0 0,0 12.5,8A1.5,1.5 0 0,0 11,9.5A1.5,1.5 0 0,0 12.5,11Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Innovation & Technology</h4>
                                        <p>The LAC actively monitors advancements in information technologies, networking, and library automation. By staying abreast of these trends, the LAC guides the library in its day-to-day operations to leverage new tools and resources effectively.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L2,12H5V20H19V12H22L12,3M11,8H13V14H15L12,17L9,14H11V8Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Infrastructure & Services</h4>
                                        <p>The LAC champions the development of the library's infrastructure, facilities, materials, and services. Through strategic planning, the LAC ensures the library remains a well-equipped and dynamic space for learning and exploration.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>User Feedback</h4>
                                        <p>The LAC values user input and actively evaluates suggestions from library patrons. This feedback loop allows the LAC to tailor services and resources to best serve the needs of the community.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Collection Management</h4>
                                        <p>The LAC plays a central role in crafting and implementing a comprehensive collection development and selection policy for the library. This policy ensures the library's collection remains current, diverse, and aligned with the evolving needs of its users.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Committee Members -->
                    <div class="content-card">
                        <div class="card-content" style="padding: 0;">
                            <div class="committee-members-section">
                                <div class="committee-members-header">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,4C18.11,4 19.86,5.69 19.86,8C19.86,10.31 18.11,12 16,12C13.89,12 12.14,10.31 12.14,8C12.14,5.69 13.89,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M6,6V9H4V6H1V4H4V1H6V4H9V6H6M6,16V19H4V16H1V14H4V11H6V14H9V16H6Z"/></svg>
                                    Committee Members
                                </div>
                                <ul class="committee-members-list">
                                    <li class="committee-member-item">
                                        <span class="member-name">Dr. Ambuj Sharma</span>
                                        <span class="member-position">Chairperson</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Dr. Seema Singh</span>
                                        <span class="member-position">Secretary</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Ms. Neetu Mankotia</span>
                                        <span class="member-position">Member</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Ms. Parul Sharma</span>
                                        <span class="member-position">Convenor</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Ms. Preeti Teotia</span>
                                        <span class="member-position">Member (Student) </span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Ritik</span>
                                        <span class="member-position">Member (Student)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Related Committees -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,4C18.11,4 19.86,5.69 19.86,8C19.86,10.31 18.11,12 16,12C13.89,12 12.14,10.31 12.14,8C12.14,5.69 13.89,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M6,6V9H4V6H1V4H4V1H6V4H9V6H6M6,16V19H4V16H1V14H4V11H6V14H9V16H6Z"/></svg>
                            <h3>Other Committees</h3>
                        </div>
                        <div class="card-content">
                            <ul class="committee-list">
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/cultural.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3V13.55C11.41,13.21 10.73,13 10,13A4,4 0 0,0 6,17A4,4 0 0,0 10,21A4,4 0 0,0 14,17V7H18V5H12V3Z"/></svg>
                                        Cultural Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/environmental.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z"/></svg>
                                        Environmental Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/moot-court.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M10.29,12L13,9.3L14.42,10.7L13.12,12L14.42,13.3L13,14.7L10.29,12M8.71,12L6,9.3L4.58,10.7L5.88,12L4.58,13.3L6,14.7L8.71,12M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8H20V18Z"/></svg>
                                        Moot Court Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/examination.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                        Examination Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/sports.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z"/></svg>
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
                    <div class="content-card" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Library Services</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Need assistance with library services or have suggestions for our collection? Contact the Library Advisory Committee for guidance and support.
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
<?php
$page_title = "Value Added Programs - Kamkus College of Law";
$page_description = "Enhance your skills and knowledge beyond the traditional curriculum with our value-added programs designed to make students more employable.";
$current_page = 'student-corner';

require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">
<style>
/* Program Item Styles */
.program-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem 0;
    border-bottom: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.program-item:last-child {
    border-bottom: none;
}

.program-item:hover {
    background: rgba(30, 41, 59, 0.05);
    padding-left: 0.5rem;
    border-radius: 0.5rem;
}

.program-icon {
    width: 2rem;
    height: 2rem;
    background: rgba(30, 41, 59, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1E293B;
    flex-shrink: 0;
    text-align: center;
    line-height: 1;
}

.program-icon i {
    display: block;
    font-size: 0.875rem;
    line-height: 1;
    text-align: center;
    vertical-align: middle;
}

.program-details h4 {
    font-weight: 600;
    margin: 0 0 0.25rem 0;
    color: #1E293B;
    font-size: 0.875rem;
}

.program-details p {
    margin: 0;
    font-size: 0.75rem;
    color: #64748b;
}

/* Badge styling for publications */
.badge {
    display: inline-block;
    background: rgba(30, 41, 59, 0.1);
    color: #1E293B;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    font-size: 0.75rem;
    font-weight: 500;
    margin-left: 0.5rem;
}

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

/* Toolbar Styles */
.toolbar-section {
    background: linear-gradient(135deg, #f8fafc, #e2e8f0);
    border-bottom: 1px solid #cbd5e1;
    padding: 1rem 0;
    margin-bottom: 2rem;
}

.toolbar-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.toolbar-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.toolbar-item {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 0.75rem;
    text-align: center;
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.toolbar-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    border-color: #1E293B;
}

.toolbar-item i {
    font-size: 1.5rem;
    color: #1E293B;
    margin-bottom: 0.5rem;
    display: block;
}

.toolbar-item span {
    font-size: 0.875rem;
    font-weight: 600;
    color: #1E293B;
    display: block;
}

.additional-section {
    background: white;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.additional-section h4 {
    color: #1E293B;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.additional-section h4 i {
    color: #059669;
}

.additional-items {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0.75rem;
}

.additional-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    padding: 0.5rem 0.75rem;
    font-size: 0.875rem;
    color: #1E293B;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.additional-item:hover {
    background: #1E293B;
    color: white;
}

.additional-item i {
    font-size: 0.75rem;
    color: #059669;
}

.additional-item:hover i {
    color: white;
}

/* SVG Icon Styles */
svg {
    display: inline-block;
    vertical-align: middle;
}

.breadcrumb svg {
    flex-shrink: 0;
}

.toolbar-item svg {
    display: block;
    margin: 0 auto;
}

.card-header svg {
    flex-shrink: 0;
}

.feature-icon {
    width: 3rem !important;
    height: 3rem !important;
    background: rgba(30, 41, 59, 0.1) !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
}

.feature-icon svg {
    display: block;
    width: 1.5rem;
    height: 1.5rem;
}

.program-icon {
    width: 2rem !important;
    height: 2rem !important;
    background: rgba(30, 41, 59, 0.1) !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
}

.program-icon svg {
    display: block;
    width: 1rem;
    height: 1rem;
}

.contact-btn svg {
    margin-right: 0.5rem;
}

ul.program-list a svg {
    margin-right: 0.5rem;
    flex-shrink: 0;
}
</style>

<main class="teaching-learning-page">
    <!-- Breadcrumb -->
    <div class="content-section">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $base_url; ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.1L1 12h3v9h6v-6h4v6h6v-9h3L12 2.1z"/>
                    </svg>
                    Home
                </a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6-6 6-1.41-1.41z"/>
                </svg>
                <span>Value Added Program</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <!-- <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/gallery/yoga day.jpg" alt="Value Added Programs at Kamkus College of Law" class="hero-image">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/>
                        </svg>
                        <span>Career Enhancement</span>
                    </div>
                    <h1>Value Added Programs</h1>
                    <p>Enhancing student skills and knowledge beyond the traditional curriculum</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <div class="stats-text">
                        <h4>Programs Offered</h4>
                        <p>Industry-Relevant Skills</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Main Content -->
    <div class="content-section">
        <div class="container">
            <div class="content-grid">
                <!-- Main Content Area -->
                <div class="main-content">
                    <!-- About section -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <h3>About Value Added Programs</h3>
                        </div>
                        <div class="card-content">
                            <p>At Kamkus College of Law, we offer a range of value-added programs designed to enhance the knowledge and skills of our students beyond their regular curriculum. These programs aim to bridge the gap between academic learning and industry requirements, making our students more employable and better prepared for their professional careers.</p>
                            <p>Our value-added programs are designed and delivered by industry experts, senior legal practitioners, and experienced faculty members. These programs include certificate courses, workshops, skill development sessions, and specialized training in emerging areas of law, providing students with a competitive edge in the legal profession.</p>
                        </div>
                    </div>

                    <!-- Program Objectives -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/>
                            </svg>
                            <h3>Program Objectives</h3>
                        </div>
                        <div class="card-content">
                            <p>Our value-added programs are designed with specific objectives to enhance the overall development of our students and provide them with additional skills that are highly valued in the legal profession.</p>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M11 21h-1l1-7H7.5c-.58 0-.57-.32-.38-.66.19-.34.05-.08.07-.12C8.48 10.94 10.42 7.54 13 3h1l-1 7h3.5c.49 0 .56.33.47.51l-.07.15C12.96 17.55 11 21 11 21z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Skill Enhancement</h4>
                                        <p>Developing practical legal skills such as drafting, pleading, negotiation, and client counseling to complement theoretical knowledge.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Specialized Knowledge</h4>
                                        <p>Providing in-depth knowledge in specialized and emerging areas of law such as cyber law, intellectual property rights, and environmental law.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.993 1.993 0 0 0 18.06 7c-.8 0-1.54.5-1.85 1.26l-1.24 3.76-2.34-5.64C12.37 5.55 11.7 5 10.96 5c-.8 0-1.54.5-1.85 1.26L6.83 12H4v2h4.5l1.5-4.5 2.5 6 1.5-4.5H16v8h4z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Industry Exposure</h4>
                                        <p>Facilitating interaction with legal professionals, providing insights into real-world practices and challenges in the legal profession.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M3 3h18v18H3V3zm16 16V5H5v14h14zM7 7h2v2H7V7zm4 0h2v2h-2V7zm4 0h2v2h-2V7zM7 11h2v2H7v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2zM7 15h2v2H7v-2zm4 0h2v2h-2v-2z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Career Preparation</h4>
                                        <p>Preparing students for diverse career paths in the legal field by developing relevant skills and knowledge required for various legal roles.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Programs -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <h3>Featured Programs</h3>
                        </div>
                        <div class="card-content">
                            <p>We offer a diverse range of value-added programs throughout the academic year. Here are some of our key programs that have been highly beneficial for our students:</p>
                            
                            <div class="feature-list">
                                <?php
                                $featured_programs = [
                                    [
                                        "title" => "Certificate Course in Legal Research and Writing",
                                        "description" => "A comprehensive course focusing on advanced legal research methodologies, citation practices, and effective legal writing techniques"
                                    ],
                                    [
                                        "title" => "Workshop on Alternative Dispute Resolution",
                                        "description" => "Hands-on training in negotiation, mediation, and arbitration techniques by experienced practitioners and retired judges"
                                    ],
                                    [
                                        "title" => "Cyber Law and Digital Forensics Program",
                                        "description" => "An intensive program covering legal aspects of cybercrime, digital evidence, and regulatory frameworks for digital transactions"
                                    ],
                                    [
                                        "title" => "Legal Drafting and Conveyancing Skills",
                                        "description" => "Practical training in drafting legal documents, contracts, agreements, and pleadings with feedback from practicing advocates"
                                    ],
                                    [
                                        "title" => "Corporate Law and Compliance Certification",
                                        "description" => "Specialized course on corporate governance, compliance requirements, and regulatory frameworks for business organizations"
                                    ]
                                ];

                                foreach ($featured_programs as $program) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">';
                                    echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>';
                                    echo '</svg>';
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $program["title"] . '</h4>';
                                    echo '<p>' . $program["description"] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Program Benefits -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <h3>Program Benefits</h3>
                        </div>
                        <div class="card-content">
                            <p>Participating in our value-added programs offers numerous benefits to students, helping them stand out in the competitive legal marketplace and preparing them for successful careers.</p>
                            
                            <div class="feature-list">
                                <?php
                                $benefits = [
                                    [
                                        "title" => "Enhanced Employability",
                                        "description" => "Gain additional qualifications and specialized skills that make you more attractive to potential employers in the legal sector"
                                    ],
                                    [
                                        "title" => "Practical Experience",
                                        "description" => "Bridge the gap between theoretical knowledge and practical application through hands-on training and real-world case studies"
                                    ],
                                    [
                                        "title" => "Industry Recognition",
                                        "description" => "Receive certificates and credentials recognized by legal firms, corporate legal departments, and judicial institutions"
                                    ],
                                    [
                                        "title" => "Networking Opportunities",
                                        "description" => "Connect with legal professionals, industry experts, and fellow participants, building a valuable professional network"
                                    ]
                                ];

                                foreach ($benefits as $benefit) {
                                    echo '<div class="feature-item">';
                                    echo '<div class="feature-icon">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">';
                                    echo '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>';
                                    echo '</svg>';
                                    echo '</div>';
                                    echo '<div class="feature-text">';
                                    echo '<h4>' . $benefit["title"] . '</h4>';
                                    echo '<p>' . $benefit["description"] . '</p>';
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
                    <!-- Program Schedule -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                            </svg>
                            <h3>Upcoming Programs</h3>
                        </div>
                        <div class="card-content">
                            <p>Check out our upcoming value-added programs:</p>
                            
                            <div class="program-list">
                                <div class="program-item">
                                    <div class="program-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                        </svg>
                                    </div>
                                    <div class="program-details">
                                        <h4>Legal Tech Workshop</h4>
                                        <p>15-20 June 2024</p>
                                    </div>
                                </div>
                                <div class="program-item">
                                    <div class="program-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                        </svg>
                                    </div>
                                    <div class="program-details">
                                        <h4>IPR Certificate Course</h4>
                                        <p>1-15 July 2024</p>
                                    </div>
                                </div>
                                <div class="program-item">
                                    <div class="program-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                        </svg>
                                    </div>
                                    <div class="program-details">
                                        <h4>Advanced Legal Research</h4>
                                        <p>5-12 August 2024</p>
                                    </div>
                                </div>
                                <div class="program-item">
                                    <div class="program-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                        </svg>
                                    </div>
                                    <div class="program-details">
                                        <h4>Advocacy Skills Program</h4>
                                        <p>1-10 September 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Resources -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                            <h3>Student Resources</h3>
                        </div>
                        <div class="card-content">
                            <p>Access other student resources:</p>
                            
                            <ul class="program-list">
                                <li><a href="https://kamkus.org/assets/pdf/valueaddedcertificate.pdf" target="_blank" rel="noopener noreferrer">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14 17H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2zM19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                                    </svg>
                                    Value Added Certificates (PDF)</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Value_Added_Programmes.pdf" target="_blank" rel="noopener noreferrer">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14 17H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2zM19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                                    </svg>
                                    Value Added Program Brochure (PDF)</a></li>
                                <!-- <li><a href="<?php echo $base_url; ?>student-corner/student-participation.php">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.993 1.993 0 0 0 18.06 7c-.8 0-1.54.5-1.85 1.26l-1.24 3.76-2.34-5.64C12.37 5.55 11.7 5 10.96 5c-.8 0-1.54.5-1.85 1.26L6.83 12H4v2h4.5l1.5-4.5 2.5 6 1.5-4.5H16v8h4z"/>
                                    </svg>
                                    Student Participation</a></li>
                                <li><a href="https://kamkus.org/assets/pdf/culturalactivities.pdf" target="_blank">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                    </svg>
                                    Cultural Activities</a></li>
                                <li><a href="https://kamkus.org/assets/pdf/guestlecture.pdf" target="_blank">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.993 1.993 0 0 0 18.06 7c-.8 0-1.54.5-1.85 1.26l-1.24 3.76-2.34-5.64C12.37 5.55 11.7 5 10.96 5c-.8 0-1.54.5-1.85 1.26L6.83 12H4v2h4.5l1.5-4.5 2.5 6 1.5-4.5H16v8h4z"/>
                                    </svg>
                                    Guest Lectures</a></li>
                                <li><a href="<?php echo $base_url; ?>student-corner/feedback-suggestions.php">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
                                    </svg>
                                    Feedback & Suggestions</a></li> -->
                            </ul>
                        </div>
                    </div>

                    <!-- Program Registration -->
                    <div class="content-card contact-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            <h3>Register for Programs</h3>
                        </div>
                        <div class="card-content">
                            <p>Interested in our value-added programs? Contact our Program Coordinator for registration details and eligibility criteria.</p>
                            
                            <a href="<?php echo $base_url; ?>contact.php" class="contact-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                                Contact Coordinator
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?> 
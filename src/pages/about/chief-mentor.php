<?php
// Set page-specific variables
$page_title = "Chief Mentor - Kamkus College of Law";
$page_description = "Learn about our Chief Mentor at Kamkus College of Law. Guidance from Karunakar Shukla, with over 20 years of experience in legal education.";
$default_title = "Kamkus College of Law";
$default_description = "Kamkus College of Law is a premier institution dedicated to legal education excellence.";
$current_page = "about";
require_once '../../includes/config.php';

// Include header
include '../../includes/header.php';
?>

<!-- Additional CSS for this page -->
<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/about.css">
<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/chief-mentor.css">

<style>
/* SVG Icon Styles */
.svg-icon {
    display: inline-block;
    width: 1.2em;
    height: 1.2em;
    vertical-align: middle;
    fill: currentColor;
    margin-right: 0.25em;
}

.svg-icon-lg {
    width: 1.5em;
    height: 1.5em;
}

.svg-icon-xl {
    width: 2em;
    height: 2em;
}

.svg-icon-2x {
    width: 2.5em;
    height: 2.5em;
}

/* Badge Icon Alignment */
.mentor-badge .svg-icon,
.badge .svg-icon {
    width: 16px !important;
    height: 16px !important;
    margin-right: 8px !important;
}

/* Profile Icon Alignment */
.profile-icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 40px;
    height: 40px;
}

.profile-icon .svg-icon {
    width: 20px !important;
    height: 20px !important;
    margin-right: 0 !important;
}

/* Experience Icon Alignment */
.experience-icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.experience-icon .svg-icon {
    width: 24px !important;
    height: 24px !important;
    margin-right: 0 !important;
}

/* Message Icon Alignment */
.message-icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.message-icon .svg-icon {
    width: 24px !important;
    height: 24px !important;
    margin-right: 0 !important;
}

/* CTA Button Icons */
.cta-button .svg-icon {
    width: 18px !important;
    height: 18px !important;
}

.cta-button .svg-icon.left {
    margin-right: 8px !important;
}

.cta-button .svg-icon.right {
    margin-left: 8px !important;
    margin-right: 0 !important;
}

/* Expand Icon */
.expand-icon .svg-icon {
    width: 16px !important;
    height: 16px !important;
    margin-right: 0 !important;
}
</style>

<div class="breadcrumb fade-in">
    <div class="container">
        <a href="<?php echo $base_url; ?>">Home</a> &gt; <a href="#">About</a> &gt; Chief Mentor
    </div>
</div>

<section class="page-content">
    <div class="container">
        <!-- Hero Section -->
        <div class="hero-section slide-in-up">
            <div class="hero-overlay"></div>
            <div class="hero-gradient"></div>
            
            <div class="hero-content">
                <div class="hero-image scale-in delay-200">
                    <img src="https://kamkus.summitcodeworks.com/_next/image?url=%2Fmain_heads%2Fkarunakar_shukla.jpg&w=828&q=75" alt="Chief Mentor">
                </div>
                
                <div class="hero-text">
                    <div class="mentor-badge slide-in-up delay-300">
                        <svg class="svg-icon" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span>Mentorship</span>
                    </div>
                    <h1 class="slide-in-up delay-400">Mr. Karunakar Shukla</h1>
                    <p class="subtitle slide-in-up delay-500">Chief Mentor, Kamkus College of Law</p>
                    <p class="subtitle slide-in-up delay-500">Secretary, Bhagirath Sewa Sansthan</p>
                    <p class="slide-in-up delay-600">Guiding the next generation of legal professionals with wisdom and experience</p>
                </div>
            </div>

            <div class="experience-badge scale-in delay-500">
                <div class="experience-icon">
                    <svg class="svg-icon" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <div class="experience-text">
                    <p>Experience</p>
                    <p>20+ Years in Legal Education</p>
                </div>
            </div>
        </div>

        <div class="content-grid">
            <!-- Profile Sidebar -->
            <div class="profile-sidebar slide-in-left">
                <div class="sidebar-content">
                    <div class="sidebar-header slide-in-up delay-200">
                        <h2>Quick Info</h2>
                        <p>Get to know our Chief Mentor</p>
                    </div>
                    
                    <div class="profile-items">
                        <div class="profile-item slide-in-up delay-300">
                            <div class="profile-icon">
                                <svg class="svg-icon" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <div class="profile-detail">
                                <p>Position</p>
                                <p>Chief Mentor</p>
                            </div>
                        </div>
                        
                        <div class="profile-item slide-in-up delay-400">
                            <div class="profile-icon">
                                <svg class="svg-icon" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <div class="profile-detail">
                                <p>Expertise</p>
                                <p>Legal Education & Mentorship</p>
                            </div>
                        </div>
                        
                        <div class="profile-item slide-in-up delay-500">
                            <div class="profile-icon">
                                <svg class="svg-icon" viewBox="0 0 24 24">
                                    <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                                </svg>
                            </div>
                            <div class="profile-detail">
                                <p>Office Hours</p>
                                <p>Monday to Friday (11:00 AM–1:00 PM)</p>
                            </div>
                        </div>
                        
                        <div class="profile-item slide-in-up delay-600">
                            <div class="profile-icon">
                                <svg class="svg-icon" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <div class="profile-detail">
                                <p>Contact</p>
                                <p>chiefmentor@kamkus.org</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contributions-box slide-in-up delay-700">
                        <h3><svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg> Contributions</h3>
                        <ul class="contributions-list">
                            <li>
                                <span>•</span> 
                                <span>Designed holistic legal curriculum</span>
                            </li>
                            <li>
                                <span>•</span> 
                                <span>Mentored 500+ law graduates</span>
                            </li>
                            <li>
                                <span>•</span> 
                                <span>Led legal aid initiatives for 15+ years</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Main content area -->
            <div class="main-content">
                <!-- Chief Mentor's Message -->
                <div class="content-card slide-in-right">
                    <div class="message-header">
                        <div class="message-icon scale-in delay-300">
                            <svg class="svg-icon" viewBox="0 0 24 24">
                                <path d="M21.99 4c0-1.1-.89-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                            </svg>
                        </div>
                        <h2 class="message-title">Message From The Chief Mentor</h2>
                    </div>
                    
                    <div class="message-content fade-in delay-400">
                        <p class="greeting">Dear Students and Colleagues,</p>
                        
                        <p>It gives me immense pleasure to address you as the Chief Mentor of Kamkus College of Law. In today's rapidly evolving legal landscape, the role of legal education has become more crucial than ever. The law is not merely a set of rules and regulations but a dynamic instrument of social change and justice.</p>
                        
                        <p>At Kamkus College of Law, we are committed to providing an education that goes beyond textbooks and classrooms. Our approach is holistic, focusing on developing not just legal knowledge but also critical thinking, ethical reasoning, and professional skills that are essential for success in the legal profession.</p>
                        
                        <div id="quote-box" class="quote-box slide-in-left delay-600">
                            <p>"The legal profession today demands professionals who can navigate complex legal issues with confidence and integrity. Our curriculum and teaching methodology are designed to prepare students for these challenges."</p>
                            
                            <div class="quote-expanded" style="height:auto; opacity:1; overflow:visible; display:none;">
                                <p>As we guide our students through their educational journey, we emphasize practical skills development, ethical considerations, and a deep understanding of the law's societal impact. This comprehensive approach ensures our graduates are well-equipped to make meaningful contributions to the legal profession.</p>
                            </div>
                            
                            <div class="expand-icon">
                                <svg class="svg-icon" viewBox="0 0 24 24">
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <p>As Chief Mentor, my role is to guide and support both faculty and students in their academic and professional journeys. I work closely with the faculty to ensure that our teaching methods and curriculum remain relevant and up-to-date. For students, I am available to provide guidance on academic matters, career choices, and professional development.</p>
                        
                        <p>I believe that a legal education should inspire a commitment to social justice and public service. At Kamkus College of Law, we encourage our students to use their legal knowledge and skills to contribute to society and uphold the principles of justice, equality, and human dignity.</p>
                        
                        <p>To the students of Kamkus College of Law, I encourage you to make the most of the opportunities available to you. Engage actively in classroom discussions, participate in co-curricular activities, and seek knowledge beyond the prescribed curriculum. Remember that the legal profession demands continuous learning and adaptation.</p>
                        
                        <p>I look forward to interacting with all of you and contributing to the growth and development of Kamkus College of Law.</p>
                        
                        <div class="message-signature">
                            <p>With best wishes,<br>
                            <span class="name">Mr. Karunakar Shukla</span><br>
                            Chief Mentor</p>
                        </div>
                    </div>
                </div>
                
                <!-- Call to Action -->
                <div class="cta-section slide-in-right delay-300">
                    <h3>Explore More Leadership Messages</h3>
                    
                    <div class="cta-buttons">
                        <a href="principal.php" class="cta-button slide-in-up delay-500">
                            <svg class="svg-icon left" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            Principal's Message
                            <svg class="svg-icon right" viewBox="0 0 24 24">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                            </svg>
                        </a>
                        
                        <a href="#" class="cta-button secondary slide-in-up delay-600">
                            <svg class="svg-icon left" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            Secretary's Message
                            <svg class="svg-icon right" viewBox="0 0 24 24">
                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php
// Optional: Add any page-specific variables for the footer
$visitor_count = "225"; // This can be dynamically generated if needed

// Include footer
include('../includes/footer.php');
?>

<!-- Page-specific JavaScript -->
<script src="<?php echo $base_url; ?>js/chief-mentor.js"></script>

<style>
    /* Fallback for FontAwesome icons that might be missing */
    .fas.fa-sparkles:before,
    .fas.fa-message-quote:before {
        content: "★";
    }
    .fas.fa-comment:before {
        content: "💬";
    }
    .fas.fa-chevron-down:before {
        content: "▼";
    }
    .fas.fa-arrow-right:before {
        content: "→";
    }
</style> 
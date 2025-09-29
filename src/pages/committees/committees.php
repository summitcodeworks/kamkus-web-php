<?php
$page_title = "Committees - Kamkus College of Law";
$page_description = "Explore the various committees at Kamkus College of Law, their roles, responsibilities, and contributions to college life.";
$current_page = "committees";

require_once '../../includes/config.php';
include '../../includes/header.php';
?>
<?php
// Define the committees array with hex color gradients
$committees = [
    [
        'title' => 'Sports Committee',
        'description' => 'Organizes sports events, tournaments, and fitness activities to promote physical wellness',
        'link' => 'sports.php',
        'color' => '#4f46e5 to #3730a3',
        'icon' => 'running'
    ],
    [
        'title' => 'Cultural Committee',
        'description' => 'Plans and executes cultural events, festivals, and artistic programs',
        'link' => 'cultural.php',
        'color' => '#dc2626 to #991b1b',
        'icon' => 'music'
    ],
    [
        'title' => 'Examination Committee',
        'description' => 'Ensures smooth conduct of examinations and maintains academic integrity',
        'link' => 'examination.php',
        'color' => '#059669 to #064e3b',
        'icon' => 'clipboard-check'
    ],
    [
        'title' => 'Legal Aid Committee',
        'description' => 'Provides free legal assistance to underprivileged communities',
        'link' => 'legal-aid.php',
        'color' => '#2563eb to #1e40af',
        'icon' => 'balance-scale'
    ],
    [
        'title' => 'Anti-Ragging Committee',
        'description' => 'Ensures a safe and harassment-free environment for all students',
        'link' => 'anti-ragging.php',
        'color' => '#7c3aed to #5b21b6',
        'icon' => 'shield-alt'
    ],
    [
        'title' => 'Environmental Committee',
        'description' => 'Promotes environmental awareness and sustainability initiatives',
        'link' => 'environmental.php',
        'color' => '#d97706 to #92400e',
        'icon' => 'leaf'
    ],
    [
        'title' => 'Website Committee',
        'description' => 'Manages and maintains the college website and digital presence',
        'link' => 'website.php',
        'color' => '#059669 to #047857',
        'icon' => 'globe'
    ],
    [
        'title' => 'Moot Court Committee',
        'description' => 'Cultivates the art of mooting and develops advocacy skills through simulated courtroom experiences',
        'link' => 'moot-court.php',
        'color' => '#dc2626 to #991b1b',
        'icon' => 'gavel'
    ],
    [
        'title' => 'Library Advisory Committee',
        'description' => 'Provides guidance and recommendations for library services and resources',
        'link' => 'library-advisory.php',
        'color' => '#059669 to #047857',
        'icon' => 'book'
    ],
    [
        'title' => 'Student Grievance Redressal Committee',
        'description' => 'Ensures fair and swift resolution of student concerns with integrity and confidentiality',
        'link' => 'student-grievance-redressal.php',
        'color' => '#059669 to #047857',
        'icon' => 'book'
    ],
    [
        'title' => 'Women Grievance Redressal Committee',
        'description' => 'Ensures fair and swift resolution of women concerns with integrity and confidentiality',
        'link' => 'women-grievance-redressal.php',
        'color' => '#059669 to #047857',
        'icon' => 'book'
    ],
];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Committees - Kamkus College of Law</title>
        <style>
            :root {
                --primary: #293B45;
                --secondary: #658ca3;
                --accent: #D4AF37;
            }
            body {
                font-family: 'Cambria', 'Cambria Math', Arial, sans-serif;
                line-height: 1.6;
                background: linear-gradient(to bottom, #f8fafc, #ffffff);
                color: #333;
            }

            h1, h2, h3, h4, p, a, span, li {
                font-family: 'Cambria', 'Cambria Math', Arial, sans-serif;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                background: linear-gradient(to bottom, #f8fafc, #ffffff);
                color: #333;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 16px;
            }

            main {
                padding: 48px 0;
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

            /* Hero Section */
            .hero {
                position: relative;
                height: 50vh;
                border-radius: 16px;
                overflow: hidden;
                margin-bottom: 64px;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                opacity: 0;
                transform: translateY(20px);
                animation: slideIn 0.6s forwards;
            }

            .hero img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .hero-overlay {
                position: absolute;
                inset: 0;
                background: rgba(30, 58, 138, 0.3);
                mix-blend-mode: multiply;
            }

            .hero-gradient {
                position: absolute;
                inset: 0;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5), transparent);
            }

            .hero-content {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 32px;
                color: white;
                opacity: 0;
                transform: translateY(50px);
                animation: slideIn 0.8s 0.2s forwards;
            }

            .hero-content .tag {
                display: flex;
                align-items: center;
                gap: 8px;
                text-transform: uppercase;
                font-size: 12px;
                font-weight: 500;
                color: var(--accent);
                margin-bottom: 12px;
            }

            .hero-content h1 {
                font-size: 36px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .hero-content p {
                font-size: 18px;
                max-width: 768px;
                color: rgba(255, 255, 255, 0.9);
            }

            /* Introduction */
            .intro {
                background: white;
                border-radius: 12px;
                padding: 24px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-bottom: 48px;
                opacity: 0;
                transform: translateY(30px);
                animation: slideIn 0.6s 0.2s forwards;
                text-align: left; /* Ensure all text is left-aligned */
            }

            .intro-header {
                display: flex;
                align-items: center;
                justify-content: flex-start; /* Align flex items to the left */
                margin-bottom: 24px;
            }

            .intro-icon {
                width: 56px;
                height: 56px;
                border-radius: 50%;
                background: var(--primary);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                opacity: 0;
                transform: scale(0.8);
                animation: popIn 0.5s 0.4s forwards;
            }

            .intro-icon svg {
                width: 28px;
                height: 28px;
                fill: white;
            }

            .intro h2 {
                font-size: 24px;
                font-weight: 700;
                background: linear-gradient(to right, var(--primary), var(--secondary));
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }

            .intro p {
                color: #475569;
                margin-bottom: 16px;
            }

            /* Committees Grid */
            .committees h2 {
                font-size: 28px;
                font-weight: 700;
                color: #1f2937;
                margin-bottom: 8px;
                opacity: 0;
                transform: translateY(20px);
                animation: slideIn 0.5s forwards;
            }

            .committees p {
                color: #6b7280;
                margin-bottom: 32px;
            }

            .committees-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 24px;
                margin-bottom: 64px;
            }

            .committee-card {
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
                opacity: 0;
                animation: fadeIn 0.5s forwards;
            }

            .committee-card:nth-child(1) { animation-delay: 0.1s; }
            .committee-card:nth-child(2) { animation-delay: 0.2s; }
            .committee-card:nth-child(3) { animation-delay: 0.3s; }
            .committee-card:nth-child(4) { animation-delay: 0.4s; }
            .committee-card:nth-child(5) { animation-delay: 0.5s; }
            .committee-card:nth-child(6) { animation-delay: 0.6s; }
            .committee-card:nth-child(7) { animation-delay: 0.7s; }

            .committee-card:hover {
                transform: translateY(-8px);
            }

            .committee-card a {
                display: block;
                text-decoration: none;
                color: white;
                padding: 20px;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .committee-card .icon {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 16px;
            }

            .committee-card .icon svg {
                width: 24px;
                height: 24px;
                fill: white;
            }

            .committee-card h3 {
                font-size: 20px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .committee-card p {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.8);
                flex-grow: 1;
                margin-bottom: 20px;
            }

            .committee-card .learn-more {
                display: flex;
                align-items: center;
                font-size: 14px;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.9);
            }

            .committee-card .learn-more svg {
                width: 16px;
                height: 16px;
                margin-left: 4px;
            }

            /* CTA */
            .cta {
                position: relative;
                background: linear-gradient(135deg, var(--primary), var(--secondary));
                border-radius: 16px;
                padding: 48px 32px;
                text-align: center;
                color: white;
                overflow: hidden;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                opacity: 0;
                transform: translateY(30px);
                animation: slideIn 0.6s 0.4s forwards;
            }

            .cta-circle1,
            .cta-circle2 {
                position: absolute;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                pointer-events: none;
            }

            .cta-circle1 {
                width: 200px;
                height: 200px;
                top: -100px;
                right: -100px;
            }

            .cta-circle2 {
                width: 120px;
                height: 120px;
                bottom: -60px;
                left: -60px;
            }

            .cta-content {
                position: relative;
                z-index: 1;
            }

            .cta h3 {
                font-size: 28px;
                font-weight: 700;
                margin-bottom: 16px;
            }

            .cta p {
                font-size: 16px;
                margin-bottom: 32px;
                color: rgba(255, 255, 255, 0.9);
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
            }

            .cta a {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: var(--accent);
                color: white;
                padding: 12px 24px;
                border-radius: 10px;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s;
                box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
            }

            .cta a:hover {
                background: #c7a32a;
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
            }

            /* Animations */
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            @keyframes slideIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }

            @keyframes popIn {
                from { opacity: 0; transform: scale(0.8); }
                to { opacity: 1; transform: scale(1); }
            }

            @media (max-width: 768px) {
                .hero h1 {
                    font-size: 24px;
                }

                .hero p {
                    font-size: 16px;
                }

                .committees-grid {
                    grid-template-columns: 1fr;
                }
            }

            @font-face {
                font-family: 'Cambria';
                src: url('<?php echo $base_url; ?>src/assets/public/cambria.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }
        </style>
    </head>
    <body>
    <main>
        <div class="container">
            <!-- Breadcrumb -->
            <div class="content-section">
        <div class="container" style="max-width: 1200px;">
            <div class="breadcrumb">
                <a href="<?php echo $base_url; ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 5px; vertical-align: middle;"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    Home
                </a>
                                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>Committees</span>
            </div>
        </div>
    </div>
            <!-- Hero Section -->
            <div class="hero">
                <img src="<?php echo $base_url; ?>src/assets/public/gallery/sportscom.jpg" alt="Kamkus College of Law Committees" onerror="this.src='<?php echo $base_url; ?>src/assets/public/committee/placeholder.jpg'">
                <div class="hero-overlay"></div>
                <div class="hero-gradient"></div>
                <div class="hero-content">
                    <div class="tag">
                        <svg width="20" height="20" fill="currentColor"><use href="#users"></use></svg>
                        <p>Student Organizations</p>
                    </div>
                    <h1>College Committees</h1>
                    <p>Empowering students through diverse committees that foster leadership, collaboration, and excellence</p>
                </div>
            </div>

            <!-- Introduction -->
            <div class="intro">
                <div class="intro-header">
                    <div class="intro-icon">
                        <svg width="28" height="28" fill="currentColor"><use href="#users"></use></svg>
                    </div>
                    <h2>Excellence in Student Leadership</h2>
                </div>
                <p>
                    At Kamkus College of Law, our student committees play a vital role in enriching campus life and providing 
                    students with opportunities to develop leadership skills, organize events, and contribute to the college 
                    community. Each committee operates with specific objectives and responsibilities that enhance the overall 
                    educational experience.
                </p>
                <p>
                    Our committees are student-led organizations that work closely with faculty advisors to plan and execute 
                    various academic, cultural, sports, and welfare activities throughout the year. They serve as platforms 
                    for students to showcase their talents, organize meaningful events, and foster a sense of community within the college.
                </p>
            </div>

            <!-- Committees Grid -->
            <div class="committees">
                <h2>Our Committees</h2>
                <p>Explore the comprehensive range of committees at Kamkus College of Law</p>
                <div class="committees-grid">
                    <?php foreach ($committees as $index => $committee): ?>
                        <?php
                        // Split the color string into start and end hex colors
                        list($startColor, $endColor) = explode(' to ', $committee['color']);
                        ?>
                        <div class="committee-card">
                            <a href="<?php echo htmlspecialchars($committee['link']); ?>" style="background: linear-gradient(to right, <?php echo htmlspecialchars($startColor); ?>, <?php echo htmlspecialchars($endColor); ?>);">
                                <div class="icon">
                                    <svg width="24" height="24" fill="currentColor"><use href="#<?php echo htmlspecialchars($committee['icon']); ?>"></use></svg>
                                </div>
                                <h3><?php echo htmlspecialchars($committee['title']); ?></h3>
                                <p><?php echo htmlspecialchars($committee['description']); ?></p>
                                <div class="learn-more">
                                    <span>Learn more</span>
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- CTA -->
            <div class="cta">
                <div class="cta-circle1"></div>
                <div class="cta-circle2"></div>
                <div class="cta-content">
                    <h3>Join Our Committees</h3>
                    <p>
                        Ready to make a difference? Join one of our vibrant committees and contribute to college life while 
                        developing valuable leadership skills. Get involved and be part of the change you want to see.
                    </p>
                    <a href="<?php echo $base_url; ?>contact.php">
                        Get Involved
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- SVG Sprite for Icons -->
    <svg style="display: none;">
        <symbol id="users" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <circle cx="16" cy="7" r="4"></circle>
        </symbol>
        <symbol id="running" viewBox="0 0 24 24">
            <path d="M8 5a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm7 4c.264 0 .515-.105.707-.293L19 5.414a1 1 0 0 0-1.414-1.414L15.293 6.293A1 1 0 0 0 15 7c0 .256.098.512.293.707L17.586 10a1 1 0 0 0 1.414-1.414L15 9z"></path>
            <path d="M8.5 8.5c0-.276-.224-.5-.5-.5s-.5.224-.5.5v3c0 .276.224.5.5.5s.5-.224.5-.5v-3z"></path>
        </symbol>
        <symbol id="music" viewBox="0 0 24 24">
            <path d="M9 18V5l12-2v13"></path>
            <circle cx="6" cy="18" r="3"></circle>
            <circle cx="18" cy="16" r="3"></circle>
        </symbol>
        <symbol id="clipboard-check" viewBox="0 0 24 24">
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
            <path d="M9 14l2 2 4-4"></path>
        </symbol>
        <symbol id="balance-scale" viewBox="0 0 24 24">
            <path d="M12 3v18m-4-8.5L4 17h8l-4-4.5zm8 0L12 17h8l-4-4.5z"></path>
        </symbol>
        <symbol id="shield-alt" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
        </symbol>
        <symbol id="leaf" viewBox="0 0 24 24">
            <path d="M17 8C8 10 5.9 16.17 3.82 21.34l1.28.66L12 14l4.18 7.34 1.28-.66C15.1 16.17 13 10 17 8z"></path>
            <path d="M9 8c0-6 6-6 6 0-3 0-6 3-6 0z"></path>
        </symbol>
        <symbol id="globe" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="2" y1="12" x2="22" y2="12"></line>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
        </symbol>
    </svg>

    <script>
        // Simple JavaScript to enhance interactivity (optional)
        document.addEventListener('DOMContentLoaded', () => {
            // Add any additional JavaScript logic here if needed
            // For now, animations are handled via CSS
        });
    </script>
    </body>
    </html>
<?php include('../includes/footer.php'); ?> 
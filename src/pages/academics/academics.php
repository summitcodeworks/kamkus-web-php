<?php
$page_title = "Academics - Kamkus College of Law";
$page_description = "Explore research initiatives, publications, and academic excellence at Kamkus College of Law. Learn about our research centers and ongoing projects.";
$current_page = 'academics';

// Include the base URL configuration
require_once '../../includes/config.php';
include '../../includes/header.php';
?>
<?php
// Define the programs array with hex color gradients
$programs = [
    [
        'title' => 'LL.M. (2 Years)',
        'description' => 'Advanced postgraduate program for legal professionals seeking specialization',
        'link' => 'llm.php',
        'color' => '#4f46e5 to #3730a3',
        'icon' => 'graduation-cap'
    ],
    [
        'title' => 'LL.B. (3 Years)',
        'description' => 'Professional law degree program for graduates to enter the legal profession',
        'link' => 'llb.php',
        'color' => '#dc2626 to #991b1b',
        'icon' => 'scroll'
    ],
    [
        'title' => 'B.A., LL.B. (5 Years)',
        'description' => 'Integrated program combining arts education with professional legal training',
        'link' => 'ba-llb.php',
        'color' => '#059669 to #064e3b',
        'icon' => 'book-open'
    ],
    [
        'title' => 'B.Com., LL.B. (5 Years)',
        'description' => 'Integrated program with commerce specialization and legal education',
        'link' => 'bcom-llb.php',
        'color' => '#2563eb to #1e40af',
        'icon' => 'notebook'
    ],
    [
        'title' => 'Teaching Learning Practice',
        'description' => 'Innovative pedagogical approaches for effective legal education',
        'link' => 'teaching-learning.php',
        'color' => '#7c3aed to #5b21b6',
        'icon' => 'users'
    ],
    [
        'title' => 'Research & Innovation',
        'description' => 'Cutting-edge legal research opportunities and scholarly initiatives',
        'link' => 'research.php',
        'color' => '#d97706 to #92400e',
        'icon' => 'file-text'
    ],
];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Academics - Kamkus College of Law</title>
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

            /* Programs Grid */
            .programs h2 {
                font-size: 28px;
                font-weight: 700;
                color: #1f2937;
                margin-bottom: 8px;
                opacity: 0;
                transform: translateY(20px);
                animation: slideIn 0.5s forwards;
            }

            .programs p {
                color: #6b7280;
                margin-bottom: 32px;
            }

            .programs-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 24px;
                margin-bottom: 64px;
            }

            .program-card {
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
                opacity: 0;
                animation: fadeIn 0.5s forwards;
            }

            .program-card:nth-child(1) { animation-delay: 0.1s; }
            .program-card:nth-child(2) { animation-delay: 0.2s; }
            .program-card:nth-child(3) { animation-delay: 0.3s; }
            .program-card:nth-child(4) { animation-delay: 0.4s; }
            .program-card:nth-child(5) { animation-delay: 0.5s; }
            .program-card:nth-child(6) { animation-delay: 0.6s; }
            .program-card:nth-child(7) { animation-delay: 0.7s; }
            .program-card:nth-child(8) { animation-delay: 0.8s; }

            .program-card:hover {
                transform: translateY(-8px);
            }

            .program-card a {
                display: block;
                text-decoration: none;
                color: white;
                padding: 20px;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .program-card .icon {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 16px;
            }

            .program-card .icon svg {
                width: 24px;
                height: 24px;
                fill: white;
            }

            .program-card h3 {
                font-size: 20px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .program-card p {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.8);
                flex-grow: 1;
                margin-bottom: 20px;
            }

            .program-card .learn-more {
                display: flex;
                align-items: center;
                font-size: 14px;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.9);
            }

            .program-card .learn-more svg {
                width: 16px;
                height: 16px;
                margin-left: 4px;
            }

            /* Academic Calendar */
            .calendar-section {
                background: white;
                border-radius: 12px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                margin-bottom: 64px;
                opacity: 0;
                transform: translateY(30px);
                animation: slideIn 0.6s 0.3s forwards;
            }

            .calendar-header {
                background: linear-gradient(to right, var(--primary), var(--secondary));
                color: white;
                padding: 16px 20px;
                display: flex;
                align-items: center;
            }

            .calendar-header svg {
                width: 20px;
                height: 20px;
                margin-right: 12px;
            }

            .calendar-header h3 {
                font-size: 18px;
                font-weight: 500;
            }

            .calendar-content {
                padding: 24px;
            }

            .calendar-content p {
                color: #475569;
                margin-bottom: 20px;
                opacity: 0;
                animation: fadeIn 0.7s 0.4s forwards;
            }

            .calendar-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 24px;
                opacity: 0;
                transform: scale(0.95);
                animation: popIn 0.5s 0.5s forwards;
            }

            .calendar-grid > div {
                background: #f8fafc;
                padding: 20px;
                border-radius: 8px;
            }

            .calendar-grid h4 {
                font-size: 16px;
                font-weight: 600;
                color: var(--primary);
                margin-bottom: 12px;
            }

            .calendar-grid ul {
                list-style: none;
            }

            .calendar-grid li {
                display: flex;
                justify-content: space-between;
                margin-bottom: 12px;
                font-size: 14px;
            }

            .calendar-grid li span:first-child {
                color: #4b5563;
            }

            .calendar-grid li span:last-child {
                font-weight: 500;
            }

            .calendar-link {
                text-align: center;
                margin-top: 20px;
            }

            .calendar-link a {
                display: inline-flex;
                align-items: center;
                background: var(--primary);
                color: white;
                font-weight: 500;
                padding: 10px 20px;
                border-radius: 8px;
                text-decoration: none;
            }

            .calendar-link a:hover {
                background: var(--secondary);
            }

            .calendar-link svg {
                width: 20px;
                height: 20px;
                margin-left: 8px;
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

            .cta svg {
                width: 20px;
                height: 20px;
                margin-left: 8px;
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

                .calendar-grid {
                    grid-template-columns: 1fr;
                }

                .programs-grid {
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
                    <i class="fas fa-home"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo $base_url; ?>academics/academics.php">Academics</a>
            </div>
        </div>
    </div>

            <!-- Hero Section -->
            <div class="hero">
                <img src="<?php echo $base_url; ?>src/assets/public/academics/academic_main.jpg" alt="Kamkus College of Law Academics">
                <div class="hero-overlay"></div>
                <div class="hero-gradient"></div>
                <div class="hero-content">
                    <div class="tag">
                        <svg width="20" height="20" fill="currentColor"><use href="#book-open"></use></svg>
                        <p>Academic Excellence</p>
                    </div>
                    <h1>Academics</h1>
                    <p>Comprehensive legal education programs designed for the modern legal landscape</p>
                </div>
            </div>

            <!-- Introduction -->
            <div class="intro">
                <div class="intro-header">
                    <div class="intro-icon">
                        <svg width="28" height="28" fill="currentColor"><use href="#graduation-cap"></use></svg>
                    </div>
                    <h2>Excellence in Legal Education</h2>
                </div>
                <p>
                    At Kamkus College of Law, we offer a range of academic programs designed to prepare students for successful careers
                    in the legal profession. Our curriculum blends theoretical knowledge with practical experience, ensuring graduates
                    are equipped to meet the challenges of the dynamic legal landscape.
                </p>
                <p>
                    Our distinguished faculty members bring extensive experience from legal practice, academia, and research, providing
                    students with insights into various aspects of law. We emphasize both traditional and contemporary approaches to
                    legal education, fostering critical thinking, analytical skills, and ethical values.
                </p>
            </div>

            <!-- Programs Grid -->
            <div class="programs">
                <h2>Our Academic Programs</h2>
                <p>Explore the comprehensive range of academic offerings at Atsunda College of Law</p>
                <div class="programs-grid">
                    <?php foreach ($programs as $index => $program): ?>
                        <?php
                        // Split the color string into start and end hex colors
                        list($startColor, $endColor) = explode(' to ', $program['color']);
                        ?>
                        <div class="program-card">
                            <a href="<?php echo htmlspecialchars($program['link']); ?>" style="background: linear-gradient(to right, <?php echo htmlspecialchars($startColor); ?>, <?php echo htmlspecialchars($endColor); ?>);">
                                <div class="icon">
                                    <svg width="24" height="24" fill="currentColor"><use href="#<?php echo htmlspecialchars($program['icon']); ?>"></use></svg>
                                </div>
                                <h3><?php echo htmlspecialchars($program['title']); ?></h3>
                                <p><?php echo htmlspecialchars($program['description']); ?></p>
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
                    <h3>Begin Your Legal Journey</h3>
                    <p>
                        Ready to embark on a rewarding legal career? Explore our academic programs and discover the right path for your
                        aspirations. Apply now to join our vibrant community of future legal professionals.
                    </p>
                    <a href="<?php echo $base_url; ?>src/pages/contact.php">
                        Apply Now
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
        <symbol id="book-open" viewBox="0 0 24 24">
            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
        </symbol>
        <symbol id="graduation-cap" viewBox="0 0 24 24">
            <path d="M22 10v6l-10-3-10 3v-6l10-3z"></path>
            <path d="M12 3l10 3-10 3-10-3z"></path>
        </symbol>
        <symbol id="scroll" viewBox="0 0 24 24">
            <path d="M6 2h12v4H6z"></path>
            <path d="M6 6h12v16H6z"></path>
        </symbol>
        <symbol id="notebook" viewBox="0 0 24 24">
            <path d="M5 3h14v18H5z"></path>
            <path d="M5 7h14"></path>
        </symbol>
        <symbol id="users" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <circle cx="16" cy="7" r="4"></circle>
        </symbol>
        <symbol id="file-text" viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
            <polyline points="10 9 9 9 8 9"></polyline>
        </symbol>
        <symbol id="calendar" viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
        </symbol>
        <symbol id="bar-chart-3" viewBox="0 0 24 24">
            <line x1="12" y1="20" x2="12" y2="10"></line>
            <line x1="18" y1="20" x2="18" y2="4"></line>
            <line x1="6" y1="20" x2="6" y2="16"></line>
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
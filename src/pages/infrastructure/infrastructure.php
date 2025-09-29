<?php
$page_title = "Infrastructure - Kamkus College of Law";
$page_description = "Explore the state-of-the-art infrastructure facilities at Kamkus College of Law including library, seminar halls, computer labs, and modern classrooms.";
$current_page = 'infrastructure';

require_once '../../includes/config.php';
include '../../includes/header.php';
?>
<?php
// Define the infrastructure facilities array with hex color gradients
$facilities = [
    [
        'title' => 'Library',
        'description' => 'Extensive legal library with over 10,000 volumes and digital resources',
        'link' => 'library.php',
        'color' => '#4f46e5 to #3730a3',
        'icon' => 'book'
    ],
    [
        'title' => 'Seminar Hall',
        'description' => 'Modern seminar halls equipped with advanced audio-visual facilities',
        'link' => 'seminar-hall.php',
        'color' => '#dc2626 to #991b1b',
        'icon' => 'presentation'
    ],
    [
        'title' => 'Classroom',
        'description' => 'Well-equipped classrooms designed for effective learning environments',
        'link' => 'classroom.php',
        'color' => '#059669 to #064e3b',
        'icon' => 'chalkboard-teacher'
    ],
    [
        'title' => 'Computer Labs',
        'description' => 'State-of-the-art computer laboratories with modern technology',
        'link' => 'computer-lab.php',
        'color' => '#2563eb to #1e40af',
        'icon' => 'desktop'
    ],
    [
        'title' => 'Moot Court',
        'description' => 'Fully functional moot court for practical legal training and advocacy skills',
        'link' => 'moot-court.php',
        'color' => '#7c3aed to #5b21b6',
        'icon' => 'gavel'
    ],
    [
        'title' => 'Cafeteria',
        'description' => 'Modern cafeteria providing healthy and nutritious meals for students',
        'link' => 'cafeteria.php',
        'color' => '#d97706 to #92400e',
        'icon' => 'utensils'
    ],
];

// Function to get SVG icon based on icon name
function getSVGIcon($iconName) {
    $icons = [
        'book' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18,22A2,2 0 0,0 20,20V4A2,2 0 0,0 18,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18M6,4H18V20H6V4Z"/></svg>',
        'presentation' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M2,3H10A2,2 0 0,1 12,1A2,2 0 0,1 14,3H22V5H21V16A1,1 0 0,1 20,17H4A1,1 0 0,1 3,16V5H2V3M5,5V15H19V5H5M11.5,7.5L14,10L11.5,12.5V11H8V9H11.5V7.5Z"/></svg>',
        'chalkboard-teacher' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,2H14.82C14.4,1.84 13.3,1 12,1C10.7,1 9.6,1.84 9.18,2H5C3.9,2 3,2.9 3,4V18C3,19.1 3.9,20 5,20H19C20.1,20 21,19.1 21,18V4C21,2.9 20.1,2 19,2M12,3C12.55,3 13,3.45 13,4C13,4.55 12.55,5 12,5C11.45,5 11,4.55 11,4C11,3.45 11.45,3 12,3Z"/></svg>',
        'desktop' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21,2H3C1.89,2 1,2.89 1,4V16A2,2 0 0,0 3,18H10V20H8V22H16V20H14V18H21A2,2 0 0,0 23,16V4C23,2.89 22.1,2 21,2M21,16H3V4H21V16Z"/></svg>',
        'gavel' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5,15.1L22.6,17.2L21.2,18.6L19.1,16.5L15.5,20.1C14.7,20.9 13.4,20.9 12.6,20.1L11.9,19.4C11.1,18.6 11.1,17.3 11.9,16.5L15.5,12.9L9.4,6.8L8.7,7.5C7.9,8.3 6.6,8.3 5.8,7.5L5.1,6.8C4.3,6 4.3,4.7 5.1,3.9L8.7,0.3C9.5,-0.5 10.8,-0.5 11.6,0.3L12.3,1C13.1,1.8 13.1,3.1 12.3,3.9L11.6,4.6L17.7,10.7L20.5,7.9C21.3,7.1 22.6,7.1 23.4,7.9C24.2,8.7 24.2,10 23.4,10.8L20.5,13.7V15.1Z"/></svg>',
        'utensils' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8.1,13.34L3.91,9.16C2.35,7.59 2.35,5.06 3.91,3.5L10.93,10.5L8.1,13.34M14.88,11.53C16.32,12.97 16.32,15.24 14.88,16.69C13.44,18.13 11.17,18.13 9.72,16.69L8.41,15.38L9.72,14.07L11.5,15.85C11.64,15.99 11.87,15.99 12.01,15.85C12.15,15.71 12.15,15.47 12.01,15.34L10.23,13.56L11.54,12.25L14.88,11.53Z"/></svg>'
    ];
    
    return isset($icons[$iconName]) ? $icons[$iconName] : '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>';
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Infrastructure - Kamkus College of Law</title>
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

            /* Facilities Grid */
            .facilities h2 {
                font-size: 28px;
                font-weight: 700;
                color: #1f2937;
                margin-bottom: 8px;
                opacity: 0;
                transform: translateY(20px);
                animation: slideIn 0.5s forwards;
            }

            .facilities p {
                color: #6b7280;
                margin-bottom: 32px;
            }

            .facilities-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 24px;
                margin-bottom: 64px;
            }

            .facility-card {
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
                opacity: 0;
                animation: fadeIn 0.5s forwards;
            }

            .facility-card:nth-child(1) { animation-delay: 0.1s; }
            .facility-card:nth-child(2) { animation-delay: 0.2s; }
            .facility-card:nth-child(3) { animation-delay: 0.3s; }
            .facility-card:nth-child(4) { animation-delay: 0.4s; }
            .facility-card:nth-child(5) { animation-delay: 0.5s; }
            .facility-card:nth-child(6) { animation-delay: 0.6s; }

            .facility-card:hover {
                transform: translateY(-8px);
            }

            .facility-card a {
                display: block;
                text-decoration: none;
                color: white;
                padding: 20px;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .facility-card .icon {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 16px;
            }

            .facility-card .icon i {
                color: white;
                font-size: 24px;
            }

            .facility-card h3 {
                font-size: 20px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .facility-card p {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.8);
                flex-grow: 1;
                margin-bottom: 20px;
            }

            .facility-card .learn-more {
                display: flex;
                align-items: center;
                font-size: 14px;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.9);
            }

            .facility-card .learn-more i {
                margin-left: 8px;
                transition: transform 0.3s ease;
            }

            .facility-card:hover .learn-more i {
                transform: translateX(4px);
            }

            /* CTA Section */
            .cta {
                position: relative;
                background: linear-gradient(135deg, var(--primary), var(--secondary));
                border-radius: 20px;
                padding: 48px 40px;
                color: white;
                text-align: center;
                overflow: hidden;
                margin-bottom: 64px;
                opacity: 0;
                transform: translateY(30px);
                animation: slideIn 0.6s 0.4s forwards;
            }

            .cta-circle1,
            .cta-circle2 {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.1);
                pointer-events: none;
            }

            .cta-circle1 {
                width: 200px;
                height: 200px;
                top: -100px;
                right: -100px;
            }

            .cta-circle2 {
                width: 150px;
                height: 150px;
                bottom: -75px;
                left: -75px;
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
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
                color: rgba(255, 255, 255, 0.9);
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
                background: #c4941f;
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
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

                .facilities-grid {
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
                <span>Infrastructure</span>
            </div>
        </div>
    </div>

            <!-- Hero Section -->
            <div class="hero">
                <img src="<?php echo $base_url; ?>src/assets/public/carousel/kam_cal_3.JPG" alt="Kamkus College of Law Infrastructure">
                <div class="hero-overlay"></div>
                <div class="hero-gradient"></div>
                <div class="hero-content">
                    <div class="tag">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5,20.5V11.5L12,6.5L17.5,11.5V20.5H14.5V17.5H9.5V20.5H6.5Z"/></svg>
                        <p>World-Class Facilities</p>
                    </div>
                    <h1>Infrastructure</h1>
                    <p>State-of-the-art facilities designed to enhance learning and provide the best educational experience</p>
                </div>
            </div>

            <!-- Introduction -->
            <div class="intro">
                <div class="intro-header">
                    <div class="intro-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z"/></svg>
                    </div>
                    <h2>Excellence in Infrastructure</h2>
                </div>
                <p>
                    Kamkus College of Law takes pride in its modern infrastructure that provides an optimal learning environment 
                    for our students. Our campus features state-of-the-art facilities designed to support both academic and 
                    extracurricular activities, ensuring a comprehensive educational experience.
                </p>
                <p>
                    From our extensive library and advanced computer laboratories to our fully equipped moot court and modern 
                    seminar halls, every facility is thoughtfully designed to meet the evolving needs of legal education. 
                    Our infrastructure reflects our commitment to providing students with the best possible resources for their 
                    academic journey.
                </p>
            </div>

            <!-- Facilities Grid -->
            <div class="facilities">
                <h2>Our Infrastructure Facilities</h2>
                <p>Explore the comprehensive range of modern facilities at Kamkus College of Law</p>
                <div class="facilities-grid">
                    <?php foreach ($facilities as $index => $facility): ?>
                        <?php
                        // Split the color string into start and end hex colors
                        list($startColor, $endColor) = explode(' to ', $facility['color']);
                        ?>
                        <div class="facility-card">
                            <a href="<?php echo htmlspecialchars($facility['link']); ?>" style="background: linear-gradient(to right, <?php echo htmlspecialchars($startColor); ?>, <?php echo htmlspecialchars($endColor); ?>);">
                                <div class="icon">
                                    <?php echo getSVGIcon($facility['icon']); ?>
                                </div>
                                <h3><?php echo htmlspecialchars($facility['title']); ?></h3>
                                <p><?php echo htmlspecialchars($facility['description']); ?></p>
                                <div class="learn-more">
                                    <span>Explore Facility</span>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
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
                    <h3>Visit Our Campus</h3>
                    <p>
                        Experience our world-class infrastructure firsthand. Schedule a campus tour to explore our facilities 
                        and see how they can enhance your legal education journey. Contact us to arrange your visit.
                    </p>
                    <a href="<?php echo $base_url; ?>src/pages/contact.php">
                        Schedule Campus Tour
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </main>
    </body>
    </html>
<?php include('../includes/footer.php'); ?> 
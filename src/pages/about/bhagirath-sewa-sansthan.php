<?php
$page_title = "Bhagirath Sewa Sansthan - Kamkus College of Law";
$page_description = "A national level Non-Governmental Organization dedicated to educational, welfare and socio-economic services since 1975";
$current_page = "about";
require_once '../../includes/config.php';

include '../../includes/header.php';
?>

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

/* Feature Icon Specific Styles */
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

.feature-icon .svg-icon {
    width: 20px !important;
    height: 20px !important;
    margin-right: 0 !important;
    fill: #1E293B !important;
}

/* Card Header Icon Alignment */
.card-header {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding: 16px 20px !important;
}

.card-header .svg-icon {
    width: 20px !important;
    height: 20px !important;
    margin-right: 0 !important;
    flex-shrink: 0 !important;
}

/* Stats Icon Alignment */
.stats-icon {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.stats-icon .svg-icon {
    width: 24px !important;
    height: 24px !important;
    margin-right: 0 !important;
}

/* Breadcrumb Icon Alignment */
.breadcrumb .svg-icon {
    width: 14px !important;
    height: 14px !important;
    margin-right: 0 !important;
    flex-shrink: 0 !important;
}

/* Program Icon Specific Styles */
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

.program-icon .svg-icon {
    width: 18px !important;
    height: 18px !important;
    margin-right: 0 !important;
    fill: #1E293B !important;
    transition: fill 0.3s ease;
}

/* Resource Link Icon Alignment */
.resource-link .svg-icon {
    width: 16px !important;
    height: 16px !important;
    margin-right: 0 !important;
    flex-shrink: 0 !important;
    fill: #64748b;
    transition: fill 0.3s ease;
}

.resource-link:hover .svg-icon {
    fill: #fcd34d;
}

/* Custom styles for Bhagirath Sewa Sansthan page */
/* Teaching & Learning Page Styles */
.teaching-learning-page {
    background: linear-gradient(to bottom, #f8fafc, #ffffff);
    padding-bottom: 4rem;
}

/* Hero Section */
.hero-section {
    position: relative;
    height: 60vh;
    min-height: 400px;
    overflow: hidden;
    border-radius: 1rem;
    margin: 2rem auto;
    max-width: 1200px;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(30, 41, 59, 0.3), rgba(30, 41, 59, 0.8));
    z-index: 1;
}

.hero-image {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-content {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    align-items: flex-end;
    padding: 3rem 0;
}

.hero-text {
    color: #ffffff;
    max-width: 600px;
}

.hero-text .badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    backdrop-filter: blur(4px);
    margin-bottom: 1rem;
}

.hero-text .badge i {
    color: #fcd34d;
}

.hero-text h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.hero-text p {
    font-size: 1.25rem;
    opacity: 0.9;
}

.stats-card {
    position: absolute;
    top: 2rem;
    right: 2rem;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    padding: 1rem;
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    color: #ffffff;
}

.stats-icon {
    width: 3rem;
    height: 3rem;
    background: rgba(30, 41, 59, 0.5);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stats-text h4 {
    font-size: 0.875rem;
    font-weight: 600;
}

.stats-text p {
    font-size: 0.75rem;
    opacity: 0.8;
}

/* Content Section */
.content-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
}

.content-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section {
        height: 50vh;
    }

    .hero-text h1 {
        font-size: 2rem;
    }

    .stats-card {
        position: static;
        margin-top: 1rem;
    }

    .content-grid {
        grid-template-columns: 1fr;
    }
}

/* Card Styles */
.content-card {
    background: #ffffff;
    border-radius: 0.75rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 2rem;
}

.card-header {
    background: linear-gradient(to right, #1E293B, #364559);
    color: #ffffff;
    padding: 1rem 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.card-content {
    padding: 1.5rem 2rem;
}

/* Feature List */
.feature-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin-top: 1.5rem;
}

.feature-item {
    background: #f8fafc;
    padding: 1rem;
    border-radius: 0.5rem;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: #f1f5f9;
    transform: translateY(-2px);
}

.feature-icon {
    width: 2.5rem;
    height: 2.5rem;
    background: rgba(30, 41, 59, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1E293B;
}

.feature-text h4 {
    font-weight: 600;
    margin-bottom: 0.25rem;
    color: #1E293B;
}

.feature-text p {
    font-size: 0.875rem;
    color: #64748b;
}

/* Sidebar Styles */
.program-list,
.resource-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.program-list li,
.resource-list li {
    border-bottom: 1px solid #e2e8f0;
}

.program-list li:last-child,
.resource-list li:last-child {
    border-bottom: none;
}

.program-list a,
.resource-list a {
    display: flex;
    align-items: center;
    padding: 0.75rem 0;
    color: #1E293B;
    text-decoration: none;
    transition: all 0.3s ease;
}

.program-list a:hover,
.resource-list a:hover {
    color: #2563eb;
    transform: translateX(5px);
}

.program-list i,
.resource-list i {
    margin-right: 0.75rem;
    color: #64748b;
    transition: color 0.3s ease;
}

.program-list a:hover i,
.resource-list a:hover i {
    color: #2563eb;
}

/* Contact Card */
.contact-card .card-content {
    background: linear-gradient(135deg, #1E293B, #364559);
    color: white;
}

.contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
    padding: 0.75rem 1.5rem;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    text-decoration: none;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(4px);
}

.contact-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

/* Breadcrumb */
.breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 2rem;
    padding: 0.5rem 1rem;
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

.breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb a:hover {
    color: #1E293B;
}

.breadcrumb i {
    color: #94a3b8;
    font-size: 0.75rem;
}

/* Additional Responsive Styles */
@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
    }

    .sidebar {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }
}

@media (max-width: 640px) {
    .hero-section {
        margin: 1rem;
        height: 40vh;
    }

    .hero-text h1 {
        font-size: 1.75rem;
    }

    .hero-text p {
        font-size: 1rem;
    }

    .stats-card {
        position: static;
        margin: 1rem 0;
    }

    .content-section {
        padding: 1rem;
    }

    .feature-list {
        grid-template-columns: 1fr;
    }

    .sidebar {
        grid-template-columns: 1fr;
    }
} 
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

/* Feature List Layout */
.feature-list {
    margin-top: 20px;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 24px;
    padding: 20px;
    background: #F8FAFC;
    border: 1px solid rgba(251, 191, 36, 0.1);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: rgba(251, 191, 36, 0.08);
    border-color: rgba(251, 191, 36, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(251, 191, 36, 0.15);
}

.feature-text h4 {
    color: #1E293B;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: 16px;
}

.feature-text p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
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

/* Program grid layout */
.program-grid {
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
                    <svg class="svg-icon" viewBox="0 0 24 24" style="width: 14px; height: 14px;">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                    </svg>
                    Home
                </a>
                <svg class="svg-icon" viewBox="0 0 24 24" style="width: 14px; height: 14px;">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                </svg>
                <a href="<?php echo $base_url; ?>about/">About</a>
                <svg class="svg-icon" viewBox="0 0 24 24" style="width: 14px; height: 14px;">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                </svg>
                <span>Bhagirath Sewa Sansthan</span>
            </div>
        </div>
    </div>

    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/about/slide1f.jpg" 
             alt="Bhagirath Sewa Sansthan" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                        <span>Non-Profit Organization</span>
                    </div>
                    <h1>Bhagirath Sewa Sansthan</h1>
                    <p>A national level Non-Governmental Organization dedicated to educational, welfare and socio-economic services since 1975</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 24px; height: 24px;">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                    </div>
                    <div class="stats-text">
                        <h4>Established</h4>
                        <p>Since 1975</p>
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
                    <!-- Introduction -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                            <h3>About the Organization</h3>
                        </div>
                        <div class="card-content">
                            <p>A national level Non-Governmental Organization is registered under the Societies Registration Act 1860 and is focused on educational, welfare and socio-economic services. Since its inception in 1975, the society has been guided by its mission- to serve the cause of the needy. And in pursuance of this mission the Sansthan is active at different levels in different forms reaching out to all weaker sections of the society.</p>
                            <p>Over the years the Sansthan's efforts have duly been recognized by the Central as well the state governments and the Sansthan has the privilege of being registered with various government departments. Today the Sansthan is widely recognized in the society and is strongly connected through effective liaison, association and collaboration with other prestigious Public, Private institutions of the country.</p>
                        </div>
                    </div>

                    <!-- Programs & Initiatives -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            <h3>Programs & Initiatives</h3>
                        </div>
                        <div class="card-content">
                            <p>Our organization has been implementing various impactful programs since 1975, focused on education, welfare, and socio-economic development of marginalized communities.</p>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                            <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6L23 9l-11-6zM18.82 9L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Human Resource Development</h4>
                                        <p>Running Senior Secondary school with special emphasis on value and moral education offering scholarships & fee concessions to 270 deserving & needy students from below the poverty line facilities.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Empowerment Of Women</h4>
                                        <p>We have been conducting free computer training, leading to DOEACC accredited 'O' level course and certificate in Computer Application of National Institute of open learning. We work on self-generated employment for women for Data Entry work (computers) and placements in computer related services.</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>De-Addition Centre</h4>
                                        <p>Our organization addresses the crucial need for qualified caregivers. We conduct training programs specifically designed to equip women with the skills necessary to provide exceptional care for individuals with disabilities. This initiative not only empowers women by creating employment opportunities but also addresses a critical societal need.</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Empowerment of Disabled</h4>
                                        <p>We operate a specialized school catering to the unique needs of the disabled community. Within this nurturing environment, we provide complimentary education, transportation, occasional mid-day meals, as well as essential healthcare services including free physiotherapy and psychological counseling.</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                            <path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Vocational Training</h4>
                                        <p>Expanding opportunities for individuals with disabilities is a core tenet of our organization. We offer three vocational training programs in marketable skills such as candle making, stitching, music, and painting. This equips them with the ability to pursue self-employment and achieve financial independence. We further empower them by actively raising public awareness about the capabilities and potential of the disabled community.</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                                            <path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/>
                                        </svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Old Age Home</h4>
                                        <p>Our organization is dedicated to enhancing the quality of life for senior citizens through compassionate care and comprehensive programs, focusing on their health, well-being, and social engagement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Impact Section -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,5H16.5L15.5,4H8.5L7.5,5H5A2,2 0 0,0 3,7V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7A2,2 0 0,0 19,5M19,19H5V8H19V19Z"/></svg>
                            <h3>Our Impact</h3>
                        </div>
                        <div class="card-content">
                            <p>Our commitment to social welfare and educational excellence has resulted in measurable impact across various communities and beneficiaries over nearly five decades of service.</p>
                            
                            <div class="feature-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>270+ Scholarships Provided</h4>
                                        <p>Supporting deserving students from below poverty line with educational scholarships and fee concessions, enabling access to quality education</p>
                                    </div>
                                </div>
                                
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>45+ Years of Service</h4>
                                        <p>Continuously serving society since 1975 with unwavering commitment to social welfare and community development</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>1000+ Lives Changed</h4>
                                        <p>Through comprehensive education, training, and welfare programs targeting women, children, and disabled persons</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Government Recognition</h4>
                                        <p>Recognized by Central and State governments with registrations across various departments for our impactful social work</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Educational Programs -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18M12,3L1,9L12,15L21,10.09V17H23V9L12,3Z"/></svg>
                            <h3>Educational Programs</h3>
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

                                <a href="#" class="program-link">
                                    <div class="program-icon">
                                        <svg class="svg-icon" viewBox="0 0 24 24">
                                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/>
                                        </svg>
                                    </div>
                                    <div class="program-text">
                                        <span>P.G.D.-C.C.L.</span>
                                        <span class="program-duration">Integrated Program • 1 Year</span>
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
                    <!-- Quick Facts -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/></svg>
                            <h3>About The Organization</h3>
                        </div>
                        <div class="card-content">
                            <p style="margin-bottom: 16px; color: #64748b; font-size: 14px;">
                                Key information about Bhagirath Sewa Sansthan's foundation and organizational details
                            </p>
                            
                            <div class="resource-grid">
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                                    <span>Established 1975</span>
                                </a>
                                
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/></svg>
                                    <span>Legal Registration Act 1860</span>
                                </a>
                                
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z"/></svg>
                                    <span>Education & Welfare Focus</span>
                                </a>
                                
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 11C10.4 11 12 9.4 12 7.5S10.4 4 8.5 4 5 5.6 5 7.5 6.6 11 8.5 11M8.5 13C5.7 13 0 14.4 0 17.2V20H7V18C7 16.9 7.2 15.4 8.5 13Z"/></svg>
                                    <span>Women, Children & Disabled</span>
                                </a>
                                
                                <a href="#" class="resource-link" onclick="return false;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,15.39L8.24,17.66L9.23,13.38L5.91,10.5L10.29,10.13L12,6.09L13.71,10.13L18.09,10.5L14.77,13.38L15.76,17.66M22,9.24L14.81,8.63L12,2L9.19,8.63L2,9.24L7.45,13.97L5.82,21L12,17.27L18.18,21L16.54,13.97L22,9.24Z"/></svg>
                                    <span>Government Recognized</span>
                                </a>
                                
                                <a href="<?php echo $base_url; ?>contact.php" class="resource-link">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                                    <span>Contact Information</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="content-card" style="background: linear-gradient(135deg, #1E293B, #364559);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Join Our Mission</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 16px;">
                                Interested in contributing to our welfare initiatives? Join us in making a positive impact on society through education and community service.
                            </p>
                            
                            <div style="margin-bottom: 16px;">
                                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fcd34d"><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"/></svg>
                                    <span style="color: rgba(255, 255, 255, 0.9);">+91 93100 06444</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 12px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#fcd34d"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                                    <span style="color: rgba(255, 255, 255, 0.9);">kamkus.law@gmail.com</span>
                                </div>
                            </div>
                            
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
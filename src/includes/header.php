<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : $default_title; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : $default_description; ?>">
    <!-- SVG Icons - No external dependencies needed -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/styles.css?v=<?php echo time(); ?>">
    
    <!-- Custom Icons CSS -->
    <!-- <link rel="stylesheet" href="<?php echo $base_url; ?>css/custom-icons.css?v=<?php echo time(); ?>"> -->
    
    <?php echo isset($additional_css) ? $additional_css : ''; ?>
    <style>
        /* Comprehensive Cambria Font Implementation */
        body, html {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* Navigation fonts */
        .main-nav, .main-nav *, .main-nav a, .main-nav li {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* Top bar dropdown fonts */
        .quick-links, .quick-links *, .quick-links a {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* Dropdown content fonts */
        .dropdown-content, .dropdown-content *, .dropdown-content li, .dropdown-content li a {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* Dropdown menu fonts */
        .dropdown-menu, .dropdown-menu *, .dropdown-menu li, .dropdown-menu a {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* All dropdown variations */
        .dropdown, .dropdown *, .dropdown a {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* Logo text */
        .logo-text, .logo-text h1, .logo-text p {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* All headings */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* All paragraphs and text elements */
        p, span, div, a, li, td, th {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* SVG Icon Styles */
        .svg-icon {
            display: inline-block;
            width: 1.2em;
            height: 1.2em;
            vertical-align: middle;
            fill: currentColor;
            margin-right: 0.25em;
        }
        
        /* Ensure proper alignment for header icons */
        .top-bar .svg-icon {
            width: 14px;
            height: 14px;
            margin-right: 5px;
        }
        
        /* Navigation dropdown icons */
        .main-nav .svg-icon {
            width: 16px;
            height: 16px;
        }
        
        /* Contact info in header */
        .contact-info, .contact-info *, .contact-info span, .contact-info a {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* News ticker */
        .news-ticker, .ticker-content, .ticker-content * {
            font-family: 'Cambria', 'Cambria Math', Georgia, 'Times New Roman', Times, serif !important;
        }
        
        /* Expandable submenu styles */
        .dropdown-content li {
            position: relative;
        }
        
        .sub-dropdown {
            display: none;
            background-color: #f8f9fa;
            border-top: 1px solid #e0e0e0;
            margin-top: 5px;
            padding: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            max-height: 0;
            opacity: 0;
        }
        
        .sub-dropdown.expanded {
            display: block;
            max-height: 500px;
            opacity: 1;
            padding: 8px 0;
        }
        
        /* Style for expandable parent items */
        .dropdown-content li.has-submenu > a {
            position: relative;
            cursor: pointer;
            padding: 8px 35px 8px 30px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-left: 3px solid var(--secondary-color);
            font-weight: 500;
            margin: 2px 0;
            border-radius: 0 4px 4px 0;
        }
        
        .dropdown-content li.has-submenu > a::before {
            content: '📁';
            position: absolute;
            left: 8px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 12px;
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        /* Additional visual cue - subtle shadow */
        .dropdown-content li.has-submenu {
            box-shadow: inset 0 0 0 1px rgba(248, 180, 0, 0.2);
            border-radius: 4px;
            margin: 1px;
        }
        
        .dropdown-content li.has-submenu > a::after {
            content: '▼';
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 12px;
            transition: transform 0.3s ease;
            color: var(--primary-color);
            font-weight: bold;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .dropdown-content li.has-submenu.expanded > a::after {
            transform: translateY(-50%) rotate(180deg);
            background: var(--secondary-color);
            color: white;
        }
        
        .dropdown-content li.has-submenu > a:hover {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #ffa726 100%) !important;
            color: white;
            transform: translateX(2px);
        }
        
        .dropdown-content li.has-submenu > a:hover::before {
            opacity: 1;
        }
        
        .dropdown-content li.has-submenu > a:hover::after {
            background: rgba(255, 255, 255, 0.9);
            color: var(--primary-color);
        }
        
        .sub-dropdown li a {
            color: #555;
            padding: 8px 20px;
            text-decoration: none;
            display: block;
            font-size: 13px;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
            margin-left: 10px;
        }
        
        .sub-dropdown li a:hover {
            background-color: #e9ecef;
            color: #2c5282;
            border-left-color: var(--secondary-color);
            padding-left: 25px;
        }
        
        /* Enhanced visual indicators for expanded state */
        .dropdown-content li.has-submenu.expanded > a {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border-left-color: #28a745;
            color: #155724;
        }
        
        .dropdown-content li.has-submenu.expanded > a::before {
            content: '📂';
            opacity: 1;
        }
        
        /* Remove duplicate ::after rules - already defined above */
        
        /* Subtle pulse animation for expandable items */
        .dropdown-content li.has-submenu > a {
            animation: subtlePulse 3s ease-in-out infinite;
        }
        
        @keyframes subtlePulse {
            0%, 100% { 
                border-left-color: var(--secondary-color);
            }
            50% { 
                border-left-color: #ff9800;
            }
        }
        
        /* Stop animation when expanded or hovered */
        .dropdown-content li.has-submenu.expanded > a,
        .dropdown-content li.has-submenu > a:hover {
            animation: none;
        }
        
        /* Animation for smooth expand/collapse */
        .sub-dropdown {
            transition: max-height 0.4s ease, opacity 0.3s ease, padding 0.3s ease;
        }
        
        /* Mobile Menu Toggle Button */
        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 30px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            z-index: 1002;
            position: relative;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }
        
        /* Hide mobile menu header on desktop */
        .mobile-nav-header {
            display: none;
        }
        
        .mobile-menu-toggle:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }
        
        .mobile-menu-toggle span {
            display: block;
            height: 3px;
            width: 100%;
            background-color: var(--primary-color);
            border-radius: 3px;
            transition: all 0.3s linear;
            position: relative;
            transform-origin: 1px;
        }
        
        /* Better text overflow handling */
        .logo-text h1,
        .logo-text p {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .mobile-menu-toggle.active span:first-child {
            transform: rotate(45deg);
        }
        
        .mobile-menu-toggle.active span:nth-child(2) {
            opacity: 0;
            transform: translateX(20px);
        }
        
        .mobile-menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg);
        }
        
        /* Responsive Styles */
        @media (max-width: 1024px) {
            .container {
                padding: 0 20px;
            }
            
            .logo h1 {
                font-size: 1.5em;
            }
            
            .logo p {
                font-size: 0.9em;
            }
            
            .quick-links {
                gap: 15px;
            }
            
            .quick-links .dropdown a {
                font-size: 12px;
                padding: 4px 8px;
            }
        }
        
        @media (max-width: 768px) {
            .top-bar {
                padding: 5px 0;
            }
            
            .top-bar .container {
                padding: 0 15px;
            }
            
            .contact-info {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                font-size: 11px;
                justify-content: center;
                text-align: center;
            }
            
            .contact-info span {
                display: inline-block;
                white-space: nowrap;
            }
            
            .quick-links {
                display: none;
            }
            
            .main-header {
                padding: 10px 0;
            }
            
            .main-header .container {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 15px;
                min-height: 60px;
            }
            
            .mobile-menu-toggle {
                display: flex;
                position: absolute;
                left: 15px;
                top: 50%;
                transform: translateY(-50%);
                z-index: 10;
            }
            
            .logo {
                display: flex;
                align-items: center;
                gap: 8px;
                justify-content: center;
                flex-direction: row;
            }
            
            .logo img {
                max-width: 45px;
                height: auto;
                flex-shrink: 0;
            }
            
            .logo-text {
                text-align: center;
            }
            
            .logo-text h1 {
                font-size: 0.95em;
                margin-bottom: 1px;
                line-height: 1.2;
                font-weight: 600;
            }
            
            .logo-text p {
                font-size: 0.65em;
                margin-bottom: 1px;
                line-height: 1.1;
                color: #666;
            }
            
            .main-nav {
                position: fixed;
                top: 0;
                left: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background-color: white;
                z-index: 1001;
                transition: left 0.3s ease;
                overflow-y: auto;
                box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            }
            
            .main-nav.active {
                left: 0;
            }
            
            .main-nav .container {
                padding: 0;
            }
            
            .nav-menu {
                flex-direction: column;
                padding: 60px 0 20px 0;
                margin: 0;
                list-style: none;
            }
            
            .nav-menu li {
                border-bottom: 1px solid #eee;
            }
            
            .nav-menu > li > a {
                display: block;
                padding: 16px 20px;
                color: var(--primary-color);
                font-weight: 500;
                border: none;
                font-size: 16px;
                text-decoration: none;
                transition: all 0.2s ease;
            }
            
            .nav-menu > li > a:hover,
            .nav-menu > li > a:focus {
                background-color: #f8f9fa;
                color: var(--secondary-color);
                padding-left: 25px;
            }
            
            /* Mobile Dropdown Styles */
            .has-dropdown > a::after {
                content: ' ▼';
                font-size: 0.8em;
                color: #666;
            }
            
            .dropdown-wrapper {
                position: static;
                display: none;
                background-color: #f8f9fa;
                border-top: 1px solid #e0e0e0;
            }
            
            .has-dropdown.active .dropdown-wrapper {
                display: block;
            }
            
            .has-dropdown.active > a::after {
                content: ' ▲';
            }
            
            .dropdown-menu {
                position: static;
                background: none;
                box-shadow: none;
                border: none;
                padding: 0;
                min-width: auto;
            }
            
            .dropdown-menu li a {
                padding: 14px 35px;
                color: #555;
                font-size: 15px;
                border-bottom: 1px solid #eee;
                text-decoration: none;
                transition: all 0.2s ease;
            }
            
            .dropdown-menu li a:hover,
            .dropdown-menu li a:focus {
                background-color: #e9ecef;
                color: var(--secondary-color);
                padding-left: 40px;
            }
            
            /* Mobile menu close button */
            .mobile-nav-header {
                display: flex !important;
                justify-content: space-between;
                align-items: center;
                padding: 15px 20px;
                border-bottom: 2px solid #eee;
                background-color: var(--primary-color);
                color: white;
            }
            
            .mobile-nav-header h3 {
                margin: 0;
                font-size: 16px;
                font-weight: 600;
            }
            
            .mobile-close-btn {
                background: none;
                border: none;
                color: white;
                font-size: 20px;
                cursor: pointer;
                padding: 5px;
                border-radius: 3px;
                transition: background-color 0.2s ease;
            }
            
            .mobile-close-btn:hover {
                background-color: rgba(255, 255, 255, 0.1);
            }
            
            .naac-logo {
                position: absolute;
                top: 50%;
                right: 15px;
                transform: translateY(-50%);
                z-index: 10;
            }
            
            .naac-logo img {
                max-width: 35px;
                height: auto;
            }
            
            /* Mobile Overlay */
            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1000;
            }
            
            .mobile-overlay.active {
                display: block;
            }
        }
        
        @media (max-width: 480px) {
            .top-bar {
                padding: 3px 0;
            }
            
            .top-bar .container {
                padding: 0 10px;
            }
            
            .contact-info {
                font-size: 10px;
                gap: 5px;
                flex-direction: column;
                align-items: center;
            }
            
            .contact-info span {
                display: block;
                text-align: center;
            }
            
            .contact-info a {
                word-break: break-word;
            }
            
            .main-header {
                padding: 8px 0;
            }
            
            .main-header .container {
                padding: 0 10px;
                min-height: 55px;
            }
            
            .mobile-menu-toggle {
                left: 10px;
                width: 25px;
                height: 25px;
            }
            
            .mobile-menu-toggle span {
                height: 2px;
            }
            
            .logo {
                gap: 6px;
            }
            
            .logo img {
                max-width: 38px;
            }
            
            .logo-text h1 {
                font-size: 0.85em;
                line-height: 1.1;
            }
            
            .logo-text p {
                font-size: 0.6em;
                line-height: 1.0;
            }
            
            .naac-logo {
                right: 10px;
            }
            
            .naac-logo img {
                max-width: 30px;
            }
            
            .main-nav {
                width: 85%;
                max-width: 280px;
            }
        }
        
        @media (max-width: 360px) {
            .top-bar {
                padding: 2px 0;
            }
            
            .top-bar .container {
                padding: 0 8px;
            }
            
            .contact-info {
                font-size: 9px;
                gap: 3px;
            }
            
            .main-header .container {
                padding: 0 8px;
                min-height: 50px;
            }
            
            .mobile-menu-toggle {
                left: 8px;
                width: 22px;
                height: 22px;
            }
            
            .logo {
                gap: 5px;
            }
            
            .logo img {
                max-width: 35px;
            }
            
            .logo-text h1 {
                font-size: 0.75em;
                line-height: 1.0;
            }
            
            .logo-text p {
                font-size: 0.55em;
                line-height: 0.9;
            }
            
            .naac-logo {
                right: 8px;
            }
            
            .naac-logo img {
                max-width: 25px;
            }
            
            .main-nav {
                width: 90%;
                max-width: 260px;
            }
        }
        
        /* Landscape mobile devices */
        @media (max-width: 768px) and (orientation: landscape) {
            .top-bar {
                padding: 2px 0;
            }
            
            .main-header {
                padding: 5px 0;
            }
            
            .main-header .container {
                min-height: 45px;
            }
            
            .mobile-menu-toggle {
                left: 12px;
            }
            
            .logo img {
                max-width: 35px;
            }
            
            .logo-text h1 {
                font-size: 0.8em;
            }
            
            .logo-text p {
                font-size: 0.55em;
            }
            
            .naac-logo {
                right: 12px;
            }
            
            .naac-logo img {
                max-width: 25px;
            }
        }
        
        /* Very large mobile screens */
        @media (min-width: 769px) and (max-width: 1024px) {
            .main-header .container {
                min-height: 70px;
            }
            
            .logo img {
                max-width: 60px;
            }
            
            .logo-text h1 {
                font-size: 1.3em;
            }
            
            .logo-text p {
                font-size: 0.8em;
            }
        }
        
        /* Responsive positioning for sub-dropdowns on smaller screens */
        @media (max-width: 1600px) {
            /* Position rightmost dropdowns to the left on wider screens */
            .quick-links .dropdown:nth-last-child(-n+2) .sub-dropdown {
                left: -100%;
                right: 100%;
            }
            
            .quick-links .dropdown:nth-last-child(-n+2) .sub-dropdown .sub-dropdown {
                left: -100%;
                right: 100%;
            }
        }
        
        @media (max-width: 1400px) {
            /* Position more sub-dropdowns to the left for laptop screens */
            .quick-links .dropdown:nth-last-child(-n+3) .sub-dropdown {
                left: -100%;
                right: 100%;
            }
            
            .quick-links .dropdown:nth-last-child(-n+3) .sub-dropdown .sub-dropdown {
                left: -100%;
                right: 100%;
            }
        }
        
        @media (max-width: 1200px) {
            /* On smaller screens, position more sub-dropdowns to the left */
            .quick-links .dropdown:nth-last-child(-n+4) .sub-dropdown {
                left: -100%;
                right: 100%;
            }
            
            .quick-links .dropdown:nth-last-child(-n+4) .sub-dropdown .sub-dropdown {
                left: -100%;
                right: 100%;
            }
        }
        
        @media (max-width: 1024px) {
            /* On tablets and smaller desktops, position most sub-dropdowns to the left */
            .quick-links .dropdown:nth-child(n+2) .sub-dropdown {
                left: -100%;
                right: 100%;
            }
            
            .quick-links .dropdown:nth-child(n+2) .sub-dropdown .sub-dropdown {
                left: -100%;
                right: 100%;
            }
        }
        
        /* Smooth transitions for dropdown positioning */
        .sub-dropdown {
            transition: all 0.2s ease;
        }
        
        /* Class for left-positioned dropdowns */
        .sub-dropdown.dropdown-left {
            left: -100% !important;
            right: 100% !important;
        }
        
        /* Class for upward-positioned dropdowns */
        .sub-dropdown.dropdown-up {
            top: auto !important;
            bottom: 0 !important;
        }
        
        /* Class for dropdowns that need both left and up positioning */
        .sub-dropdown.dropdown-left.dropdown-up {
            left: -100% !important;
            right: 100% !important;
            top: auto !important;
            bottom: 0 !important;
        }
        
        /* Ensure sub-dropdowns never exceed viewport height */
        .sub-dropdown {
            max-height: calc(100vh - 100px);
            overflow-y: auto;
            box-sizing: border-box;
        }
        
        /* Responsive height adjustments for smaller screens */
        @media (max-height: 768px) {
            .sub-dropdown {
                max-height: calc(100vh - 80px);
            }
        }
        
        @media (max-height: 600px) {
            .sub-dropdown {
                max-height: calc(100vh - 60px);
            }
        }
    </style>
    
    <script>
    // Mobile and Desktop Navigation functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu elements
        const mobileToggle = document.querySelector('.mobile-menu-toggle');
        const mobileCloseBtn = document.querySelector('.mobile-close-btn');
        const mainNav = document.querySelector('.main-nav');
        const body = document.body;
        let mobileOverlay;
        
        // Create mobile overlay
        function createMobileOverlay() {
            if (!mobileOverlay) {
                mobileOverlay = document.createElement('div');
                mobileOverlay.className = 'mobile-overlay';
                body.appendChild(mobileOverlay);
                
                mobileOverlay.addEventListener('click', closeMobileMenu);
            }
        }
        
        // Mobile menu toggle functionality
        function toggleMobileMenu() {
            createMobileOverlay();
            
            if (mobileToggle.classList.contains('active')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        }
        
        function openMobileMenu() {
            mobileToggle.classList.add('active');
            mainNav.classList.add('active');
            mobileOverlay.classList.add('active');
            body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            mobileToggle.classList.remove('active');
            mainNav.classList.remove('active');
            if (mobileOverlay) {
                mobileOverlay.classList.remove('active');
            }
            body.style.overflow = '';
            
            // Close all mobile dropdowns
            const activeDropdowns = document.querySelectorAll('.has-dropdown.active');
            activeDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('active');
            });
        }
        
        // Mobile menu toggle events
        if (mobileToggle) {
            mobileToggle.addEventListener('click', toggleMobileMenu);
        }
        
        if (mobileCloseBtn) {
            mobileCloseBtn.addEventListener('click', closeMobileMenu);
        }
        
        // Mobile dropdown functionality
        const mobileDropdownToggle = function() {
            const hasDropdownItems = document.querySelectorAll('.nav-menu .has-dropdown > a');
            
            hasDropdownItems.forEach(function(item) {
                item.addEventListener('click', function(e) {
                    // Only handle mobile dropdown behavior on mobile screens
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        const parentLi = this.parentElement;
                        
                        // Close other dropdowns
                        const otherDropdowns = document.querySelectorAll('.has-dropdown.active');
                        otherDropdowns.forEach(function(dropdown) {
                            if (dropdown !== parentLi) {
                                dropdown.classList.remove('active');
                            }
                        });
                        
                        // Toggle current dropdown
                        parentLi.classList.toggle('active');
                    }
                });
            });
        };
        
        // Initialize mobile dropdown functionality
        mobileDropdownToggle();
        
        // Desktop expandable submenu functionality (for top bar dropdowns)
        const expandableItems = document.querySelectorAll('.dropdown-content li.has-submenu > a');
        
        expandableItems.forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const parentLi = this.parentElement;
                const submenu = parentLi.querySelector('.sub-dropdown');
                
                if (!submenu) return;
                
                // Close other open submenus in the same dropdown
                const dropdown = parentLi.closest('.dropdown-content');
                const otherOpenItems = dropdown.querySelectorAll('.has-submenu.expanded');
                otherOpenItems.forEach(function(openItem) {
                    if (openItem !== parentLi) {
                        openItem.classList.remove('expanded');
                        const otherSubmenu = openItem.querySelector('.sub-dropdown');
                        if (otherSubmenu) {
                            otherSubmenu.classList.remove('expanded');
                        }
                    }
                });
                
                // Toggle current submenu
                if (parentLi.classList.contains('expanded')) {
                    parentLi.classList.remove('expanded');
                    submenu.classList.remove('expanded');
                } else {
                    parentLi.classList.add('expanded');
                    submenu.classList.add('expanded');
                }
            });
        });
        
        // Close submenus when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown-content')) {
                const expandedItems = document.querySelectorAll('.has-submenu.expanded');
                expandedItems.forEach(function(item) {
                    item.classList.remove('expanded');
                    const submenu = item.querySelector('.sub-dropdown');
                    if (submenu) {
                        submenu.classList.remove('expanded');
                    }
                });
            }
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeMobileMenu();
            }
        });
        
        // Handle escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });
    });
    </script>
</head>
<body>
<header>
    <div class="top-bar" >
        <div class="container">
            <div class="contact-info">
                <span style="color: white">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 5px; vertical-align: middle;">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    <a href="tel:+919310006444">+91 93100 06444</a>, <a href="tel:+918737906444">+91 87379 06444</a>
                </span>
                <span style="color: white">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 5px; vertical-align: middle;">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    <a href="mailto:kamkus.law@gmail.com">kamkus.law@gmail.com</a>
                </span>
            </div>
            <div class="quick-links">
                <div class="dropdown">
                    <a href="#">IQAC ▼</a>
                    <ul class="dropdown-content">
                        <li class="has-submenu"><a href="#">Minutes of Meeting</a>
                            <ul class="sub-dropdown">
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Minutes of the Meeting 2017-2018.pdf">2017-2018</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Minutes of the Meeting 2018-2019.pdf">2018-2019</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Minutes of the Meeting 2019-2020.pdf">2019-2020</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Minutes of the Meeting 2020-2021.pdf">2020-2021</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Minutes of the Meeting 2021-2022.pdf">2021-2022</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Minutes of the Meeting 2022-2023.pdf">2022-2023</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Minutes of the Meeting 2023-2024.pdf">2023-2024</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/SSR-Cycle1.pdf">SSR Cycle 1</a></li>
                        <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/NAAC Certificate.pdf">NAAC Certificate</a></li>
                        <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/UGC Recognition.pdf">UGC Recognition</a></li>
                        <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/AQAR 2023-24.pdf">AQAR 2022-2023</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#">NIRF ▼</a>
                    <ul class="dropdown-content">
                        <li><a href="https://kamkus.org/upload/NIRF%202024-25.pdf">NIRF</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#">Policies ▼</a>
                    <ul class="dropdown-content">
                        <li><a href="https://kamkus.org/assets/pdf/anti-raging.pdf">Anti Raging Policy</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/energyaudit.pdf">Energy Audit Report</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/environment.pdf">Environment Audit Report</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/green-audit-reports.pdf">Green Audit Report</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/disciplinary.pdf">Disciplinary & Capability</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/sexual-harrasment.pdf">Sexual Harrasment Policy</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#">Student Corner ▼</a>
                    <ul class="dropdown-content">
                        <li><a href="https://kamkus.org/student_login.php">Student Login</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/student-corner/student-participation.php">Student Paticipation</a></li>
                        <li class="has-submenu"><a href="#">Cultural Activities</a>
                            <ul class="sub-dropdown">
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Cultural Activities 2023-2024.pdf">2023-2024</a></li>
                                <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/Cultural Activities 2024-2025.pdf">2024-2025</a></li>
                            </ul>
                        </li>
                        <li><a href="https://kamkus.org/assets/pdf/guestlecture.pdf">Guest-lectures</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/enterprenures.pdf">Entreprenuership</a></li>
                        <!-- <li><a href="<?php echo $base_url; ?>src/pages/student-corner/feedback-suggestions.php">Feedback & Suggestions</a></li> -->
                        <li><a href="<?php echo $base_url; ?>src/pages/student-corner/value-added-program.php">Value Added Program</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/alucontri.pdf">Alumni Contribution</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/student-corner/gallery.php">Photo Gallery</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/contact.php">Admission Query</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#">Collaborations ▼</a>
                    <ul class="dropdown-content">
                        <li><a href="https://kamkus.org/assets/pdf/mou.pdf">MOU & Linkages</a></li>
                        <li><a href="https://kamkus.org/assets/pdf/internshipcertificates.pdf">Intership</a></li>
                    </ul>
                </div>
                                 <div class="dropdown">
                     <a href="#">Best Practices ▼</a>
                     <ul class="dropdown-content">
                         <li class="has-submenu"><a href="#">Moot Court<br>Competitions</a>
                             <ul class="sub-dropdown">
                                 <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/MOOT COURT Annual Report 2024-2025.pdf">2024-25</a></li>
                             </ul>
                         </li>
                         <li class="has-submenu"><a href="#">Legal Aid &amp;<br>Outreach Activities</a>
                             <ul class="sub-dropdown">
                                 <li><a href="<?php echo $base_url; ?>src/assets/public/pdfs/LEGAL AID CAMPS 2023-2024.pdf">2023-24</a></li>
                             </ul>
                         </li>
                     </ul>
                 </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container">
            <div class="logo">
                <img src="<?php echo $base_url; ?>public/LOGO.png" alt="Kamkus Logo">
                <div class="logo-text">
                    <h1>Kamkus College of Law</h1>
                    <p>A Post Graduate Law College</p>
                    <p>"An ISO Certified Institution"</p>
                </div>
            </div>
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <nav class="main-nav">
                <div class="mobile-nav-header">
                    <h3>Menu</h3>
                    <button class="mobile-close-btn" aria-label="Close menu">×</button>
                </div>
                <div class="container">
                    <ul class="nav-menu">
                        <li><a href="<?php echo $base_url; ?>" <?php echo ($current_page == 'home') ? 'class="active"' : ''; ?>>Home</a></li>
                        <li class="has-dropdown">
                            <a href="#" <?php echo ($current_page == 'about') ? 'class="active"' : ''; ?>>About ▼</a>
                            <div class="dropdown-wrapper">
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $base_url; ?>src/pages/about/bhagirath-sewa-sansthan.php">Bhagirath Sewa Sansthan</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/about/college.php">About the College</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/about/chief-mentor.php">Chief Mentor's Message</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/about/principal.php">Principal's Message</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/about/rules.php">Rules & Regulation</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/about/affiliation.php">Affiliation & Certificates</a></li>
                                    <li><a href="#">Office Manual</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/about/code-of-conduct.php">Code of Conduct</a></li>
                                    <li><a href="https://kamkus.org/assets/pdf/achivementsn.pdf">Achievements</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-dropdown">
                            <a href="#" <?php echo ($current_page == 'academics') ? 'class="active"' : ''; ?>>Academics ▼</a>
                            <div class="dropdown-wrapper">
                                <ul class="dropdown-menu">
<!--                                    <li><a href="--><?php //echo $base_url; ?><!--academics/academics.php">Overview</a></li>-->
                                    <li><a href="<?php echo $base_url; ?>src/pages/academics/llm.php">LL.M.</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/academics/llb.php">LL.B.</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/academics/ba-llb.php">B.A. LL.B.</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/academics/bcom-llb.php">B.Com. LL.B.</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/academics/teaching-learning.php">Teaching Learning Practices</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/academics/research.php">Research & Innovative</a></li>
                                    <li><a href="#">Result Analysis</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-dropdown">
                            <a href="#" <?php echo ($current_page == 'infrastructure') ? 'class="active"' : ''; ?>>Infrastructure ▼</a>
                            <div class="dropdown-wrapper">
                                <ul class="dropdown-menu">
                                    <li><a href="#">ICT Enabled Tools</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/infrastructure/seminar-hall.php">Seminar Hall</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/infrastructure/library.php">Library</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/infrastructure/classroom.php">Class Room</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/infrastructure/moot-court.php">Moot Court</a></li>
                                    <li><a href="#">Research Library</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/infrastructure/computer-lab.php">Computer Labs</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/infrastructure/cafeteria.php">Cafeteria</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-dropdown">
                            <a href="#" <?php echo ($current_page == 'committees') ? 'class="active"' : ''; ?>>Committees ▼</a>
                            <div class="dropdown-wrapper">
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/environmental.php">Environmental Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/cultural.php">Cultural Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/examination.php">Examination Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/legal-aid.php">Legal Aid Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/moot-court.php">Moot Court Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/anti-ragging.php">Anti-Ragging Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/website.php">Website Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/library-advisory.php">Library Advisory Committee</a></li>
                                    <li><a href="https://kamkus.org/assets/pdf/financecommittee.pdf">Finance Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/sports.php">Sports Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/student-grievance-redressal.php">Student Grievance<br>Redressal Committee</a></li>
                                    <li><a href="<?php echo $base_url; ?>src/pages/committees/women-grievance-redressal.php">Women Grievance<br>Redressal Committee</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?php echo $base_url; ?>src/pages/contact.php" <?php echo ($current_page == 'contact') ? 'class="active"' : ''; ?>>Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="naac-logo">
                <img src="<?php echo $base_url; ?>public/naac.png" alt="NAAC Logo">
            </div>
        </div>
    </div>

</header>
</body>
</html>
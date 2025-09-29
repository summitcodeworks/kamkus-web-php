<?php
/**
 * Configuration file for Kamkus College of Law website
 */

// Base URL configuration
// Detect whether the site is running on a local environment or production
$server_name = $_SERVER['SERVER_NAME'];
$server_port = $_SERVER['SERVER_PORT'];
$script_name = dirname($_SERVER['SCRIPT_NAME']);

// Check if we're running on localhost or production
if ($server_name == 'localhost' || $server_name == '127.0.0.1' || strpos($server_name, 'localhost') !== false || $server_port == '80' || $server_port == '8080') {
    // Local environment
    $base_url = "http://localhost";
    
    // Add port if it's not the default HTTP port
    if ($server_port != '80') {
        $base_url .= ":$server_port";
    }
    
    // Add path
    $base_url .= '/kamkusJuly/';
} else {
    // Production environment
    $is_https = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on');
    $base_url = ($is_https ? "https://" : "http://") . $server_name . "/";
}
echo "<script>console.log('Base URL: $base_url');</script>";

// Set default title and meta description for the website
$default_title = 'Kamkus College of Law - An ISO Certified Institution';
$default_description = 'Kamkus College of Law is a premier law college in Delhi NCR offering various law programs with world-class facilities and experienced faculty.';

// Visitor count (placeholder - would be implemented with a database in production)
$visitor_count = 225;

// Function to determine current page
function get_current_page() {
    $uri = $_SERVER['REQUEST_URI'];
    $uri_parts = explode('/', $uri);
    $page = end($uri_parts);
    
    // Remove any query strings
    if (strpos($page, '?') !== false) {
        $page = substr($page, 0, strpos($page, '?'));
    }
    
    // Remove file extension
    $page = pathinfo($page, PATHINFO_FILENAME);
    
    // If it's the root or index, set as home
    if ($page == '' || $page == 'index') {
        return 'home';
    }
    
    return $page;
}

// Set current page
$current_page = get_current_page();

// Email Configuration
$email_config = [
    // SMTP Settings for Gmail
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_username' => 'kamkus.law@gmail.com', // Your Gmail address
    'smtp_password' => '', // App password (to be configured)
    'smtp_secure' => 'tls',
    
    // Default receiver emails (customizable)
    'contact_receivers' => [
        'debarunlahiri2016@gmail.com', // Primary receiver as requested
    ],
    
    // Email templates
    'from_name' => 'Kamkus College of Law',
    'from_email' => 'kamkus.law@gmail.com',
    
    // Subject templates
    'subject_template' => 'New Contact Form Submission - [QUERY_TYPE] from [NAME]'
];
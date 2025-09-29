<?php
// Include configuration and email service
require_once '../includes/config.php';
require_once '../includes/email_service.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $query_type = $_POST['query_type'] ?? '';
        $message = $_POST['message'] ?? '';
        
        // Enhanced validation and sanitization
        $errors = validateFormData($name, $email, $phone, $query_type, $message);
        
        if (!empty($errors)) {
            throw new Exception(implode('. ', $errors));
        }
        
        // Sanitize input data
        $name = sanitizeInput($name);
        $email = sanitizeInput($email);
        $phone = sanitizeInput($phone);
        $query_type = sanitizeInput($query_type);
        $message = sanitizeInput($message);
        
        // Prepare form data for email service
        $formData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'query_type' => $query_type,
            'message' => $message
        ];
        
        // Send simple email notification
        $success = sendSimpleEmail($formData);
        
        if ($success) {
            // Redirect to contact page with success message
            header('Location: contact.php?status=success');
            exit();
        } else {
            throw new Exception("Failed to send email. Please try again.");
        }
        
    } else {
        throw new Exception("Invalid request method");
    }
    
} catch (Exception $e) {
    // Redirect to contact page with error message
    header('Location: contact.php?status=error&message=' . urlencode($e->getMessage()));
    exit();
}

/**
 * Simple email sending function
 */
function sendSimpleEmail($formData) {
    $to = 'debarunlahiri2016@gmail.com';
    $subject = 'New Contact Form Submission - ' . ucfirst($formData['query_type']) . ' from ' . $formData['name'];
    
    // Create email body
    $message = "New contact form submission from Kamkus College of Law website:\n\n";
    $message .= "Full Name: " . $formData['name'] . "\n";
    $message .= "Email: " . $formData['email'] . "\n";
    $message .= "Phone: " . $formData['phone'] . "\n";
    $message .= "Query Type: " . ucfirst($formData['query_type']) . "\n";
    $message .= "Message:\n" . $formData['message'] . "\n\n";
    $message .= "Submitted on: " . date('F j, Y \a\t g:i A') . "\n";
    $message .= "---\n";
    $message .= "Reply directly to: " . $formData['email'];
    
    // Email headers
    $headers = "From: Kamkus College <" . $formData['email'] . ">\r\n";
    $headers .= "Reply-To: " . $formData['email'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send email
    return mail($to, $subject, $message, $headers);
}

/**
 * Enhanced form validation
 */
function validateFormData($name, $email, $phone, $query_type, $message) {
    $errors = [];
    
    // Name validation
    if (empty(trim($name))) {
        $errors[] = "Full name is required";
    } elseif (strlen(trim($name)) < 2) {
        $errors[] = "Name must be at least 2 characters long";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', trim($name))) {
        $errors[] = "Name can only contain letters and spaces";
    }
    
    // Email validation
    if (empty(trim($email))) {
        $errors[] = "Email address is required";
    } elseif (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address";
    }
    
    // Phone validation
    if (empty(trim($phone))) {
        $errors[] = "Phone number is required";
    } else {
        $phoneNumbers = preg_replace('/\D/', '', trim($phone));
        if (strlen($phoneNumbers) < 10) {
            $errors[] = "Phone number must be at least 10 digits";
        } elseif (strlen($phoneNumbers) > 15) {
            $errors[] = "Phone number cannot exceed 15 digits";
        }
    }
    
    // Query type validation
    if (empty(trim($query_type))) {
        $errors[] = "Please select a query type";
    } else {
        $validTypes = ['admission', 'course', 'fee', 'scholarship', 'other'];
        if (!in_array(trim($query_type), $validTypes)) {
            $errors[] = "Invalid query type selected";
        }
    }
    
    // Message validation
    if (empty(trim($message))) {
        $errors[] = "Message is required";
    } elseif (strlen(trim($message)) < 10) {
        $errors[] = "Message must be at least 10 characters long";
    } elseif (strlen(trim($message)) > 1000) {
        $errors[] = "Message cannot exceed 1000 characters";
    }
    
    return $errors;
}

/**
 * Sanitize input data
 */
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}
?> 
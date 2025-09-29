<?php
/**
 * Simple email test script
 * Tests if PHP mail() function works on this server
 */

if ($_GET['test'] ?? false) {
    $to = 'debarunlahiri2016@gmail.com';
    $subject = 'Test Email from Kamkus College Contact Form';
    $message = "This is a test email to verify that the contact form email system is working.\n\n";
    $message .= "If you receive this email, the system is configured correctly!\n\n";
    $message .= "Test sent on: " . date('F j, Y \a\t g:i A') . "\n";
    $message .= "From: Kamkus College of Law Contact Form System";
    
    $headers = "From: Kamkus College <noreply@kamkus.edu>\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    $result = mail($to, $subject, $message, $headers);
    
    if ($result) {
        echo "<div style='color: green; padding: 20px; background: #d4edda; border: 1px solid #c3e6cb; border-radius: 5px; margin: 20px;'>";
        echo "<h3>✅ Test Email Sent Successfully!</h3>";
        echo "<p>A test email has been sent to <strong>debarunlahiri2016@gmail.com</strong></p>";
        echo "<p>Please check your inbox (and spam folder) to confirm delivery.</p>";
        echo "</div>";
    } else {
        echo "<div style='color: #721c24; padding: 20px; background: #f8d7da; border: 1px solid #f5c6cb; border-radius: 5px; margin: 20px;'>";
        echo "<h3>❌ Test Email Failed</h3>";
        echo "<p>The email could not be sent. This might be due to:</p>";
        echo "<ul>";
        echo "<li>PHP mail() function not enabled on server</li>";
        echo "<li>Server mail configuration issues</li>";
        echo "<li>Local development environment limitations</li>";
        echo "</ul>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Test - Kamkus College</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: #f8f9fa;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .btn {
            background: #1a365d;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 10px 0;
        }
        .btn:hover {
            background: #2c5282;
        }
        h1 {
            color: #1a365d;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📧 Email System Test</h1>
        
        <p>This page tests whether the PHP mail() function works on your server.</p>
        
        <p><strong>Receiver Email:</strong> debarunlahiri2016@gmail.com</p>
        
        <a href="?test=1" class="btn">Send Test Email</a>
        
        <br><br>
        
        <p><strong>Note:</strong> If you're on a local development environment (localhost), the email might not actually send unless you have a mail server configured.</p>
        
        <hr>
        
        <p><a href="contact.php">← Back to Contact Form</a></p>
    </div>
</body>
</html> 
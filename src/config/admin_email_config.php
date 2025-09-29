<?php
/**
 * Admin interface for managing email configuration
 * Allows adding/removing receiver email addresses
 */

require_once '../includes/config.php';
require_once '../includes/email_service.php';

// Handle POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $email = $_POST['email'] ?? '';
    
    $emailService = new EmailService();
    
    if ($action === 'add' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = $emailService->addReceiver($email);
        $message = $result ? "Email '$email' added successfully!" : "Email '$email' already exists.";
    } elseif ($action === 'test') {
        // Send test email
        $testData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '+91 98765 43210',
            'query_type' => 'other',
            'message' => 'This is a test email from the Kamkus College contact form system.'
        ];
        
        $result = $emailService->sendContactFormNotification($testData);
        $message = $result['success'] ? "Test email sent successfully!" : "Test email failed: " . $result['error'];
    }
}

$emailService = new EmailService();
$currentReceivers = $emailService->getReceivers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Configuration - Kamkus College</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .header {
            background: #1a365d;
            color: white;
            padding: 2rem;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        
        .content {
            background: white;
            padding: 2rem;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .card {
            background: #f8f9fa;
            padding: 1.5rem;
            margin: 1rem 0;
            border-radius: 8px;
            border-left: 4px solid #1a365d;
        }
        
        .form-group {
            margin: 1rem 0;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #1a365d;
        }
        
        input[type="email"] {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e2e8f0;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        input[type="email"]:focus {
            outline: none;
            border-color: #1a365d;
        }
        
        .btn {
            background: #1a365d;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin: 0.5rem 0.5rem 0.5rem 0;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background: #2c5282;
        }
        
        .btn-test {
            background: #38a169;
        }
        
        .btn-test:hover {
            background: #2f855a;
        }
        
        .receivers-list {
            list-style: none;
        }
        
        .receiver-item {
            background: white;
            padding: 1rem;
            margin: 0.5rem 0;
            border-radius: 5px;
            border: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .message {
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 5px;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .back-link {
            display: inline-block;
            margin: 1rem 0;
            color: #1a365d;
            text-decoration: none;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Email Configuration</h1>
            <p>Manage contact form email receivers</p>
        </div>
        
        <div class="content">
            <a href="contact.php" class="back-link">← Back to Contact Form</a>
            
            <?php if (isset($message)): ?>
                <div class="message"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>
            
            <div class="card">
                <h2>Current Email Receivers</h2>
                <p>Contact form submissions will be sent to these email addresses:</p>
                
                <ul class="receivers-list">
                    <?php foreach ($currentReceivers as $receiver): ?>
                        <li class="receiver-item">
                            <span><?php echo htmlspecialchars($receiver); ?></span>
                            <?php if ($receiver === 'debarunlahiri2016@gmail.com'): ?>
                                <span style="color: #38a169; font-weight: bold;">Primary</span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="card">
                <h2>Add New Receiver</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    
                    <button type="submit" name="action" value="add" class="btn">
                        Add Email Receiver
                    </button>
                </form>
            </div>
            
            <div class="card">
                <h2>Test Email System</h2>
                <p>Send a test email to all configured receivers to verify the email system is working.</p>
                
                <form method="POST">
                    <button type="submit" name="action" value="test" class="btn btn-test">
                        Send Test Email
                    </button>
                </form>
            </div>
            
            <div class="card">
                <h2>Configuration Details</h2>
                <p><strong>Primary Receiver:</strong> debarunlahiri2016@gmail.com (as requested)</p>
                <p><strong>Secondary Receiver:</strong> kamkus.law@gmail.com</p>
                <p><strong>Email Format:</strong> HTML + Plain Text</p>
                <p><strong>Subject Template:</strong> "New Contact Form Submission - [QUERY_TYPE] from [NAME]"</p>
            </div>
        </div>
    </div>
</body>
</html> 
<?php
/**
 * Email Service for Kamkus College of Law
 * Handles contact form email notifications with Gmail SMTP
 */

require_once 'config.php';

class EmailService {
    private $email_config;
    
    public function __construct() {
        global $email_config;
        $this->email_config = $email_config;
    }
    
    /**
     * Send contact form email notification
     */
    public function sendContactFormNotification($formData) {
        try {
            // Create email subject
            $subject = str_replace(
                ['[QUERY_TYPE]', '[NAME]'], 
                [ucfirst($formData['query_type']), $formData['name']], 
                $this->email_config['subject_template']
            );
            
            // Create HTML email body
            $htmlBody = $this->createHtmlEmailBody($formData);
            
            // Create plain text version
            $textBody = $this->createTextEmailBody($formData);
            
            // Send to all configured receivers
            $results = [];
            foreach ($this->email_config['contact_receivers'] as $receiver) {
                $result = $this->sendEmail($receiver, $subject, $htmlBody, $textBody, $formData['email']);
                $results[] = [
                    'receiver' => $receiver,
                    'success' => $result
                ];
            }
            
            return [
                'success' => true,
                'results' => $results,
                'message' => 'Email notifications sent successfully'
            ];
            
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
    
    /**
     * Send email using PHP mail function with enhanced headers
     */
    private function sendEmail($to, $subject, $htmlBody, $textBody, $replyTo) {
        // Create unique boundary
        $boundary = md5(uniqid(time()));
        
        // Headers
        $headers = "From: " . $this->email_config['from_name'] . " <" . $this->email_config['from_email'] . ">\r\n";
        $headers .= "Reply-To: $replyTo\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        
        // Create multipart message
        $message = "--$boundary\r\n";
        $message .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= $textBody . "\r\n";
        
        $message .= "--$boundary\r\n";
        $message .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= $htmlBody . "\r\n";
        
        $message .= "--$boundary--\r\n";
        
        // Send email
        return mail($to, $subject, $message, $headers);
    }
    
    /**
     * Create HTML email body
     */
    private function createHtmlEmailBody($formData) {
        $queryTypeLabels = [
            'admission' => 'Admission Related',
            'course' => 'Course Related',
            'fee' => 'Fee Related',
            'scholarship' => 'Scholarship Related',
            'other' => 'Other'
        ];
        
        $queryTypeLabel = $queryTypeLabels[$formData['query_type']] ?? ucfirst($formData['query_type']);
        
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #1a365d; color: white; padding: 20px; text-align: center; }
                .content { background: #f8f9fa; padding: 20px; }
                .info-box { background: white; padding: 15px; margin: 10px 0; border-left: 4px solid #1a365d; }
                .label { font-weight: bold; color: #1a365d; }
                .message-box { background: #e8f4f8; padding: 15px; margin: 15px 0; border-radius: 5px; }
                .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                    <p>Kamkus College of Law</p>
                </div>
                
                <div class='content'>
                    <div class='info-box'>
                        <p><span class='label'>Full Name:</span> {$formData['name']}</p>
                    </div>
                    
                    <div class='info-box'>
                        <p><span class='label'>Email Address:</span> <a href='mailto:{$formData['email']}'>{$formData['email']}</a></p>
                    </div>
                    
                    <div class='info-box'>
                        <p><span class='label'>Phone Number:</span> <a href='tel:{$formData['phone']}'>{$formData['phone']}</a></p>
                    </div>
                    
                    <div class='info-box'>
                        <p><span class='label'>Query Type:</span> {$queryTypeLabel}</p>
                    </div>
                    
                    <div class='message-box'>
                        <p class='label'>Message:</p>
                        <p>" . nl2br(htmlspecialchars($formData['message'])) . "</p>
                    </div>
                    
                    <div class='info-box'>
                        <p><span class='label'>Submitted on:</span> " . date('F j, Y \a\t g:i A') . "</p>
                    </div>
                </div>
                
                <div class='footer'>
                    <p>This email was sent from the Kamkus College of Law contact form.</p>
                    <p>Please reply directly to the sender's email address: {$formData['email']}</p>
                </div>
            </div>
        </body>
        </html>";
    }
    
    /**
     * Create plain text email body
     */
    private function createTextEmailBody($formData) {
        $queryTypeLabels = [
            'admission' => 'Admission Related',
            'course' => 'Course Related',
            'fee' => 'Fee Related',
            'scholarship' => 'Scholarship Related',
            'other' => 'Other'
        ];
        
        $queryTypeLabel = $queryTypeLabels[$formData['query_type']] ?? ucfirst($formData['query_type']);
        
        return "
NEW CONTACT FORM SUBMISSION
===========================
Kamkus College of Law

Full Name: {$formData['name']}
Email Address: {$formData['email']}
Phone Number: {$formData['phone']}
Query Type: {$queryTypeLabel}

Message:
--------
{$formData['message']}

Submitted on: " . date('F j, Y \a\t g:i A') . "

---
This email was sent from the Kamkus College of Law contact form.
Please reply directly to the sender's email address: {$formData['email']}
        ";
    }
    
    /**
     * Add or update receiver email
     */
    public function addReceiver($email) {
        // This would typically update a database or config file
        // For now, we'll add it to the runtime configuration
        if (!in_array($email, $this->email_config['contact_receivers'])) {
            $this->email_config['contact_receivers'][] = $email;
            return true;
        }
        return false;
    }
    
    /**
     * Get current receivers
     */
    public function getReceivers() {
        return $this->email_config['contact_receivers'];
    }
}
?> 
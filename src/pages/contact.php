<?php
// Include configuration file
require_once '../includes/config.php';

// Set page-specific variables
$page_title = 'Contact Us - Kamkus College of Law';
$page_description = 'Get in touch with Kamkus College of Law. Find our location, contact details, and send us your queries.';
$current_page = 'contact';
$additional_css = '<link rel="stylesheet" href="' . $base_url . 'src/styles/css/pages/contact.css">';
$additional_js = '<script src="' . $base_url . 'src/scripts/js/form-validation.js"></script>';

// Include header
include '../includes/header.php';
?>

<main class="contact-page">
<style>
/* Essential CSS for contact page */
.contact-page {
    padding: 2rem 0;
    background-color: #f8f9fa;
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.breadcrumb {
    background: linear-gradient(135deg, #ffffff, #f8fafc);
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 16px 24px;
    margin: 0 auto 1rem auto;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    backdrop-filter: blur(10px);
    width: 100%;
    max-width: 1200px;
}

.breadcrumb a {
    color: #64748b;
    text-decoration: none;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.breadcrumb a:hover {
    color: #1E293B;
    background: rgba(30, 41, 59, 0.08);
    transform: translateY(-1px);
}

.breadcrumb i.fas.fa-chevron-right {
    color: #cbd5e1;
    font-size: 12px;
    margin: 0 4px;
}

.breadcrumb span {
    color: #1E293B;
    font-weight: 600;
    background: rgba(30, 41, 59, 0.1);
    padding: 6px 12px;
    border-radius: 8px;
    border: 1px solid rgba(30, 41, 59, 0.15);
}

.alert {
    margin-bottom: 2rem;
    border-radius: 8px;
    overflow: hidden;
}

.alert-success {
    background: #d1fae5;
    border: 1px solid #10b981;
    color: #065f46;
}

.alert-error {
    background: #fee2e2;
    border: 1px solid #ef4444;
    color: #991b1b;
}

.alert-content {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem 1.5rem;
}

.alert-close {
    background: none;
    border: none;
    color: inherit;
    cursor: pointer;
    padding: 0.25rem;
    margin-left: auto;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 2rem;
    margin-bottom: 2rem;
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
}
</style>
    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="<?php echo $base_url; ?>">
                <i class="fas fa-home"></i>
                Home
            </a>
            <i class="fas fa-chevron-right"></i>
            <span>Contact Us</span>
        </div>

        <!-- Page Header -->
        <div class="page-header">
            <div class="header-content">
                <h1>Contact Us</h1>
                <p>We're here to help and answer any questions you might have about Kamkus College of Law. 
                Please feel free to contact us using the information below or fill out the form.</p>
            </div>
        </div>

        <?php
        // Display enhanced status messages
        if (isset($_GET['status'])) {
            if ($_GET['status'] === 'success') {
                echo '<div class="alert alert-success" id="successAlert">
                        <div class="alert-content">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong>Message Sent Successfully!</strong><br>
                                Thank you for contacting Kamkus College of Law. We have received your inquiry and will respond within 24 hours.
                            </span>
                            <button type="button" class="alert-close" onclick="closeAlert(\'successAlert\')">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                      </div>';
            } elseif ($_GET['status'] === 'error') {
                $errorMessage = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'An error occurred. Please try again.';
                echo '<div class="alert alert-error" id="errorAlert">
                        <div class="alert-content">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>
                                <strong>Message Could Not Be Sent</strong><br>
                                ' . $errorMessage . ' Please try again or contact us directly.
                            </span>
                            <button type="button" class="alert-close" onclick="closeAlert(\'errorAlert\')">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                      </div>';
            }
        }
        ?>

        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info-card">
                <div class="card-header">
                    <i class="fas fa-envelope"></i>
                    <h2>Contact Information</h2>
                </div>
                
                <div class="info-content">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-text">
                            <h3>Address</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Kamkus+College+of+Law" target="_blank" rel="noopener noreferrer">
                                    B Block, Sector 23, Sanjay Nagar, Ghaziabad, Uttar Pradesh, 201002
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h3>Phone</h3>
                            <p>
                                <a href="tel:+919310006444">+91 93100 06444</a>,
                                <a href="tel:+918737906444">+91 87379 06444</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-text">
                            <h3>Email</h3>
                            <p>
                                <a href="mailto:kamkus.law@gmail.com">kamkus.law@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-text">
                            <h3>Office Hours</h3>
                            <p>7 Days Open 9:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-card">
                <div class="card-header">
                    <i class="fas fa-paper-plane"></i>
                    <h2>Send Us a Message</h2>
                </div>
                
                <div class="form-content">
                    <form action="process_contact.php" method="POST" class="contact-form">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Full Name*</label>
                                <input type="text" id="name" name="name" placeholder="John Doe" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" required>
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="phone">Phone Number*</label>
                                <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="query_type">Query Type*</label>
                                <select id="query_type" name="query_type" required>
                                    <option value="">-- Select Query Type --</option>
                                    <option value="admission">Admission Related</option>
                                    <option value="course">Course Related</option>
                                    <option value="fee">Fee Related</option>
                                    <option value="scholarship">Scholarship Related</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group has-counter">
                            <label for="message">Message* <span class="char-info">(10-1000 characters)</span></label>
                            <textarea id="message" name="message" rows="5" placeholder="Please provide details about your query..." required maxlength="1000"></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            Submit Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-card">
            <div class="card-header">
                <i class="fas fa-map-marker-alt"></i>
                <h2>Find Us</h2>
            </div>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.8290858932876!2d77.41835937634461!3d28.68997617555892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1bd908fa14d%3A0x6f970d277e0b03b9!2sKamkus%20College%20of%20Law!5e0!3m2!1sen!2sin!4v1708410544682!5m2!1sen!2sin" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</main>

<script>
// Enhanced alert functionality
function closeAlert(alertId) {
    const alert = document.getElementById(alertId);
    if (alert) {
        alert.style.animation = 'slideOutUp 0.4s ease-in forwards';
        setTimeout(() => {
            alert.remove();
            // Clean URL by removing status parameters
            const url = new URL(window.location);
            url.searchParams.delete('status');
            url.searchParams.delete('message');
            window.history.replaceState({}, '', url);
        }, 400);
    }
}

// Auto-hide success alerts after 8 seconds
document.addEventListener('DOMContentLoaded', function() {
    const successAlert = document.getElementById('successAlert');
    if (successAlert) {
        setTimeout(() => {
            closeAlert('successAlert');
        }, 8000);
    }
    
    // Auto-hide error alerts after 12 seconds
    const errorAlert = document.getElementById('errorAlert');
    if (errorAlert) {
        setTimeout(() => {
            closeAlert('errorAlert');
        }, 12000);
    }
});
</script>

<style>
@keyframes slideOutUp {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-10px);
    }
}
</style>

<?php include('../includes/footer.php'); ?> 
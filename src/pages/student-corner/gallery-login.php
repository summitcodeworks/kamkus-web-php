<?php
session_start();

$page_title = "Gallery Login - Kamkus College of Law";
$page_description = "Login to upload and manage your photos in the Kamkus College gallery.";
$current_page = "student-corner";
require_once '../../includes/config.php';

// Handle login
if ($_POST) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    // Simple demo authentication - in real app, verify against database
    if ($username && $password) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['account_number'] = 'ACC' . rand(1000, 9999);
        header('Location: gallery.php');
        exit;
    } else {
        $error = "Please enter both username and password.";
    }
}

include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Login Page Styles */
.login-container {
    min-height: 100vh;
    background: linear-gradient(135deg, #1E293B 0%, #334155 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem 1rem;
}

.login-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    padding: 3rem;
    width: 100%;
    max-width: 420px;
    position: relative;
}

.login-header {
    text-align: center;
    margin-bottom: 2rem;
}

.login-logo {
    width: 60px;
    height: 60px;
    background: #1E293B;
    border-radius: 12px;
    margin: 0 auto 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
}

.login-title {
    font-size: 1.875rem;
    font-weight: bold;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.login-subtitle {
    color: #6b7280;
    font-size: 0.875rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    font-weight: 500;
    color: #374151;
    margin-bottom: 0.5rem;
    font-size: 0.875rem;
}

.form-input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-input:focus {
    outline: none;
    border-color: #1E293B;
    box-shadow: 0 0 0 3px rgba(30, 41, 59, 0.1);
}

.form-input.error {
    border-color: #dc2626;
}

.error-message {
    background: #fef2f2;
    color: #dc2626;
    padding: 0.75rem;
    border-radius: 8px;
    font-size: 0.875rem;
    margin-bottom: 1rem;
    border: 1px solid #fecaca;
}

.login-button {
    width: 100%;
    background: #1E293B;
    color: white;
    padding: 0.875rem 1rem;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.login-button:hover {
    background: #2d3c50;
    transform: translateY(-1px);
}

.login-button:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

.divider {
    display: flex;
    align-items: center;
    margin: 1.5rem 0;
}

.divider::before,
.divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #e5e7eb;
}

.divider span {
    padding: 0 1rem;
    color: #6b7280;
    font-size: 0.875rem;
}

.demo-credentials {
    background: #f3f4f6;
    border-radius: 8px;
    padding: 1rem;
    margin-bottom: 1.5rem;
    border: 1px solid #e5e7eb;
}

.demo-credentials h4 {
    color: #374151;
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.demo-credentials p {
    color: #6b7280;
    font-size: 0.75rem;
    margin: 0.25rem 0;
}

.back-link {
    text-align: center;
    margin-top: 1.5rem;
}

.back-link a {
    color: #1E293B;
    text-decoration: none;
    font-size: 0.875rem;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.back-link a:hover {
    color: #2d3c50;
}

/* Responsive Design */
@media (max-width: 480px) {
    .login-card {
        padding: 2rem 1.5rem;
        margin: 1rem;
    }
    
    .login-title {
        font-size: 1.5rem;
    }
}

/* Animation */
.login-card {
    animation: slideUp 0.5s ease-out;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">
                <i class="fas fa-camera"></i>
            </div>
            <h1 class="login-title">Gallery Login</h1>
            <p class="login-subtitle">Sign in to upload and manage your photos</p>
        </div>

        <?php if (isset($error)): ?>
        <div class="error-message">
            <i class="fas fa-exclamation-circle"></i>
            <?php echo htmlspecialchars($error); ?>
        </div>
        <?php endif; ?>

        <!-- Demo Credentials -->
        <div class="demo-credentials">
            <h4><i class="fas fa-info-circle"></i> Demo Login</h4>
            <p><strong>Username:</strong> student123</p>
            <p><strong>Password:</strong> password123</p>
            <p style="margin-top: 0.5rem; font-style: italic;">Use any credentials for demo purposes</p>
        </div>

        <form method="POST" id="loginForm">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    class="form-input" 
                    placeholder="Enter your username"
                    value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="form-input" 
                    placeholder="Enter your password"
                    required
                >
            </div>

            <button type="submit" class="login-button">
                <i class="fas fa-sign-in-alt"></i>
                Sign In
            </button>
        </form>

        <div class="divider">
            <span>or</span>
        </div>

        <div class="back-link">
            <a href="gallery.php">
                <i class="fas fa-arrow-left"></i>
                Back to Gallery
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const loginButton = form.querySelector('.login-button');
    
    form.addEventListener('submit', function() {
        loginButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Signing In...';
        loginButton.disabled = true;
    });
    
    // Auto-fill demo credentials when demo box is clicked
    const demoBox = document.querySelector('.demo-credentials');
    demoBox.addEventListener('click', function() {
        document.getElementById('username').value = 'student123';
        document.getElementById('password').value = 'password123';
    });
    
    // Style demo box to look clickable
    demoBox.style.cursor = 'pointer';
    demoBox.addEventListener('mouseenter', function() {
        this.style.background = '#e5e7eb';
    });
    demoBox.addEventListener('mouseleave', function() {
        this.style.background = '#f3f4f6';
    });
});
</script>

<?php include('../includes/footer.php'); ?> 
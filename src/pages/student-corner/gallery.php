<?php
session_start();

$page_title = "Photo Gallery - Kamkus College of Law";
$page_description = "Explore moments captured across our campus, from academic events to cultural celebrations. View and upload photos from campus life at Kamkus College of Law.";
$current_page = "student-corner";
require_once '../../includes/config.php';

include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Gallery page */

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

/* Gallery-specific styling */
.gallery-header {
    background: #1E293B;
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.gallery-header h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.gallery-header p {
    font-size: 1.125rem;
    color: #d1d5db;
    max-width: 768px;
    margin: 0 auto;
}

.user-status-section {
    background: #f9fafb;
    padding: 1rem 0;
    border-bottom: 1px solid #e5e7eb;
}

.user-status-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #1E293B;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px;
}

.user-buttons {
    display: flex;
    gap: 12px;
    align-items: center;
}

.btn {
    padding: 8px 16px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    transition: all 0.3s ease;
    border: 1px solid transparent;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.btn-primary {
    background: #1E293B;
    color: white;
    border-color: #1E293B;
}

.btn-primary:hover {
    background: #2d3c50;
    border-color: #2d3c50;
}

.btn-secondary {
    background: white;
    color: #374151;
    border-color: #d1d5db;
}

.btn-secondary:hover {
    background: #f3f4f6;
    color: #111827;
}

/* Upload Section */
.upload-section {
    background: #f9fafb;
    padding: 2rem 0;
}

.upload-dropzone {
    border: 2px dashed #d1d5db;
    border-radius: 12px;
    padding: 3rem 2rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.upload-dropzone:hover {
    border-color: #1E293B;
    background: rgba(30, 41, 59, 0.02);
}

.upload-dropzone.drag-active {
    border-color: #1E293B;
    background: rgba(30, 41, 59, 0.05);
}

.upload-icon {
    width: 48px;
    height: 48px;
    margin: 0 auto 1rem;
    color: #9ca3af;
}

.upload-text {
    font-size: 1.125rem;
    font-weight: 500;
    color: #1E293B;
    margin-bottom: 0.5rem;
}

.upload-subtext {
    font-size: 0.875rem;
    color: #6b7280;
}

/* Preview Grid */
.preview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1rem;
    margin-top: 1.5rem;
}

.preview-item {
    position: relative;
    group: hover;
}

.preview-image {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 8px;
}

.preview-remove {
    position: absolute;
    top: 8px;
    right: 8px;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.preview-item:hover .preview-remove {
    opacity: 1;
}

.preview-remove:hover {
    background: rgba(0, 0, 0, 0.7);
}

/* Gallery Grid */
.gallery-section {
    padding: 3rem 0;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.gallery-item {
    transition: all 0.3s ease;
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
    transform: translateY(20px);
}

.gallery-item:nth-child(n) {
    animation-delay: calc(var(--item-index, 0) * 0.1s);
}

.gallery-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.gallery-card:hover {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.08);
    transform: translateY(-8px);
}

.gallery-image-container {
    position: relative;
    height: 280px;
    overflow: hidden;
    cursor: pointer;
    background: #f3f4f6;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.image-loaded .gallery-image {
    opacity: 1 !important;
}

/* Ensure images are visible when loaded */
.gallery-image[style*="opacity: 1"] {
    opacity: 1 !important;
}

.gallery-card:hover .gallery-image {
    transform: scale(1.08);
}

.gallery-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(30, 41, 59, 0) 0%, rgba(30, 41, 59, 0.8) 100%);
    opacity: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
}

.gallery-card:hover .gallery-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: white;
    transform: translateY(20px);
    transition: transform 0.4s ease;
}

.gallery-card:hover .overlay-content {
    transform: translateY(0);
}

.zoom-icon {
    font-size: 3rem;
    margin-bottom: 0.5rem;
    animation: pulse 2s infinite;
}

.overlay-text {
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.category-badge {
    position: absolute;
    top: 16px;
    left: 16px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    padding: 6px 12px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.75rem;
    font-weight: 600;
    color: #1E293B;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.category-badge i {
    font-size: 0.875rem;
}

.gallery-card:hover .category-badge {
    background: rgba(255, 255, 255, 1);
    transform: translateY(-2px);
}

.image-loader {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f3f4f6;
    transition: opacity 0.3s ease;
}

.image-loaded .image-loader {
    opacity: 0;
    pointer-events: none;
}

.loader-spinner {
    width: 32px;
    height: 32px;
    border: 3px solid #e5e7eb;
    border-top: 3px solid #1E293B;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.image-error {
    background: #fef2f2;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #dc2626;
    font-size: 2rem;
}

.gallery-info {
    padding: 1.5rem;
}

.gallery-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    gap: 1rem;
}

.gallery-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0;
    line-height: 1.4;
    flex: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.gallery-actions {
    display: flex;
    gap: 8px;
    flex-shrink: 0;
}

.action-btn {
    background: transparent;
    border: none;
    color: #9ca3af;
    cursor: pointer;
    padding: 8px;
    border-radius: 50%;
    transition: all 0.3s ease;
    position: relative;
}

.action-btn:hover {
    color: #1E293B;
    background: rgba(30, 41, 59, 0.1);
    transform: translateY(-1px);
}

.like-btn.liked {
    color: #ef4444;
}

.like-btn.liked i {
    animation: heartBeat 0.6s ease-in-out;
}

.floating-heart {
    position: absolute;
    color: #ef4444;
    animation: floatHeart 1s ease-out forwards;
    pointer-events: none;
}

.gallery-meta {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.meta-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.author-info {
    display: flex;
    align-items: center;
    gap: 8px;
}

.author-avatar {
    width: 28px;
    height: 28px;
    background: linear-gradient(135deg, #1E293B, #334155);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 600;
}

.author-name {
    font-size: 0.875rem;
    font-weight: 500;
    color: #374151;
}

.photo-date {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 0.75rem;
    color: #6b7280;
}

.status-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.gallery-status {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 4px 10px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 500;
}

.status-approved {
    background: rgba(34, 197, 94, 0.1);
    color: #059669;
}

.status-pending {
    background: rgba(251, 191, 36, 0.1);
    color: #d97706;
}

.status-rejected {
    background: rgba(239, 68, 68, 0.1);
    color: #dc2626;
}

.photo-stats {
    display: flex;
    gap: 12px;
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 0.75rem;
    color: #9ca3af;
}

/* Empty State */
.empty-gallery-state {
    grid-column: 1 / -1;
    text-align: center;
    padding: 4rem 2rem;
    background: white;
    border-radius: 16px;
    border: 2px dashed #e5e7eb;
}

.empty-icon {
    width: 80px;
    height: 80px;
    background: #f3f4f6;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
    color: #9ca3af;
}

.empty-gallery-state h3 {
    font-size: 1.5rem;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.empty-gallery-state p {
    color: #6b7280;
    margin-bottom: 2rem;
}

/* Toast Notification */
.toast-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #1E293B;
    color: white;
    padding: 12px 24px;
    border-radius: 8px;
    z-index: 1001;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.toast-notification.show {
    transform: translateX(0);
}

/* Animations */
@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

@keyframes heartBeat {
    0% { transform: scale(1); }
    14% { transform: scale(1.3); }
    28% { transform: scale(1); }
    42% { transform: scale(1.3); }
    70% { transform: scale(1); }
}

@keyframes floatHeart {
    0% {
        transform: translateY(0) scale(1);
        opacity: 1;
    }
    100% {
        transform: translateY(-20px) scale(0.8);
        opacity: 0;
    }
}

/* Lightbox Modal */
.lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.9);
    z-index: 1000;
    display: none;
    align-items: center;
    justify-content: center;
}

.lightbox.active {
    display: flex;
}

.lightbox-content {
    position: relative;
    max-width: 90vw;
    max-height: 90vh;
}

.lightbox-image {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    border-radius: 50%;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.lightbox-nav:hover {
    background: rgba(0, 0, 0, 0.8);
}

.lightbox-prev {
    left: -60px;
}

.lightbox-next {
    right: -60px;
}

.lightbox-close {
    position: absolute;
    top: -60px;
    right: 0;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.lightbox-close:hover {
    background: rgba(0, 0, 0, 0.8);
}

/* Loading States */
.loading-skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

.gallery-skeleton {
    height: 250px;
    border-radius: 12px;
}

.text-skeleton {
    height: 20px;
    border-radius: 4px;
    margin-bottom: 8px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .gallery-header h1 {
        font-size: 2rem;
    }
    
    .user-status-content {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    
    .user-buttons {
        justify-content: center;
    }
    
    .gallery-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .gallery-card {
        margin: 0 auto;
        max-width: 400px;
    }
    
    .gallery-image-container {
        height: 240px;
    }
    
    .gallery-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.75rem;
    }
    
    .gallery-actions {
        align-self: flex-end;
    }
    
    .category-badge {
        top: 12px;
        left: 12px;
        font-size: 0.7rem;
        padding: 4px 10px;
    }
    
    .overlay-text {
        font-size: 0.875rem;
    }
    
    .zoom-icon {
        font-size: 2.5rem;
    }
    
    .meta-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .photo-date {
        align-self: flex-end;
    }
    
    .preview-grid {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }
    
    .lightbox-nav {
        display: none;
    }
    
    .toast-notification {
        left: 20px;
        right: 20px;
        transform: translateY(-100%);
    }
    
    .toast-notification.show {
        transform: translateY(0);
    }
}

@media (max-width: 640px) {
    .upload-dropzone {
        padding: 2rem 1rem;
    }
    
    .gallery-info {
        padding: 1rem;
    }
}

/* Card headers alignment fix */
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
</style>

<!-- Main Page Content -->
<main class="teaching-learning-page">
    <!-- Breadcrumb -->
    <div class="content-section">
        <div class="container" style="max-width: 1200px;">
            <div class="breadcrumb">
                <a href="<?php echo $base_url; ?>">
                    <i class="fas fa-home"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right"></i>
                <span>Photo Gallery</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/gallery/farewell1.jpg" 
             alt="Campus Gallery at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <i class="fas fa-camera"></i>
                        <span>Memories</span>
                    </div>
                    <h1>Campus Gallery</h1>
                    <p>Explore moments captured across our campus, from academic events to cultural celebrations</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="stats-text">
                        <h4>Campus Life</h4>
                        <p>Captured Moments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Status Section -->
    <section class="user-status-section">
        <div class="container">
            <div class="user-status-content">
                <div class="user-info">
                    <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']): ?>
                        <div class="user-avatar">
                            <?php echo strtoupper(substr($_SESSION['username'], 0, 1)); ?>
                        </div>
                        <div>
                            <p style="font-weight: 600; color: #1E293B; margin: 0;">
                                Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
                            </p>
                        </div>
                    <?php else: ?>
                        <p style="color: #6b7280; font-size: 14px; margin: 0;">
                            Login with your Kamkus ERP credentials to upload photos
                        </p>
                    <?php endif; ?>
                </div>
                
                <div class="user-buttons">
                    <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']): ?>
                        <a href="#upload-section" class="btn btn-primary">
                            <i class="fas fa-upload"></i>
                            Upload Photos
                        </a>
                        <a href="gallery-dashboard.php" class="btn btn-secondary">
                            <i class="fas fa-user"></i>
                            Dashboard
                        </a>
                        <a href="?logout=1" class="btn btn-secondary">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    <?php else: ?>
                        <a href="gallery-login.php" class="btn btn-secondary">
                            <i class="fas fa-sign-in-alt"></i>
                            Login / Upload Photos
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']): ?>
    <!-- Upload Section -->
    <section class="upload-section" id="upload-section">
        <div class="container">
            <form id="upload-form" enctype="multipart/form-data">
                <div class="upload-dropzone" id="dropzone">
                    <div class="upload-icon">
                        <i class="fas fa-upload"></i>
                    </div>
                    <div class="upload-text">Drag & drop your photos here</div>
                    <div class="upload-subtext">or click to select files</div>
                    <input type="file" id="file-input" multiple accept="image/*" style="display: none;">
                </div>
                
                <div id="preview-container" style="display: none;">
                    <div class="preview-grid" id="preview-grid"></div>
                    <div style="margin-top: 1.5rem; text-align: right;">
                        <button type="submit" class="btn btn-primary" id="upload-btn">
                            <i class="fas fa-upload"></i>
                            Upload Photos
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php endif; ?>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; font-weight: bold; color: #1f2937; margin-bottom: 1rem;">
                Campus Memories
            </h2>
            <p style="text-align: center; color: #6b7280; max-width: 600px; margin: 0 auto 2rem;">
                Discover the vibrant life at Kamkus College of Law through our photo gallery
            </p>
            
            <?php
            // Dynamic gallery data - in production, this would come from database
            $gallery_photos = [
                [
                    'id' => 1,
                    'filename' => 'farewell1.jpg',
                    'title' => 'Annual Farewell Ceremony',
                    'alt' => 'Farewell Event - Students celebrating graduation',
                    'student_name' => 'Cultural Committee',
                    'date' => '2024-03-15',
                    'category' => 'Cultural',
                    'category_icon' => 'fas fa-theater-masks',
                    'status' => 'approved',
                    'views' => 245,
                    'likes' => 18,
                    'description' => 'A memorable farewell ceremony celebrating our graduating students'
                ],
                [
                    'id' => 2,
                    'filename' => 'yoga day.jpg',
                    'title' => 'International Yoga Day Celebration',
                    'alt' => 'Yoga Day - Students practicing yoga',
                    'student_name' => 'Health Committee',
                    'date' => '2024-06-21',
                    'category' => 'Health',
                    'category_icon' => 'fas fa-heartbeat',
                    'status' => 'approved',
                    'views' => 189,
                    'likes' => 23,
                    'description' => 'Students and faculty celebrating International Yoga Day'
                ],
                [
                    'id' => 3,
                    'filename' => 'sportscom.jpg',
                    'title' => 'Inter-College Sports Meet',
                    'alt' => 'Sports Event - Athletic competition',
                    'student_name' => 'Sports Committee',
                    'date' => '2024-02-28',
                    'category' => 'Sports',
                    'category_icon' => 'fas fa-trophy',
                    'status' => 'approved',
                    'views' => 312,
                    'likes' => 34,
                    'description' => 'Annual inter-college sports competition showcasing athletic excellence'
                ],
                [
                    'id' => 4,
                    'filename' => 'env.jpg',
                    'title' => 'World Environment Day',
                    'alt' => 'Environment Day - Tree plantation drive',
                    'student_name' => 'Environmental Committee',
                    'date' => '2024-06-05',
                    'category' => 'Environment',
                    'category_icon' => 'fas fa-leaf',
                    'status' => 'approved',
                    'views' => 156,
                    'likes' => 19,
                    'description' => 'Tree plantation drive and environmental awareness campaign'
                ],
                [
                    'id' => 5,
                    'filename' => 'skit (1).jpg',
                    'title' => 'Cultural Skit Performance',
                    'alt' => 'Drama Performance - Students performing skit',
                    'student_name' => 'Drama Club',
                    'date' => '2024-04-12',
                    'category' => 'Drama',
                    'category_icon' => 'fas fa-masks-theater',
                    'status' => 'approved',
                    'views' => 203,
                    'likes' => 27,
                    'description' => 'Students showcasing their dramatic talents in cultural performance'
                ],
                [
                    'id' => 6,
                    'filename' => 'WhatsApp Image 2023-10-05 at 1.52.17 PM (1).jpeg',
                    'title' => 'Academic Excellence Workshop',
                    'alt' => 'Academic Event - Workshop session',
                    'student_name' => 'Academic Committee',
                    'date' => '2024-01-20',
                    'category' => 'Academic',
                    'category_icon' => 'fas fa-graduation-cap',
                    'status' => 'approved',
                    'views' => 178,
                    'likes' => 15,
                    'description' => 'Workshop on academic excellence and study methodologies'
                ],
                [
                    'id' => 7,
                    'filename' => 'facebook_1698734217834_7125007724801897768.jpg',
                    'title' => 'Social Media Campaign Launch',
                    'alt' => 'Social Media Event - Digital awareness campaign',
                    'student_name' => 'Media Committee',
                    'date' => '2023-10-31',
                    'category' => 'Digital',
                    'category_icon' => 'fas fa-share-alt',
                    'status' => 'approved',
                    'views' => 142,
                    'likes' => 21,
                    'description' => 'Launch of college social media awareness campaign'
                ],
                [
                    'id' => 8,
                    'filename' => 'Screenshot_20231027_102805_Facebook.jpg',
                    'title' => 'Digital Literacy Workshop',
                    'alt' => 'Technology Workshop - Digital skills training',
                    'student_name' => 'IT Committee',
                    'date' => '2023-10-27',
                    'category' => 'Technology',
                    'category_icon' => 'fas fa-laptop',
                    'status' => 'approved',
                    'views' => 98,
                    'likes' => 12,
                    'description' => 'Digital literacy and social media awareness workshop'
                ],
                [
                    'id' => 9,
                    'filename' => 'WhatsApp Image 2023-10-13 at 10.45.16 AM (1) (1).jpeg',
                    'title' => 'Faculty Development Program',
                    'alt' => 'Faculty Event - Professional development session',
                    'student_name' => 'Faculty Council',
                    'date' => '2023-10-13',
                    'category' => 'Academic',
                    'category_icon' => 'fas fa-chalkboard-teacher',
                    'status' => 'approved',
                    'views' => 134,
                    'likes' => 16,
                    'description' => 'Faculty development and training program'
                ],
                [
                    'id' => 10,
                    'filename' => 'WhatsApp Image 2023-06-27 at 3.40.48 PM (1).jpeg',
                    'title' => 'Summer Orientation Program',
                    'alt' => 'Orientation - New student welcome session',
                    'student_name' => 'Student Council',
                    'date' => '2023-06-27',
                    'category' => 'Orientation',
                    'category_icon' => 'fas fa-handshake',
                    'status' => 'approved',
                    'views' => 201,
                    'likes' => 29,
                    'description' => 'Summer orientation program for new students'
                ],
                [
                    'id' => 11,
                    'filename' => 'WhatsApp Image 2023-06-27 at 3.40.49 PM.jpeg',
                    'title' => 'Welcome Ceremony',
                    'alt' => 'Welcome Event - Student induction ceremony',
                    'student_name' => 'Student Council',
                    'date' => '2023-06-27',
                    'category' => 'Orientation',
                    'category_icon' => 'fas fa-flag',
                    'status' => 'approved',
                    'views' => 187,
                    'likes' => 24,
                    'description' => 'Grand welcome ceremony for incoming students'
                ],
                [
                    'id' => 12,
                    'filename' => 'WhatsApp Image 2022-08-16 at 12.19.06 PM.jpeg',
                    'title' => 'Independence Day Celebration',
                    'alt' => 'National Event - Independence Day festivities',
                    'student_name' => 'Cultural Committee',
                    'date' => '2022-08-16',
                    'category' => 'National',
                    'category_icon' => 'fas fa-flag',
                    'status' => 'approved',
                    'views' => 289,
                    'likes' => 41,
                    'description' => 'Independence Day celebration with flag hoisting and cultural programs'
                ],
                [
                    'id' => 13,
                    'filename' => 'WhatsApp Image 2022-08-16 at 12.19.06 PM (1).jpeg',
                    'title' => 'Patriotic Songs Performance',
                    'alt' => 'Cultural Performance - Patriotic music event',
                    'student_name' => 'Music Club',
                    'date' => '2022-08-16',
                    'category' => 'Cultural',
                    'category_icon' => 'fas fa-music',
                    'status' => 'approved',
                    'views' => 167,
                    'likes' => 22,
                    'description' => 'Students performing patriotic songs on Independence Day'
                ],
                [
                    'id' => 14,
                    'filename' => 'WhatsApp Image 2022-08-16 at 12.19.05 PM.jpeg',
                    'title' => 'Flag Hoisting Ceremony',
                    'alt' => 'National Ceremony - Flag hoisting event',
                    'student_name' => 'NCC Unit',
                    'date' => '2022-08-16',
                    'category' => 'National',
                    'category_icon' => 'fas fa-flag',
                    'status' => 'approved',
                    'views' => 198,
                    'likes' => 28,
                    'description' => 'Solemn flag hoisting ceremony on Independence Day'
                ],
                [
                    'id' => 15,
                    'filename' => 'WhatsApp Image 2022-08-13 at 11.46.14 AM (1).jpeg',
                    'title' => 'Independence Week Preparation',
                    'alt' => 'Preparation Event - Getting ready for celebrations',
                    'student_name' => 'Event Committee',
                    'date' => '2022-08-13',
                    'category' => 'Preparation',
                    'category_icon' => 'fas fa-tasks',
                    'status' => 'approved',
                    'views' => 123,
                    'likes' => 14,
                    'description' => 'Students preparing for Independence Day celebrations'
                ],
                [
                    'id' => 16,
                    'filename' => 'WhatsApp Image 2022-08-13 at 11.46.14 AM.jpeg',
                    'title' => 'Decoration Committee',
                    'alt' => 'Decoration Activity - Students decorating campus',
                    'student_name' => 'Decoration Team',
                    'date' => '2022-08-13',
                    'category' => 'Preparation',
                    'category_icon' => 'fas fa-palette',
                    'status' => 'approved',
                    'views' => 145,
                    'likes' => 17,
                    'description' => 'Students working on campus decoration for Independence Day'
                ],
                [
                    'id' => 17,
                    'filename' => '3.jpg',
                    'title' => 'Campus Garden View',
                    'alt' => 'Campus Infrastructure - Beautiful garden area',
                    'student_name' => 'Photography Club',
                    'date' => '2024-01-15',
                    'category' => 'Campus',
                    'category_icon' => 'fas fa-tree',
                    'status' => 'approved',
                    'views' => 234,
                    'likes' => 31,
                    'description' => 'Scenic view of the campus garden and green spaces'
                ],
                [
                    'id' => 18,
                    'filename' => '7.jpg',
                    'title' => 'Modern Campus Architecture',
                    'alt' => 'Campus Building - Contemporary architecture',
                    'student_name' => 'Architecture Club',
                    'date' => '2024-02-10',
                    'category' => 'Architecture',
                    'category_icon' => 'fas fa-building',
                    'status' => 'approved',
                    'views' => 176,
                    'likes' => 25,
                    'description' => 'Modern architectural design of campus buildings'
                ],
                [
                    'id' => 19,
                    'filename' => '11.jpg',
                    'title' => 'Student Activity Center',
                    'alt' => 'Campus Facility - Student activity area',
                    'student_name' => 'Student Council',
                    'date' => '2024-01-25',
                    'category' => 'Facilities',
                    'category_icon' => 'fas fa-users',
                    'status' => 'approved',
                    'views' => 189,
                    'likes' => 23,
                    'description' => 'Central student activity center for recreation and events'
                ],
                [
                    'id' => 20,
                    'filename' => '13.jpg',
                    'title' => 'Library Reading Hall',
                    'alt' => 'Academic Facility - Library study area',
                    'student_name' => 'Library Committee',
                    'date' => '2024-03-05',
                    'category' => 'Academic',
                    'category_icon' => 'fas fa-book',
                    'status' => 'approved',
                    'views' => 156,
                    'likes' => 19,
                    'description' => 'Spacious library reading hall for student studies'
                ],
                [
                    'id' => 21,
                    'filename' => '15.jpg',
                    'title' => 'Campus Courtyard',
                    'alt' => 'Campus Area - Central courtyard space',
                    'student_name' => 'Photography Club',
                    'date' => '2024-02-20',
                    'category' => 'Campus',
                    'category_icon' => 'fas fa-square',
                    'status' => 'approved',
                    'views' => 143,
                    'likes' => 18,
                    'description' => 'Beautiful central courtyard where students gather'
                ],
                [
                    'id' => 22,
                    'filename' => '24.jpg',
                    'title' => 'Annual Sports Day',
                    'alt' => 'Sports Event - Athletic competition day',
                    'student_name' => 'Sports Committee',
                    'date' => '2024-01-30',
                    'category' => 'Sports',
                    'category_icon' => 'fas fa-medal',
                    'status' => 'approved',
                    'views' => 267,
                    'likes' => 35,
                    'description' => 'Annual sports day with various athletic competitions'
                ],
                [
                    'id' => 23,
                    'filename' => '35.jpg',
                    'title' => 'Cultural Festival',
                    'alt' => 'Cultural Event - Annual festival celebration',
                    'student_name' => 'Cultural Committee',
                    'date' => '2024-03-20',
                    'category' => 'Cultural',
                    'category_icon' => 'fas fa-star',
                    'status' => 'approved',
                    'views' => 198,
                    'likes' => 27,
                    'description' => 'Grand cultural festival showcasing student talents'
                ],
                [
                    'id' => 24,
                    'filename' => '45.jpg',
                    'title' => 'Guest Lecture Series',
                    'alt' => 'Academic Event - Expert guest lecture',
                    'student_name' => 'Academic Committee',
                    'date' => '2024-02-15',
                    'category' => 'Academic',
                    'category_icon' => 'fas fa-microphone',
                    'status' => 'approved',
                    'views' => 134,
                    'likes' => 16,
                    'description' => 'Guest lecture by renowned legal expert'
                ],
                [
                    'id' => 25,
                    'filename' => 'WhatsApp Image 2022-06-02 at 3.03.42 PM.jpeg',
                    'title' => 'Alumni Meet 2022',
                    'alt' => 'Alumni Event - Reunion gathering',
                    'student_name' => 'Alumni Committee',
                    'date' => '2022-06-02',
                    'category' => 'Alumni',
                    'category_icon' => 'fas fa-graduation-cap',
                    'status' => 'approved',
                    'views' => 156,
                    'likes' => 22,
                    'description' => 'Annual alumni meet and networking event'
                ],
                [
                    'id' => 26,
                    'filename' => 'WhatsApp Image 2022-05-27 at 11.58.27 AM.jpeg',
                    'title' => 'Career Guidance Workshop',
                    'alt' => 'Career Event - Professional guidance session',
                    'student_name' => 'Career Cell',
                    'date' => '2022-05-27',
                    'category' => 'Career',
                    'category_icon' => 'fas fa-briefcase',
                    'status' => 'approved',
                    'views' => 189,
                    'likes' => 24,
                    'description' => 'Career guidance and professional development workshop'
                ],
                [
                    'id' => 27,
                    'filename' => '16.jpg',
                    'title' => 'Conference Hall',
                    'alt' => 'Academic Facility - Main conference hall',
                    'student_name' => 'Infrastructure Team',
                    'date' => '2024-01-10',
                    'category' => 'Infrastructure',
                    'category_icon' => 'fas fa-building',
                    'status' => 'approved',
                    'views' => 165,
                    'likes' => 20,
                    'description' => 'State-of-the-art conference hall for seminars and events'
                ],
                [
                    'id' => 28,
                    'filename' => '17.jpg',
                    'title' => 'Computer Lab Session',
                    'alt' => 'Academic Activity - Students in computer lab',
                    'student_name' => 'IT Department',
                    'date' => '2024-02-05',
                    'category' => 'Technology',
                    'category_icon' => 'fas fa-desktop',
                    'status' => 'approved',
                    'views' => 145,
                    'likes' => 18,
                    'description' => 'Students working in the modern computer laboratory'
                ],
                [
                    'id' => 29,
                    'filename' => '18.jpg',
                    'title' => 'Moot Court Competition',
                    'alt' => 'Legal Event - Students in moot court',
                    'student_name' => 'Moot Court Society',
                    'date' => '2024-03-10',
                    'category' => 'Legal',
                    'category_icon' => 'fas fa-gavel',
                    'status' => 'approved',
                    'views' => 278,
                    'likes' => 36,
                    'description' => 'Inter-college moot court competition in our courtroom'
                ],
                [
                    'id' => 30,
                    'filename' => '19 (1).jpg',
                    'title' => 'Student Debate Championship',
                    'alt' => 'Academic Competition - Debate event',
                    'student_name' => 'Debate Society',
                    'date' => '2024-02-25',
                    'category' => 'Academic',
                    'category_icon' => 'fas fa-comments',
                    'status' => 'approved',
                    'views' => 198,
                    'likes' => 25,
                    'description' => 'Annual debate championship with participating colleges'
                ],
                [
                    'id' => 31,
                    'filename' => '20 (1).jpg',
                    'title' => 'Research Symposium',
                    'alt' => 'Academic Event - Research presentation',
                    'student_name' => 'Research Committee',
                    'date' => '2024-04-08',
                    'category' => 'Research',
                    'category_icon' => 'fas fa-microscope',
                    'status' => 'approved',
                    'views' => 156,
                    'likes' => 19,
                    'description' => 'Student research symposium showcasing innovative projects'
                ],
                [
                    'id' => 32,
                    'filename' => '29 (1).jpg',
                    'title' => 'Blood Donation Camp',
                    'alt' => 'Social Service - Blood donation drive',
                    'student_name' => 'NSS Unit',
                    'date' => '2024-01-18',
                    'category' => 'Social Service',
                    'category_icon' => 'fas fa-heart',
                    'status' => 'approved',
                    'views' => 234,
                    'likes' => 32,
                    'description' => 'Annual blood donation camp organized by NSS volunteers'
                ],
                [
                    'id' => 33,
                    'filename' => '36.jpg',
                    'title' => 'Literary Festival',
                    'alt' => 'Cultural Event - Literature and poetry celebration',
                    'student_name' => 'Literary Society',
                    'date' => '2024-03-25',
                    'category' => 'Literature',
                    'category_icon' => 'fas fa-feather-alt',
                    'status' => 'approved',
                    'views' => 167,
                    'likes' => 21,
                    'description' => 'Annual literary festival celebrating poetry and prose'
                ]
            ];

            // Function to format date nicely
            function formatPhotoDate($date) {
                $photo_date = new DateTime($date);
                $now = new DateTime();
                $diff = $now->diff($photo_date);
                
                if ($diff->days == 0) return 'Today';
                if ($diff->days == 1) return 'Yesterday';
                if ($diff->days <= 7) return $diff->days . ' days ago';
                if ($diff->days <= 30) return ceil($diff->days / 7) . ' weeks ago';
                if ($diff->days <= 365) return ceil($diff->days / 30) . ' months ago';
                
                return $photo_date->format('M j, Y');
            }

            // Function to get avatar letter
            function getAvatarLetter($name) {
                $words = explode(' ', $name);
                return strtoupper(substr($words[0], 0, 1));
            }
            ?>

            <div class="gallery-grid" id="gallery-grid">
                <!-- Dynamic gallery items generated from PHP data -->
                <?php foreach ($gallery_photos as $index => $photo): ?>
                <div class="gallery-item" data-photo-id="<?php echo $photo['id']; ?>">
                    <div class="gallery-card">
                        <div class="gallery-image-container" 
                             onclick="openLightbox(<?php echo $index; ?>)" 
                             role="button" 
                             tabindex="0" 
                             aria-label="View <?php echo htmlspecialchars($photo['title']); ?> in full size">
                            <img class="gallery-image" 
                                 src="<?php echo $base_url; ?>src/assets/public/gallery/<?php echo $photo['filename']; ?>" 
                                 alt="<?php echo htmlspecialchars($photo['alt']); ?>" 
                                 title="<?php echo htmlspecialchars($photo['description']); ?>"
                                 loading="lazy"
                                 onload="this.style.opacity = 1; this.parentElement.classList.add('image-loaded'); console.log('Image loaded:', this.src);"
                                 onerror="console.error('Failed to load image:', this.src); this.parentElement.classList.add('image-error');"
                                 style="opacity: 0; transition: opacity 0.3s ease;">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <div class="zoom-icon">
                                        <i class="fas fa-expand-alt"></i>
                                    </div>
                                    <div class="overlay-text">Click to view</div>
                                </div>
                            </div>
                            <div class="category-badge">
                                <i class="<?php echo $photo['category_icon']; ?>"></i>
                                <span><?php echo $photo['category']; ?></span>
                            </div>
                            <div class="image-loader">
                                <div class="loader-spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php if (empty($gallery_photos)): ?>
                <!-- Empty state when no photos are available -->
                <div class="empty-gallery-state">
                    <div class="empty-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3>No Photos Available</h3>
                    <p>Be the first to share your campus memories!</p>
                    <?php if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']): ?>
                    <a href="gallery-login.php" class="btn btn-primary">
                        <i class="fas fa-upload"></i>
                        Login to Upload Photos
                    </a>
                    <?php else: ?>
                    <a href="#upload-section" class="btn btn-primary">
                        <i class="fas fa-upload"></i>
                        Upload Photos
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightbox-close">
                <i class="fas fa-times"></i>
            </button>
            <button class="lightbox-nav lightbox-prev" id="lightbox-prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <img class="lightbox-image" id="lightbox-image" src="" alt="">
            <button class="lightbox-nav lightbox-next" id="lightbox-next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</main>

<script>
// Gallery JavaScript functionality
document.addEventListener('DOMContentLoaded', function() {
    let galleryPhotos = [];
    let selectedFiles = [];
    let currentLightboxIndex = 0;

    // Initialize gallery
    loadGalleryPhotos();
    initializeUpload();
    initializeLightbox();

    // Helper function to format dates nicely
    function formatDate(dateString) {
        const date = new Date(dateString);
        const now = new Date();
        const diffTime = Math.abs(now - date);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
        
        if (diffDays === 0) return 'Today';
        if (diffDays === 1) return 'Yesterday';
        if (diffDays <= 7) return `${diffDays} days ago`;
        if (diffDays <= 30) return `${Math.ceil(diffDays / 7)} weeks ago`;
        if (diffDays <= 365) return `${Math.ceil(diffDays / 30)} months ago`;
        
        return date.toLocaleDateString('en-US', { 
            year: 'numeric', 
            month: 'short', 
            day: 'numeric' 
        });
    }
    
    // Helper function to get category info based on student name
    function getCategoryInfo(studentName) {
        const categories = {
            'Cultural Committee': { icon: 'fas fa-theater-masks', name: 'Cultural' },
            'Sports Committee': { icon: 'fas fa-trophy', name: 'Sports' },
            'Environmental Committee': { icon: 'fas fa-leaf', name: 'Environment' },
            'Health Committee': { icon: 'fas fa-heartbeat', name: 'Health' },
            'Drama Club': { icon: 'fas fa-masks-theater', name: 'Drama' },
            'Academic Committee': { icon: 'fas fa-graduation-cap', name: 'Academic' },
            'Photography Club': { icon: 'fas fa-camera', name: 'Photography' }
        };
        
        return categories[studentName] || { icon: 'fas fa-users', name: 'General' };
    }
    
    // Initialize gallery interactions
    function initializeGalleryInteractions() {
        // Add keyboard navigation for gallery items
        document.querySelectorAll('.gallery-image-container').forEach(container => {
            container.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    container.click();
                }
            });
        });
        
        // Handle image loading states
        document.querySelectorAll('.gallery-image').forEach(img => {
            img.addEventListener('load', function() {
                this.parentElement.classList.add('image-loaded');
            });
        });
    }

    // Load gallery photos - sync with PHP data
    function loadGalleryPhotos() {
        // Get PHP gallery data and convert to JavaScript format
        const phpGalleryData = <?php echo json_encode($gallery_photos); ?>;
        
        // Convert PHP format to JavaScript format for consistency
        const samplePhotos = phpGalleryData.map(photo => ({
            id: photo.id,
            src: '<?php echo $base_url; ?>src/assets/public/gallery/' + photo.filename,
            alt: photo.alt,
            title: photo.title,
            date: photo.date,
            studentName: photo.student_name,
            status: photo.status,
            category: photo.category,
            categoryIcon: photo.category_icon,
            views: photo.views,
            likes: photo.likes,
            description: photo.description
        }));

        // Load user uploaded photos from localStorage
        const userPhotos = JSON.parse(localStorage.getItem('galleryPhotos') || '[]');
        galleryPhotos = [...samplePhotos, ...userPhotos];
        
        // Since we now have static HTML, we can enhance it instead of replacing it
        enhanceStaticGallery();
    }
    
    // Enhance static gallery with JavaScript features
    function enhanceStaticGallery() {
        // Add enhanced interactions to existing gallery items
        initializeGalleryInteractions();
        
        // Update view counts periodically (simulate real-time updates)
        setTimeout(updateGalleryStats, 2000);
    }
    
    // Update gallery statistics (simulate live updates)
    function updateGalleryStats() {
        const galleryItems = document.querySelectorAll('.gallery-item');
        galleryItems.forEach((item, index) => {
            const viewsStat = item.querySelector('.stat-item .fa-eye').nextSibling;
            const likesStat = item.querySelector('.stat-item .fa-heart').nextSibling;
            
            if (viewsStat && likesStat) {
                // Add small random increments to simulate real activity
                const currentViews = parseInt(viewsStat.textContent.trim());
                const currentLikes = parseInt(likesStat.textContent.trim());
                
                if (Math.random() > 0.8) { // 20% chance to update views
                    viewsStat.textContent = ' ' + (currentViews + Math.floor(Math.random() * 3) + 1);
                }
                
                if (Math.random() > 0.9) { // 10% chance to update likes
                    likesStat.textContent = ' ' + (currentLikes + 1);
                }
            }
        });
    }

    // Render gallery
    function renderGallery() {
        const galleryGrid = document.getElementById('gallery-grid');
        galleryGrid.innerHTML = '';

        const approvedPhotos = galleryPhotos.filter(photo => photo.status === 'approved');
        
        if (approvedPhotos.length === 0) {
            galleryGrid.innerHTML = `
                <div class="empty-gallery-state">
                    <div class="empty-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3>No Photos Available</h3>
                    <p>Be the first to share your campus memories!</p>
                    <a href="gallery-login.php" class="btn btn-primary">
                        <i class="fas fa-upload"></i>
                        Upload Photos
                    </a>
                </div>
            `;
            return;
        }

        approvedPhotos.forEach((photo, index) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.setAttribute('data-aos', 'fade-up');
            galleryItem.setAttribute('data-aos-delay', (index % 6) * 100);
            
            // Format date nicely
            const formattedDate = formatDate(photo.date);
            
            // Create category badge based on student name
            const categoryInfo = getCategoryInfo(photo.studentName);
            
            galleryItem.innerHTML = `
                <div class="gallery-card">
                    <div class="gallery-image-container" onclick="openLightbox(${index})" role="button" tabindex="0" aria-label="View ${photo.title} in full size">
                        <img class="gallery-image" 
                             src="${photo.src}" 
                             alt="${photo.alt}" 
                             loading="lazy"
                             onerror="this.parentElement.classList.add('image-error')">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <div class="zoom-icon">
                                    <i class="fas fa-expand-alt"></i>
                                </div>
                                <div class="overlay-text">Click to view</div>
                            </div>
                        </div>
                        <div class="category-badge">
                            <i class="${categoryInfo.icon}"></i>
                            <span>${categoryInfo.name}</span>
                        </div>
                        <div class="image-loader">
                            <div class="loader-spinner"></div>
                        </div>
                    </div>
                    <div class="gallery-info">
                        <div class="gallery-header">
                            <h3 class="gallery-title" title="${photo.title}">${photo.title}</h3>
                            <div class="gallery-actions">
                                <button class="action-btn like-btn" onclick="toggleLike(${photo.id})" aria-label="Like photo">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button class="action-btn share-btn" onclick="sharePhoto(${photo.id})" aria-label="Share photo">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="gallery-meta">
                            <div class="meta-row">
                                <div class="author-info">
                                    <div class="author-avatar">
                                        ${photo.studentName.charAt(0).toUpperCase()}
                                    </div>
                                    <span class="author-name">${photo.studentName}</span>
                                </div>
                                <div class="photo-date">
                                    <i class="far fa-calendar"></i>
                                    <span>${formattedDate}</span>
                                </div>
                            </div>
                            <div class="status-row">
                                <span class="gallery-status status-${photo.status}">
                                    <i class="fas fa-check-circle"></i>
                                    ${photo.status.charAt(0).toUpperCase() + photo.status.slice(1)}
                                </span>
                                <div class="photo-stats">
                                    <span class="stat-item">
                                        <i class="far fa-eye"></i>
                                        ${Math.floor(Math.random() * 50) + 10}
                                    </span>
                                    <span class="stat-item">
                                        <i class="far fa-heart"></i>
                                        ${Math.floor(Math.random() * 20) + 1}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            galleryGrid.appendChild(galleryItem);
        });
        
        // Initialize tooltips and accessibility
        initializeGalleryInteractions();
    }
    
    // Handle like functionality
    window.toggleLike = function(photoId) {
        const likeBtn = event.target.closest('.like-btn');
        const icon = likeBtn.querySelector('i');
        const isLiked = icon.classList.contains('fas');
        
        if (isLiked) {
            icon.classList.remove('fas');
            icon.classList.add('far');
            likeBtn.classList.remove('liked');
        } else {
            icon.classList.remove('far');
            icon.classList.add('fas');
            likeBtn.classList.add('liked');
            
            // Add heart animation
            const heart = document.createElement('i');
            heart.className = 'fas fa-heart floating-heart';
            likeBtn.appendChild(heart);
            setTimeout(() => heart.remove(), 1000);
        }
    }
    
    // Handle share functionality
    window.sharePhoto = function(photoId) {
        const photo = galleryPhotos.find(p => p.id === photoId);
        if (photo && navigator.share) {
            navigator.share({
                title: photo.title,
                text: `Check out this photo from Kamkus College: ${photo.title}`,
                url: window.location.href
            });
        } else {
            // Fallback: copy to clipboard
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                showToast('Link copied to clipboard!');
            });
        }
    }
    
    // Show toast notification
    function showToast(message) {
        const toast = document.createElement('div');
        toast.className = 'toast-notification';
        toast.textContent = message;
        document.body.appendChild(toast);
        
        setTimeout(() => toast.classList.add('show'), 100);
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => toast.remove(), 300);
        }, 2000);
    }

    // Initialize upload functionality
    function initializeUpload() {
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('file-input');
        const uploadForm = document.getElementById('upload-form');

        if (!dropzone) return;

        // Click to select files
        dropzone.addEventListener('click', () => fileInput.click());

        // Drag and drop
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('drag-active');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('drag-active');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('drag-active');
            handleFiles(e.dataTransfer.files);
        });

        // File input change
        fileInput.addEventListener('change', (e) => {
            handleFiles(e.target.files);
        });

        // Upload form submit
        uploadForm.addEventListener('submit', handleUpload);
    }

    // Handle selected files
    function handleFiles(files) {
        selectedFiles = Array.from(files);
        renderPreviews();
    }

    // Render file previews
    function renderPreviews() {
        const previewContainer = document.getElementById('preview-container');
        const previewGrid = document.getElementById('preview-grid');
        
        if (selectedFiles.length === 0) {
            previewContainer.style.display = 'none';
            return;
        }

        previewContainer.style.display = 'block';
        previewGrid.innerHTML = '';

        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const previewItem = document.createElement('div');
                previewItem.className = 'preview-item';
                previewItem.innerHTML = `
                    <img class="preview-image" src="${e.target.result}" alt="Preview">
                    <button type="button" class="preview-remove" onclick="removePreview(${index})">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                previewGrid.appendChild(previewItem);
            };
            reader.readAsDataURL(file);
        });
    }

    // Remove preview
    window.removePreview = function(index) {
        selectedFiles.splice(index, 1);
        renderPreviews();
    }

    // Handle upload
    function handleUpload(e) {
        e.preventDefault();
        
        if (selectedFiles.length === 0) {
            alert('Please select at least one photo to upload.');
            return;
        }

        const uploadBtn = document.getElementById('upload-btn');
        uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
        uploadBtn.disabled = true;

        // Simulate upload process
        setTimeout(() => {
            const newPhotos = selectedFiles.map((file, index) => ({
                id: Date.now() + index,
                src: URL.createObjectURL(file),
                alt: file.name.split('.')[0],
                title: file.name.split('.')[0].replace(/-/g, ' ').replace(/_/g, ' '),
                date: new Date().toISOString().split('T')[0],
                studentName: '<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : "Student"; ?>',
                status: 'pending'
            }));

            // Save to localStorage (in real app, this would be saved to database)
            const existingPhotos = JSON.parse(localStorage.getItem('galleryPhotos') || '[]');
            const allPhotos = [...existingPhotos, ...newPhotos];
            localStorage.setItem('galleryPhotos', JSON.stringify(allPhotos));

            // Reset form
            selectedFiles = [];
            document.getElementById('preview-container').style.display = 'none';
            document.getElementById('file-input').value = '';
            
            uploadBtn.innerHTML = '<i class="fas fa-upload"></i> Upload Photos';
            uploadBtn.disabled = false;

            alert('Photos uploaded successfully! They are pending approval.');
            loadGalleryPhotos();
        }, 1500);
    }

    // Initialize lightbox
    function initializeLightbox() {
        const lightbox = document.getElementById('lightbox');
        const lightboxClose = document.getElementById('lightbox-close');
        const lightboxPrev = document.getElementById('lightbox-prev');
        const lightboxNext = document.getElementById('lightbox-next');

        lightboxClose.addEventListener('click', closeLightbox);
        lightboxPrev.addEventListener('click', () => navigateLightbox(-1));
        lightboxNext.addEventListener('click', () => navigateLightbox(1));

        // Close on click outside
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;
            
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') navigateLightbox(-1);
            if (e.key === 'ArrowRight') navigateLightbox(1);
        });
    }

    // Open lightbox
    window.openLightbox = function(index) {
        const approvedPhotos = galleryPhotos.filter(photo => photo.status === 'approved');
        currentLightboxIndex = index;
        
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        
        lightboxImage.src = approvedPhotos[index].src;
        lightboxImage.alt = approvedPhotos[index].alt;
        
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Close lightbox
    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Navigate lightbox
    function navigateLightbox(direction) {
        const approvedPhotos = galleryPhotos.filter(photo => photo.status === 'approved');
        currentLightboxIndex += direction;
        
        if (currentLightboxIndex < 0) {
            currentLightboxIndex = approvedPhotos.length - 1;
        } else if (currentLightboxIndex >= approvedPhotos.length) {
            currentLightboxIndex = 0;
        }
        
        const lightboxImage = document.getElementById('lightbox-image');
        lightboxImage.src = approvedPhotos[currentLightboxIndex].src;
        lightboxImage.alt = approvedPhotos[currentLightboxIndex].alt;
    }
});
</script>

<?php
// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: gallery.php');
    exit;
}
?>

<?php include('../includes/footer.php'); ?> 
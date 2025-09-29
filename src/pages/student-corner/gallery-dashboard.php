<?php
session_start();

$page_title = "Gallery Dashboard - Kamkus College of Law";
$page_description = "Manage and moderate photo uploads for the Kamkus College gallery.";
$current_page = "student-corner";
require_once '../../includes/config.php';

// Check if user is logged in
if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
    header('Location: gallery-login.php');
    exit;
}

// Determine user role (simplified for demo)
$isAdmin = in_array($_SESSION['username'], ['admin', 'faculty', 'moderator']);

include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Dashboard Styles */
.dashboard-header {
    background: linear-gradient(135deg, #1E293B, #334155);
    color: white;
    padding: 2rem 0;
}

.dashboard-header h1 {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.dashboard-header p {
    color: #cbd5e1;
}

.dashboard-nav {
    background: white;
    border-bottom: 1px solid #e5e7eb;
    padding: 1rem 0;
    margin-bottom: 2rem;
}

.nav-tabs {
    display: flex;
    gap: 2rem;
    align-items: center;
}

.nav-tab {
    padding: 0.5rem 1rem;
    border-radius: 6px;
    text-decoration: none;
    color: #6b7280;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
}

.nav-tab.active {
    color: #1E293B;
    background: rgba(30, 41, 59, 0.1);
}

.nav-tab:hover {
    color: #1E293B;
    background: rgba(30, 41, 59, 0.05);
}

.badge {
    background: #ef4444;
    color: white;
    font-size: 0.75rem;
    padding: 2px 6px;
    border-radius: 10px;
    margin-left: 0.5rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    text-align: center;
}

.stat-icon {
    width: 48px;
    height: 48px;
    background: #1E293B;
    color: white;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 24px;
}

.stat-number {
    font-size: 2rem;
    font-weight: bold;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.stat-label {
    color: #6b7280;
    font-size: 0.875rem;
}

.photo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.photo-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
}

.photo-card:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.photo-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.photo-info {
    padding: 1rem;
}

.photo-title {
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.photo-meta {
    font-size: 0.875rem;
    color: #6b7280;
    margin-bottom: 1rem;
}

.photo-actions {
    display: flex;
    gap: 0.5rem;
}

.btn {
    padding: 0.5rem 1rem;
    border-radius: 6px;
    font-size: 0.875rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid transparent;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-approve {
    background: #10b981;
    color: white;
    border-color: #10b981;
}

.btn-approve:hover {
    background: #059669;
    border-color: #059669;
}

.btn-reject {
    background: #ef4444;
    color: white;
    border-color: #ef4444;
}

.btn-reject:hover {
    background: #dc2626;
    border-color: #dc2626;
}

.btn-secondary {
    background: #f3f4f6;
    color: #374151;
    border-color: #d1d5db;
}

.btn-secondary:hover {
    background: #e5e7eb;
    border-color: #9ca3af;
}

.status-badge {
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 500;
}

.status-approved {
    background: rgba(16, 185, 129, 0.1);
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

.empty-state {
    text-align: center;
    padding: 3rem 1rem;
    color: #6b7280;
}

.empty-state i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #d1d5db;
}

.user-info-card {
    background: white;
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid #e5e7eb;
    margin-bottom: 2rem;
}

.user-avatar {
    width: 60px;
    height: 60px;
    background: #1E293B;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: bold;
    margin: 0 auto 1rem;
}

.quick-actions {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.quick-action-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1rem;
    background: white;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    color: #374151;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.quick-action-btn:hover {
    background: #f3f4f6;
    border-color: #9ca3af;
}

/* Responsive Design */
@media (max-width: 768px) {
    .nav-tabs {
        flex-direction: column;
        gap: 1rem;
        align-items: stretch;
    }
    
    .nav-tab {
        text-align: center;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .photo-grid {
        grid-template-columns: 1fr;
    }
    
    .quick-actions {
        flex-direction: column;
    }
}
</style>

<main>
    <!-- Dashboard Header -->
    <section class="dashboard-header">
        <div class="container">
            <h1>Gallery Dashboard</h1>
            <p>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        </div>
    </section>

    <!-- Dashboard Navigation -->
    <section class="dashboard-nav">
        <div class="container">
            <div class="nav-tabs">
                <a href="#overview" class="nav-tab active" data-tab="overview">
                    <i class="fas fa-chart-line"></i>
                    Overview
                </a>
                <?php if ($isAdmin): ?>
                <a href="#pending" class="nav-tab" data-tab="pending">
                    <i class="fas fa-clock"></i>
                    Pending Approval
                    <span class="badge" id="pending-count">0</span>
                </a>
                <?php endif; ?>
                <a href="#my-photos" class="nav-tab" data-tab="my-photos">
                    <i class="fas fa-images"></i>
                    My Photos
                </a>
                <a href="#upload" class="nav-tab" data-tab="upload">
                    <i class="fas fa-upload"></i>
                    Upload New
                </a>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Overview Tab -->
        <div id="overview-tab" class="tab-content active">
            <!-- User Info Card -->
            <div class="user-info-card">
                <div class="user-avatar">
                    <?php echo strtoupper(substr($_SESSION['username'], 0, 1)); ?>
                </div>
                <div style="text-align: center;">
                    <h3><?php echo htmlspecialchars($_SESSION['username']); ?></h3>
                    <p style="color: #6b7280; margin: 0;">
                        <?php echo $isAdmin ? 'Administrator' : 'Student'; ?>
                    </p>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="stat-number" id="total-photos">0</div>
                    <div class="stat-label">Total Photos</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-number" id="approved-photos">0</div>
                    <div class="stat-label">Approved</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-number" id="pending-photos">0</div>
                    <div class="stat-label">Pending</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="stat-number" id="rejected-photos">0</div>
                    <div class="stat-label">Rejected</div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="quick-actions">
                <a href="gallery.php" class="quick-action-btn">
                    <i class="fas fa-gallery-alt"></i>
                    View Gallery
                </a>
                <a href="#upload" class="quick-action-btn" onclick="switchTab('upload')">
                    <i class="fas fa-upload"></i>
                    Upload Photos
                </a>
                <?php if ($isAdmin): ?>
                <a href="#pending" class="quick-action-btn" onclick="switchTab('pending')">
                    <i class="fas fa-tasks"></i>
                    Moderate Photos
                </a>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($isAdmin): ?>
        <!-- Pending Approval Tab -->
        <div id="pending-tab" class="tab-content">
            <h2>Photos Pending Approval</h2>
            <div class="photo-grid" id="pending-photos-grid">
                <!-- Pending photos will be loaded here -->
            </div>
        </div>
        <?php endif; ?>

        <!-- My Photos Tab -->
        <div id="my-photos-tab" class="tab-content">
            <h2>My Photos</h2>
            <div class="photo-grid" id="my-photos-grid">
                <!-- User's photos will be loaded here -->
            </div>
        </div>

        <!-- Upload Tab -->
        <div id="upload-tab" class="tab-content">
            <h2>Upload New Photos</h2>
            <div style="background: white; padding: 2rem; border-radius: 12px; border: 1px solid #e5e7eb;">
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
                        <button type="submit" class="btn btn-approve" id="upload-btn">
                            <i class="fas fa-upload"></i>
                            Upload Photos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let allPhotos = [];
    let selectedFiles = [];
    const currentUser = '<?php echo $_SESSION["username"]; ?>';
    const isAdmin = <?php echo $isAdmin ? 'true' : 'false'; ?>;

    // Initialize dashboard
    loadPhotos();
    initializeTabs();
    initializeUpload();

    // Load photos from localStorage
    function loadPhotos() {
                 // Sample photos
         const samplePhotos = [
             {
                 id: 1,
                 src: '<?php echo $base_url; ?>src/assets/public/gallery/farewell1.jpg',
                 title: 'Annual Farewell Ceremony',
                 studentName: 'Cultural Committee',
                 date: '2024-03-15',
                 status: 'approved'
             },
             {
                 id: 2,
                 src: '<?php echo $base_url; ?>src/assets/public/gallery/yoga day.jpg',
                 title: 'International Yoga Day Celebration',
                 studentName: 'Health Committee',
                 date: '2024-03-10',
                 status: 'approved'
             },
             {
                 id: 3,
                 src: '<?php echo $base_url; ?>src/assets/public/gallery/sportscom.jpg',
                 title: 'Inter-College Sports Meet',
                 studentName: 'Sports Committee',
                 date: '2024-03-05',
                 status: 'approved'
             }
         ];

        // Load user photos from localStorage
        const userPhotos = JSON.parse(localStorage.getItem('galleryPhotos') || '[]');
        allPhotos = [...samplePhotos, ...userPhotos];
        
        updateStats();
        renderMyPhotos();
        if (isAdmin) {
            renderPendingPhotos();
        }
    }

    // Update statistics
    function updateStats() {
        const myPhotos = allPhotos.filter(photo => photo.studentName === currentUser);
        const approved = myPhotos.filter(photo => photo.status === 'approved');
        const pending = isAdmin ? allPhotos.filter(photo => photo.status === 'pending') : myPhotos.filter(photo => photo.status === 'pending');
        const rejected = myPhotos.filter(photo => photo.status === 'rejected');

        document.getElementById('total-photos').textContent = myPhotos.length;
        document.getElementById('approved-photos').textContent = approved.length;
        document.getElementById('pending-photos').textContent = pending.length;
        document.getElementById('rejected-photos').textContent = rejected.length;
        
        if (isAdmin) {
            document.getElementById('pending-count').textContent = pending.length;
        }
    }

    // Render my photos
    function renderMyPhotos() {
        const myPhotos = allPhotos.filter(photo => photo.studentName === currentUser);
        const grid = document.getElementById('my-photos-grid');
        
        if (myPhotos.length === 0) {
            grid.innerHTML = `
                <div class="empty-state">
                    <i class="fas fa-images"></i>
                    <h3>No Photos Yet</h3>
                    <p>Upload your first photo to get started!</p>
                </div>
            `;
            return;
        }

        grid.innerHTML = myPhotos.map(photo => `
            <div class="photo-card">
                <img src="${photo.src}" alt="${photo.title}" class="photo-image">
                <div class="photo-info">
                    <div class="photo-title">${photo.title}</div>
                    <div class="photo-meta">
                        Uploaded on ${photo.date}
                        <span class="status-badge status-${photo.status}">${photo.status}</span>
                    </div>
                    <div class="photo-actions">
                        <button class="btn btn-secondary" onclick="viewPhoto(${photo.id})">
                            <i class="fas fa-eye"></i> View
                        </button>
                        ${photo.status === 'pending' || photo.status === 'rejected' ? `
                            <button class="btn btn-reject" onclick="deletePhoto(${photo.id})">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        ` : ''}
                    </div>
                </div>
            </div>
        `).join('');
    }

    // Render pending photos (admin only)
    function renderPendingPhotos() {
        if (!isAdmin) return;
        
        const pendingPhotos = allPhotos.filter(photo => photo.status === 'pending');
        const grid = document.getElementById('pending-photos-grid');
        
        if (pendingPhotos.length === 0) {
            grid.innerHTML = `
                <div class="empty-state">
                    <i class="fas fa-check-circle"></i>
                    <h3>All Caught Up!</h3>
                    <p>No photos pending approval.</p>
                </div>
            `;
            return;
        }

        grid.innerHTML = pendingPhotos.map(photo => `
            <div class="photo-card">
                <img src="${photo.src}" alt="${photo.title}" class="photo-image">
                <div class="photo-info">
                    <div class="photo-title">${photo.title}</div>
                    <div class="photo-meta">
                        By ${photo.studentName} on ${photo.date}
                    </div>
                    <div class="photo-actions">
                        <button class="btn btn-approve" onclick="approvePhoto(${photo.id})">
                            <i class="fas fa-check"></i> Approve
                        </button>
                        <button class="btn btn-reject" onclick="rejectPhoto(${photo.id})">
                            <i class="fas fa-times"></i> Reject
                        </button>
                    </div>
                </div>
            </div>
        `).join('');
    }

    // Tab functionality
    function initializeTabs() {
        const tabs = document.querySelectorAll('.nav-tab');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', (e) => {
                e.preventDefault();
                const targetTab = tab.dataset.tab;
                switchTab(targetTab);
            });
        });
    }

    window.switchTab = function(tabName) {
        // Update active tab
        document.querySelectorAll('.nav-tab').forEach(tab => {
            tab.classList.remove('active');
        });
        document.querySelector(`[data-tab="${tabName}"]`).classList.add('active');

        // Update active content
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.remove('active');
        });
        document.getElementById(`${tabName}-tab`).classList.add('active');
    }

    // Photo actions
    window.approvePhoto = function(photoId) {
        const photoIndex = allPhotos.findIndex(photo => photo.id === photoId);
        if (photoIndex !== -1) {
            allPhotos[photoIndex].status = 'approved';
            savePhotos();
            loadPhotos();
            alert('Photo approved successfully!');
        }
    }

    window.rejectPhoto = function(photoId) {
        const photoIndex = allPhotos.findIndex(photo => photo.id === photoId);
        if (photoIndex !== -1) {
            allPhotos[photoIndex].status = 'rejected';
            savePhotos();
            loadPhotos();
            alert('Photo rejected.');
        }
    }

    window.deletePhoto = function(photoId) {
        if (confirm('Are you sure you want to delete this photo?')) {
            allPhotos = allPhotos.filter(photo => photo.id !== photoId);
            savePhotos();
            loadPhotos();
            alert('Photo deleted successfully!');
        }
    }

    window.viewPhoto = function(photoId) {
        const photo = allPhotos.find(photo => photo.id === photoId);
        if (photo) {
            window.open(photo.src, '_blank');
        }
    }

    // Save photos to localStorage
    function savePhotos() {
        const userPhotos = allPhotos.filter(photo => photo.id > 1000); // Filter out sample photos
        localStorage.setItem('galleryPhotos', JSON.stringify(userPhotos));
    }

    // Upload functionality (similar to gallery.php)
    function initializeUpload() {
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('file-input');

        if (!dropzone) return;

        dropzone.addEventListener('click', () => fileInput.click());

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

        fileInput.addEventListener('change', (e) => {
            handleFiles(e.target.files);
        });

        document.getElementById('upload-btn').addEventListener('click', handleUpload);
    }

    function handleFiles(files) {
        selectedFiles = Array.from(files);
        renderPreviews();
    }

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
                previewItem.style.position = 'relative';
                previewItem.innerHTML = `
                    <img src="${e.target.result}" alt="Preview" style="width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
                    <button type="button" onclick="removePreview(${index})" style="position: absolute; top: 8px; right: 8px; background: rgba(0,0,0,0.5); color: white; border: none; border-radius: 50%; width: 24px; height: 24px; cursor: pointer;">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                previewGrid.appendChild(previewItem);
            };
            reader.readAsDataURL(file);
        });
    }

    window.removePreview = function(index) {
        selectedFiles.splice(index, 1);
        renderPreviews();
    }

    function handleUpload() {
        if (selectedFiles.length === 0) {
            alert('Please select at least one photo to upload.');
            return;
        }

        const uploadBtn = document.getElementById('upload-btn');
        uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
        uploadBtn.disabled = true;

        setTimeout(() => {
            const newPhotos = selectedFiles.map((file, index) => ({
                id: Date.now() + index,
                src: URL.createObjectURL(file),
                title: file.name.split('.')[0].replace(/-/g, ' ').replace(/_/g, ' '),
                studentName: currentUser,
                date: new Date().toISOString().split('T')[0],
                status: 'pending'
            }));

            allPhotos.push(...newPhotos);
            savePhotos();

            selectedFiles = [];
            document.getElementById('preview-container').style.display = 'none';
            document.getElementById('file-input').value = '';
            
            uploadBtn.innerHTML = '<i class="fas fa-upload"></i> Upload Photos';
            uploadBtn.disabled = false;

            alert('Photos uploaded successfully! They are pending approval.');
            loadPhotos();
        }, 1500);
    }
});
</script>

<style>
.tab-content {
    display: none;
    padding: 2rem 0;
}

.tab-content.active {
    display: block;
}

.upload-dropzone {
    border: 2px dashed #d1d5db;
    border-radius: 12px;
    padding: 3rem 2rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
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
    font-size: 48px;
    color: #9ca3af;
    margin-bottom: 1rem;
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

.preview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1rem;
    margin-top: 1.5rem;
}
</style>

<?php include('../includes/footer.php'); ?> 
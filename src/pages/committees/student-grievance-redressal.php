<?php
$page_title = "Student Grievance Redressal Committee - Kamkus College of Law";
$page_description = "Student Grievance Redressal Committee of Kamkus College of Law - Ensuring fair and swift resolution of student concerns with integrity and confidentiality";
$current_page = "committees";
require_once '../../includes/config.php';
include '../../includes/header.php';
?>

<link rel="stylesheet" href="<?php echo $base_url; ?>src/styles/css/teaching-learning.css">

<style>
/* Custom styles for Student Grievance Redressal Committee page */

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

/* Fix for card headers - vertical center alignment */
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

/* Fix for feature icons to make them round */
.feature-icon {
    width: 40px;
    height: 40px;
    border-radius: 50% !important;
    background: rgba(99, 102, 241, 0.1) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    margin-top: 2px !important;
}

.feature-icon svg {
    color: #6366f1 !important;
    width: 20px;
    height: 20px;
}

/* Committee Members Section Styles */
.committee-members-section {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    margin-top: 16px;
}

.committee-members-header {
    background: linear-gradient(135deg, #334155, #1e293b);
    color: white;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 600;
    font-size: 16px;
}

.committee-members-header svg {
    color: white;
    width: 20px;
    height: 20px;
}

.committee-members-list {
    padding: 0;
    margin: 0;
    list-style: none;
}

.committee-member-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 20px;
    border-bottom: 1px solid #f1f5f9;
    transition: background-color 0.3s ease;
}

.committee-member-item:last-child {
    border-bottom: none;
}

.committee-member-item:hover {
    background-color: #f8fafc;
}

.member-name {
    font-weight: 600;
    color: #1e293b;
    font-size: 15px;
}

.member-position {
    color: #64748b;
    font-size: 14px;
    font-weight: 500;
}

/* Function cards styling */
.functions-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.function-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 0;
    padding: 16px;
    background: rgba(99, 102, 241, 0.05);
    border-radius: 12px;
    border-left: 4px solid #6366f1;
}

.function-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
}

.function-icon svg {
    color: white;
    width: 24px;
    height: 24px;
}

.function-content h4 {
    color: #1E293B;
    margin: 0 0 8px 0;
    font-weight: 600;
    font-size: 16px;
}

.function-content p {
    color: #64748b;
    margin: 0;
    line-height: 1.6;
    font-size: 14px;
}

/* Objectives list styling */
.objectives-list {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-top: 16px;
}

.objective-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 16px;
    background: rgba(99, 102, 241, 0.05);
    border-radius: 10px;
    border-left: 3px solid #6366f1;
}

.objective-icon {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 2px;
}

.objective-icon svg {
    color: white;
    width: 16px;
    height: 16px;
}

.objective-content {
    color: #475569;
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
}

/* Committee list styling */
.committee-list {
    list-style: none;
    padding: 0;
}

.committee-list li {
    margin-bottom: 8px;
}

.committee-list a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: linear-gradient(135deg, #f8fafc, #ffffff);
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    text-decoration: none;
    color: #1E293B;
    font-weight: 500;
    transition: all 0.3s ease;
}

.committee-list a:hover {
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.2);
}

.committee-list a i {
    width: 20px;
    text-align: center;
}

/* Responsive design */
@media (max-width: 768px) {
    .committee-members-header {
        padding: 14px 16px;
        font-size: 15px;
    }
    
    .committee-member-item {
        padding: 14px 16px;
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
    
    .member-name {
        font-size: 14px;
    }
    
    .member-position {
        font-size: 13px;
    }
    
    .functions-list {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .objectives-list {
        grid-template-columns: 1fr;
        gap: 12px;
    }
    
    .function-item {
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }
    
    .function-icon {
        margin: 0 auto;
    }
    
    .objective-item {
        flex-direction: column;
        gap: 8px;
        text-align: center;
    }
    
    .objective-icon {
        margin: 0 auto;
    }
}

/* Tablet responsive design */
@media (max-width: 1024px) and (min-width: 769px) {
    .functions-list {
        gap: 16px;
    }
    
    .objectives-list {
        gap: 12px;
    }
    
    .function-item {
        padding: 14px;
    }
    
    .function-content h4 {
        font-size: 15px;
    }
    
    .function-content p {
        font-size: 13px;
    }
}
</style>

<!-- Main Page Content -->
<main class="teaching-learning-page">
    <!-- Breadcrumb -->
    <div class="content-section">
        <div class="container" style="max-width: 1200px;">
            <div class="breadcrumb">
                <a href="<?php echo $base_url; ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 5px; vertical-align: middle;"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    Home
                </a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <a href="<?php echo $base_url; ?>committees/committees.php">Committees</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="margin: 0 4px; vertical-align: middle;"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
                <span>Student Grievance Redressal Committee</span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <img src="<?php echo $base_url; ?>src/assets/public/committee/women.jpg" 
             alt="Student Grievance Redressal Committee at Kamkus College of Law" 
             class="hero-image"
             onerror="this.src='<?php echo $base_url; ?>src/assets/public/infra/placeholder.jpg'">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <div class="badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/></svg>
                        <span>Student Support</span>
                    </div>
                    <h1>Student Grievance Redressal Committee</h1>
                    <p>Ensuring fair and swift resolution of student concerns with integrity and confidentiality</p>
                </div>
                <div class="stats-card">
                    <div class="stats-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9A3,3 0 0,0 9,12M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"/></svg>
                    </div>
                    <div class="stats-text">
                        <h4>Committee Tenure</h4>
                        <p>2 Years</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content-section">
        <div class="container">
            <div class="content-grid">
                <!-- Main Content Area -->
                <div class="main-content">
                    <!-- Introduction -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z"/></svg>
                            <h3>Introduction</h3>
                        </div>
                        <div class="card-content">
                            <p>An effective grievance redressal system is an essential element of any strong administration. Recognizing this, the Kamkus College of Law Student Grievance Redressal Committee is committed to resolving student concerns with the utmost integrity, fairness, and confidentiality.</p>
                        </div>
                    </div>

                    <!-- Objectives -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7.5,4A5.5,5.5 0 0,0 2,9.5C2,10 2.09,10.5 2.22,11H6.3L7.57,7.63C7.87,6.83 9.05,6.75 9.43,7.63L11.5,13L12.09,11.58C12.22,11.25 12.57,11 13,11H21.78C21.91,10.5 22,10 22,9.5A5.5,5.5 0 0,0 16.5,4C14.64,4 13,4.93 12,6.34C11,4.93 9.36,4 7.5,4V4M3,12.5A1,1 0 0,0 2,13.5A1,1 0 0,0 3,14.5H10.5A1,1 0 0,0 11.5,13.5A1,1 0 0,0 10.5,12.5H3M21,12.5A1,1 0 0,0 20,13.5A1,1 0 0,0 21,14.5H22A1,1 0 0,0 23,13.5A1,1 0 0,0 22,12.5H21Z"/></svg>
                            <h3>Objectives</h3>
                        </div>
                        <div class="card-content">
                            <div class="objectives-list">
                                <div class="objective-item">
                                    <div class="objective-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z"/></svg>
                                    </div>
                                    <p class="objective-content">Empower students to voice their grievances freely, ensuring anonymity when desired.</p>
                                </div>
                                
                                <div class="objective-item">
                                    <div class="objective-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/></svg>
                                    </div>
                                    <p class="objective-content">Establish a mechanism for swift and efficient resolution of student concerns.</p>
                                </div>
                                
                                <div class="objective-item">
                                    <div class="objective-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M21.71,20.29L20.29,21.71L18.5,19.92L16.71,21.71L15.29,20.29L17.08,18.5L15.29,16.71L16.71,15.29L18.5,17.08L20.29,15.29L21.71,16.71L19.92,18.5L21.71,20.29M7,2V13H10V22L13.5,18.5L11.42,16.42L15.5,12.34C15.07,12.12 14.56,12 14,12C11.24,12 9,14.24 9,17H7V4H17V10.1C17.7,10.18 18.37,10.39 19,10.72V2H7Z"/></svg>
                                    </div>
                                    <p class="objective-content">Offer appropriate counseling to students throughout the grievance resolution process.</p>
                                </div>
                                
                                <div class="objective-item">
                                    <div class="objective-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16,4C18.11,4 19.86,5.69 19.86,8C19.86,10.31 18.11,12 16,12C13.89,12 12.14,10.31 12.14,8C12.14,5.69 13.89,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M6,6V9H4V6H1V4H4V1H6V4H9V6H6M6,16V19H4V16H1V14H4V11H6V14H9V16H6Z"/></svg>
                                    </div>
                                    <p class="objective-content">Foster a harmonious and respectful environment among the student body.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Functions -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19Z"/></svg>
                            <h3>Functions of the Grievance Redressal Committee</h3>
                        </div>
                        <div class="card-content">
                            <div class="functions-list" style="margin-top: 24px;">
                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Receive & Process Grievances</h4>
                                        <p>Receive and process written grievances submitted by students and staff regarding the College.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M9,4V6H15V4H17V6H21V8H3V6H7V4H9M3,10H21V20A2,2 0 0,1 19,22H5A2,2 0 0,1 3,20V10Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Structured Approach</h4>
                                        <p>Implement a structured approach for addressing reported concerns, ensuring appropriate action is taken.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A2,2 0 0,1 14,4C14,4.74 13.6,5.39 13,5.73V7H14A7,7 0 0,1 21,14H22A1,1 0 0,1 23,15V18A1,1 0 0,1 22,19H21V20A2,2 0 0,1 19,22H5A2,2 0 0,1 3,20V19H2A1,1 0 0,1 1,18V15A1,1 0 0,1 2,14H3A7,7 0 0,1 10,7H11V5.73C10.4,5.39 10,4.74 10,4A2,2 0 0,1 12,2Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Escalation Process</h4>
                                        <p>Escalate complex or unresolved matters to College Management for further intervention.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Active Listening</h4>
                                        <p>Actively listen to, record, and investigate grievances, taking prompt steps towards resolution.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Prioritization</h4>
                                        <p>Prioritize grievances based on their validity and severity.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M16,4C18.11,4 19.86,5.69 19.86,8C19.86,10.31 18.11,12 16,12C13.89,12 12.14,10.31 12.14,8C12.14,5.69 13.89,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M6,6V9H4V6H1V4H4V1H6V4H9V6H6M6,16V19H4V16H1V14H4V11H6V14H9V16H6Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Department Liaison</h4>
                                        <p>Liaise with relevant departments (maintenance, transport, academics, amenities) to address specific concerns.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3C20.1,3 21,3.9 21,5V19C21,20.1 20.1,21 19,21H5C3.9,21 3,20.1 3,19V5C3,3.9 3.9,3 5,3H19M5,7V9H19V7H5M5,11V13H19V11H5M5,15V17H19V15H5Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Regular Meetings</h4>
                                        <p>Convene regular meetings to monitor grievance resolution progress.</p>
                                    </div>
                                </div>

                                <div class="function-item">
                                    <div class="function-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/></svg>
                                    </div>
                                    <div class="function-content">
                                        <h4>Follow-up & Resolution</h4>
                                        <p>Follow up on outstanding issues until final resolution is achieved while maintaining strict confidentiality when necessary.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Procedure & Tenure -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19Z"/></svg>
                            <h3>Procedure & Tenure</h3>
                        </div>
                        <div class="card-content">
                            <div class="section" style="margin-bottom: 20px;">
                                <h4 style="color: #1E293B; margin-bottom: 8px;">Procedure</h4>
                                <p>The Committee will gather for a minimum of two meetings per session. To facilitate optimal participation, members will be notified in advance of each meeting. Following each session, the Committee will take decisive action to execute the discussed agenda points.</p>
                            </div>
                            
                            <div class="section">
                                <h4 style="color: #1E293B; margin-bottom: 8px;">Tenure</h4>
                                <p>The Student Grievance Redressal Committee's term will be two years. To ensure effective operation, the Committee will convene at least twice per academic session.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Committee Members -->
                    <div class="content-card">
                        <div class="card-content" style="padding: 0;">
                            <div class="committee-members-section">
                                <div class="committee-members-header">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,4C18.11,4 19.86,5.69 19.86,8C19.86,10.31 18.11,12 16,12C13.89,12 12.14,10.31 12.14,8C12.14,5.69 13.89,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M6,6V9H4V6H1V4H4V1H6V4H9V6H6M6,16V19H4V16H1V14H4V11H6V14H9V16H6Z"/></svg>
                                    Committee Members
                                </div>
                                <ul class="committee-members-list">
                                    <li class="committee-member-item">
                                        <span class="member-name">Dr. Ambuj Sharma</span>
                                        <span class="member-position">Chairperson</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Dr. Seema Singh</span>
                                        <span class="member-position">Member</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Ms. Neetu Mankotia</span>
                                        <span class="member-position">Member</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Dr. Ayush Bajpai</span>
                                        <span class="member-position">Member</span>
                                    </li>
                                    <li class="committee-member-item">
                                        <span class="member-name">Mr. Abhay Srivastava</span>
                                        <span class="member-position">Member</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Related Committees -->
                    <div class="content-card">
                        <div class="card-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16,4C18.11,4 19.86,5.69 19.86,8C19.86,10.31 18.11,12 16,12C13.89,12 12.14,10.31 12.14,8C12.14,5.69 13.89,4 16,4M16,14C20.42,14 24,15.79 24,18V20H8V18C8,15.79 11.58,14 16,14M6,6V9H4V6H1V4H4V1H6V4H9V6H6M6,16V19H4V16H1V14H4V11H6V14H9V16H6Z"/></svg>
                            <h3>Other Committees</h3>
                        </div>
                        <div class="card-content">
                            <ul class="committee-list">
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/library-advisory.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V5H19V19Z"/></svg>
                                        Library Advisory Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/cultural.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,3V13.55C11.41,13.21 10.73,13 10,13A4,4 0 0,0 6,17A4,4 0 0,0 10,21A4,4 0 0,0 14,17V7H18V5H12V3Z"/></svg>
                                        Cultural Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/environmental.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17,8C8,10 5.9,16.17 3.82,21.34L5.71,22L6.66,19.7C7.14,19.87 7.64,20 8,20C19,20 22,3 22,3C21,5 14,5.25 9,6.25C4,7.25 2,11.5 2,13.5C2,15.5 3.75,17.25 3.75,17.25C7,8 17,8 17,8Z"/></svg>
                                        Environmental Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/moot-court.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M10.29,12L13,9.3L14.42,10.7L13.12,12L14.42,13.3L13,14.7L10.29,12M8.71,12L6,9.3L4.58,10.7L5.88,12L4.58,13.3L6,14.7L8.71,12M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8H20V18Z"/></svg>
                                        Moot Court Committee
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>committees/anti-ragging.php">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.3C16,16.9 15.4,17.5 14.8,17.5H9.2C8.6,17.5 8,16.9 8,16.3V12.6C8,12 8.4,11.4 9.2,11.4V10C9.2,8.6 10.6,7 12,7Z"/></svg>
                                        Anti-Ragging Committee
                                    </a>
                                </li>
                            </ul>
                            
                            <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
                                <a href="<?php echo $base_url; ?>committees/committees.php"
                                   style="display: inline-flex; align-items: center; gap: 8px; color: #1E293B; text-decoration: none; font-size: 14px; font-weight: 500; transition: color 0.3s ease;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="vertical-align: middle;"><path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/></svg>
                                    <span>View All Committees</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="content-card" style="background: linear-gradient(135deg, #6366f1, #4f46e5);">
                        <div class="card-header" style="background: transparent;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="white" style="margin-right: 12px;"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"/></svg>
                            <h3 style="color: white;">Student Support</h3>
                        </div>
                        <div class="card-content" style="color: white;">
                            <p style="color: rgba(255, 255, 255, 0.9);">
                                Have a grievance or concern? The Student Grievance Redressal Committee is here to help resolve your issues with fairness and confidentiality.
                            </p>
                            
                            <div class="mt-4">
                                <a href="<?php echo $base_url; ?>contact.php" 
                                   style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.1); color: white; padding: 12px 16px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;"><path d="M14,3V5H17.59L7.76,14.83L9.17,16.24L19,6.41V10H21V3M19,19H5V5H12V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19Z"/></svg>
                                    Submit Grievance
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
# Kamkus College Gallery System

## Overview
A complete photo gallery management system for Kamkus College of Law that allows students to upload photos and faculty to moderate them before they appear in the public gallery.

## Features

### 🖼️ Photo Gallery (gallery.php)
- **Public Gallery**: View approved photos from campus events
- **Responsive Grid Layout**: Modern masonry layout for photo display
- **Lightbox Modal**: Click photos to view in full size with navigation
- **User Authentication**: Login system for photo uploads
- **Upload Interface**: Drag & drop photo upload functionality
- **Status Tracking**: Photos show pending/approved/rejected status

### 🔐 Authentication (gallery-login.php)
- **Simple Login System**: Demo authentication (use any credentials)
- **Session Management**: PHP sessions for user state
- **Responsive Design**: Works on all devices
- **Demo Credentials**: Pre-filled demo login for testing

### 📊 Dashboard (gallery-dashboard.php)
- **User Dashboard**: Overview of user's photos and statistics
- **Photo Management**: View, delete, and track status of uploaded photos
- **Admin Features**: Approve/reject photos (for users: admin, faculty, moderator)
- **Upload Interface**: Upload photos directly from dashboard
- **Statistics**: Real-time stats on photos by status

## User Roles

### 👥 Students
- Upload photos to gallery
- View their own uploaded photos
- Track photo approval status
- Delete pending/rejected photos

### 👨‍🏫 Faculty/Admin (admin, faculty, moderator)
- All student features
- Moderate pending photos
- Approve or reject submitted photos
- View all pending submissions

## Technical Implementation

### 🛠️ Technology Stack
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 7.4+ with Sessions
- **Storage**: localStorage for demo (easily replaceable with database)
- **Styling**: Custom CSS with responsive design
- **Icons**: Font Awesome 6.0

### 📁 File Structure
```
student-corner/
├── gallery.php          # Main gallery page
├── gallery-login.php    # User authentication
├── gallery-dashboard.php # Dashboard & moderation
└── gallery-README.md    # This documentation

public/gallery/          # Existing gallery images
├── farewell1.jpg
├── yoga day.jpg
├── sportscom.jpg
└── ... (50+ existing images)
```

### 🎨 Design Features
- **Consistent Branding**: Matches existing Kamkus website design
- **Responsive Layout**: Mobile-first design approach
- **Loading States**: Skeleton loaders and progress indicators
- **Smooth Animations**: CSS transitions and hover effects
- **Accessibility**: Keyboard navigation and screen reader support

## Photo Approval Workflow

1. **Upload**: Student uploads photos via drag & drop or file selection
2. **Pending**: Photos are stored with "pending" status
3. **Review**: Faculty/admin can see pending photos in dashboard
4. **Decision**: Admin approves or rejects each photo
5. **Display**: Only approved photos appear in public gallery

## Installation & Setup

### Prerequisites
- Apache/Nginx web server
- PHP 7.4 or higher
- Modern web browser

### Setup Steps
1. Place files in `student-corner/` directory
2. Ensure `public/gallery/` contains images
3. Set proper file permissions for photo uploads
4. Access via: `http://localhost/kamkus/student-corner/gallery.php`

### Demo Access
- **Student Login**: Use any username/password
- **Admin Access**: Login with username: `admin`, `faculty`, or `moderator`

## Database Integration (Future)

The current system uses localStorage for demo purposes. For production:

1. **Photos Table**:
   ```sql
   CREATE TABLE gallery_photos (
       id INT PRIMARY KEY AUTO_INCREMENT,
       title VARCHAR(255),
       filename VARCHAR(255),
       student_name VARCHAR(100),
       upload_date DATE,
       status ENUM('pending', 'approved', 'rejected'),
       uploaded_by INT REFERENCES users(id)
   );
   ```

2. **Users Table**:
   ```sql
   CREATE TABLE users (
       id INT PRIMARY KEY AUTO_INCREMENT,
       username VARCHAR(50) UNIQUE,
       password_hash VARCHAR(255),
       role ENUM('student', 'faculty', 'admin'),
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

## Customization

### Adding New Features
- **Comments**: Add photo commenting system
- **Categories**: Organize photos by event type
- **Bulk Actions**: Mass approve/reject photos
- **Email Notifications**: Notify users of photo status changes

### Styling Modifications
- Edit CSS variables in `<style>` sections
- Modify color scheme by changing `#1E293B` primary color
- Adjust grid layout by modifying CSS Grid properties

## Security Considerations

### Current Implementation
- Session-based authentication
- Basic input validation
- XSS prevention with `htmlspecialchars()`

### Production Recommendations
- Implement proper password hashing
- Add CSRF protection
- File upload validation and sanitization
- Database prepared statements
- Rate limiting for uploads

## Browser Support
- Chrome 70+
- Firefox 65+
- Safari 12+
- Edge 79+

## Performance
- **Image Optimization**: Automatic image resizing recommended
- **Lazy Loading**: Implemented for gallery images
- **Caching**: Browser caching for static assets
- **Responsive Images**: Consider srcset for different screen sizes

## Troubleshooting

### Common Issues
1. **Images not loading**: Check file paths and permissions
2. **Upload not working**: Verify file size limits and upload permissions
3. **Session issues**: Clear browser cookies and restart session

### Debug Mode
Add `?debug=1` to URL for JavaScript console logging

## Future Enhancements
- [ ] Photo tagging system
- [ ] Advanced search and filtering
- [ ] Social sharing integration
- [ ] Photo contest features
- [ ] Analytics dashboard
- [ ] Mobile app integration

## Support
For technical support or feature requests, contact the development team.

---
*Developed for Kamkus College of Law - Promoting campus memories and community engagement* 
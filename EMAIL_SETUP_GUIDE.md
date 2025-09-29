# Email System Setup Guide - Kamkus College of Law

## Overview

The contact form now includes an enhanced email system that sends beautifully formatted HTML emails to customizable receiver addresses. The primary receiver is set to `debarunlahiri2016@gmail.com` as requested.

## Features

✅ **Customizable Receiver Emails**: Easily add or manage email receivers  
✅ **HTML & Plain Text Emails**: Professional formatting with fallback support  
✅ **Dynamic Subject Lines**: Includes query type and sender name  
✅ **AJAX Form Submission**: Smooth user experience without page reload  
✅ **Real-time Form Validation**: Instant feedback for users  
✅ **Admin Interface**: Manage email settings through web interface  
✅ **Test Email Function**: Verify email delivery  

## Email Configuration

### Current Setup

- **Primary Receiver**: `debarunlahiri2016@gmail.com`
- **Secondary Receiver**: `kamkus.law@gmail.com`
- **Email Format**: HTML with plain text fallback
- **Subject Template**: "New Contact Form Submission - [QUERY_TYPE] from [NAME]"

### Files Modified/Created

1. **`includes/config.php`** - Added email configuration
2. **`includes/email_service.php`** - New email service class
3. **`process_contact.php`** - Updated to use new email service
4. **`admin_email_config.php`** - Admin interface for email management
5. **`js/contact-form.js`** - Enhanced form handling with AJAX
6. **`css/pages/contact.css`** - Added alert and validation styles

## How to Use

### 1. Regular Use
The contact form now automatically sends emails to all configured receivers when a user submits the form. No additional setup required.

### 2. Managing Email Receivers

Visit: `http://yourdomain.com/admin_email_config.php`

**Features available:**
- View current email receivers
- Add new email receivers
- Send test emails to verify delivery
- View configuration details

### 3. Email Format

**Subject Example:**
```
New Contact Form Submission - Admission from John Doe
```

**HTML Email Includes:**
- Professional header with college branding
- Organized contact information
- Highlighted message content
- Submission timestamp
- Reply-to functionality

## Email Templates

### HTML Email Structure
```html
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Professional styling */
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
            <p>Kamkus College of Law</p>
        </div>
        <div class="content">
            <!-- Contact details -->
        </div>
        <div class="footer">
            <!-- Reply instructions -->
        </div>
    </div>
</body>
</html>
```

### Plain Text Fallback
```
NEW CONTACT FORM SUBMISSION
===========================
Kamkus College of Law

Full Name: [Name]
Email Address: [Email]
Phone Number: [Phone]
Query Type: [Type]

Message:
--------
[Message content]

Submitted on: [Timestamp]
```

## Configuration Options

### Adding New Receivers Programmatically

Edit `includes/config.php`:

```php
'contact_receivers' => [
    'debarunlahiri2016@gmail.com', // Primary
    'kamkus.law@gmail.com',        // Secondary
    'newreceiver@domain.com'       // Add new receiver
],
```

### Customizing Subject Template

Edit `includes/config.php`:

```php
'subject_template' => 'Custom Subject - [QUERY_TYPE] from [NAME]'
```

Available placeholders:
- `[QUERY_TYPE]` - Selected query type
- `[NAME]` - Sender's name

### For Gmail SMTP (Future Enhancement)

If you want to use Gmail SMTP instead of PHP mail():

```php
'smtp_host' => 'smtp.gmail.com',
'smtp_port' => 587,
'smtp_username' => 'your-gmail@gmail.com',
'smtp_password' => 'your-app-password',
'smtp_secure' => 'tls',
```

**Note**: You'll need to generate an App Password in Gmail settings.

## Testing the System

1. **Visit Admin Interface**: `admin_email_config.php`
2. **Click "Send Test Email"**
3. **Check all configured email addresses**
4. **Verify HTML formatting displays correctly**

## Troubleshooting

### Emails Not Being Sent

1. **Check server mail configuration**
2. **Verify PHP mail() function is enabled**
3. **Check error logs** (emails are logged in error_log)
4. **Test with simple PHP mail script**

### Emails Going to Spam

1. **Set up SPF records for your domain**
2. **Configure DKIM authentication**
3. **Use a proper "From" email address**
4. **Consider using SMTP instead of PHP mail()**

### Form Validation Issues

1. **Check JavaScript console for errors**
2. **Ensure FontAwesome is loaded for icons**
3. **Verify CSS styles are properly loaded**

## Security Considerations

- Form data is validated and sanitized
- Email addresses are validated before sending
- HTML content is escaped to prevent XSS
- Database queries use prepared statements

## Browser Compatibility

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers

## Support

For issues or questions:
1. Check server error logs
2. Test with the admin interface
3. Verify PHP mail configuration
4. Contact system administrator

---

**Last Updated**: Created for Kamkus College contact form enhancement  
**Version**: 1.0  
**Primary Receiver**: debarunlahiri2016@gmail.com 
# Kamkus College of Law - Project Structure

## Overview
This project has been reorganized to have a cleaner, more maintainable structure with `index.php` in the root directory and all other files organized in logical folders within the `src` directory.

## Directory Structure

```
kamkusJuly/
├── index.php                          # Main entry point (root level)
├── .htaccess                          # Apache configuration for routing
├── PROJECT_STRUCTURE.md               # This documentation file
├── README.md                          # Original project README
├── EMAIL_SETUP_GUIDE.md              # Email configuration guide
├── ICON_MIGRATION_GUIDE.md           # Icon migration documentation
├── test-simple.html                   # Test file
├── error_log                          # PHP error log
├── node_modules/                      # Node.js dependencies (if any)
├── .idea/                            # IDE configuration
├── __MACOSX/                         # macOS system files
├── kamkus/                           # Legacy files
└── src/                              # Main source code directory
    ├── pages/                         # All PHP pages
    │   ├── about/                     # About section pages
    │   │   ├── affiliation.php
    │   │   ├── bhagirath-sewa-sansthan.php
    │   │   ├── chief-mentor.php
    │   │   ├── code-of-conduct.php
    │   │   ├── college.php
    │   │   ├── principal.php
    │   │   └── rules.php
    │   ├── academics/                 # Academic section pages
    │   │   ├── academics.php
    │   │   ├── ba-llb-syllabus.php
    │   │   ├── ba-llb.php
    │   │   ├── bcom-llb/
    │   │   ├── bcom-llb.php
    │   │   ├── llb/
    │   │   ├── llb.php
    │   │   ├── llm/
    │   │   ├── llm.php
    │   │   ├── research.php
    │   │   └── teaching-learning.php
    │   ├── committees/                # Committee pages
    │   │   ├── anti-ragging.php
    │   │   ├── committees.php
    │   │   ├── cultural.php
    │   │   ├── environmental.php
    │   │   ├── examination.php
    │   │   ├── legal-aid.php
    │   │   ├── library-advisory.php
    │   │   ├── moot-court.php
    │   │   ├── sports.php
    │   │   ├── student-grievance-redressal.php
    │   │   ├── website.php
    │   │   └── women-grievance-redressal.php
    │   ├── infrastructure/            # Infrastructure pages
    │   │   ├── cafeteria.php
    │   │   ├── classroom.php
    │   │   ├── computer-lab.php
    │   │   ├── infrastructure.php
    │   │   ├── library.php
    │   │   ├── moot-court.php
    │   │   └── seminar-hall.php
    │   ├── student-corner/            # Student section pages
    │   │   ├── gallery-dashboard.php
    │   │   ├── gallery-login.php
    │   │   ├── gallery-README.md
    │   │   ├── gallery.php
    │   │   ├── student-participation.php
    │   │   └── value-added-program.php
    │   ├── contact.php                # Contact page
    │   └── process_contact.php        # Contact form processor
    ├── assets/                        # All static assets
    │   ├── public/                    # Public assets (images, PDFs, etc.)
    │   │   ├── about/                 # About section images
    │   │   ├── academics/             # Academic section images
    │   │   ├── carousel/              # Carousel images
    │   │   ├── committee/             # Committee images
    │   │   ├── gallery/               # Gallery images
    │   │   ├── infra/                 # Infrastructure images
    │   │   ├── main_heads/            # Leadership images
    │   │   ├── pdfs/                  # PDF documents
    │   │   ├── recruitment/           # Recruitment images
    │   │   ├── reviews/               # Review images
    │   │   └── whats_new/             # News images
    │   ├── assets/                    # General assets
    │   │   ├── campus-building.jpg
    │   │   ├── campus1.jpg
    │   │   ├── campus2.jpg
    │   │   ├── campus3.jpg
    │   │   ├── campus4.jpg
    │   │   ├── campus5.jpg
    │   │   ├── chief-mentor.jpg
    │   │   ├── gallery/               # Gallery images
    │   │   ├── logo.png
    │   │   ├── naac-logo.png
    │   │   ├── principal.jpg
    │   │   └── recruiters/            # Recruiter logos
    │   └── css/                       # CSS files (legacy)
    ├── styles/                        # CSS stylesheets
    │   ├── css/                       # Main CSS files
    │   │   ├── about.css
    │   │   ├── academics.css
    │   │   ├── cafeteria.css
    │   │   ├── chief-mentor.css
    │   │   ├── contact.css
    │   │   ├── custom-icons.css
    │   │   ├── llb.css
    │   │   ├── llm.css
    │   │   ├── pages/                 # Page-specific CSS
    │   │   ├── principal.css
    │   │   ├── research.css
    │   │   ├── style.css
    │   │   ├── styles.css
    │   │   ├── syllabus.css
    │   │   └── teaching-learning.css
    │   └── js/                        # JavaScript files (legacy)
    ├── scripts/                       # JavaScript files
    │   └── js/                        # Main JS files
    │       ├── carousel.js
    │       ├── chief-mentor.js
    │       ├── contact-form.js
    │       ├── form-validation.js
    │       └── main.js
    ├── includes/                      # PHP includes and shared files
    │   ├── config.php                 # Database and site configuration
    │   ├── email_service.php          # Email functionality
    │   ├── footer.php                 # Site footer
    │   └── header.php                 # Site header
    └── config/                        # Configuration files
        ├── admin_email_config.php     # Admin email configuration
        └── test_email.php             # Email testing file
```

## Key Changes Made

### 1. Root Level
- `index.php` remains in the root directory for easy access
- Added `.htaccess` for proper routing and security
- All other files moved to organized subdirectories

### 2. Source Code Organization (`src/`)
- **pages/**: All PHP pages organized by section
- **assets/**: All static assets (images, PDFs, etc.)
- **styles/**: CSS files and stylesheets
- **scripts/**: JavaScript files
- **includes/**: Shared PHP files (header, footer, config)
- **config/**: Configuration and setup files

### 3. URL Structure
The new structure maintains backward compatibility through `.htaccess` routing:
- `example.com/about/college.php` → `src/pages/about/college.php`
- `example.com/academics/llb.php` → `src/pages/academics/llb.php`
- `example.com/contact.php` → `src/pages/contact.php`

### 4. Asset Paths
All asset paths have been updated to reflect the new structure:
- Images: `src/assets/public/...`
- CSS: `src/styles/css/...`
- JS: `src/scripts/js/...`

## Benefits of This Structure

1. **Cleaner Organization**: Logical separation of concerns
2. **Better Security**: Sensitive files protected from direct access
3. **Easier Maintenance**: Related files grouped together
4. **Scalability**: Easy to add new sections or features
5. **Backward Compatibility**: Existing URLs still work through routing

## File Access Patterns

### For Developers
- **Pages**: `src/pages/[section]/[page].php`
- **Assets**: `src/assets/public/[category]/[file]`
- **Styles**: `src/styles/css/[file].css`
- **Scripts**: `src/scripts/js/[file].js`
- **Includes**: `src/includes/[file].php`

### For Web Access
- **Pages**: `example.com/[section]/[page].php`
- **Assets**: `example.com/src/assets/public/[category]/[file]`
- **Styles**: `example.com/src/styles/css/[file].css`
- **Scripts**: `example.com/src/scripts/js/[file].js`

## Security Features

1. **Protected Directories**: `src/includes/` and `src/config/` are protected from direct web access
2. **Clean URLs**: `.htaccess` provides clean routing without exposing internal structure
3. **Asset Organization**: Static assets are properly organized and cached

## Maintenance Notes

- All internal file references have been updated to use the new paths
- External links and references remain unchanged
- The structure is designed to be easily extensible
- Configuration files are centralized in `src/config/`

## Migration Checklist

- [x] Moved all PHP pages to `src/pages/`
- [x] Moved all assets to `src/assets/`
- [x] Moved all styles to `src/styles/`
- [x] Moved all scripts to `src/scripts/`
- [x] Moved all includes to `src/includes/`
- [x] Moved all config files to `src/config/`
- [x] Updated all internal file references
- [x] Created `.htaccess` for routing
- [x] Updated navigation links
- [x] Updated asset paths
- [x] Protected sensitive directories
- [x] Created documentation

This structure provides a solid foundation for future development while maintaining the existing functionality and user experience.

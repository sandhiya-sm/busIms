# Bus Booking System - Project Structure

## 📁 Directory Structure

```
project/
├── public/                          # Web-accessible files
│   ├── index.php                   # Main entry point
│   ├── .htaccess                   # URL rewriting rules
│   ├── assets/                     # Static assets
│   │   ├── images/                # All image files (*.jpg, *.png, *.gif, *.jpeg)
│   │   ├── css/                   # Stylesheets (*.css files)
│   │   ├── js/                    # JavaScript files (*.js files)
│   │   └── videos/                # Video files (*.mp4)
│   └── pages/                      # PHP page files
│       ├── home.php               # Home page
│       ├── login.php              # Login page
│       ├── register.php           # Registration page
│       ├── search.php             # Search functionality
│       ├── about.php              # About page
│       ├── blog.php               # Blog page
│       ├── *.html                 # Static HTML pages
│       ├── admin/                 # Admin pages
│       │   ├── admin.php
│       │   ├── admin page.php
│       │   └── conadmin.php
│       └── bus-listings/          # Bus listing pages
│           ├── lssbus.php         # Special bus listings
│           ├── exgovbus.php       # Ex-government bus
│           ├── private.php        # Private bus
│           ├── displayprivate.php
│           ├── displaypublic.php
│           ├── displayexgovbus.php
│           └── displaylss.php
│
├── core/                           # Application logic and configuration
│   ├── config.php                 # Configuration settings (database, paths, etc.)
│   ├── Database.php               # Database connection class
│   ├── connect.php                # Legacy database connection (for backward compatibility)
│   ├── server_login.php           # Server login logic
│   ├── error.php                  # Error handling
│   ├── error1.php                 # Additional error handling
│   ├── datain.php                 # Data input operations
│   ├── datain1.php
│   ├── datain2.php
│   ├── datain3.php
│   ├── delete.php                 # Delete operations
│   ├── delete1.php
│   ├── delete2.php
│   ├── delete3.php
│   ├── update.php                 # Update operations
│   ├── update1.php
│   ├── update2.php
│   └── update3.php
│
├── uploads/                        # User uploaded files
│   └── (directory for temporary files)
│
├── .zencoder/
│   └── rules/
│       └── repo.md                # Repository information (auto-generated)
│
└── README.md                       # Project documentation
```

## 🚀 Quick Start

### 1. Configure Database
Edit `core/config.php` and update:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bus_booking'); // Change to your database name
```

### 2. Update File Includes
All PHP files now need to use the new path structure:

**Old way:**
```php
<?php
include 'connect.php';
?>
```

**New way:**
```php
<?php
require_once dirname(__DIR__) . '/../../core/config.php';
require_once CORE_PATH . '/Database.php';
session_start();
?>
```

### 3. Update Asset Links
**Old way:**
```html
<img src="image.jpg">
<link rel="stylesheet" href="style.css">
```

**New way:**
```html
<img src="<?php echo ASSETS_URL; ?>/images/image.jpg">
<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/style.css">
```

## 📝 File Organization Summary

- **Public Folder**: Contains only files that should be web-accessible
- **Core Folder**: Contains all business logic, database operations, and configurations
- **Assets**: All CSS, JS, images, and videos are organized by type
- **Uploads**: User-uploaded files go here (not in web root)

## 🔒 Security Benefits

1. ✅ Core files are not web-accessible
2. ✅ Configuration files are separate from pages
3. ✅ Uploaded files are stored outside public folder
4. ✅ Clear separation of concerns
5. ✅ Easier to maintain and scale

## 📌 Next Steps

1. Update all `include` and `require` statements in PHP files to use new paths
2. Update all asset links in HTML/CSS
3. Test the application thoroughly
4. Consider moving to an MVC or framework-based structure later if needed

---
**Project Setup Date**: 2025
**Last Updated**: October 26, 2025
# 🚀 Bus Booking System - Setup Guide

## Project Restructuring Complete ✅

Your project has been reorganized into a **clean, scalable directory structure** with proper separation of concerns.

---

## 📊 What Was Changed

### Before (Messy)
```
project/
├── *.php (mixed with everything)
├── *.css
├── *.js
├── *.jpg, *.png, *.gif (scattered)
├── *.mp4
└── ...
```

### After (Organized)
```
project/
├── public/                 # Web-accessible files
│   ├── assets/            # CSS, JS, Images, Videos
│   ├── pages/             # All PHP pages
│   └── index.php          # Main entry point
├── core/                  # Business logic & DB
│   ├── config.php
│   ├── Database.php
│   ├── helpers.php
│   └── ...
└── uploads/               # User files
```

---

## 🔧 Required Actions

### Step 1: Update Database Configuration
Edit **`core/config.php`**:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bus_booking');  // ← Update your database name
```

### Step 2: Update Include Statements in All PHP Files

Find files with old includes:
```php
include 'connect.php';
include '../datain.php';
```

Replace with:
```php
require_once dirname(__DIR__) . '/../../core/config.php';
require_once CORE_PATH . '/Database.php';
```

**Example for different locations:**

- **From `public/pages/home.php`:**
  ```php
  require_once dirname(__DIR__) . '/../../core/config.php';
  ```

- **From `public/pages/admin/admin.php`:**
  ```php
  require_once dirname(dirname(__DIR__)) . '/../../core/config.php';
  ```

### Step 3: Update Asset Links

**Old way:**
```html
<img src="image.jpg">
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
```

**New way:**
```html
<img src="<?php echo ASSETS_URL; ?>/images/image.jpg">
<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/style.css">
<script src="<?php echo ASSETS_URL; ?>/js/script.js"></script>
```

Or use the helper function:
```html
<img src="<?php echo asset('images/image.jpg'); ?>">
<link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
<script src="<?php echo asset('js/script.js'); ?>"></script>
```

### Step 4: Use Helper Functions

Load helpers in your pages:
```php
require_once CORE_PATH . '/helpers.php';
```

**Available helper functions:**
```php
redirect('path/to/page.php');           // Redirect to page
is_logged_in();                         // Check if user logged in
sanitize($input);                       // Clean user input
escape($input);                         // Escape for database
asset('images/photo.jpg');              // Get asset URL
page_url('admin/dashboard.php');        // Get page URL
show_error('Error message');            // Show error
show_success('Success message');        // Show success
format_currency(100);                   // Format as currency
```

---

## 📋 File Organization Summary

| Folder | Purpose |
|--------|---------|
| `public/` | Only web-accessible files |
| `public/assets/` | CSS, JS, Images, Videos |
| `public/pages/` | All user-facing PHP files |
| `public/pages/admin/` | Admin panel pages |
| `public/pages/bus-listings/` | Bus display pages |
| `core/` | Database, Config, Logic |
| `uploads/` | User-uploaded files |

---

## 🔒 Security Benefits

✅ **Sensitive files hidden** - Core files not web-accessible  
✅ **Configuration centralized** - Easy to manage settings  
✅ **Cleaner URLs** - Use `.htaccess` for routing  
✅ **Better maintenance** - Easy to find and update code  
✅ **Scalable structure** - Easy to add new features  

---

## 📝 Common Tasks

### Adding a New Page
1. Create file in `public/pages/`
2. Add at top:
   ```php
   <?php
   require_once dirname(__DIR__) . '/../core/config.php';
   require_once CORE_PATH . '/Database.php';
   require_once CORE_PATH . '/helpers.php';
   session_start();
   ?>
   ```
3. Use asset links with `ASSETS_URL` or `asset()` helper

### Adding CSS/JS
1. Place in `public/assets/css/` or `public/assets/js/`
2. Link in HTML:
   ```html
   <link href="<?php echo asset('css/style.css'); ?>" rel="stylesheet">
   <script src="<?php echo asset('js/script.js'); ?>"></script>
   ```

### Adding Images
1. Place in `public/assets/images/`
2. Reference in HTML:
   ```html
   <img src="<?php echo asset('images/photo.jpg'); ?>" alt="Photo">
   ```

### Database Operations
```php
// Using new Database class
$db = new Database();
$results = $db->fetch_all("SELECT * FROM bus");
$user = $db->fetch_one("SELECT * FROM users WHERE id = 1");
$id = $db->execute("INSERT INTO bus (name) VALUES ('Express')");

// Legacy method still works
$result = mysqli_query($con, "SELECT * FROM bus");
```

---

## 🧪 Testing

1. Access your site via: `http://localhost/project/public/`
2. Check that all images, CSS, and JS load correctly
3. Test database connections
4. Verify page redirects work
5. Test admin functionality

---

## 💡 Next Steps

1. ✅ Update all PHP file includes (high priority)
2. ✅ Update all asset links in HTML
3. ✅ Test entire application
4. ⚠️ Consider using a PHP framework later (Laravel, Symfony)
5. ⚠️ Add unit tests for critical functions

---

## 📞 Quick Reference

| Task | Location |
|------|----------|
| Edit database config | `core/config.php` |
| User pages | `public/pages/` |
| Admin pages | `public/pages/admin/` |
| Bus listings | `public/pages/bus-listings/` |
| Styles | `public/assets/css/` |
| Scripts | `public/assets/js/` |
| Images | `public/assets/images/` |
| Database ops | `core/datain*.php`, `delete*.php`, `update*.php` |

---

**Restructuring Date:** October 26, 2025  
**Status:** Ready for development  
**Next Review:** After updating includes in all files

---
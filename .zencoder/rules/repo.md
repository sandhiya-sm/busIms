# Bus Booking System - Repository Information

## 📋 Project Overview
- **Name:** Bus Booking System
- **Type:** PHP Web Application
- **Database:** MySQL
- **Status:** Restructured and Organized
- **Last Updated:** October 26, 2025

## 🎯 Project Purpose
A complete bus booking and management system built with PHP and MySQL, featuring:
- User registration and login
- Bus searching and booking
- Admin management panel
- Different bus categories (Private, Government, Express)
- Booking management

## 📊 Current Structure

### Web Root (`public/`)
- **Entry Point:** `public/index.php`
- **Pages Directory:** `public/pages/`
- **Assets:** `public/assets/` (CSS, JS, Images, Videos)

### Application Core (`core/`)
- **Configuration:** `config.php`
- **Database:** `Database.php`, `connect.php`
- **Helpers:** `helpers.php`
- **CRUD Operations:** `datain*.php`, `delete*.php`, `update*.php`

### Media Files (`public/assets/`)
- Images: `/images/` (*.jpg, *.png, *.gif, *.jpeg)
- Styles: `/css/` (*.css)
- Scripts: `/js/` (*.js)
- Videos: `/videos/` (*.mp4)

## 🗂️ Key Files & Locations

| File | Location | Purpose |
|------|----------|---------|
| `config.php` | `core/` | Database and app configuration |
| `Database.php` | `core/` | Database connection class |
| `helpers.php` | `core/` | Utility functions |
| `home.php` | `public/pages/` | Home page |
| `login.php` | `public/pages/` | User login |
| `register.php` | `public/pages/` | User registration |
| `lssbus.php` | `public/pages/bus-listings/` | Special bus listing |
| `admin.php` | `public/pages/admin/` | Admin dashboard |

## 🔧 Technology Stack
- **Language:** PHP 7.x+
- **Database:** MySQL/MySQLi
- **Frontend:** HTML5, CSS3, JavaScript
- **Assets:** Images, Videos, Stylesheets

## 📝 Setup Requirements

1. **Database Configuration**
   - Update `core/config.php` with correct credentials
   - Create MySQL database named `bus_booking`

2. **File Path Updates**
   - Update all includes to use new structure
   - Update asset links in HTML files
   - Test all database connections

3. **Server Requirements**
   - Apache/Nginx with PHP support
   - MySQL Server
   - mod_rewrite enabled (for .htaccess)

## 🚀 Quick Commands

```bash
# Navigate to project
cd c:\wamp\www\project

# Access via browser
http://localhost/project/public/

# Check database connection
# Visit any page with database queries
```

## 📚 Documentation Files

- **PROJECT_STRUCTURE.md** - Detailed folder structure explanation
- **SETUP_GUIDE.md** - Step-by-step setup instructions
- **UPDATE_CHECKLIST.md** - File-by-file update checklist

## 🔐 Security Notes

- Core files stored outside web root
- Configuration files not accessible via URL
- User uploads stored in `/uploads/` (outside web root)
- Sensitive database operations in `/core/`

## 👥 Available Modules

1. **User Module**
   - Registration
   - Login/Logout
   - Profile management

2. **Bus Module**
   - Bus listing (Private, Government, Express)
   - Bus search
   - Bus details

3. **Admin Module**
   - Bus management (Add, Edit, Delete)
   - User management
   - Booking management

4. **Booking Module**
   - Search buses
   - Book seats
   - Manage bookings

## ⚙️ Configuration

Edit `core/config.php` to change:
- Database credentials
- Site name and URL
- Asset URLs
- Debug mode

## 📞 Maintenance Checklist

- [ ] Update all PHP includes to new structure
- [ ] Update all asset links
- [ ] Test database connections
- [ ] Verify image loading
- [ ] Test CSS/JS files
- [ ] Test all forms and submissions
- [ ] Test admin panel
- [ ] Test user authentication

## 🎓 Learning Resources

The project uses:
- **MySQLi** for database operations (can upgrade to PDO)
- **Sessions** for user authentication
- **File upload handling** in `/uploads/`
- **Dynamic HTML/PHP** for content generation

---

**Repository Setup Date:** October 26, 2025  
**Restructuring Status:** ✅ Complete  
**Next Phase:** Update and test all file paths
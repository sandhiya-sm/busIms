# ✅ Update Checklist - File by File

After restructuring, you need to update includes and paths in these PHP files.

---

## 📌 Files Requiring Updates

### 🟡 HIGH PRIORITY - Update First

- [ ] `public/pages/home.php`
- [ ] `public/pages/login.php`
- [ ] `public/pages/register.php`
- [ ] `public/pages/signin.php`
- [ ] `public/pages/search.php`
- [ ] `public/pages/bus-listings/lssbus.php` ✅ (Already updated)
- [ ] `public/pages/bus-listings/exgovbus.php`
- [ ] `public/pages/bus-listings/private.php`
- [ ] `public/pages/bus-listings/displayprivate.php`
- [ ] `public/pages/bus-listings/displaypublic.php`
- [ ] `public/pages/bus-listings/displayexgovbus.php`
- [ ] `public/pages/bus-listings/displaylss.php`

### 🟠 MEDIUM PRIORITY - Update After High Priority

- [ ] `public/pages/admin/admin.php`
- [ ] `public/pages/admin/admin page.php`
- [ ] `public/pages/admin/conadmin.php`
- [ ] `public/pages/about.php`
- [ ] `public/pages/blog.php`

---

## 📝 Update Template

### For each file, replace the first few lines:

**FIND THIS:**
```php
<?php
include 'connect.php';
?>
```

**REPLACE WITH THIS:**
```php
<?php
require_once dirname(__DIR__) . '/../../core/config.php';
require_once CORE_PATH . '/Database.php';
require_once CORE_PATH . '/helpers.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
```

**NOTE:** The path might be different based on file location:
- From `pages/` → `/../core/`
- From `pages/admin/` → `/../../core/`
- From `pages/bus-listings/` → `/../../core/`

---

## 🎯 Path Reference

### From Different Directories

**From `/public/pages/home.php`:**
```
dirname(__DIR__)  → /public/pages
../core/          → Up to /public, then into /core
Full path: /core/config.php
```

**From `/public/pages/admin/admin.php`:**
```
dirname(__DIR__)  → /public/pages/admin
../../core/       → Up to /public, then into /core
Full path: /core/config.php
```

**From `/public/pages/bus-listings/lssbus.php`:**
```
dirname(__DIR__)  → /public/pages/bus-listings
../../core/       → Up to /public, then into /core
Full path: /core/config.php
```

---

## 🖼️ Updating Asset Links

### In Your HTML Files

**FIND:**
```html
<img src="image.jpg">
<img src="../../image.jpg">
```

**REPLACE WITH:**
```html
<img src="<?php echo asset('images/image.jpg'); ?>">
```

**OR MANUALLY:**
```html
<img src="<?php echo ASSETS_URL; ?>/images/image.jpg">
```

### For CSS Files

**FIND:**
```html
<link href="style.css">
<link href="../../blog.css">
```

**REPLACE WITH:**
```html
<link href="<?php echo asset('css/style.css'); ?>" rel="stylesheet">
<link href="<?php echo asset('css/blog.css'); ?>" rel="stylesheet">
```

### For JavaScript Files

**FIND:**
```html
<script src="page2.js"></script>
```

**REPLACE WITH:**
```html
<script src="<?php echo asset('js/page2.js'); ?>"></script>
```

---

## 📂 How to Find Outdated Links

Search for these patterns in your PHP files:

- [ ] `include '` 
- [ ] `require '`
- [ ] `src="../../`
- [ ] `href="../../`
- [ ] `src="./`
- [ ] `href="./`
- [ ] `.jpg"`
- [ ] `.css"`
- [ ] `.js"`

**Search Commands (for text editor):**
- Use Ctrl+H for Find & Replace
- Use Ctrl+Shift+F to search in folder

---

## ✨ Completion Steps

Once all files are updated:

1. **Test Database Connection**
   - Open any page with database queries
   - Check if data loads without errors
   
2. **Test Asset Loading**
   - Open in browser
   - Right-click → Inspect Element
   - Check Console tab for 404 errors
   - Check Network tab for missing files

3. **Test Page Navigation**
   - Click all links
   - Verify redirects work
   - Test buttons and forms

4. **Test Admin Panel**
   - Login to admin
   - Try CRUD operations (Create, Read, Update, Delete)

---

## 💾 Database Operations Files

These files are now in `/core/` and may need path updates if they include other files:

- `datain.php` - Insert operations
- `datain1.php`, `datain2.php`, `datain3.php`
- `delete.php` - Delete operations
- `delete1.php`, `delete2.php`, `delete3.php`
- `update.php` - Update operations
- `update1.php`, `update2.php`, `update3.php`

**Update them with:**
```php
<?php
require_once dirname(__FILE__) . '/config.php';
require_once dirname(__FILE__) . '/Database.php';
?>
```

---

## 📊 Progress Tracking

**Total Files:** ~30+  
**Estimated Update Time:** 30-60 minutes  

| Priority | Count | Status |
|----------|-------|--------|
| High | 12 | ⬜ Not started |
| Medium | 5 | ⬜ Not started |
| Database | 9 | ⬜ Not started |
| **TOTAL** | **26** | 0/26 |

---

**Remember:** Update and test as you go. Don't wait to update all files at once.

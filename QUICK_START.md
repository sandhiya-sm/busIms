# 🚀 QUICK START GUIDE

## Get Your Project Running in 5 Steps

---

## Step 1: Update Database Configuration
📁 **File:** `core/config.php` (lines 6-10)

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bus_booking');  // ← CHANGE THIS
```

**What to do:**
1. Open `core/config.php`
2. Find the `DB_NAME` line
3. Change `'bus_booking'` to your database name
4. Save the file

---

## Step 2: Test Your Setup
🌐 **Open in Browser:**
```
http://localhost/project/public/
```

**You should see:**
- No red errors
- Page loads properly
- Images display (if any on home page)

If you see errors, check:
- Database connection in `core/config.php`
- Database exists and credentials are correct

---

## Step 3: Update a PHP File (Example)
📄 **File:** `public/pages/home.php`

**Replace the first few lines:**

**FIND:**
```php
<?php
include 'connect.php';
```

**REPLACE WITH:**
```php
<?php
require_once dirname(__DIR__) . '/../core/config.php';
require_once CORE_PATH . '/Database.php';
require_once CORE_PATH . '/helpers.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
```

Save and test in browser.

---

## Step 4: Use Helper Functions
✨ **Using Asset Links**

**OLD:**
```html
<img src="image.jpg">
```

**NEW:**
```html
<img src="<?php echo asset('images/image.jpg'); ?>">
```

**NEW (Alternative):**
```html
<img src="<?php echo ASSETS_URL; ?>/images/image.jpg">
```

---

## Step 5: Repeat for All Files
📋 **Use the checklist:**
See `UPDATE_CHECKLIST.md` for all ~30 files that need updating

---

## 📊 File Path Cheat Sheet

### From Different Locations:

| File Location | Include Path |
|---|---|
| `public/pages/home.php` | `dirname(__DIR__) . '/../core/config.php'` |
| `public/pages/admin/admin.php` | `dirname(dirname(__DIR__)) . '/../core/config.php'` |
| `public/pages/bus-listings/lssbus.php` | `dirname(dirname(__DIR__)) . '/../core/config.php'` |
| `core/datain.php` | `dirname(__FILE__) . '/config.php'` |

---

## 🎯 Most Important Tasks (Prioritize These!)

1. ✅ Update `core/config.php` database name
2. ✅ Update `public/pages/home.php` includes
3. ✅ Update all `public/pages/bus-listings/*.php` includes
4. ✅ Update `public/pages/admin/*.php` includes
5. ✅ Update asset links in HTML files

---

## 🔥 Common Issues & Solutions

### Issue: "Call to undefined function"
**Solution:** Add this at top of file:
```php
require_once CORE_PATH . '/helpers.php';
```

### Issue: Images not loading
**Solution:** Use asset URL:
```php
src="<?php echo asset('images/photo.jpg'); ?>"
```

### Issue: "Database connection failed"
**Solution:** 
1. Check `core/config.php` credentials
2. Verify MySQL is running
3. Verify database exists

### Issue: "Undefined variable: ASSETS_URL"
**Solution:** Make sure this is included first:
```php
require_once dirname(__DIR__) . '/../core/config.php';
```

---

## 📝 Useful Commands

### Find old includes (in VS Code)
```
Ctrl+H  (Find & Replace)
Search: include 'connect.php'
Replace: require_once dirname(__DIR__) . '/../../core/config.php';
```

### Find asset links to update
```
Ctrl+H  (Find & Replace)
Search: src=".*\.jpg"
Replace: src="<?php echo asset('images/...jpg'); ?>"
```

---

## 🧪 Testing Checklist

- [ ] Homepage loads
- [ ] Images display
- [ ] CSS styling works
- [ ] Database queries work
- [ ] Login/Register functions
- [ ] Admin panel works
- [ ] Bus listings display
- [ ] Forms submit without errors
- [ ] No 404 errors in console
- [ ] No PHP notices/warnings

---

## 📚 Documentation Files

| File | Read When |
|------|-----------|
| **QUICK_START.md** | First (this file!) |
| **PROJECT_STRUCTURE.md** | Understand folder layout |
| **SETUP_GUIDE.md** | Learn detailed setup |
| **UPDATE_CHECKLIST.md** | Track file updates |
| **RESTRUCTURING_COMPLETE.md** | See what changed |

---

## ⏱️ Estimated Time

- Update database config: **2 minutes**
- Update 1-2 test files: **5 minutes**
- Update remaining files: **30-45 minutes**
- Test everything: **15 minutes**

**Total: ~1 hour**

---

## 💬 Need Help?

Refer to:
1. SETUP_GUIDE.md (detailed instructions)
2. UPDATE_CHECKLIST.md (file-specific guidance)
3. Your IDE search feature (Ctrl+F to find patterns)

---

## 🎊 You're Ready!

Start with Step 1 above, then proceed to UPDATE_CHECKLIST.md for complete file list.

**Good luck! 🚀**

---
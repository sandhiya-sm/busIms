<?php
/**
 * Application Configuration
 * 
 * Database credentials and application settings
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bus_booking'); // Change this to your database name

// Application Settings
define('SITE_NAME', 'Bus Booking System');
define('SITE_URL', 'http://localhost/project');
define('ASSETS_URL', SITE_URL . '/public/assets');

// Path Configuration
define('BASE_PATH', dirname(dirname(__FILE__)));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('CORE_PATH', BASE_PATH . '/core');
define('UPLOAD_PATH', BASE_PATH . '/uploads');

// Display Errors (set to false in production)
define('DEBUG_MODE', true);

if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Timezone
date_default_timezone_set('UTC');
?>
<?php
/**
 * Helper Functions
 * 
 * Common functions used throughout the application
 */

/**
 * Redirect to a page
 */
function redirect($page) {
    header('Location: ' . $page);
    exit;
}

/**
 * Check if user is logged in
 */
function is_logged_in() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

/**
 * Get current user ID
 */
function get_user_id() {
    return $_SESSION['user_id'] ?? null;
}

/**
 * Sanitize input
 */
function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

/**
 * Escape input for database query
 */
function escape($input) {
    global $con;
    return $con->real_escape_string($input);
}

/**
 * Display error message
 */
function show_error($message) {
    echo '<div class="alert alert-danger">' . htmlspecialchars($message) . '</div>';
}

/**
 * Display success message
 */
function show_success($message) {
    echo '<div class="alert alert-success">' . htmlspecialchars($message) . '</div>';
}

/**
 * Get assets URL
 */
function asset($path) {
    return ASSETS_URL . '/' . ltrim($path, '/');
}

/**
 * Get page URL
 */
function page_url($path) {
    return SITE_URL . '/public/pages/' . ltrim($path, '/');
}

/**
 * Check if request method is POST
 */
function is_post() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * Check if request method is GET
 */
function is_get() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

/**
 * Get POST data
 */
function post($key, $default = null) {
    return $_POST[$key] ?? $default;
}

/**
 * Get GET data
 */
function get($key, $default = null) {
    return $_GET[$key] ?? $default;
}

/**
 * Set session data
 */
function set_session($key, $value) {
    $_SESSION[$key] = $value;
}

/**
 * Get session data
 */
function get_session($key, $default = null) {
    return $_SESSION[$key] ?? $default;
}

/**
 * Destroy session
 */
function destroy_session() {
    session_destroy();
    unset($_SESSION);
}

/**
 * Date formatter
 */
function format_date($date, $format = 'Y-m-d H:i:s') {
    return date($format, strtotime($date));
}

/**
 * Number formatter
 */
function format_currency($amount) {
    return '₹ ' . number_format($amount, 2);
}

/**
 * Generate random token
 */
function generate_token($length = 32) {
    return bin2hex(random_bytes($length / 2));
}

/**
 * Validate email
 */
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>
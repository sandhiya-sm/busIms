<?php
/**
 * Bus Booking System - Main Entry Point
 */

// Load configuration
require_once dirname(__DIR__) . '/core/config.php';
require_once CORE_PATH . '/Database.php';

// Start session
session_start();

// Redirect to home page
header('Location: ' . ASSETS_URL . '/../pages/home.php');
exit;
?>
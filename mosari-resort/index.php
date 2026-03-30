<?php
// Start session
session_start();

// Set error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Main paths
define('ROOT_PATH', __DIR__);
define('BACKEND_PATH', ROOT_PATH . '/backend');
define('FRONTEND_PATH', ROOT_PATH . '/frontend');

// Include configuration files
require_once BACKEND_PATH . '/config/config.php';
require_once BACKEND_PATH . '/config/database.php';
require_once BACKEND_PATH . '/config/helper.php';

// Include core classes
require_once BACKEND_PATH . '/core/App.php';
require_once BACKEND_PATH . '/core/Controller.php';
require_once BACKEND_PATH . '/core/Model.php';

// Initialize and run application
$app = new App();
?>
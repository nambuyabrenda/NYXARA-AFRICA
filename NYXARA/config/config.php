<?php
// Database configuration (if needed later)
define('DB_HOST', 'localhost');
define('DB_NAME', 'nyxara_africa');
define('DB_USER', 'root');
define('DB_PASS', '');

// Site configuration
define('SITE_NAME', 'Nyxara Africa');
define('SITE_URL', 'http://localhost/nyxara-africa');
define('ADMIN_EMAIL', 'info@nyxara.africa');

// Timezone
date_default_timezone_set('Africa/Kampala');

// Error reporting (disable for production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
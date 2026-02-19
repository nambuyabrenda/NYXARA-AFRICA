<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Get current page for active navigation
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Nyxara Africa'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'African Technology & Digital Solutions Company'; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
<a id="top"></a>

<header>
    <nav>
        <div class="container nav-container">
            <div class="logo">
                <a href="index.php">NYXARA AFRICA</a>
            </div>
            <div class="nav-links">
                <a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a>
                <a href="services.php" class="<?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">Services</a>
                <a href="pricing.php" class="<?php echo ($currentPage == 'pricing.php') ? 'active' : ''; ?>">Pricing</a>
                <a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About Us</a>
                <a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a>
            </div>
            <div class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</header>

<main>
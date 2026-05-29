<?php
include_once('config.php');

// Check if the current page is index.php
$currentPage = basename($_SERVER['PHP_SELF']);
$isIndex = ($currentPage == 'index.php' || $currentPage == '');

// Define the prefix based on the page
// If we are on Home, use empty prefix (smooth scroll). 
// If we are on About (or any other page), use 'index.php' prefix (redirect).
$linkPrefix = $isIndex ? '' : 'index.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A peaceful, disciplined study space in Gandhinagar inspired by the focus of Mahadev.">
    <title><?php echo isset($pageTitle) ? $pageTitle : $siteTitle; ?> | Focus & Knowledge</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;800&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
<link rel="icon" type="image/png" href="assets/images/fi.png">
</head>

<body>
    <header id="header">
        <div class="container">
            <nav>
                <a href="index.php" class="logo" style="display: flex; align-items: center;">
                    <img src="assets/images/lg.png" alt="Mahadev Reading Zone Logo" 
                         style="height: 55px; width: auto; transform: scale(1.6); transform-origin: left center; margin-left: 10px;">
                </a>
                <ul class="nav-links">
                    <li><a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">About</a></li>
                    <li><a href="membership.php" class="<?php echo ($currentPage == 'membership.php') ? 'active' : ''; ?>">Membership</a></li>
                    <li><a href="gallery.php" class="<?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>">Gallery</a></li>
                    <li><a href="rules.php" class="<?php echo ($currentPage == 'rules.php') ? 'active' : ''; ?>">Rules</a></li>
                    <li><a href="register.php" class="<?php echo ($currentPage == 'register.php') ? 'active' : ''; ?>">Register</a></li>
                    <!-- <li><a href="booking.php" class="<?php echo ($currentPage == 'booking.php') ? 'active' : ''; ?>">Booking</a></li> -->
                    <li><a href="target.php" class="<?php echo ($currentPage == 'target.php') ? 'active' : ''; ?>">Exam Target</a></li>
                    <li><a href="focus-tracker.php" class="<?php echo ($currentPage == 'focus-tracker.php') ? 'active' : ''; ?>">Focus</a></li>
                    <li><a href="streak.php" class="<?php echo ($currentPage == 'streak.php') ? 'active' : ''; ?>">Streak</a></li>
                    <li><a href="contact.php" class="<?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </nav>
        </div>
    </header>
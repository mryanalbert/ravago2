<?php
// Get the current page's name
$current_page = basename($_SERVER['PHP_SELF']); // This will return the current page's filename
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/libs/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/libs/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link href="./assets/libs/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>

<body>
    <div id="overlay" style="z-index:999;position:fixed;background:black;opacity:0.5;height:100%;width:100%;display:none;"></div>
    <button id="scrollToTopBtn" class="scroll-to-top-btn" style="padding: 12px 10px;">
        <i class='bx bx-up-arrow-alt fs-1 fw-bolder text-center d-block'></i>
    </button>
    <header>
        <div class="logo">
            <img src="./assets/img/Logo-Ravago.png" alt="log image" id="logo-light">
            <img src="./assets/img/Logo-Ravago black.png" alt="log image" id="logo-dark" class="d-none">
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="index.php" class="<?= $current_page == 'index.php' ? 'active roboto-medium' : '' ?>">Home</a>
                </li>
                <li>
                    <a href="about.php" class="<?= $current_page == 'about.php' ? 'active roboto-medium' : '' ?>">About Us</a>
                </li>
                <li>
                    <a href="certifications.php" class="<?= $current_page == 'certifications.php' ? 'active roboto-medium' : '' ?>">Certifications</a>
                </li>
                <li>
                    <a href="projects.php" class="<?= $current_page == 'projects.php' ? 'active roboto-medium' : '' ?>">Projects</a>
                </li>
                <li>
                    <a href="services.php" class="<?= $current_page == 'services.php' ? 'active roboto-medium' : '' ?>">Rental Services</a>
                </li>
                <li>
                    <a href="careers.php" class="<?= $current_page == 'careers.php' ? 'active roboto-medium' : '' ?>">Careers</a>
                </li>
                <li>
                    <a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active roboto-medium' : '' ?>">Contact Us</a>
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>
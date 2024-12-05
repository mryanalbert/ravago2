<?php
// Get the current page's name
$current_page = basename($_SERVER['PHP_SELF']); // This will return the current page's filename
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                    <a href="rental-services.php" class="<?= $current_page == 'rental-services.php' ? 'active roboto-medium' : '' ?>">Rental Services</a>
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

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <img src="./assets/img/pexels-pixabay-532079.jpg" class="position-absolute top-0 start-0 w-100 object-fit-cover h-100" alt="pic">
            <div class="hero-content">
                <h1 class="roboto-bold w-100 text-center mx-auto" style="max-width:850px;" data-aos="fade-up" data-aos-duration="800">We Provide Best Construction Equipment For You</h1>
                <p class="mt-4" style="font-size: 20px;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">Your trusted partner for construction, mining, and industrial equipment rentals.</p>
                <a href="#services" id="hero-btn" class="btn border-0 rounded-0 mt-4 roboto-bold" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <i class="bi bi-arrow-right me-1"></i> GET STARTED
                </a>
            </div>
        </section>
        <!-- Hero Section -->

        <!-- About Section -->
        <section id="about" class="lower-section mx-auto">
            <div class="about-content w-100">
                <h2 class="section-text" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">About Us</h2>
                <p class="section-heading" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Working Through Dirt & Dust</p>
                <p class="section-body" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                    Ravago is the one-stop shop that takes away the headache in your logistics and lifting requirements. Established in 1979, Ravago Equipment Rentals, Inc. (RAVAGO) is a pioneer in the Philippines’ crane lifting industry. With our extensive fleet of cranes, trucks, trailers, and other heavy equipment, we aim to provide prompt quality service combined with safe methods to satisfy our customers’ every lifting and transport need. Along with our sister company, Asian Shipping Corp. (ASC), we make it possible to provide a total solution service to any location in the Philippines.
                </p>
            </div>
            <div class="about-img w-100">
                <img src="./assets/img/mmexport1727219736007.jpg" class="img-fluid" alt="truck image" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
            </div>
        </section>
        <!-- About Section -->

        <!-- Services Section -->
        <section id="services" class="bg-light">
            <div id="services-wrapper" class="services-cards mx-auto">
                <div class="services-content">
                    <h2 class="section-text" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">Our Services</h2>
                    <p class="section-heading" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">Lorem ipsum dolor sit.</p>
                    <p class="section-body" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, reprehenderit?
                    </p>
                </div>
                <div class="services-card bg-white">
                    <div class="service-img bg-light">
                        <img src="./assets/img/—Pngtree—tower crane_8530271.png" class="img-fluid d-block mx-auto" alt="lifting pic" style="width:100px;">
                    </div>
                    <div class="service-card-header"></div>
                    <div class="service-card-body"></div>
                </div>
                <div class="services-card bg-white">
                    <div class="service-img bg-light">
                        <img src="./assets/img/—Pngtree—dump truck transportation_4351546.png" class="img-fluid d-block mx-auto" alt="lifting pic" style="width:150px;">
                    </div>
                    <div class="service-card-header"></div>
                    <div class="service-card-body"></div>
                </div>
                <div class="services-card bg-white">
                    <div class="service-img bg-light">
                        <img src="./assets/img/access.png" class="img-fluid d-block mx-auto" alt="lifting pic" style="width:80px;">
                    </div>
                    <div class="service-card-header"></div>
                    <div class="service-card-body"></div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // Get the navbar element
        let navbar = document.querySelector('header');
        let links = navbar.querySelectorAll('nav ul li a');
        links = [...links]

        let hamburgerDivs = document.querySelectorAll('.hamburger div');
        hamburgerDivs = [...hamburgerDivs]
        console.log(hamburgerDivs)

        let logoLight = document.querySelector('#logo-light')
        let logoDark = document.querySelector('#logo-dark')


        // Function to check scroll position and toggle the background class
        function toggleNavbarBackground() {
            let screenWidth = window.innerWidth;
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled'); // Add the 'scrolled' class when scrolling
                // Change the color of all <a> elements to black
                links.forEach(link => {
                    if (screenWidth > 1080) {
                        link.classList.add('a-scrolled') // Set color to black
                    } else {
                        link.classList.remove('a-scrolled') // Set color to black
                    }
                });

                logoLight.classList.add('d-none')
                logoDark.classList.remove('d-none')

                hamburgerDivs.forEach(div => {
                    div.classList.add('hamburger-scrolled')
                    div.classList.remove('hamburger-not-scrolled')
                })
            } else {
                navbar.classList.remove('scrolled'); // Remove the 'scrolled' class when at the top

                links.forEach(link => {
                    link.classList.remove('a-scrolled'); // Reset the color to the default
                });

                logoLight.classList.remove('d-none')
                logoDark.classList.add('d-none')

                hamburgerDivs.forEach(div => {
                    div.classList.remove('hamburger-scrolled')
                    div.classList.add('hamburger-not-scrolled')
                })
            }
        }

        // Listen for the scroll event and call the function
        window.addEventListener('scroll', toggleNavbarBackground);
        window.addEventListener("resize", toggleNavbarBackground);


        // Initial check to handle the case when the page is loaded
        toggleNavbarBackground();


        // Get the button
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        if (scrollToTopBtn) {
            // When the user scrolls down 200px from the top of the document, show the button
            window.onscroll = function() {
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    scrollToTopBtn.style.display = 'block';
                } else {
                    scrollToTopBtn.style.display = 'none';
                }
            };

            // When the user clicks the button, scroll to the top of the document
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth' // This makes the scrolling smooth
                });
            });
        }


        $('#nav_check').click(function() {
            // Check if the display value of #overlay is 'block'
            if ($('#overlay').css('display') === 'block') {
                $('#overlay').css('display', 'none')
                $('#nav_check').prop('checked', false)
            } else {
                $('#overlay').css('display', 'block')
            }
        })

        $('#overlay').click(function(e) {
            $('#overlay').css('display', 'none')
            $('#nav_check').prop('checked', false)
        })
    </script>
</body>

</html>
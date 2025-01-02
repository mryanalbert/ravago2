<footer class="footer">
    <div class="footer-content">
        <img src="./assets/img/Logo-Ravago.png" alt="">
        <p>Your lifting and transport solutions provider.</p>

        <div class="icons">
            <a href="https://www.facebook.com/ravagocranes" target="_blank" style="font-size:2rem;"><i class='bx bxl-facebook-circle'></i></a>
            <a href="mailto:example@example.com" target="_blank" style="font-size:2rem;"><i class='bx bxs-envelope'></i></a>
            <a href="https://www.youtube.com/@ravagocranesphilippines8822" target="_blank" style="font-size:2rem;"><i class='bx bxl-youtube'></i></a>
        </div>
    </div>

    <div class="footer-content">
        <h4>Head Office</h4>
        <li>
            <i class='bx bx-current-location'></i> 88 C3 Road, Kaunlaran Village, Caloocan City, Metro Manila 1409, Philippines
        </li>
    </div>

    <div class="footer-content">
        <h4>Cellphone Nos.</h4>
        <li><i class='bx bxs-phone'></i> +63 (939) 9372712</li>
        <li><i class='bx bxs-phone'></i> +63 (947) 9961204</li>
        <li><i class='bx bxs-phone'></i> +63 (947) 9961205</li>
        <li><i class='bx bxs-phone'></i> +63 (917) 8695034</li>
        <li><i class='bx bxs-phone'></i> +63 (917) 5372140</li>
    </div>

    <div class="footer-content">
        <h4>Telephone Nos.</h4>
        <li><i class='bx bxs-phone'></i> +632 8981 6200</li>
    </div>
</footer>
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


    // $('#nav_check').click(function() {
    //     // Check if the display value of #overlay is 'block'
    //     if ($('#overlay').css('display') === 'block') {
    //         $('#overlay').css('display', 'none')
    //         $('#nav_check').prop('checked', false)
    //     } else {
    //         $('#overlay').css('display', 'block')
    //     }
    // })

    // $('#overlay').click(function(e) {
    //     $('#overlay').css('display', 'none')
    //     $('#nav_check').prop('checked', false)
    // })
    document.getElementById("nav_check").addEventListener("click", function() {
        var overlay = document.getElementById("overlay");
        var navCheck = document.getElementById("nav_check");

        // Check if the display value of #overlay is 'block'
        if (getComputedStyle(overlay).display === "block") {
            overlay.style.display = "none";
            navCheck.checked = false;
        } else {
            overlay.style.display = "block";
        }
    });

    document.getElementById("overlay").addEventListener("click", function() {
        var overlay = document.getElementById("overlay");
        var navCheck = document.getElementById("nav_check");

        overlay.style.display = "none";
        navCheck.checked = false;
    });
</script>
</body>

</html>
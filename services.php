<?php
$serviceTitles = [
    "Lifting Machines",
    "Transport Machines",
    "Access Machines",
    "Others",
];

$services = [
    0 => [
        "Crawler Crane",
        "Truck Mounted Crane",
        "Rough Terrain Crane",
        "Forklift",
        "Telehandler",
        "Boom Truck",
    ],
    1 => [
        "Low-Bed Trailer",
        "High-Bed Trailer",
        "Self-Loader Truck",
        "Self-Propelled Trailer",
        "Vessel Deck Trailer",
        "Multi-Axle Modular Trailer",
    ],
    2 => ["Manlift", "Articulated Manlift", "Scissor Lift"],
    3 => ["Backhoe", "Generator Set", "Tower Light", "Goldhofer"],
];

$i = -1;

?>
<?php require_once './assets/php/Header.php' ?>
<main>
    <!-- {/* Second Section */} -->
    <div class="bg-white">
        <div class="rental-services mx-auto">
            <div
                class="w-100"
                data-aos="fade-up"
                data-aos-duration="800"
                data-aos-once="true">
                <h2 class="section-text">Sales Rentals</h2>
                <p class="section-heading">Our Rental Services</p>
                <p class="section-body">
                    With our extensive fleet of cranes, trucks, trailers, and other
                    heavy equipment, we aim to provide prompt quality service combined
                    with safe methods to satisfy our customers’ every lifting and
                    transport needs. Asian Shipping Corporation, a sister company, has
                    the largest fleet of landing crafts (LCT), tugboats and barges.
                    The close teamwork between the two companies gives Ravago easy
                    access in the transport of its rental fleet to and from job-sites
                    all over the 7,100 islands of the Philippines.
                </p>
            </div>
            <!-- {/* 4 columns */} -->
            <div
                class="rental-services-wrapper"
                data-aos="fade-up"
                data-aos-duration="800"
                data-aos-once="true"
                data-aos-delay="150">
                <?php
                foreach ($serviceTitles as $title) {
                    $i++;
                ?>
                    <div class="rental-service">
                        <div class="">
                            <div class="next-img" style="height:14rem;">
                                <img src="assets/img/pexels-pixabay-532079.jpg" alt="Rental Service Pic" class="position-absolute object-fit-cover h-100">
                            </div>
                        </div>
                        <div class="service-card-header" style="margin-top:1.75rem">
                            <p class="section-card-title roboto-bold"><?= $title ?></p>
                        </div>
                        <div class="service-card-body">
                            <ul class="section-body mt-0">
                                <?php foreach ($services[$i] as $serviceOfTitle) { ?>
                                    <li style="line-height: 2;"><?= $serviceOfTitle ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- {/* Second Section */} -->
</main>
<?php require_once './assets/php/Footer.php' ?>
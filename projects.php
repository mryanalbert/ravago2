<?php
$projects = json_decode(file_get_contents('assets/data/projects.json'), true);
$aosDelay = 0;
?>
<?php require_once './assets/php/Header.php' ?>
<main>
    <section id="projects" class="bg-white">
        <p
            class="roboto-bold w-100 text-center mx-auto text-black section-heading"
            style="max-width:865px;line-height:1.25;"
            data-aos="fade-up"
            data-aos-duration="800"
            data-aos-once="true">
            Projects
        </p>
        <div class="projects-wrapper">
            <?php
            foreach ($projects as $proj) {
                $aosDelay += 150;
            ?>
                <div
                    class="project"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-once="true"
                    data-aos-delay="<?= $aosDelay ?>">
                    <a href="#">
                        <div class="overflow-hidden group">
                            <div class="position-absolute text-white" style="max-width:15rem;z-index:20;top:50%;left:50%;transform:translate(-50%,-50%);">
                                <p class="roboto-medium text-center" style="font-size:1.5rem;line-height:2rem;"><?= $proj['name'] ?></p>
                                <p class="text-center roboto-light group" style="font-size:0.875rem;line-height:1.25rem;">Lorem ipsum dolor sit.</p>
                                <div class="bg-white w-100" style="margin-top:0.5rem;height:2px;"></div>
                            </div>
                            <div class="bg-black position-absolute object-fit-cover w-100 h-100 group-hover:opacity-50" style="z-index:10;"></div>
                            <div class="w-100 position-relative group-hover:scale-105" style="aspect-ratio:1/1;">
                                <img src="<?= $proj['img'] ?>" alt="lifting pic" class="object-fit-cover w-100 h-100">
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </section>
</main>
<?php require_once './assets/php/Footer.php' ?>
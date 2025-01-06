<?php
$projects = json_decode(file_get_contents('assets/data/projects.json'), true);
$aosDelay = 0;

$ids = array_column($projects, 'id');

$foundElement = null;

$searchId = intval($_GET['project-id']);

if (isset($_GET['project-id']) && in_array($searchId, $ids)) {
    // Loop through the array to find the matching ID
    foreach ($projects as $project) {
        if ($project['id'] === $searchId) {
            $foundElement = $project;
            break;
        }
    }
?>
    <?php require_once './assets/php/Header.php' ?>
    <main>
        <section id="project" class="bg-white">
            <div class="project-wrapper">
                <div data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <!-- <BackLink /> -->
                    <img src="<?= $project['img'] ?>" alt="lifting pic" class="w-100 object-fit-cover">
                    <p class="roboto-medium project-title"><?= $project['name'] ?> Project</p>
                </div>

                <p
                    class="project-content"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-once="true">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut modi ad
                    laboriosam mollitia, assumenda dolorum amet harum voluptates tenetur
                    culpa dicta ipsum cupiditate ea, facere ex aspernatur! Expedita,
                    dolorem maxime nobis voluptatem laborum voluptates corrupti
                    explicabo delectus ipsam maiores voluptate.
                </p>
            </div>
        </section>
    </main>
    <?php require_once './assets/php/Footer.php' ?>
<?php
} else {
    header('location: projects.php');
    return;
}

?>
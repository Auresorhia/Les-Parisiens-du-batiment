<!--Page de projet (slider)-->
<?php
// Récupérer l’ID du projet depuis l’URL
$projectId = $_GET['id'] ?? null;

// Charger les données JSON
$projectsData = json_decode(file_get_contents(__DIR__ . '/assets/projects.json'), true);

// Initialiser les variables
$sliderImages = [];
$title = '';
$description = '';
$address = '';

// Trouver le projet
foreach ($projectsData['projects'] as $project) {
    if ($project['id'] === $projectId) {
        $sliderImages = $project['sliderImages'] ?? [];
        $title = $project['title'] ?? '';
        $description = $project['description'] ?? '';
        // Gérer le champ adresse avec faute possible
        $address = $project['address'] ?? ($project['adress'] ?? '');
        break;
    }
}

// Si le projet est introuvable, redirection ou message d’erreur
if (empty($sliderImages)) {
    header("Location: projects");
    exit;
}

?>

<?php include 'inc/head.php'; ?>
<body>
<?php include 'inc/header.php'; ?>

    <main class="project-page <?= htmlspecialchars($projectId) ?> fade-in-up-slow">
        <section class="project-header">
            <div class="container">
                <a href="projects" class="back-button"><span class="arrow-back">←</span> Retour</a>
                <div class="header-wrapper">
                <div class="title-block">
                    <h1><?= htmlspecialchars($title) ?></h1>
                    <p><?= htmlspecialchars($description) ?></p>
                </div>
                </div>
            </div>
        </section>



        <section class="project-slider">
            <div class="container">
                <div class="slider-wrapper fade-in-up-fast">
                    <div class="slider-container">
                        <?php foreach ($sliderImages as $img): ?>
                            <div class="slide">
                                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($title) ?>" class="lightbox-trigger">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php if ($address): ?>
                    <div class="project-address">
                        <span><?= htmlspecialchars($address) ?></span>
                    </div>
                <?php endif; ?>

                <div class="slider-controls">
                    <button class="prev">‹</button>
                    <button class="next">›</button>
                </div>
            </div>
        </section>

        <div class="floating-image-container" id="floatingImageContainer" aria-hidden="true">
            <img src="" alt="" id="floatingImage">
        </div>

    </main>

    <?php include 'inc/footer.php'; ?>
    <script src="js/project-slider.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>

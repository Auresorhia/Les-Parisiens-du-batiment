<?php
$projectsData = json_decode(file_get_contents(__DIR__ . '/assets/projects.json'), true);
?>

<?php include 'inc/head.php'; ?>
<body>
<?php include 'inc/header.php'; ?>

<main class="projects-page">
    <section class="projects-grid-section">
        <div class="container">
            <div id="section-h2-projects" class="section-h2">
                <h1 id="second-projects-title" class="title-h2 fade-in-up-fast">Nos réalisations</h1>
                <p>Découvrez nos projets réalisés avec passion.</p>
            </div>

            <div class="gallery" id="projects-gallery">
                <?php
                foreach ($projectsData['projects'] as $project) {
                    echo '<a href="project?id=' . htmlspecialchars($project['id']) . '" class="card fade-in-up-slow">';
                    echo '<img src="' . htmlspecialchars($project['mainImage']) . '" alt="' . htmlspecialchars($project['title']) . '" class="mainImg">';
                    echo '<div class="overlay">';
                    echo '<div class="overlay-address"><img src="assets/map.webp" alt="Adresse" class="icon-address">' . htmlspecialchars($project['address']) . '</div>';
                    echo '<h3>' . htmlspecialchars($project['title']) . '</h3>';
                    echo '<p>' . htmlspecialchars($project['description']) . '</p>';
                    echo '</div>';
                    echo '</a>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>
<script src="js/main.js"></script>
</body>
</html>

<?php require 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>
    <main>
        <div id="home" class="hero-wrapper" aria-label="Section d'accueil">
            <section id="hero" class="section-hero">
                <div class="hero-content">
                    <img src="images/baniere.webp" alt="Image d'accueil" class="hero-img" width="1920" height="1080">
                    <div class="hero-text">
                        <img src="images/logo-white.svg" alt="logo de l'entreprise" id="logo-hero" class="fade-in-up-slow">
                        <h1 class="hero-h1 fade-in-up-fast">Chaque détail compte, chaque projet nous engage.</h1>
                        <p class="fade-in-up-fast">Professionnalisme, confiance et savoir-faire au rendez-vous.</p>
                    </div>
                </div>
            </section>
        </div>



            <section id="about" class="section" aria-labelledby="about-title">
                <div class="container">
                    <div class="section-h2" id="about-h2">
                        <h2 class="title-h2 fade-in-up-fast">À propos de nous</h2>
                    </div>
                    <p class="about-text fade-in-up-slow"><span>LES PARISIENS DU BÂTIMENT</span> est une société spécialisée dans <br>la rénovation d'intérieur et les travaux tous corps d'état.<br><br>Notre équipe accompagne <span>particuliers</span> et <span>professionnels</span> dans leurs projets,<br> en garantissant un travail de qualité, respectant les délais et les budgets. <br>Chez Les Parisiens du Bâtiment, nous transformons vos espaces avec précision, fiabilité et style.<br><br>De la rénovation complète à l’aménagement sur mesure,<br>nous vous accompagnons à chaque étape pour des résultats <span>à la hauteur de vos attentes</span>.</p>

                    <div class="hr-stat">
                        <hr>
                    </div>
                    <div class="stats-content fade-in-up-slow">
                        <div class="stat fade-in-up-fast" id="stat-1">
                            <div id="line-2" class="lines"></div>
                            <div class="nb-text">
                                <h3 class="stats-nb">+ 100</h3>
                                <p>PROJETS RÉALISES</p>
                            </div>
                        </div>

                        <div class="stat fade-in-up-fast" id="stat-2">
                            <div id="line-1" class="lines"></div>
                            <div class="nb-text">
                                <h3 class="stats-nb">27</h3>
                                <p>ANNÉES D'EXPÉRIENCE</p>
                            </div>
                        </div>

                        <div class="stat fade-in-up-fast" id="stat-3">
                            <div id="line-2" class="lines"></div>
                            <div class="nb-text">
                                <h3 class="stats-nb">2</h3>
                                <p>COLLABORATIONS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="services" class="section" aria-labelledby="services-title">
                <div class="container">
                    <div class="section-h2 fade-in-up-fast">
                        <h2 class="title-h2">Nos services</h2>
                        <p>Des solutions sur mesure pour vos projets.</p>
                    </div>

                    <div class="services-content">
                        <div class="service fade-in-up-slow" aria-labelledby="service-1-title">
                            <img src="assets/house.svg" alt="icone de maison" class="icon-default icon-service">
                            <img src="assets/house-hover.svg" alt="icone de maison apres le passage de la souris" class="icon-hover icon-service">
                            <div class="text-service">
                                <h3 id="service-1-title" class="title-service">Rénovation complète</h3>
                                <p>Appartements, maisons, bureaux, commerces</p>
                            </div>
                        </div>

                        <div class="service fade-in-up-slow" aria-labelledby="service-2-title">
                            <img src="assets/wrench.svg" alt="icone de maison" class="icon-default icon-service">
                            <img src="assets/wrench-hover.svg" alt="icone de maison apres le passage de la souris" class="icon-hover icon-service">
                            <div class="text-service">
                                <h3 id="service-2-title" class="title-service">Travaux tous corps d'état</h3>
                                <p>maçonnerie, plomberie, électricité, menuiserie, peinture</p>
                            </div>
                        </div>

                        <div class="service fade-in-up-slow" aria-labelledby="service-3-title">
                            <img src="assets/paintbrush.svg" alt="icone de maison" class="icon-default icon-service">
                            <img src="assets/paintbrush-hover.svg" alt="icone de maison apres le passage de la souris" class="icon-hover icon-service">
                            <div id="service-3-title" class="text-service">
                                <h3 class="title-service">Aménagement intérieur</h3>
                                <p>Cuisines, salles de bain, dressing, cloisons</p>
                            </div>
                        </div>

                        <div class="service fade-in-up-slow" aria-labelledby="service-4-title">
                            <img src="assets/shield.svg" alt="icone de maison" class="icon-default icon-service">
                            <img src="assets/shield-hover.svg" alt="icone de maison apres le passage de la souris" class="icon-hover icon-service">
                            <div class="text-service">
                                <h3 id="service-4-title" class="title-service">Isolation et revêtements</h3>
                                <p>Sols, murs, plafonds, isolation thermique et phonique</p>
                            </div>
                        </div>

                        <div class="service fade-in-up-slow" aria-labelledby="service-5-title">
                            <img src="assets/users.svg" alt="icone de maison" class="icon-default icon-service">
                            <img src="assets/users-hover.svg" alt="icone de maison apres le passage de la souris" class="icon-hover icon-service">
                            <div class="text-service">
                                <h3 id="service-5-title" class="title-service">Conseil et accompagnement</h3>
                                <p>Etude de projet, conception, choix des matériaux</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="projects" class="section" aria-labelledby="projects-title">
                <div class="container">
                    <div class="projects-content">
                        <div class="section-h2 fade-in-up-fast">
                            <h2 id="projects-title" class="title-h2">
                                <a href="projects" id="projects-link">Nos réalisations <span class="arrow">↪</span></a>
                            </h2>
                            <p class="section-description">Ils nous ont fait confiance, voici le résultat.</p>
                        </div>

                        <div class="gallery">
                            <?php
                            $projectsData = json_decode(file_get_contents(__DIR__ . '/assets/projects.json'), true);
                            $count = 0;
                            foreach ($projectsData['projects'] as $project) {
                                if ($count >= 6) break;
                                $extraClass = $count >= 3 ? 'hide-on-mobile' : ''; // cacher les 3 dernières sur mobile
                                echo '<a href="project?id=' . htmlspecialchars($project['id']) . '" class="card ' . $extraClass . ' fade-in-up-slow">';
                                echo '<img src="' . htmlspecialchars($project['mainImage']) . '" alt="' . htmlspecialchars($project['title']) . '" class="mainImg">';
                                echo '<div class="overlay">';
                                echo '<div class="overlay-address"><img src="assets/map.webp" alt="Adresse" class="icon-address">' . htmlspecialchars($project['address']) . '</div>';
                                echo '<h3>' . htmlspecialchars($project['title']) . '</h3>';
                                echo '<p>' . htmlspecialchars($project['description']) . '</p>';
                                echo '</div>';

                                echo '</a>';
                                $count++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonials" class="section" aria-labelledby="testimonials-title">
                <div class="container">
                    <div class="carousel-container">
                        <div class="section-h2 fade-in-up-fast">
                            <h2 class="title-h2">Ce que disent nos clients</h2>
                            <p>Découvrez les avis de nos clients satisfaits</p>
                        </div>
                        
                        <div class="carousel-controls">
                            <button class="carousel-btn" id="prevBtn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M15 18L9 12L15 6V18Z"/>
                                </svg>
                            </button>
                            <button class="carousel-btn" id="nextBtn">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 6L15 12L9 18V6Z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="carousel-wrapper  fade-in-up-fast">
                            <div class="carousel-track" id="carouselTrack">
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="review-name">Marie Dubois</div>
                                        <span class="review-date">15 Jan 2024</span>
                                    </div>
                                    <p class="review-comment">
                                        "Service excellent ! Je recommande vivement cette entreprise. L'équipe est très professionnelle et à l'écoute."
                                    </p>
                                </div>
                                
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="review-name">Pierre Martin</div>
                                        <span class="review-date">12 Jan 2024</span>
                                    </div>
                                    <p class="review-comment">
                                        "Très satisfait de mon expérience. Livraison rapide et produit conforme à mes attentes."
                                    </p>
                                </div>
                                
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="review-name">Sophie Laurent</div>
                                        <span class="review-date">10 Jan 2024</span>
                                    </div>
                                    <p class="review-comment">
                                        "Un service client remarquable ! Ils ont répondu à toutes mes questions avec patience et professionnalisme."
                                    </p>
                                </div>
                                
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="review-name">Jean Dupont</div>
                                        <span class="review-date">8 Jan 2024</span>
                                    </div>
                                    <p class="review-comment">
                                        "Bonne qualité de service. Quelques petits détails à améliorer mais dans l'ensemble très positif."
                                    </p>
                                </div>
                                
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="review-name">Claire Moreau</div>
                                        <span class="review-date">5 Jan 2024</span>
                                    </div>
                                    <p class="review-comment">
                                        "Parfait ! Exactement ce que je cherchais. Je reviendrai certainement pour mes prochains achats."
                                    </p>
                                </div>
                                
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="review-name">Antoine Bernard</div>
                                        <span class="review-date">3 Jan 2024</span>
                                    </div>
                                    <p class="review-comment">
                                        "Service fiable et efficace. L'équipe technique est très compétente et réactive."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    <?php
    include 'inc/footer.php';
    ?>
    <script src="js/main.js"></script>
    <script src="js/avis.js"></script>
    </body>
</html>
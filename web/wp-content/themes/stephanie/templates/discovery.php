<?php
/**
 * Template Name: Découverte Arles
 */


get_header();
if (!get_theme_mod('show_only_main_header')): ?>

    <div id="content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="entry-content-page">
                <?php the_content(); ?>

                <div class="grid">
                    <div class="gutter-sizer"></div>

                    <?php

                    echo addGridItem(array(
                        "url" => "http://www.arlestourisme.com/fr/monument-detail.html&code=_x0031_3T2000295&langue=fr",
                        "cover" => STEPHANIE_IMAGES_PATH . "arles-discovery/amphiteatre.jpg",
                        "name" => "L'Amphithéâtre",
                        "about" => "Edifié vers 80-90 AP JC, l'Amphithéâtre d'Arles est le monument incontournable de la ville ! Gigantesque, c'est la construction la plus imposante de l'ancienne colonie romaine encore visible. Imaginé et conçu pour accueillir une foule innombrable lors des nombreux et importants spectacles qui s'y tenaient dans l'antiquité, l'amphithéâtre est toujours aujourd'hui un lieu qui s'emplit régulièrement de spectateurs."
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.fondation-vincentvangogh-arles.org/",
                        "cover" => STEPHANIE_IMAGES_PATH . "arles-discovery/fondation-vvg.jpg",
                        "name" => "Fondation Vincent Van Gogh Arles",
                        "about" => "Inaugurée en avril 2014, la Fondation Vincent van Gogh Arles rend hommage à l'œuvre de Van Gogh - peintre dont la créativité florissante atteignit son apogée lors de son séjour dans la ville, entre 1888 et 1889 - tout en explorant son impact dans l'art actuel. Chaque année des expositions temporaires d'artistes contemporains sont organisées aux côtés des toiles et dessins du Maître."
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.arles-antique.cg13.fr/",
                        "cover" => STEPHANIE_IMAGES_PATH . "arles-discovery/musee-arles-antique.jpg",
                        "name" => "Musée de l'Arles Antique",
                        "about" => "Dans ce bâtiment moderne conçu par l'architecte Henri Ciriani, le musée départemental Arles antique a ouvert ses portes au public voilà 20 ans. Reconnu pour la qualité de ses collections, c'est aussi un musée de site car il met en valeur uniquement des collections qui ont pour origine la ville et son territoire proche. L'exposition est chronologique, mais l'essentiel des collections appartenant à la période romaine, les œuvres ont été disséminées en fonction de thématiques reflétant la richesse du patrimoine arlésien."
                    ));

                    echo addGridItem(array(
                        "url" => "https://www.camargue.com/alpilles-en-4x4",
                        "cover" => STEPHANIE_IMAGES_PATH . "arles-discovery/alpilles-safari.jpg",
                        "name" => "Alpilles Safari",
                        "about" => "Pour une durée de 3 ou de 4 heures, au milieu de la nature, au coeur du Parc Régional des Alpilles, vous admirerez des vestiges anciens, des plantations d'oliviers à perte de vue, des vignes magnifiques. Un paysage à vous couper le souffle !"
                    ));

                    echo addGridItem(array(
                        "more" => "Pour plus d'idées de sorties"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.arlestourisme.com/fr/visites-d-arles.html",
                        "cover" => STEPHANIE_IMAGES_PATH . "arles-discovery/arles-patrimoine.jpg",
                        "name" => "Liste d'idées de sorties par l'office de tourisme",
                        "more" => true
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.arles-agenda.fr/index.php?page=mois&mois=2017-09",
                        "cover" => STEPHANIE_IMAGES_PATH . "arles-discovery/agenda-sorties-arles.jpg",
                        "name" => "L'agenda des sorties",
                        "more" => true
                    ));

                    ?>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_query(); //resetting the page query
        ?>
    </div>

    <?php
endif;
get_footer(); ?>
<?php
/**
 * Template Name: Notre histoire
 */

function addAlbum($group, $images) {
    $result = '<div class="album">';

    foreach ($images as $value) {
        $image = STEPHANIE_IMAGES_PATH . $value['image'];

        if ($value['miniature']) {
            $miniature = STEPHANIE_IMAGES_PATH . $value['miniature'];
        } else {
            $lastPos = strrpos($image, '.');
            $miniature = substr($image, 0, $lastPos) . '-min.' . substr($image, $lastPos + 1);
        }
        $caption = $value['caption'];

        $result .= "<div><a href=\"$image\" data-fancybox=\"$group\" data-caption=\"$caption\"><img src=\"$miniature\" alt=\"$caption\"/></a></div>";
    }

    $result .= '</div>';

    return $result;
}

get_header();
if (!get_theme_mod('show_only_main_header')): ?>

    <div id="content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="entry-content-page">
                <?php the_content(); ?>

                <div class="our-timeline-story">
                    <div class="line"></div>
                    <div class="timeline-content">
                        <span class="year">2008</span>

                        <div class="odd post">
                            <div class="date"><span>Septembre</span></div>
                            <div class="post-content animate" data-animate="slideInLeft" data-duration="0.25s">
                                <div class="box">
                                    <h2>Première rencontre</h2>
                                    <p>C’est la rentrée pour les premières années en DUT Informatique à l’IUT d’Arles.
                                        Environ 50 élèves vont occuper les bancs de l’école. Parmi eux un garçon
                                        originaire de Toulon, Guillaume Goulet, et une fille originaire de Miramas,
                                        Stéphanie Bellone. Faisant partie du même groupe de copains, ils vont commencer
                                        à se côtoyer régulièrement.</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="gallery animate" data-animate="slidInRight" data-duration="0.25s">
                                    <?php
                                    echo addAlbum("premiere-rencontre", array(
                                        array(
                                            "image" => "story/premiere-rencontre/chez-guillaume.JPG",
                                            "caption" => "Soirée jeux-video chez Guillaume"
                                        ),
                                        array(
                                            "image" => "story/premiere-rencontre/le-regard.JPG",
                                            "caption" => "L'un des premiers regards"
                                        ),
                                        array(
                                            "image" => "story/premiere-rencontre/chez-morgane.JPG",
                                            "caption" => "Soirée chez Morgane"
                                        ),
                                        array(
                                            "image" => "story/premiere-rencontre/parking-auchan.JPG",
                                            "caption" => "Le passage aux courses"
                                        ),
                                        array(
                                            "image" => "story/premiere-rencontre/iut.jpg",
                                            "caption" => "L'IUT d'Arles"
                                        )
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="even post">
                            <div class="date"><span>Entre le 13 et le 14 décembre</span></div>
                            <div class="post-content animate" data-animate="slideInRight" data-duration="0.25s">
                                <div class="box">
                                    <h2>Premier bisou</h2>
                                    <p>L’intérêt de l’un pour l’autre commence à se voir. David, un ami de Guillaume,
                                        décide de jouer les entremetteurs et les invite tous les deux à une soirée à
                                        côté de Toulon. C’est non sans un certain stress qu’ils entamèrent les deux
                                        heures de routes qui sépare Arles de Toulon. De cette soirée découlera
                                        l’histoire d’amour que l’on connait maintenant.</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="gallery animate" data-animate="slideInLeft" data-duration="0.25s">
                                    <?php
                                    echo addAlbum("premiere-bisou", array(
                                        array(
                                            "image" => "story/premier-bisou/david-nous.gif",
                                            "miniature" => "story/premier-bisou/david-nous-min.png",
                                            "caption" => "Images rescapées de la soirée"
                                        ),
                                        array(
                                            "image" => "story/premier-bisou/voiture-retour.jpg",
                                            "caption" => "Retour en voiture, direction Arles"
                                        ),
                                        array(
                                            "image" => "story/premier-bisou/bisou-neige.JPG",
                                            "caption" => "Bisou sous la neige Arlesienne"
                                        )
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="odd post">
                            <div class="date empty"></div>
                            <div class="post-content animate" data-animate="slideInLeft" data-duration="0.25s">
                                <div class="box">
                                    <h2>Premier album</h2>
                                    <p>De l’époque de l’IUT d’Arles et de leur rencontre Stéphanie et Guillaume gardent
                                        des musiques en tête, celles de l’album de Louise Attaque</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="iframe-wrapper spotify-wrapper">
                                    <iframe class="animate" data-animate="slideInRight" data-duration="0.5s"
                                            src='https://embed.spotify.com/?uri=spotify:album:6ASu7ufzcJkzZ9lLfiTyMN'
                                            frameborder='0' allowtransparency='true'></iframe>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <span class="year">2009</span>

                        <div class="even post">
                            <div class="date"><span>Juin</span></div>
                            <div class="post-content animate" data-animate="slideInRight" data-duration="0.25s">
                                <div class="box">
                                    <h2>Premier appartement</h2>
                                    <p>Habitant dans la même résidence, logeant déjà quasiment ensemble depuis un petit
                                        moment, Stéphanie quitta officiellement son appartement pour habiter dans celui
                                        de Guillaume, un studio de 23 m<sup>2</sup> dans la résidence Les Cyclades, à
                                        côté de l’IUT
                                        d’Arles.</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="gallery animate" data-animate="slideInLeft" data-duration="0.25s">
                                    <?php
                                    echo addAlbum("premier-appartement", array(
                                        array(
                                            "image" => "story/premier-appartement/cyclades.JPG",
                                            "caption" => "Le jardin des Cyclades vu de notre balcon"
                                        ),
                                        array(
                                            "image" => "story/premier-appartement/nous-balcon.JPG",
                                            "caption" => "Nous sur notre balcon"
                                        ),
                                        array(
                                            "image" => "story/premier-appartement/atelier-lecture.JPG",
                                            "caption" => "L'un de nos ateliers lecture"
                                        ),
                                        array(
                                            "image" => "story/premier-appartement/nous-interieur.JPG",
                                            "caption" => "Nous dans notre studio"
                                        )
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="odd post">
                            <div class="date empty"></div>
                            <div class="post-content animate" data-animate="slideInLeft" data-duration="0.25s">
                                <div class="box">
                                    <h2>Première série</h2>
                                    <p>Fan de la série Friends depuis son enfance, Guillaume la regardait très souvent.
                                        A force de la voir, et parce qu’elle plait également énormément à Stéphanie,
                                        cette série est devenu leur série commune préférée à tous les deux.</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="iframe-wrapper">
                                    <iframe class="animate" data-animate="slideInRight" data-duration="0.5s"
                                            width="560" height="315" src="https://www.youtube.com/embed/HcOXgibVxSM"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <span class="year">2011</span>

                        <div class="even post">
                            <div class="date"><span>Septembre</span></div>
                            <div class="post-content animate" data-animate="slideInRight" data-duration="0.25s">
                                <div class="box">
                                    <h2>Première séparation</h2>
                                    <p>Stéphanie décide de monter à Paris pour continuer ses études. Guillaume resta
                                        dans le sud pour continuer les siennes à Marseille. Ainsi eu lieu environ un an
                                        de relation à distance. L’année d’après Guillaume décida de poursuivre ses
                                        études dans le Nord et rejoignit Stéphanie à Paris.</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="gallery animate" data-animate="slideInLeft" data-duration="0.25s">
                                    <?php
                                    echo addAlbum("premiere-separation", array(
                                        array(
                                            "image" => "story/premiere-separation/stef-emmenage.jpg",
                                            "caption" => "Stéphanie emménage"
                                        ),
                                        array(
                                            "image" => "story/premiere-separation/paris-2012.jpg",
                                            "caption" => "à Paris"
                                        ),
                                        array(
                                            "image" => "story/premiere-separation/guillaume-emmenage.jpg",
                                            "caption" => "Guillaume emménage"
                                        ),
                                        array(
                                            "image" => "story/premiere-separation/calanques-luminy.jpg",
                                            "caption" => "à Marseille"
                                        )
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <span class="year">2014</span>

                        <div class="odd post">
                            <div class="date">Octobre</div>
                            <div class="post-content animate" data-animate="slideInLeft" data-duration="0.25s">
                                <div class="box">
                                    <h2>Premier grand voyage</h2>
                                    <p>Premier voyage aussi loin pour tous les deux. Guillaume et Stéphanie s’envolèrent
                                        pour 3 semaines aux Etats-Unis. Le voyage débuta par New-York, puis Las Vegas,
                                        suivi d’un road-trip en voiture jusqu’à San Francisco en passant par Los
                                        Angeles, le Grand Canyon, la route 66, la Death Valley et bien d’autres. C’est à
                                        ce moment que germa une certaine idée de mariage dans l’esprit de Guillaume.</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="gallery animate" data-animate="slideInRight" data-duration="0.25s">
                                    <?php
                                    echo addAlbum("premier-grand-voyage", array(
                                        array(
                                            "image" => "story/premier-grand-voyage/new-york.JPG",
                                            "caption" => "A nous New York !"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/las-vegas.JPG",
                                            "caption" => "Arrivés à Las Vegas"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/grand-canyon.JPG",
                                            "caption" => "Petit vol en hélicoptère au dessus du Grand Canyon<br/> (Coup de coeur de Guillaume)"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/grand-canyon-helico.JPG",
                                            "caption" => "Et la vue depuis l'hélicoptère"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/route-66.JPG",
                                            "caption" => "Road trip via la route 66"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/plage-los-angeles.JPG",
                                            "caption" => "Coucher de soleil à Los Angeles"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/hollywood.JPG",
                                            "caption" => "Petite photo de couple<br/>avec le panneau Hollywood"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/warner-bros.JPG",
                                            "caption" => "Petit arrêt au studio de la Warner Bros"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/death-valley.JPG",
                                            "caption" => "Traversée de la Death Valley"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/sequoia-park.JPG",
                                            "caption" => "Un peu de fraîcheur au Sequoia National Park"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/yosemite.JPG",
                                            "caption" => "Suivi d'un côté un peu mystique à Yosemite"
                                        ),
                                        array(
                                            "image" => "story/premier-grand-voyage/san-francisco.JPG",
                                            "caption" => "Pour finir notre petit voyage reposant<br/>à San Francisco"
                                        )
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <span class="year">2015</span>

                        <div class="even post">
                            <div class="date"><span>14 décembre</span></div>
                            <div class="post-content animate" data-animate="slideInRight" data-duration="0.25s">
                                <div class="box">
                                    <h2>Première demande en mariage
                                        <span class="subtitle">(et dernière  <span
                                                    class="icon-happy-face"></span>)</span>
                                    </h2>
                                    <p>Guillaume fit sa demande en mariage à Stéphanie. Comme vous le savez maintenant,
                                        le mariage aura lieu le 16 septembre 2017 en Arles, là où tout a commencé.
                                        C’est avec grand plaisir que l’on espère vous compter parmi nos invités lors de
                                        cette journée si particulière.</p>
                                </div>
                            </div>
                            <div class="data">
                                <div class="gallery animate" data-animate="slideInLeft" data-duration="0.25s">
                                    <?php
                                    echo addAlbum("premiere-demande-mariage", array(
                                        array(
                                            "image" => "story/premiere-demande-mariage/restaurant.JPG",
                                            "caption" => "Restaurant de la fameuse soirée"
                                        ),
                                        array(
                                            "image" => "story/premiere-demande-mariage/restaurant-suite.jpg",
                                            "caption" => "Allez, on vous montre le dessert !"
                                        ),
                                        array(
                                            "image" => "story/premiere-demande-mariage/guillaume.JPG",
                                            "caption" => "Guillaume qui se demande comment faire cette demande en mariage !"
                                        ),
                                        array(
                                            "image" => "story/premiere-demande-mariage/appartement.JPG",
                                            "caption" => "Finalement la demande aura lieu dans notre appartement"
                                        ),
                                        array(
                                            "image" => "story/premiere-demande-mariage/camargue.jpg",
                                            "caption" => "Et le mariage dans le Parc Naturel Régional de Camargue"
                                        )
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
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
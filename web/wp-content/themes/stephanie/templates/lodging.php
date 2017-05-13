<?php
/**
 * Template Name: Hébergements
 */

function addGridItem($url, $cover, $name, $stars, $car_distance_minutes, $night_price, $map_itinerary, $address) {
    $rank = "";
    for ($i = 0; $i < $stars; $i++) {
        $rank .= "<span class=\"icon icon-star\"></span>";
    }

    return "<div class=\"grid-item\" data-price='$night_price' data-distance='$car_distance_minutes' data-rank='$stars'>
                <div class=\"image\"><a href=\"$url\" target=\"_blank\"><img
                                src=\"$cover\"/>
                        <div><span>Réserver</span></div>
                    </a></div>
                <a class=\"title\" href=\"$url\" target=\"_blank\">
                    <span>$name</span>
                    <br/>
                    <span class=\"rank\">$rank</span>
                </a>
                <div class=\"text\">
                    <ul class=\"info\">
                        <li><span class=\"icon icon-car\"></span>A $car_distance_minutes minutes du Mas des Thyms
                        </li>
                        <li><span class=\"icon icon-euro\"></span>A partir de $night_price la nuit (pour 2 adultes)</li>
                        <li><span class=\"icon icon-map-marker\"></span><a
                                    href=\"$map_itinerary\"
                                    target=\"_blank\">$address</a></li>
                    </ul>
                </div>
            </div>";
}

get_header();
if (!get_theme_mod('show_only_main_header')): ?>

    <div id="content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="entry-content-page">
                <?php the_content(); ?>

                <div class="button-group sort-by-button-group">
                    <button class="button is-checked" data-sort-value="price"><span class="icon icon-euro"></span></button>
                    <button class="button" data-sort-value="distance"><span class="icon icon-car"></span></button>
                    <button class="button" data-sort-value="rank"><span class="icon icon-star"></span></button>
                </div>

                <div class="grid">
                    <div class="gutter-sizer"></div>

                    <?php
                    echo addGridItem("http://www.hotel-julescesar.fr/fr/index.php",
                        "http://www.hotel-julescesar.fr/maj/images_resized/1317-so-accueil-2014-photo-anim-02-fr.jpg",
                        "Hôtel Jules César",
                        5,
                        "16",
                        "250€",
                        "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/H%C3%B4tel+Jules+C%C3%A9sar+Arles+MGallery+Collection*****,+9+Boulevard+des+Lices,+13200+Arles/@43.6439028,4.5687224,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6766ba4ae9c3d:0x1f022f6c442eaf43!2m2!1d4.6285725!2d43.6749523",
                        "9 Boulevard des Lices, 13200 Arles"
                    );

                    echo addGridItem("http://www.accorhotels.com/fr/hotel-0692-ibis-arles/index.shtml",
                        "http://www.ahstatic.com/photos/0692_ro_00_p_2048x1536.jpg",
                        "Hôtel ibis",
                        0,
                        "14",
                        "65€",
                        "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Hotel+ibis+Arles,+Centre+Commercial+Fourchon,+Rue+G%C3%A9rard+Gadiot,+13200+Arles/@43.6514348,4.590095,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6766543210209:0xf0d9d4f8684cec98!2m2!1d4.6333869!2d43.6661311",
                        "Rue Gerard Gadiot, centre commercial Fourchon, 13200 Arles"
                    );

                    echo addGridItem("http://www.accorhotels.com/fr/hotel-5036-ibis-budget-arles-sud-fourchon/index.shtml",
                        "https://s-ec.bstatic.com/images/hotel/max1024x768/801/80156072.jpg",
                        "Hôtel ibis budget",
                        0,
                        "14",
                        "40€",
                        "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Hotel+IBIS+Budget+Arles+Sud+Fourchon,+Zone+commerciale+Fourchon,+Rue+Charlie+Chaplin,+13200+Arles/@43.6514348,4.590095,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b67664c046a443:0xf1ed0d4e6a5b755b!2m2!1d4.6334179!2d43.6661716",
                        "Rue Charlie Chaplin, Zone commerciale Fourchon, 13200 Arles"
                    );

                    echo addGridItem("http://www.campanile-arles.fr/fr",
                        "https://hotelarles.net/system/images/000/017/190/12489601-big.jpg?1469542267",
                        "Hôtel Campanile",
                        3,
                        "13",
                        "60€",
                        "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/H%C3%B4tel+Restaurant+Campanile+Arles,+ZAD+de+Fourchon,+Rue+Charlie+Chaplin,+13200+Arles/@43.6514348,4.5889185,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b67664d6957e2b:0xe4bd639cf187884f!2m2!1d4.633945!2d43.665479",
                        "Rue Charlie Chaplin, Zone commerciale Fourchon, 13200 Arles"
                    );

                    echo addGridItem("http://www.maspetitprince.com/index.php",
                        "http://www.vacationkey.com/photos/2/9/2946-1.jpg",
                        "Mas Petit Prince",
                        0,
                        "5",
                        "130€",
                        "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+Petit+Prince,+Parc+Naturel+R%C3%A9gional+de+Camargue,+Route+de+Bouchaud+%C3%80+Gageron,+13200+Arles/@43.6199689,4.5841753,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b671265ecae46d:0xb78c43c36563cc17!2m2!1d4.5951954!2d43.6142678",
                        "Mas Petit Prince, Route de Bouchaud À Gageron, 13200 Arles"
                    );

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
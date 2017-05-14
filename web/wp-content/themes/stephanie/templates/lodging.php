<?php
/**
 * Template Name: Hébergements
 */

function addGridItem($params) {
    $url = $params['url'];
    $cover = $params['cover'];
    $name = $params['name'];

    if ($params["more"]) {
        $car_distance_minutes = 100000;
        $night_price = 100000;
        $stars = -1;

        $result = "<div class=\"grid-item large more\" data-price='$night_price' data-distance='$car_distance_minutes' data-rank='$stars'>
                <div class=\"more-title\">Pour plus d'hébergements</div>
                <div class=\"image\"><a href=\"$url\" target=\"_blank\"><img
                                src=\"$cover\"/>
                        <div><span>Voir</span></div>
                    </a></div>
                <a class=\"title\" href=\"$url\" target=\"_blank\">
                    <span>$name</span>
                </a>
            </div>";
    } else {
        $car_distance_minutes = $params['car_distance_minutes'];
        $night_price = $params['night_price'];
        $map_itinerary = $params['map_itinerary'];
        $address = $params['address'];
        $rank = $params['stars'];

        $stars = "";
        for ($i = 0; $i < $params['stars']; $i++) {
            $stars .= "<span class=\"icon icon-star\"></span>";
        }

        $result = "<div class=\"grid-item\" data-price='$night_price' data-distance='$car_distance_minutes' data-rank='$rank'>
                <div class=\"image\"><a href=\"$url\" target=\"_blank\"><img
                                src=\"$cover\"/>
                        <div><span>Réserver</span></div>
                    </a></div>
                <a class=\"title\" href=\"$url\" target=\"_blank\">
                    <span>$name</span>
                    <br/>
                    <span class=\"rank\">$stars</span>
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

    return $result;
}

get_header();
if (!get_theme_mod('show_only_main_header')): ?>

    <div id="content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="entry-content-page">
                <?php the_content(); ?>

                <div class="sort">
                    <span class="sort-title">Trier par</span>
                    <div class="button-group sort-by-button-group">
                        <div class="category">
                            <button class="button" data-sort-value="price" data-sort-ascending="true">
                                <span class="icon icon-euro"></span>
                            </button>
                            <span class="subtitle">Prix</span>
                        </div>
                        <div class="category">
                            <button class="button" data-sort-value="distance" data-sort-ascending="true">
                                <span class="icon icon-car"></span>
                            </button>
                            <span class="subtitle">Distance</span>
                        </div>
                        <div class="category">
                            <button class="button" data-sort-value="rank" data-sort-ascending="false">
                                <span class="icon icon-star"></span>
                            </button>
                            <span class="subtitle">Classification</span>
                        </div>
                    </div>
                </div>

                <div class="grid">
                    <div class="gutter-sizer"></div>

                    <?php

                    echo addGridItem(array(
                        "url" => "http://www.hotel-julescesar.fr/fr/index.php",
                        "cover" => "http://www.hotel-julescesar.fr/maj/images_resized/1317-so-accueil-2014-photo-anim-02-fr.jpg",
                        "name" => "Hôtel Jules César",
                        "stars" => 5,
                        "car_distance_minutes" => "16",
                        "night_price" => "250€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/H%C3%B4tel+Jules+C%C3%A9sar+Arles+MGallery+Collection*****,+9+Boulevard+des+Lices,+13200+Arles/@43.6439028,4.5687224,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6766ba4ae9c3d:0x1f022f6c442eaf43!2m2!1d4.6285725!2d43.6749523",
                        "address" => "9 Boulevard des Lices, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-0692-ibis-arles/index.shtml",
                        "cover" => "http://www.ahstatic.com/photos/0692_ro_00_p_2048x1536.jpg",
                        "name" => "Hôtel ibis - Arles",
                        "stars" => 0,
                        "car_distance_minutes" => "14",
                        "night_price" => "65€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Hotel+ibis+Arles,+Centre+Commercial+Fourchon,+Rue+G%C3%A9rard+Gadiot,+13200+Arles/@43.6514348,4.590095,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6766543210209:0xf0d9d4f8684cec98!2m2!1d4.6333869!2d43.6661311",
                        "address" => "Rue Gerard Gadiot, Centre commercial Fourchon, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-5036-ibis-budget-arles-sud-fourchon/index.shtml",
                        "cover" => "https://s-ec.bstatic.com/images/hotel/max1024x768/801/80156072.jpg",
                        "name" => "Hôtel ibis budget - Arles Sud Fourchon",
                        "stars" => 0,
                        "car_distance_minutes" => "14",
                        "night_price" => "40€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Hotel+IBIS+Budget+Arles+Sud+Fourchon,+Zone+commerciale+Fourchon,+Rue+Charlie+Chaplin,+13200+Arles/@43.6514348,4.590095,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b67664c046a443:0xf1ed0d4e6a5b755b!2m2!1d4.6334179!2d43.6661716",
                        "address" => "Rue Charlie Chaplin, Zone commerciale Fourchon, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.campanile-arles.fr/fr",
                        "cover" => "https://hotelarles.net/system/images/000/017/190/12489601-big.jpg?1469542267",
                        "name" => "Hôtel Campanile",
                        "stars" => 3,
                        "car_distance_minutes" => "13",
                        "night_price" => "60€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/H%C3%B4tel+Restaurant+Campanile+Arles,+ZAD+de+Fourchon,+Rue+Charlie+Chaplin,+13200+Arles/@43.6514348,4.5889185,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b67664d6957e2b:0xe4bd639cf187884f!2m2!1d4.633945!2d43.665479",
                        "address" => "Rue Charlie Chaplin, Zone commerciale Fourchon, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.maspetitprince.com/index.php",
                        "cover" => "http://www.vacationkey.com/photos/2/9/2946-1.jpg",
                        "name" => "Mas Petit Prince",
                        "stars" => 0,
                        "car_distance_minutes" => "5",
                        "night_price" => "130€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+Petit+Prince,+Parc+Naturel+R%C3%A9gional+de+Camargue,+Route+de+Bouchaud+%C3%80+Gageron,+13200+Arles/@43.6199689,4.5841753,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b671265ecae46d:0xb78c43c36563cc17!2m2!1d4.5951954!2d43.6142678",
                        "address" => "Mas Petit Prince, Route de Bouchaud à Gageron, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-3580-ibis-budget-arles-palais-des-congres/index.shtml",
                        "cover" => "http://www.ahstatic.com/photos/3580_ro_01_p_2048x1536.jpg",
                        "name" => "Hôtel ibis budget - Arles Palais des Congrès",
                        "stars" => 2,
                        "car_distance_minutes" => "14",
                        "night_price" => "57€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Avenue+1%C3%A8re+Div+Fran%C3%A7ais+libre,+13200+Arles/@43.6588867,4.5851148,14z/data=!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6764461c32eb3:0xb5cd42160dd7b26!2m2!1d4.618291!2d43.6714922",
                        "address" => "Avenue de la 1ère division Française libre, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-2738-ibis-styles-arles-palais-des-congres/index.shtml",
                        "cover" => "http://www.ahstatic.com/photos/2738_ho_01_p_2048x1536.jpg",
                        "name" => "Hôtel ibis Styles - Arles Palais des Congrès",
                        "stars" => 3,
                        "car_distance_minutes" => "14",
                        "night_price" => "86€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Avenue+1%C3%A8re+Div+Fran%C3%A7ais+libre,+13200+Arles/@43.6514348,4.5821965,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6764461c32eb3:0xb5cd42160dd7b26!2m2!1d4.618291!2d43.6714922",
                        "address" => "Avenue de la 1ère division Française libre, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.mas-eymard.com/",
                        "cover" => "http://static.wixstatic.com/media/983f2d_973651c133ad4eb3be5ec1baba8880e5~mv2_d_2048_1365_s_2.jpg",
                        "name" => "Mas d'Eymard",
                        "stars" => 0,
                        "car_distance_minutes" => "17",
                        "night_price" => "125€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/122+Route+de+Servannes,+13200+Arles/@43.6514348,4.6054397,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b675b56d8353bd:0xc2e8fa8878c3dccb!2m2!1d4.6669874!2d43.6592655",
                        "address" => "122 Route de Servannes, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.hoteldespontsdarles.com/",
                        "cover" => "http://www.samm-honfleur.com/gallery/20160811202255(1).jpg",
                        "name" => "Hôtel le Mas des ponts d'Arles",
                        "stars" => 3,
                        "car_distance_minutes" => "12",
                        "night_price" => "67€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/10+Avenue+des+Pr%C3%A9s+d'Arlac,+30300+Fourques/@43.657525,4.5584069,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6762d0b136321:0xda541b238d3dd352!2m2!1d4.6065865!2d43.6901328",
                        "address" => "10, avenue des Prés d'Arlac, 30300 Fourques"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.masdulion.fr/",
                        "cover" => "http://www.masdulion.fr/images/roulotte/photo-2.jpg",
                        "name" => "Mas du Lion",
                        "stars" => 0,
                        "car_distance_minutes" => "20",
                        "night_price" => "80€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+du+Lion,+213+Route+de+Coste+Basse,+Mas+du+lion,+13200+Arles/@43.6522451,4.5934559,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6759990c9d069:0xe60923d0b42d90a4!2m2!1d4.677999!2d43.680006",
                        "address" => "213 Route de Coste Basse, Mas du lion, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.mas-galegiere.com/fr/",
                        "cover" => "http://www.mas-galegiere.com/fr/assets/images/photos/2014/ch2_2014.jpg",
                        "name" => "Mas de la Galégière",
                        "stars" => 4,
                        "car_distance_minutes" => "23",
                        "night_price" => "230€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+de+La+Galegi%C3%A8re,+Voie+communale+19,+Chemin+de+Galegi%C3%A8re,+13200+Arles/@43.6583283,4.5866542,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b675f301879755:0x2e59ad91118bb05a!2m2!1d4.664436!2d43.688795",
                        "address" => "Mas de la Galégière, Chemin de la Galégière, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "https://www.book-secure.com/index.php?s=results&property=frarl12150&arrival=2017-09-16&departure=2017-09-17&adults1=2&children1=0&rooms=1&locale=fr_FR&currency=EUR&stid=awh6sq25u&showPromotions=1&langue=france&Clusternames=NEWHOTELARLCamargue&cluster=NEWHOTELARLCamargue&Hotelnames=NEWHOTELARLCamargue&hname=NEWHOTELARLCamargue&arrivalDateValue=2017-09-16&frommonth=9&fromday=16&fromyear=2017&nbdays=1&nbNightsValue=1&adulteresa=2&nbAdultsValue=2&redir=BIZ-so5523q0o4&rt=1494756219",
                        "cover" => "https://d3ehecxdotm942.cloudfront.net/61ccb696986954abbe14bce266a373a7/70/af/70af5e14b6cdaae251ab701b339c1a77-w704-scale.jpg",
                        "name" => "Hôtel Arles Plaza",
                        "stars" => 3,
                        "car_distance_minutes" => "14",
                        "night_price" => "67€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/45+Avenue+Sadi+Carnot,+13200+Arles/@43.6588867,4.5851148,14z/data=!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b676426e0b6d2d:0xabddd0dba6368842!2m2!1d4.6236996!2d43.6718576",
                        "address" => "45 Avenue Sadi Carnot, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.arlestourisme.com/fr/hotels-a-arles.html",
                        "cover" => "http://www.arlestourisme.com/assets/components/phpthumbof/cache/acceuil12.2cf8d9651517e68f92de41b487f898791.jpg",
                        "name" => "Hôtels de l'office de tourisme d'Arles",
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
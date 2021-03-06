<?php
/**
 * Template Name: Hébergements
 */

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
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/jules-cesar.jpg",
                        "name" => "Hôtel Jules César",
                        "stars" => 5,
                        "car_distance_minutes" => "16",
                        "night_price" => "250€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/H%C3%B4tel+Jules+C%C3%A9sar+Arles+MGallery+Collection*****,+9+Boulevard+des+Lices,+13200+Arles/@43.6439028,4.5687224,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6766ba4ae9c3d:0x1f022f6c442eaf43!2m2!1d4.6285725!2d43.6749523",
                        "address" => "9 Boulevard des Lices, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-0692-ibis-arles/index.shtml",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/ibis.jpg",
                        "name" => "Hôtel ibis - Arles",
                        "stars" => 0,
                        "car_distance_minutes" => "14",
                        "night_price" => "65€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Hotel+ibis+Arles,+Centre+Commercial+Fourchon,+Rue+G%C3%A9rard+Gadiot,+13200+Arles/@43.6514348,4.590095,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6766543210209:0xf0d9d4f8684cec98!2m2!1d4.6333869!2d43.6661311",
                        "address" => "Rue Gerard Gadiot, Centre commercial Fourchon, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-5036-ibis-budget-arles-sud-fourchon/index.shtml",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/ibis-budget.jpg",
                        "name" => "Hôtel ibis budget - Arles Sud Fourchon",
                        "stars" => 0,
                        "car_distance_minutes" => "14",
                        "night_price" => "40€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Hotel+IBIS+Budget+Arles+Sud+Fourchon,+Zone+commerciale+Fourchon,+Rue+Charlie+Chaplin,+13200+Arles/@43.6514348,4.590095,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b67664c046a443:0xf1ed0d4e6a5b755b!2m2!1d4.6334179!2d43.6661716",
                        "address" => "Rue Charlie Chaplin, Zone commerciale Fourchon, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.campanile-arles.fr/fr",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/campanile.jpg",
                        "name" => "Hôtel Campanile",
                        "stars" => 3,
                        "car_distance_minutes" => "13",
                        "night_price" => "60€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/H%C3%B4tel+Restaurant+Campanile+Arles,+ZAD+de+Fourchon,+Rue+Charlie+Chaplin,+13200+Arles/@43.6514348,4.5889185,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b67664d6957e2b:0xe4bd639cf187884f!2m2!1d4.633945!2d43.665479",
                        "address" => "Rue Charlie Chaplin, Zone commerciale Fourchon, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.maspetitprince.com/index.php",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/mas-petit-prince.jpg",
                        "name" => "Mas Petit Prince",
                        "stars" => 0,
                        "car_distance_minutes" => "5",
                        "night_price" => "130€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+Petit+Prince,+Parc+Naturel+R%C3%A9gional+de+Camargue,+Route+de+Bouchaud+%C3%80+Gageron,+13200+Arles/@43.6199689,4.5841753,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b671265ecae46d:0xb78c43c36563cc17!2m2!1d4.5951954!2d43.6142678",
                        "address" => "Mas Petit Prince, Route de Bouchaud à Gageron, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-3580-ibis-budget-arles-palais-des-congres/index.shtml",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/ibis-budget-congres.jpg",
                        "name" => "Hôtel ibis budget - Arles Palais des Congrès",
                        "stars" => 2,
                        "car_distance_minutes" => "14",
                        "night_price" => "57€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Avenue+1%C3%A8re+Div+Fran%C3%A7ais+libre,+13200+Arles/@43.6588867,4.5851148,14z/data=!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6764461c32eb3:0xb5cd42160dd7b26!2m2!1d4.618291!2d43.6714922",
                        "address" => "Avenue de la 1ère division Française libre, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.accorhotels.com/fr/hotel-2738-ibis-styles-arles-palais-des-congres/index.shtml",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/ibis-styles.jpg",
                        "name" => "Hôtel ibis Styles - Arles Palais des Congrès",
                        "stars" => 3,
                        "car_distance_minutes" => "14",
                        "night_price" => "86€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Avenue+1%C3%A8re+Div+Fran%C3%A7ais+libre,+13200+Arles/@43.6514348,4.5821965,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6764461c32eb3:0xb5cd42160dd7b26!2m2!1d4.618291!2d43.6714922",
                        "address" => "Avenue de la 1ère division Française libre, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.mas-eymard.com/",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/mas-eymard.jpg",
                        "name" => "Mas d'Eymard",
                        "stars" => 0,
                        "car_distance_minutes" => "17",
                        "night_price" => "125€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/122+Route+de+Servannes,+13200+Arles/@43.6514348,4.6054397,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b675b56d8353bd:0xc2e8fa8878c3dccb!2m2!1d4.6669874!2d43.6592655",
                        "address" => "122 Route de Servannes, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.hoteldespontsdarles.com/",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/hotel-mas-des-ponts.jpg",
                        "name" => "Hôtel le Mas des ponts d'Arles",
                        "stars" => 3,
                        "car_distance_minutes" => "12",
                        "night_price" => "67€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/10+Avenue+des+Pr%C3%A9s+d'Arlac,+30300+Fourques/@43.657525,4.5584069,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6762d0b136321:0xda541b238d3dd352!2m2!1d4.6065865!2d43.6901328",
                        "address" => "10, avenue des Prés d'Arlac, 30300 Fourques"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.masdulion.fr/",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/mas-du-lion.jpg",
                        "name" => "Mas du Lion",
                        "stars" => 0,
                        "car_distance_minutes" => "20",
                        "night_price" => "80€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+du+Lion,+213+Route+de+Coste+Basse,+Mas+du+lion,+13200+Arles/@43.6522451,4.5934559,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6759990c9d069:0xe60923d0b42d90a4!2m2!1d4.677999!2d43.680006",
                        "address" => "213 Route de Coste Basse, Mas du lion, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.mas-galegiere.com/fr/",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/mas-galegiere.jpg",
                        "name" => "Mas de la Galégière",
                        "stars" => 4,
                        "car_distance_minutes" => "23",
                        "night_price" => "230€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+de+La+Galegi%C3%A8re,+Voie+communale+19,+Chemin+de+Galegi%C3%A8re,+13200+Arles/@43.6583283,4.5866542,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b675f301879755:0x2e59ad91118bb05a!2m2!1d4.664436!2d43.688795",
                        "address" => "Mas de la Galégière, Chemin de la Galégière, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "https://www.book-secure.com/index.php?s=results&property=frarl12150&arrival=2017-09-16&departure=2017-09-17&adults1=2&children1=0&rooms=1&locale=fr_FR&currency=EUR&stid=awh6sq25u&showPromotions=1&langue=france&Clusternames=NEWHOTELARLCamargue&cluster=NEWHOTELARLCamargue&Hotelnames=NEWHOTELARLCamargue&hname=NEWHOTELARLCamargue&arrivalDateValue=2017-09-16&frommonth=9&fromday=16&fromyear=2017&nbdays=1&nbNightsValue=1&adulteresa=2&nbAdultsValue=2&redir=BIZ-so5523q0o4&rt=1494756219",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/arles-plaza.jpg",
                        "name" => "Hôtel Arles Plaza",
                        "stars" => 3,
                        "car_distance_minutes" => "14",
                        "night_price" => "67€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/45+Avenue+Sadi+Carnot,+13200+Arles/@43.6588867,4.5851148,14z/data=!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b676426e0b6d2d:0xabddd0dba6368842!2m2!1d4.6236996!2d43.6718576",
                        "address" => "45 Avenue Sadi Carnot, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "https://www.aubergedesplaines.com/",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/auberge-plaines.jpg",
                        "name" => "Auberge des Plaines",
                        "stars" => 0,
                        "car_distance_minutes" => "7",
                        "night_price" => "32€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/45+Avenue+Sadi+Carnot,+13200+Arles/@43.6588867,4.5851148,14z/data=!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b676426e0b6d2d:0xabddd0dba6368842!2m2!1d4.6236996!2d43.6718576",
                        "address" => "Auberge des Plaines, 11 chemin du Mas d'Agon, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.mas-des-rizieres.com/",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/mas-rizieres.jpg",
                        "name" => "Mas des Rizières",
                        "stars" => 0,
                        "car_distance_minutes" => "12",
                        "night_price" => "90€",
                        "map_itinerary" => "https://www.google.fr/maps/dir/Mas+des+Thyms,+Chemin+de+Montredon,+Arles/Mas+des+Rizi%C3%A8res,+Parc+Naturel+R%C3%A9gional+de+Camargue,+Chemin+de+Romieu,+13200+Arles/@43.6237164,4.5897605,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x12b6774a604b02f9:0x5834e77f6e4e90c4!2m2!1d4.5819099!2d43.6251539!1m5!1m1!1s0x12b6715b47580efd:0xe862c340ca2173e0!2m2!1d4.635629!2d43.607307",
                        "address" => "Mas des Rizières, Chemin de Romieu, 13200 Arles"
                    ));

                    echo addGridItem(array(
                        "url" => "http://www.arlestourisme.com/fr/hotels-a-arles.html",
                        "cover" => STEPHANIE_IMAGES_PATH . "lodging/arles-ville.jpg",
                        "name" => "Hôtels listés par l'office de tourisme d'Arles",
                        "more" => "Pour plus d'hébergements"
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
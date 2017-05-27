(function ($) {
    "use strict";

    // Init viewport-units-buggyfill
    window.viewportUnitsBuggyfill.init();

    $(window).load(function () {
        window.viewportUnitsBuggyfill.refresh();

        // Hide the loader
        jQuery('#site-loader').fadeOut();

        // Wait 2 seconds to show the countdown
        setTimeout(function () {
            $('.js-countdown_wedding_day').fadeTo("slow", 1);
        }, 1000);

        // Keep navbar to the top
        var $navbar = $("#navbar");

        // Only if navbar exists
        if ($navbar.length === 1) {
            var yPos = $navbar.offset().top,
                height = $navbar.height();

            $('.js-navbar-container').css({'min-height': height});

            $(document).scroll(function () {
                var scrollTop = $(this).scrollTop();

                if (scrollTop > yPos) {
                    $navbar.css({"position": "fixed", "top": 0});
                } else if (scrollTop <= yPos) {
                    $navbar.css({"position": "absolute", "top": 0});
                }
            });

            // Scroll on click
            $('a.js-scroll-to-href').each(function () {
                $(this).click(function (event) {
                    var $target = $($.attr(this, 'href'));
                    if ($target.length === 1) {
                        event.preventDefault();
                        console.log($target.offset().top);

                        $('html, body').animate({
                            scrollTop: $target.offset().top
                        }, 500);
                    }
                });
            });
        }
    });

    $(document).ready(function () {
        window.viewportUnitsBuggyfill.refresh();

        $('.animate').scrolla({
            mobile: false,
            once: true
        });

        // Wedding countdown
        var $weddingCountdown = $('.js-countdown_wedding_day');
        $weddingCountdown.fadeTo(0, 0);
        $weddingCountdown.simplyCountdown({
            year: countdown_date.year || 2017,
            month: countdown_date.month || 9,
            day: countdown_date.day || 16,
            hours: countdown_date.hours || 16,
            words: { //words displayed into the countdown
                days: 'jour',
                hours: 'heure',
                minutes: 'minute',
                seconds: 'seconde',
                pluralLetter: 's'
            }
        });

        // Sakura effect
        var $sakura = $('.js-sakura');

        $sakura.sakura('start', {
            maxSize: 10, // Maximum petal size
            minSize: 5 // Minimum petal size
        });

        // RSVP
        var $firstNameLabel = $('label[for="firstName"]'),
            $lastNameLabel = $('label[for="lastName"]');

        // "Prenom:" => "Prenom"
        if ($firstNameLabel) {
            $firstNameLabel.text(function (_, txt) {
                return txt.slice(0, -1);
            });
        }

        // "Nom de famille:" => "Nom de famille"
        if ($lastNameLabel) {
            $lastNameLabel.text(function (_, txt) {
                return txt.slice(0, -1);
            });
        }

        $('form:not(#rsvpForm) input[value="RSVP"]').each(function () {
            $(this).val("Je suis cette personne !");
        });
        $('form#rsvpForm input[value="RSVP"]').each(function () {
            $(this).val("Valider ma réponse !");
        });

        /* // BUG AVEC LE BOUTON "Valider ma réponse !" (peut être d'autres)
         $('#rsvpPlugin p.rsvpParagraph').each(function () {
         $(this).text(function (index, value) {
         return value.replace('!', ' !');
         });
         });*/

        // Wedding list
        $('.buy-button').each(function () {
            if ($(this).hasClass('unavailable')) {
                $(this).text("Déjà acheté");
            } else {
                $(this).text("Acheter");
            }
        });

        // Hébergements
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            percentPosition: true,
            fitRows: {
                gutter: '.gutter-sizer'
            },
            getSortData: {
                price: '[data-price] parseInt',
                distance: '[data-distance] parseInt',
                rank: '[data-rank] parseInt'
            }
        });

        // bind sort button click
        $('.sort-by-button-group').on('click', 'button', function () {
            var sortValue = $(this).attr('data-sort-value');
            var sortAscending = $(this).attr('data-sort-ascending') === 'true';
            $grid.isotope({sortBy: sortValue, sortAscending: sortAscending});
        });

        // change is-checked class on buttons
        $('.button-group').each(function (i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function () {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });

        // Default sort
        $('.sort-by-button-group').find('[data-sort-value="distance"]').click();

        $grid.imagesLoaded().progress(function () {
            $grid.isotope('layout');
        });

        $('.grid-item > .image').each(function () {
            $(this).hoverdir();
        });

        // Our story
        $('.album').slick({
            //dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            centerMode: false,
            adaptiveHeight: true,
            variableWidth: true
        });

        $("[data-fancybox]").fancybox({
            // Options will go here
        });
    });
})(jQuery);


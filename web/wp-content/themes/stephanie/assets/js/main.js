(function ($) {
    "use strict";

    $(window).load(function () {
        // Hide the loader
        jQuery('#site-loader').fadeOut();

        // Wait 2 seconds to show the countdown
        setTimeout(function () {
            $('.js-countdown_wedding_day').fadeTo("slow", 1);
        }, 1000);
    });

    $(document).ready(function () {
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
    });
})(jQuery);


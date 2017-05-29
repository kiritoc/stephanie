(function ($) {
    "use strict";

    // Init viewport-units-buggyfill
    window.viewportUnitsBuggyfill.init();

    function removeAnchor() {
        if ("pushState" in history) {
            history.pushState("", document.title, window.location.pathname + window.location.search);
        }
    }

    function loadYoutubeThumbnail() {
        var youtube = document.querySelectorAll(".youtube");

        for (var i = 0; i < youtube.length; i++) {
            var source = "http://img.youtube.com/vi/" + youtube[i].dataset.embed + "/0.jpg";
            var image = new Image();
            image.src = source;
            image.addEventListener("load", function () {
                youtube[i].appendChild(image);
            }(i));

            youtube[i].addEventListener("click", function (e) {
                var iframe = document.createElement("iframe");

                iframe.setAttribute("width", e.target.width);
                iframe.setAttribute("height", e.target.height);
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("allowfullscreen", "");
                iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1&controls=2");

                this.innerHTML = "";
                this.appendChild(iframe);
            });
        }
    }

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

                        $('html, body').animate({
                            scrollTop: $target.offset().top
                        }, 500);
                        removeAnchor();
                    }
                });
            });
        }

        removeAnchor();
    });

    $(document).ready(function () {
        window.viewportUnitsBuggyfill.refresh();

        loadYoutubeThumbnail();

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

        // Disable / Enable locations
        if (!$('#mainRsvpY').is(':checked')) {
            $('#mainRsvpY').parent().next().next('.rsvpCustomQuestions').addClass('disabled');
        }
        $('#mainRsvpY').click(function () {
            $(this).parent().next().next('.rsvpCustomQuestions').removeClass('disabled');
        });
        $('#mainRsvpN').click(function () {
            $(this).parent().next('.rsvpCustomQuestions').addClass('disabled');
        });
        $('.rsvpAdditionalAttendeeQuestions').each(function () {
            var $locations = $(this).find('.rsvpCustomQuestions');

            $(this).find('input').each(function () {
                if (this.value === "Y" && !$(this).is(':checked')) {
                    $locations.addClass('disabled');
                }

                $(this).click(function () {
                    if (this.value === "Y") {
                        $locations.removeClass('disabled');
                    } else if (this.value === "N") {
                        $locations.addClass('disabled');
                    }
                });
            });
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


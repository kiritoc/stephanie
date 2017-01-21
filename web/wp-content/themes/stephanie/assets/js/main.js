(function ($) {
    "use strict";

    $(window).load(function () {
        // Wait 2 seconds to show the loader
        setTimeout(function () {
            // Hide the loader
            jQuery('#site-loader').fadeOut();
        }, 2000);
    });

    $(document).ready(function () {
        // Wedding countdown
        $('.js-countdown_wedding_day').simplyCountdown({
            year: countdown_date.year,
            month: countdown_date.month,
            day: countdown_date.day,
            words: { //words displayed into the countdown
                days: 'jour',
                hours: 'heure',
                minutes: 'minute',
                seconds: 'seconde',
                pluralLetter: 's'
            }
        });

        // Keep navbar to the top
        var $navbar = $("#navbar"),
            y_pos = $navbar.offset().top,
            height = $navbar.height();

        $('.js-navbar-container').css({'height': height});

        $(document).scroll(function () {
            var scrollTop = $(this).scrollTop();

            if (scrollTop > y_pos) {
                $navbar.css({"position": "fixed", "top": 0});
            } else if (scrollTop <= y_pos) {
                $navbar.css({"position": "initial", "top": -height});
            }
        });

        // Scroll on click
        $('a.js-scroll-to-href').each(function () {
            $(this).click(function (event) {
                var $target = $($.attr(this, 'href'));
                if ($target.length == 1) {
                    event.preventDefault();

                    $('html, body').animate({
                        scrollTop: $($.attr(this, 'href')).offset().top
                    }, 500);
                }
            });
        });

        $('#stephanie-header').sakura({
            maxSize: 10, // Maximum petal size
            minSize: 5 // Minimum petal size
        });
    });
})(jQuery);


jQuery(window).load(function () {
    // Wait 2 seconds to show the loader
    setTimeout(function() {
        // Hide the loader
        jQuery('#site-loader').fadeOut();
    }, 2000);

});

/**
 * Custom Script
 */
jQuery(document).ready(function () {
    // Countdown
    jQuery('.js-countdown_wedding_day').simplyCountdown({
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
});


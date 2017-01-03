<?php
/**
 * Stephanie functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stephanie
 */

/*--------------------------------------------------------------
# Constants
--------------------------------------------------------------*/
DEFINE('STEPHANIE_CSS_PATH', get_template_directory_uri() . '/assets/css/');
//DEFINE('STEPHANIE_FONTS_PATH', get_template_directory_uri() . '/assets/fonts/');
DEFINE('STEPHANIE_IMAGES_PATH', get_template_directory_uri() . '/assets/images/');
DEFINE('STEPHANIE_JS_PATH', get_template_directory_uri() . '/assets/js/');

setlocale(LC_ALL, get_locale());

/*--------------------------------------------------------------
# Methods
--------------------------------------------------------------*/
if (!function_exists('stephanie_setup')):
    function stephanie_setup() {
        add_theme_support('automatic-feed-links');
        load_theme_textdomain('stephanie', get_template_directory() . '/languages');
        add_theme_support('html5', array('gallery', 'caption'));

        global $wp_version;
        if (version_compare($wp_version, '4.1', '>=')):
            add_theme_support('title-tag');
        endif;

        register_nav_menus(array(
            'main' => __('Main Navigation', 'stephanie'),
        ));

        $stephanie_bg_defaults = array(
            'default-color' => '#ffffff',
            'default-image' => ''
        );
        add_theme_support('custom-background', $stephanie_bg_defaults);

        $stephanie_header_defaults = array(
            'default-image' => '',
            'random-default' => false,
            'width' => '1920',
            'height' => '820',
            'flex-height' => false,
            'flex-width' => false,
            'default-text-color' => '',
            'header-text' => false,
            'uploads' => true,
            'wp-head-callback' => '',
            'admin-head-callback' => '',
            'admin-preview-callback' => '',
        );

        add_theme_support('custom-header', $stephanie_header_defaults);

        add_theme_support('post-thumbnails', array('post', 'page'));
        add_image_size('wedding-slider-image', 1920, 850, true); // slider image size.
        add_image_size('wedding-smaller-slider-image', 1300, 650, true); // slider image size.
        add_image_size('wedding-boxed-9', 847, 385, true); // slider image size.
        add_image_size('wedding-boxed-12', 1170, 550, true); // Single post type image (boxed 3/4 layout)
        add_image_size('wedding-fullwidth', 1920, 700, true); // Single post type image (fulwidth)
        add_image_size('wedding-blog-section-image', 380, 380, true);

    }
endif;

/**
 * Enqueue scripts and styles.
 */
function stephanie_scripts_styles() {
    // Enqueue Bootstrap
    wp_enqueue_style('bootstrap', STEPHANIE_CSS_PATH . 'bootstrap.min.css', array(), '3.3.7', '');

    // Enqueue FontAwesome
    //wp_enqueue_style('font-awesome', STEPHANIE_CSS_PATH . 'font-awesome.min.css', array(), '4.4.0', '');

    // Enqueue Stylesheets
    wp_enqueue_style('stephanie-style', STEPHANIE_CSS_PATH . 'stephanie.css');

    // Enqueue Countdown
    wp_enqueue_script('simplyCountdown', STEPHANIE_JS_PATH . 'simplyCountdown.min.js', array('jquery'), '', '');

    // Enqueue javascript
    wp_enqueue_script('stephanie-scripts', STEPHANIE_JS_PATH . 'main.js', array('jquery'), '', true);

    // Init Countdown values
    $wedding_date = strtotime(esc_attr(get_theme_mod('wedding_date')));
    wp_localize_script('stephanie-scripts', 'countdown_date', array(
        'year' => date("Y", $wedding_date),
        'month' => date("n", $wedding_date),
        'day' => date("j", $wedding_date)
    ));
    wp_enqueue_script('stephanie-scripts');
}

/**
 * Stephanie theme customizer
 */
function stephanie_customizer($wp_customize) {
    // Date Picker
    class Stephanie_DateControl extends WP_Customize_Control {
        function render_content() {
            ?>
            <label>
                <span><?php echo esc_html($this->label); ?></span>
                <input type="date" <?php $this->link(); ?> value="<?php echo esc_attr($this->value()); ?>">
            </label>
            <?php
        }
    }

    // Wedding date section
    $wp_customize->add_section('wedding_date_section', array(
        'title' => __('Date du mariage', 'stephanie'),
        'description' => __('Date du mariage et compte à rebours', 'stephanie'),
        'priority' => 20
    ));

    // Date picker
    $wp_customize->add_setting('wedding_date', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new Stephanie_DateControl($wp_customize, 'wedding_date_setting', array(
        'label' => __('Choix de la date', 'stephanie'),
        'section' => 'wedding_date_section',
        'settings' => 'wedding_date',
        'type' => 'text'
    )));

    // Place
    $wp_customize->add_setting('wedding_place', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wedding_place_setting', array(
        'label' => __('Localisation', 'stephanie'),
        'section' => 'wedding_date_section',
        'settings' => 'wedding_place',
        'type' => 'text'
    )));

    // Countdown
    $wp_customize->add_setting('wedding_countdown_is_activated', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wedding_countdown_is_activated_setting', array(
        'label' => __('Afficher le compte à rebours', 'stephanie'),
        'section' => 'wedding_date_section',
        'settings' => 'wedding_countdown_is_activated',
        'type' => 'checkbox'
    )));
}

if (!function_exists('stephanie_get_header_image')):
    function stephanie_get_header_image() {
        if (get_header_image() != ''):
            return '<img class="img-responsive" src="' . get_header_image() . '" height="' . get_custom_header()->height . '" width="' . get_custom_header()->width . '" alt=""/>';
        else:
            return false;
        endif;
    }

    ;
endif;

/*--------------------------------------------------------------
# Init calls
--------------------------------------------------------------*/
add_action('after_setup_theme', 'stephanie_setup');
add_action('wp_enqueue_scripts', 'stephanie_scripts_styles');
add_action('customize_register', 'stephanie_customizer');
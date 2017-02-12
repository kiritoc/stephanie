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
    // Enqueue Sakura animation
    wp_enqueue_style('jquery-sakura-style', STEPHANIE_CSS_PATH . 'jquery-sakura.min.css');
    wp_enqueue_script('jquery-sakura-scripts', STEPHANIE_JS_PATH . 'jquery-sakura.min.js', array('jquery'), '', '');

    // Enqueue Countdown
    wp_enqueue_script('simplyCountdown', STEPHANIE_JS_PATH . 'simplyCountdown.min.js', array('jquery'), '', '');

    // Enqueue Horizontal Timeline
    wp_enqueue_script('horizontal-timeline', STEPHANIE_JS_PATH . 'horizontal-timeline.js', array('jquery'), '', '');

    // Enqueue custom stylesheets
    wp_enqueue_style('stephanie-style', STEPHANIE_CSS_PATH . 'stephanie.css');

    // Enqueue custom javascript
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
    // Input control
    class Stephanie_InputControl extends WP_Customize_Control {
        public $title = NULL;
        public $fields = NULL;

        function render_content() {
            if (!is_array($this->label)) {
                $this->label = array("default" => $this->label);
            }

            if ($this->title) {
                ?>
                <span class="customize-control-title"><?php echo $this->title; ?></span>
                <?php
            }

            if (count($this->fields) == count($this->settings)) {
                $fieldsType = array_values($this->fields);
                $fieldsLabel = array_keys($this->fields);

                foreach ($this->settings as $key => $setting) {
                    ?>
                    <label>
                        <span><?php echo esc_html($fieldsLabel[$key]); ?></span>
                        <input type="<?php echo $fieldsType[$key]; ?>" <?php $this->link($key); ?>
                               value="<?php echo esc_attr($this->value($key)); ?>">
                    </label>
                    <?php
                }
            }
        }
    }

    // Wedding informations section
    $wp_customize->add_section('wedding_informations_section', array(
        'title' => __('Wedding informations', 'stephanie'),
        'priority' => 20
    ));

    // Bride names
    $wp_customize->add_setting('wedding_bride_firstname', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('wedding_bride_lastname', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new Stephanie_InputControl($wp_customize, 'wedding_bride_name_setting', array(
        'section' => 'wedding_informations_section',
        'title' => __('About the bride'),
        'fields' => array(__('First name') => 'text', __('Last name') => 'text'),
        'settings' => array('wedding_bride_firstname', 'wedding_bride_lastname')
    )));

    // Groom names
    $wp_customize->add_setting('wedding_groom_firstname', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('wedding_groom_lastname', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new Stephanie_InputControl($wp_customize, 'wedding_groom_name_setting', array(
        'section' => 'wedding_informations_section',
        'title' => __('About the groom'),
        'fields' => array(__('First name') => 'text', __('Last name') => 'text'),
        'settings' => array('wedding_groom_firstname', 'wedding_groom_lastname')
    )));

    // Wedding day informations
    $wp_customize->add_setting('wedding_date', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('wedding_place', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new Stephanie_InputControl($wp_customize, 'wedding_various_setting', array(
        'section' => 'wedding_informations_section',
        'title' => __('About the day'),
        'fields' => array(__('Date') => 'date', __('Location') => 'text'),
        'settings' => array('wedding_date', 'wedding_place')
    )));

    // Countdown
    $wp_customize->add_setting('wedding_countdown_is_activated', array(
        'sanitize_callback' => 'wp_kses_post',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'wedding_countdown_is_activated_setting', array(
        'label' => __('Show the wedding count down', 'stephanie'),
        'section' => 'wedding_informations_section',
        'settings' => 'wedding_countdown_is_activated',
        'type' => 'checkbox'
    )));
}

/*--------------------------------------------------------------
# Init calls
--------------------------------------------------------------*/
add_action('after_setup_theme', 'stephanie_setup');
add_action('wp_enqueue_scripts', 'stephanie_scripts_styles');
add_action('customize_register', 'stephanie_customizer');
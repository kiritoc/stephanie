<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stephanie
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Loader -->
<div id="site-loader">
    <div id="heart"></div>
</div>

<?php if (is_front_page()): ?>
    <header id="stephanie-header" role="banner" style="background-image: url('<?php echo get_header_image() ?>')">
        <div class="content centered-column-container">
            <!-- Logo -->
            <div class="logo centered-column-container">
                <div class="header-divider-container centered-column-container">
                    <?php get_template_part('assets/images/leaf_top.svg'); ?>
                </div>

                <div class="title">
                    <span class="bride name"><?php echo esc_attr(get_theme_mod('wedding_bride_firstname')) ?></span>
                    <span class="linking-word">&</span>
                    <span class="groom name"><?php echo esc_attr(get_theme_mod('wedding_groom_firstname')) ?></span>
                </div>

                <div class="subtitle">
                    <span class="date">
                        <?php echo strftime("%d.%m.%Y", strtotime(esc_attr(get_theme_mod('wedding_day_date')))); ?>
                    </span>
                </div>

                <div class="header-divider-container centered-column-container">
                    <?php get_template_part('assets/images/leaf_bottom.svg'); ?>
                </div>
            </div>

            <!-- Countdown -->
            <?php if (get_theme_mod('wedding_countdown_is_activated')): ?>
                <div class="wedding-countdown centered-row-container js-countdown_wedding_day"></div>
            <?php endif; ?>
        </div>

        <!-- Scroll down button -->
        <div class="index-button">
            <a href="#navbar" class="js-scroll-to-href">
                <span class="text">Entrer sur le site</span>
                <i class="icon icon-angle-double-down"></i>
            </a>
        </div>
    </header>
<?php endif; ?>

<div id="container"> <!-- #container end (end tag is in footer.php) -->
    <div class="js-navbar-container">
        <nav id="navbar" class="centered-row-container">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="http://localhost:8080/wp-content/uploads/2016/12/cropped-logo-300x300.png">
                </a>
            </div>

            <div class="main-menu">
                <ul>
                    <?php wp_nav_menu(); ?>
                </ul>
            </div>
        </nav>
    </div>
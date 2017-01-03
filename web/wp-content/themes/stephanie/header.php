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
<div id="site-loader"></div>

<?php if (stephanie_get_header_image() != false && is_front_page()): ?>
    <header id="stephanie-header" role="banner">
        <?php echo stephanie_get_header_image(); ?>
        <div class="header-content">
            <!-- Title -->
            <h1 class="header-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>

            <!-- Subtitle -->
            <h2 class="header-subtitle"><?php bloginfo('description'); ?></h2>

            <!-- Date & Place -->
            <div class="header-divider-container"><?php get_template_part('assets/images/leaf_top.svg'); ?></div>
            <div class="header-text">
                <div class="date"><?php
                    echo strftime("%A %d %B %Y", strtotime(esc_attr(get_theme_mod('wedding_date')))); ?></div>
                <div class="place"><?php echo esc_attr(get_theme_mod('wedding_place')); ?></div>
            </div>
            <div class="header-divider-container"><?php get_template_part('assets/images/leaf_bottom.svg'); ?></div>

            <?php if (get_theme_mod('wedding_countdown_is_activated')): ?>
                <!-- Countdown -->
                <div class="header-wedding-countdown js-countdown_wedding_day"></div>
            <?php endif; ?>
        </div>
    </header>
<?php endif; ?>

<nav class="dt-main-menu<?php //if ( is_front_page() ) : ?> dt-menu-fixed<?php if (!is_front_page()) : ?> dt-sticky<?php endif; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dt-nav-logo">
                    <?php
                    if (function_exists('get_custom_logo') && has_custom_logo()) :
                        the_custom_logo();
                    else : ?>
                        <h1><a href="<?php echo esc_url(home_url('/')); ?>"
                               rel="home"><?php esc_attr(bloginfo('name')); ?></a></h1>
                    <?php endif; ?>
                </div><!-- .dt-nav-logo -->
            </div><!-- .col-lg-3 -->

            <div class="col-lg-9">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
            </div>
        </div>
    </div>
</nav>

<?php if (!is_front_page()) : ?>
    <div class="container">
        <span>header content</span>
    </div>
<?php endif; ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stephanie
 */

get_header();
if (!get_theme_mod('show_only_main_header')): ?>

    <div id="content">
        <!-- Accueil / Confirmer ma présence / Où et Quand ? / Contact -->
        <?php //if (get_field('show-content')):
        // TO SHOW THE PAGE CONTENTS
        while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="entry-content-page">
                <?php the_content(); ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->
            <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        /*endif;*/ ?>


        <?php if (is_front_page()): ?>
            <div class="entry-content-page other-section animate" data-animate="fadeIn" data-delay="0.35s">
                <span>Mais avant quoi que ce soit, assurez-vous d'avoir
                    <a href="./confirmer-ma-presence/" class="highlighted">confirmé votre présence</a> !
                </span>
            </div>
        <?php endif; ?>
    </div>

    <?php
endif;
get_footer();

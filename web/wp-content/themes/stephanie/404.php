<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Stephanie
 */

get_header(); ?>

    <div id="content">
        <div class="entry-content-page">
            <div class="title-parts">Erreur 404<span class="part-2">Page non trouvée</span></div>
            <p><?php esc_html_e('Impossible de trouver la page demandée petit malin !', 'stephanie'); ?></p>
        </div>
    </div>
<?php
get_footer();

<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Stephanie
 */

get_header(); ?>

    <div class="container">
        <div class="dt-error-page">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">

                            <section class="error-404 not-found">
                                <header class="page-header">
                                    <h1 class="page-title"><?php esc_html_e('Impossible de trouver la page demandée petit malin !', 'stephanie'); ?></h1>
                                </header>

                                <div class="page-content">
                                    <p><?php esc_html_e('Il n\'y a rien à voir sur cette page...', 'stephanie'); ?></p>
                                </div>
                            </section>

                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();

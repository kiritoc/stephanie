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

get_header(); ?>

    <div id="content">
        <!-- Accueil -->
        <?php
        $image = get_field('description-image');

        if (!empty($image)): ?>
            <img class="description-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
        <?php endif; ?>

        <?php if (get_field('description')): ?>
            <div class="description"><?php the_field('description'); ?></div>
        <?php endif; ?>

        <!-- Où et Quand ? -->
        <?php if (get_field('timeline')): ?>
            <section class="horizontal-timeline">
                <div class="timeline">
                    <div class="events">
                        <ol>
                            <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                            <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                        </ol>

                        <span class="filling-line" aria-hidden="true"></span>
                    </div>

                    <ul class="timeline-navigation">
                        <li><a href="#0" class="prev inactive">Prev</a></li>
                        <li><a href="#0" class="next">Next</a></li>
                    </ul>
                </div>

                <div class="content">
                    <ol>
                        <?php if (get_field('town-hall-description')): ?>
                            <li>
                                <div class="town-hall-description"><?php the_field('town-hall-description'); ?></div>

                                <?php if (get_field('town-hall-location')): ?>
                                    <div class="own-hall-location"><?php the_field('town-hall-location'); ?></div>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    </ol>
                </div>
            </section>
        <?php endif; ?>
    </div>

<?php
get_footer();

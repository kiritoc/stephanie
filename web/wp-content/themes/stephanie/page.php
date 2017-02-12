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
                    <div class="events-wrapper">
                        <div class="events">
                            <ol>
                                <li>
                                    <a href="#0" data-date="<?php the_field('town-hall-date'); ?>" class="selected">
                                        -
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" data-date="<?php the_field('church-date'); ?>">
                                        -
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" data-date="<?php the_field('vin-honneur-date'); ?>">
                                        -
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" data-date="<?php the_field('dinner-date'); ?>">
                                        -
                                    </a>
                                </li>
                            </ol>

                            <span class="filling-line" aria-hidden="true"></span>
                        </div>
                    </div>

                    <!--<ul class="timeline-navigation">
                        <li><a href="#0" class="prev inactive">Prev</a></li>
                        <li><a href="#0" class="next">Next</a></li>
                    </ul>-->
                </div>

                <div class="events-content">
                    <ol>
                        <!-- Town hall informations -->
                        <?php if (get_field('town-hall-description')): ?>
                            <li class="selected" data-date="<?php the_field('town-hall-date'); ?>">
                                <div class="town-hall-description">
                                    <?php the_field('town-hall-description'); ?>
                                </div>

                                <?php if (get_field('town-hall-location')): ?>
                                    <div class="town-hall-location"><?php the_field('town-hall-location'); ?></div>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>

                        <!-- Church informations -->
                        <?php if (get_field('church-description')): ?>
                            <li data-date="<?php the_field('church-date'); ?>">
                                <div class="church-description">
                                    <?php the_field('church-description'); ?>
                                </div>

                                <?php if (get_field('church-location')): ?>
                                    <div class="church-location"><?php the_field('church-location'); ?></div>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>

                        <!-- Vin d'honneur informations -->
                        <?php if (get_field('vin-honneur-description')): ?>
                            <li data-date="<?php the_field('vin-honneur-date'); ?>">
                                <div class="vin-honneur-description">
                                    <?php the_field('vin-honneur-description'); ?>
                                </div>

                                <?php if (get_field('vin-honneur-location')): ?>
                                    <div class="vin-honneur-location"><?php the_field('vin-honneur-location'); ?></div>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>

                        <!-- Dinner informations -->
                        <?php if (get_field('dinner-description')): ?>
                            <li data-date="<?php the_field('dinner-date'); ?>">
                                <div class="dinner-description">
                                    <?php the_field('dinner-description'); ?>
                                </div>

                                <?php if (get_field('dinner-location')): ?>
                                    <div class="dinner-location"><?php the_field('dinner-location'); ?></div>
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

<?php

/**
 * HOME PAGE - Max
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package five-freedoms-ranch
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main">


        <!-- END: CARDS SECTION -->



        <!-- programs -->
        <section class="programs">
            
                    <!-- programs -->
                    <div class="programinfo">
                            <!-- Title -->
                            <?php $programtitle = $programs['programs_title']; ?>
                            <?php if ($programtitle) : ?>
                                <p><?php _e($programtitle); ?></p>
                            <?php endif; ?>
                            <!-- Text -->
                            <?php $programtext = $programs['programs_text']; ?>
                            <?php if ($programtext) : ?>
                            <p><?php _e($programtext); ?></p>
                        <?php endif; ?>
                        
                    </div>

                    <!-- hug a tree -->
                    <div class="hugatree card">
                        <?php $stat_field_two = $stats['stat_field_two']; ?>
                        <?php if ($stat_field_two) : ?>

                            <!-- Number -->
                            <?php $stat_field_two_number = $stat_field_two['stat_field_two_number']; ?>
                            <?php if ($stat_field_two_number) : ?>
                                <p class="stat-number"><?php _e($stat_field_two_number); ?></p>
                            <?php endif; ?>

                            <!-- Title -->
                            <?php $stat_field_two_title = $stat_field_two['stat_field_two_title']; ?>
                            <?php if ($stat_field_two_title) : ?>
                                <p><?php _e($stat_field_two_title); ?></p>
                            <?php endif; ?>

                        <?php endif; ?>
                    </div>

                    <!-- Stat Field 3 -->
                    <div class="stat-info">
                        <?php $stat_field_three = $stats['stat_field_three']; ?>
                        <?php if ($stat_field_three) : ?>

                            <!-- Number -->
                            <?php $stat_field_three_number = $stat_field_three['stat_field_three_number']; ?>
                            <?php if ($stat_field_three_number) : ?>
                                <p class="stat-number"><?php _e($stat_field_three_number); ?></p>
                            <?php endif; ?>

                            <!-- Title -->
                            <?php $stat_field_three_title = $stat_field_three['stat_field_three_title']; ?>
                            <?php if ($stat_field_three_title) : ?>
                                <p><?php _e($stat_field_three_title); ?></p>
                            <?php endif; ?>

                        <?php endif; ?>
                    </div>

                    <!-- Stat Field 4 -->
                    <div class="stat-info">
                        <?php $stat_field_four = $stats['stat_field_four']; ?>
                        <?php if ($stat_field_four) : ?>

                            <!-- Number -->
                            <?php $stat_field_four_number = $stat_field_four['stat_field_four_number']; ?>
                            <?php if ($stat_field_four_number) : ?>
                                <p class="stat-number"><?php _e($stat_field_four_number); ?></p>
                            <?php endif; ?>

                            <!-- Title -->
                            <?php $stat_field_four_title = $stat_field_four['stat_field_four_title']; ?>
                            <?php if ($stat_field_four_title) : ?>
                                <p><?php _e($stat_field_four_title); ?></p>
                            <?php endif; ?>

                        <?php endif; ?>
                    </div>

                <?php endif; ?>

            </div>
        </section>
        <!-- END: STATISTICS -->

 

</main><!-- #main -->

<?php get_footer(); ?>
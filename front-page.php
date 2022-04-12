<?php

/**

 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package calling-lake
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php if (have_posts()) : ?>

        <section class="home">

            <!-- who we are  -->
            <div class="whoweare-container">
                <div class="whoweare-text">
                    <!-- Title -->
                    <?php $whowearetitle = get_field('about_us_title'); ?>
                    <?php if ($whowearetitle) : ?>
                        <h3><?php _e($whowearetitle); ?></h3>
                    <?php endif; ?>
                    <!-- Text -->
                    <?php $whowearetext = get_field('about_us_description'); ?>
                    <?php if ($whowearetext) : ?>
                        <p><?php _e($whowearetext); ?></p>
                    <?php endif; ?>
                </div>
                <div class="home-map">
                    <!-- Google Map -->
                    <?php if (is_active_sidebar('map-widget')) : ?>
                        <?php dynamic_sidebar('map-widget'); ?>
                    <?php endif; ?>
                </div>
            </div> <!-- end of who we are div -->
            </div>
            </div>

            <!-- join us -->
            <section class="program-card">

                <?php $join_img = get_field('join_us_img'); ?>
                <?php if ($join_img) : ?>
                    <?php
                    $img_url = $join_img['url'];
                    ?>
                    <div class="program-card-img">
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                    </div>
                <?php endif; ?>

                <!-- Card Info -->
                <div class="home-cards program-card-info">
                    <!-- Title -->
                    <?php $jointitle = get_field('join_us_title'); ?>
                    <?php if ($jointitle) : ?>
                        <h4><?php _e($jointitle); ?></h4>
                    <?php endif; ?>
                    <!-- Text -->
                    <?php $jointext = get_field('join_us_text'); ?>
                    <?php if ($jointext) : ?>
                        <p><?php _e($jointext); ?></p>
                    <?php endif; ?>


                    <!-- Learn More -->
                    <a class="btn-link" href="<?php the_permalink(); ?>">Join Us</a>

                    <?php //get_template_part( 'template-parts/content', 'page' ); 
                    ?>
                </div>
            </section>








            <!-- programs -->
            <section class="programs">

                <!-- programs -->
                <div class="program-info">
                    <!-- Title -->
                    <?php $programstitle = get_field('programs_title'); ?>
                    <?php if ($programstitle) : ?>
                        <h3><?php _e($programstitle); ?></h3>
                    <?php endif; ?>
                    <!-- Text -->
                    <?php $programstext = get_field('programs_text'); ?>
                    <?php if ($programstext) : ?>
                        <p><?php _e($programstext); ?></p>
                    <?php endif; ?>

                </div><!-- program intro end -->

                <!-- hug a tree -->

                <section class="home-cards program-card">

                    <?php $hug_a_tree_img = get_field('hug_a_tree_img'); ?>
                    <?php if ($hug_a_tree_img) : ?>
                        <?php
                        $img_url = $hug_a_tree_img['url'];
                        ?>
                        <div class="program-card-img">
                            <img src="<?php print_r(esc_url($img_url)); ?>">
                        </div>
                    <?php endif; ?>

                    <!-- Card Info -->
                    <div class="program-card-info">
                        <!-- Title -->
                        <?php $hugatreetitle = get_field('hug_a_tree_title'); ?>
                        <?php if ($hugatreetitle) : ?>
                            <h4><?php _e($hugatreetitle); ?></h4>
                        <?php endif; ?>
                        <!-- Text -->
                        <?php $hugatreetext = get_field('hug_a_tree_text'); ?>
                        <?php if ($hugatreetext) : ?>
                            <p><?php _e($hugatreetext); ?></p>
                        <?php endif; ?>


                        <!-- Learn More -->
                        <a class="btn-link" href="<?php the_permalink(); ?>">learn more</a>

                        <?php //get_template_part( 'template-parts/content', 'page' ); 
                        ?>
                    </div>
                </section>

                <!-- adventuresmart -->

                <section class="home-cards program-card">

                    <?php $adventuresmart_img = get_field('adventuresmart_img'); ?>
                    <?php if ($adventuresmart_img) : ?>
                        <?php
                        $img_url = $adventuresmart_img['url'];
                        ?>
                        <div class="program-card-img">
                            <img src="<?php print_r(esc_url($img_url)); ?>">
                        </div>
                    <?php endif; ?>

                    <!-- Card Info -->
                    <div class="program-card-info">
                        <!-- Title -->
                        <?php $adventuresmarttitle = get_field('adventuresmart_title'); ?>
                        <?php if ($adventuresmarttitle) : ?>
                            <h4><?php _e($adventuresmarttitle); ?></h4>
                        <?php endif; ?>
                        <!-- Text -->
                        <?php $adventuresmarttext = get_field('adventuresmart_text'); ?>
                        <?php if ($adventuresmarttext) : ?>
                            <p><?php _e($adventuresmarttext); ?></p>
                        <?php endif; ?>


                        <!-- Learn More -->
                        <a class="btn-link" href="<?php the_permalink(); ?>">learn more</a>

                        <?php //get_template_part( 'template-parts/content', 'page' ); 
                        ?>
                    </div>

                </section>


                <!-- donate -->

                <section class="home-cards program-card">

                    <?php $donate_img = get_field('donate_img'); ?>
                    <?php if ($donate_img) : ?>
                        <?php
                        $img_url = $donate_img['url'];
                        ?>
                        <div class="program-card-img">
                            <img src="<?php print_r(esc_url($img_url)); ?>">
                        </div>
                    <?php endif; ?>

                    <!-- Card Info -->
                    <div class="program-card-info">
                        <!-- Title -->
                        <?php $donatetitle = get_field('donate_title'); ?>
                        <?php if ($donatetitle) : ?>
                            <h4><?php _e($donatetitle); ?></h4>
                        <?php endif; ?>
                        <!-- Text -->
                        <?php $donatetext = get_field('donate_text'); ?>
                        <?php if ($donatetext) : ?>
                            <p><?php _e($donatetext); ?></p>
                        <?php endif; ?>


                        <!-- Learn More -->
                        <a class="btn-link" href="<?php the_permalink(); ?>">Donate</a>

                        <?php //get_template_part( 'template-parts/content', 'page' ); 
                        ?>
                    </div>
                </section>







            </section><!-- home end -->
        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>
</main><!-- #main -->

<?php get_footer(); ?>
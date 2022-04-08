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
        
    <section class="homeaboutus">

        <!-- programs -->
        <div class="home whoweare">
            <!-- Title -->
            <?php $home_whoweare = get_field('about_us_header'); ?>
            <?php if ($whowearetitle) : ?>
                <h3><?php _e($whowearetitle); ?></h3>
            <?php endif; ?>
            <!-- Text -->
            <?php $whowearetext = get_field('about_us_description'); ?>
            <?php if ($whowearetext) : ?>
                <p><?php _e($whowearetext); ?></p>
            <?php endif; ?>

        </div>
   

            <section class="join">

            <!-- join -->
            <div class="joinus card">
                <!-- Title -->
                <?php $joinus = get_field('join_us_title'); ?>
                <?php if ($jointitle) : ?>
                    <h4><?php _e($jointitle); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $jointext = get_field('join_us_text'); ?>
                <?php if ($jointext) : ?>
                    <p><?php _e($jointext); ?></p>
                <?php endif; ?>

            </div>

            <!-- programs -->
            <section class="programs">

                <!-- programs -->
                <div class="programinfo">
                    <!-- Title -->
                    <?php $programtitle = get_field('programs_title'); ?>
                    <?php if ($programtitle) : ?>
                        <h4><?php _e($programtitle); ?></h4>
                    <?php endif; ?>
                    <!-- Text -->
                    <?php $programtext = get_field('programs_text'); ?>
                    <?php if ($programtext) : ?>
                        <p><?php _e($programtext); ?></p>
                    <?php endif; ?>

                </div>

                <!-- hug a tree -->
                <div class="program-card">
                    <div class="hugatree-content">
                        <?php $hugatree_title = get_field('hug_a_tree_title'); ?>
                        <?php if ($hugatree_title) : ?>
                            <h4><?php _e($hugatree_title); ?></h4>
                        <?php endif; ?>



                        <?php $hugatree_text = get_field('hug_a_tree_text'); ?>
                        <?php if ($hugatree_text) : ?>
                            <p><?php _e($hugatree_text); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="card-img">


                        <?php $hugatree_image = get_field('hug_a_tree_img'); ?>
                        <?php if ($hugatree_image) : ?>
                            <?php
                            $img_url = $hugatree_image['url'];
                            ?>
                            <div class="hugatree-img">
                                <img src="<?php print_r(esc_url($img_url)); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- adventure smart -->
                <div class="program-card">
                    <div class="adventuresmart-content">
                        <?php $adventuresmart_title = get_field('adventuresmart_title'); ?>
                        <?php if ($adventuresmart_title) : ?>
                            <h4><?php _e($adventuresmart_title); ?></h4>
                        <?php endif; ?>



                        <?php $adventuresmart_text = get_field('adventuresmart_text'); ?>
                        <?php if ($adventuresmart_text) : ?>
                            <p><?php _e($adventuresmart_text); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="card-img">


                        <?php $adventuresmart_image = get_field('adventuresmart_img'); ?>
                        <?php if ($adventuresmart_image) : ?>
                            <?php
                            $img_url = $adventuresmart_image['url'];
                            ?>
                            <div class="adventuresmart-img">
                                <img src="<?php print_r(esc_url($img_url)); ?>">
                            </div>
                        <?php endif; ?>
                    </div>


                    <!-- doante-->
                    <div class="donate-card">
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
                        <a href=""></a>
                    </div>
                    <div class="card-img">

                        <?php $donate_image = get_field('donate_img'); ?>
                        <?php if ($donate_image) : ?>
                            <?php
                            $img_url = $donate_image['url'];
                            ?>
                            <div class="donate-img">
                                <img src="<?php print_r(esc_url($img_url)); ?>">
                            </div>
                        <?php endif; ?>
                    </div>

            </section>



</main><!-- #main -->

<?php get_footer(); ?>
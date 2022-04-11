<?php

/**
 * The template for displaying Volunteer page content
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package calling-lake
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <!-- Banner -->
        <section class="banner">
            <?php $banner_image = get_field('banner_image'); ?>
            <?php if ($banner_image) : ?>
                <?php
                $img_url = $banner_image['url'];
                ?>
                <div class="banner-img">
                    <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>

            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>

            <!-- Banner Text -->
            <?php $banner_text = get_field('banner_text'); ?>
            <?php if ($banner_text) : ?>
                <p><?php _e($banner_text); ?></p>
            <?php endif; ?>
        </section>


        <!-- Who we are -->
        <section class="about">

            <!-- who we are  -->
            <div class="who-we-are">

                <!-- Title -->
                <?php $whowearetitle = get_field('who_we_are_title'); ?>
                <?php if ($whowearetitle) : ?>
                    <h3><?php _e($whowearetitle); ?></h3>
                <?php endif; ?>

                <!-- Text -->
                <?php $whowearetext = get_field('who_we_are_text'); ?>
                <?php if ($whowearetext) : ?>
                    <?php _e($whowearetext); ?>
                <?php endif; ?>

            </div>

            <!-- what we do   -->
            <div class="what-we-do">

                <!-- Title -->
                <?php $whatwedotitle = get_field('what_we_do_title'); ?>
                <?php if ($whatwedotitle) : ?>
                    <h3><?php _e($whatwedotitle); ?></h3>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- swift water -->

        <section class=" about-us program-card">

            <?php $swiftwater_img = get_field('swift_water_img'); ?>
            <?php if ($swiftwater_img) : ?>
                <?php
                $img_url = $swiftwater_img['url'];
                ?>
                <div class="program-card-img">
                    <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>

            <!-- Card Info -->
            <div class="program-card-info">
                <!-- Title -->
                <?php $swiftwater_title = get_field('swift_water_title'); ?>
                <?php if ($swiftwater_title) : ?>
                    <h4><?php _e($swiftwater_title); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $swiftwater_text = get_field('swift_water_description'); ?>
                <?php if ($swiftwater_text) : ?>
                    <p><?php _e($swiftwater_text); ?></p>
                <?php endif; ?>

                <?php //get_template_part( 'template-parts/content', 'page' ); 
                ?>
            </div>
        </section>

        <!-- stillwater -->

        <section class="about-us program-card">

            <?php $stillwater_img = get_field('still_water_img'); ?>
            <?php if ($stillwater_img) : ?>
                <?php
                $img_url = $stillwater_img['url'];
                ?>
                <div class="program-card-img">
                    <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>

            <!-- Card Info -->
            <div class="program-card-info">
                <!-- Title -->
                <?php $stillwater_title = get_field('still_water_title'); ?>
                <?php if ($stillwater_title) : ?>
                    <h4><?php _e($stillwater_title); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $stillwater_text = get_field('still_water_description'); ?>
                <?php if ($stillwater_text) : ?>
                    <p><?php _e($stillwater_text); ?></p>
                <?php endif; ?>

                <?php //get_template_part( 'template-parts/content', 'page' ); 
                ?>
            </div>

        </section>


        <!-- backcountry rescue -->

        <section class=" about-us program-card">

            <?php $backcountry_img = get_field('backcountry_img'); ?>
            <?php if ($backcountry_img) : ?>
                <?php
                $img_url = $backcountry_img['url'];
                ?>
                <div class="program-card-img">
                    <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>

            <!-- Card Info -->
            <div class="program-card-info">
                <!-- Title -->
                <?php $backcountry_title = get_field('backcountry_title'); ?>
                <?php if ($backcountry_title) : ?>
                    <h4><?php _e($backcountry_title); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $backcountry_text = get_field('backcountry_description'); ?>
                <?php if ($backcountry_text) : ?>
                    <p><?php _e($backcountry_text); ?></p>
                <?php endif; ?>

                <?php //get_template_part( 'template-parts/content', 'page' ); 
                ?>
            </div>
        </section>

        <!-- drone searches -->

        <section class="program-card">

            <?php $drone_img = get_field('drone_img'); ?>
            <?php if ($drone_img) : ?>
                <?php
                $img_url = $drone_img['url'];
                ?>
                <div class="program-card-img">
                    <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>

            <!-- Card Info -->
            <div class="program-card-info">
                <!-- Title -->
                <?php $dronetitle = get_field('drone_title'); ?>
                <?php if ($dronetitle) : ?>
                    <h4><?php _e($dronetitle); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $drone_text = get_field('drone_description'); ?>
                <?php if ($drone_text) : ?>
                    <p><?php _e($drone_text); ?></p>
                <?php endif; ?>

                <?php //get_template_part( 'template-parts/content', 'page' ); 
                ?>
            </div>

        </section>
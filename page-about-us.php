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

        <section class=" about-us cards">
            <div class="about-us-card card1">
                <div class="card-img">
                    <?php $swiftwaterimg = get_field('swift_water_img'); ?>
                    <?php if ($swiftwaterimg) : ?>
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>
            <div class="card-content">
                <!-- Title -->
                <?php $swiftwatertitle = get_field('swift_water_title'); ?>
                <?php if ($swiftwatertitle) : ?>
                    <h4><?php _e($swiftwatertitle); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $swiftwatertext = get_field('swift_water_description'); ?>
                <?php if ($swiftwatertext) : ?>
                    <p><?php _e($swiftwatertext); ?></p>
                <?php endif; ?>
            </div>
            </div>

            <div class="about-us-card card2">
                <div class="card-img">
                    <?php $stillwaterimg = get_field('still_water_img'); ?>
                    <?php if ($stillwaterimg) : ?>
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>
            <div class="card-content">
                <!-- Title -->
                <?php $stillwatertitle = get_field('still_water_title'); ?>
                <?php if ($stillwatertitle) : ?>
                    <h4><?php _e($stillwatertitle); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $stillwatertext = get_field('still_water_description'); ?>
                <?php if ($stillwatertext) : ?>
                    <p><?php _e($stillwatertext); ?></p>
                <?php endif; ?>

            </div>
            </div>

            <div class="about-us-card card3">
                <div class="card-img">
                    <?php $backcountryimg = get_field('backcountry_img'); ?>
                    <?php if ($backcountryimg) : ?>
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>
            <div class="card-content">
                <!-- Title -->
                <?php $backcountrytitle = get_field('backcountry_title'); ?>
                <?php if ($backcountrytitle) : ?>
                    <h4><?php _e($backcountrytitle); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $backcountrytext = get_field('backcountry_description'); ?>
                <?php if ($backcountrytext) : ?>
                    <p><?php _e($backcountrytext); ?></p>
                <?php endif; ?>

            </div>
            </div>

            <div class="about-us-card card4">
                <div class="card-img">
                    <?php $droneimg = get_field('drone_img'); ?>
                    <?php if ($droneimg) : ?>
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                </div>
            <?php endif; ?>
            <div class="card-content">
                <!-- Title -->
                <?php $dronetitle = get_field('drone_title'); ?>
                <?php if ($dronetitle) : ?>
                    <h4><?php _e($dronetitle); ?></h4>
                <?php endif; ?>
                <!-- Text -->
                <?php $dronetext = get_field('drone_description'); ?>
                <?php if ($dronetext) : ?>
                    <p><?php _e($dronetext); ?></p>
                <?php endif; ?>

            </div>
            </div>
            </div>
        </section>


        </section>
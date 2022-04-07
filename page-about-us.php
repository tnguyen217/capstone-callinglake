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
        </section>
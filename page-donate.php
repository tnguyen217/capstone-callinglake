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
        <section class="donate">

            <!-- who we are  -->
            <div class="donate-cheque">

                <!-- Title -->
                <?php $cheque_title = get_field('donate_by_cheque_title'); ?>
                <?php if ($cheque_title) : ?>
                    <h3><?php _e($cheque_title); ?></h3>
                <?php endif; ?>

                <!-- Text -->
                <?php $cheque_text = get_field('donate_by_cheque_text'); ?>
                <?php if ($cheque_text) : ?>
                    <?php _e($cheque_text); ?>
                <?php endif; ?>

            </div>

            <!-- what we do   -->
            <div class="donate-online">

                <!-- Title -->
                <?php $online_title = get_field('donate_online_title'); ?>
                <?php if ($online_title) : ?>
                    <h3><?php _e($online_title); ?></h3>
                <?php endif; ?>
            </div>
        <?php endif; ?>


        <!-- Join Us Form -->
        <?php $donate_form = get_field('donate_form'); ?>
        <?php if ($donate_form) : ?>
            <?php echo do_shortcode($donate_form); ?>
        <?php endif; ?>
        </section>
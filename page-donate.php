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



        <section class="donate">

            <!-- by cheque -->
            <div class="donate-cheque">

                <!-- Title -->
                <?php $cheque_title = get_field('donate_by_cheque_title'); ?>
                <?php if ($cheque_title) : ?>
                    <h3><?php _e($cheque_title); ?></h3>
                <?php endif; ?>

                <!-- Text -->
                <?php $cheque_text = get_field('donate_by_cheque_text'); ?>
                <?php if ($cheque_text) : ?>
                    <p> <?php _e($cheque_text); ?></p>
                <?php endif; ?>

                <div class="adress">
                    <!-- name -->
                    <?php $orgname_text = get_field('oragnization_name'); ?>
                    <?php if ($orgname_text) : ?>
                        <p> <?php _e($orgname_text); ?></p>
                    <?php endif; ?>

                    <!-- adress1 -->
                    <?php $adress1_text = get_field('adress_line_1'); ?>
                    <?php if ($adress1_text) : ?>
                        <p> <?php _e($adress1_text); ?></p>
                    <?php endif; ?>

                    <!-- adress2 -->
                    <?php $adress2_text = get_field('adress_line_2'); ?>
                    <?php if ($adress2_text) : ?>
                        <p> <?php _e($adress2_text); ?></p>
                    <?php endif; ?>

                    <!-- postal code -->
                    <?php $postalcode_text = get_field('postal_code'); ?>
                    <?php if ($postalcode_text) : ?>
                        <p> <?php _e($postalcode_text); ?></p>
                    <?php endif; ?>

                    <!-- city and province -->
                    <?php $city_text = get_field('city_and_province'); ?>
                    <?php if ($city_text) : ?>
                        <p> <?php _e($city_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- what we do   -->
            <div class="donate-online">

                <!-- Title -->
                <?php $online_title = get_field('donate_online_title'); ?>
                <?php if ($online_title) : ?>
                    <h3><?php _e($online_title); ?></h3>
                <?php endif; ?>

            <?php endif; ?>


            <!-- donate Form -->
            <?php $donate_form = get_field('donate_form'); ?>
            <?php if ($donate_form) : ?>
                <?php echo do_shortcode($donate_form); ?>
            <?php endif; ?>

            </div>
        </section>
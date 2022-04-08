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

    <?php if (have_posts()) : ?>

        <!-- HERO BANNER -->
        <section class="home-banner">
            <?php $hero_banner = get_field('hero_banner'); ?>
            <?php if ($hero_banner) : ?>

                <div class="hero-image">
                    <!-- Image-->
                    <?php $hero_banner_img = $hero_banner['hero_banner_img']; ?>
                    <?php if ($hero_banner_img) : ?>
                        <?php
                        $img_url = $hero_banner_img['url'];
                        ?>
                        <!-- <div class=""> -->
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                        <!-- </div> -->
                    <?php endif; ?>

                    <div class="hero-text">
                        <!-- Title-->
                        <?php $hero_banner_title = $hero_banner['hero_banner_title']; ?>
                        <?php if ($hero_banner_title) : ?>
                            <h3><?php _e($hero_banner_title); ?></h3>
                        <?php endif; ?>

                        <!-- Text -->
                        <?php $hero_banner_text = $hero_banner['hero_banner_text']; ?>
                        <?php if ($hero_banner_text) : ?>
                            <p><?php _e($hero_banner_text); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endif; ?>
        </section>
        <!-- END: HERO BANNER -->



        <!-- WHAT'S NEW -->
        <section class="home-announcements">
            <h3>What's New</h3>
            <div>

                <?php if (is_active_sidebar('home-latest-blog-posts')) : ?>
                    <?php dynamic_sidebar('home-latest-blog-posts'); ?>
                <?php endif; ?>

            </div>
            <a href="#" class="btn">More announcements</a>
        </section>
        <!-- END: WHAT'S NEW -->



        <!-- OUR MISSION -->
        <section class="home-mission">
            <!-- <div class="home-mission-img"></div>
				<div class="home-mission-content">
					<h3>Our Mission</h3>
					<p>Our Mission is dedicated to rescuing and protecting horses. Freeing them from abuse, neglect & slaughter, thus providing an opportunity to bond horses with humans through the power of connection!!</p>
				</div> -->
            <?php $our_mission = get_field('our_mission'); ?>
            <?php if ($our_mission) : ?>

                <div class="hero-image">
                    <!-- Image-->
                    <?php $our_mission_img = $our_mission['our_mission_img']; ?>
                    <?php if ($our_mission_img) : ?>
                        <?php
                        $img_url = $our_mission_img['url'];
                        ?>
                        <!-- <div class=""> -->
                        <img src="<?php print_r(esc_url($img_url)); ?>">
                        <!-- </div> -->
                    <?php endif; ?>

                    <div class="hero-text">
                        <!-- Title-->
                        <?php $our_mission_title = $our_mission['our_mission_title']; ?>
                        <?php if ($our_mission_title) : ?>
                            <h3><?php _e($our_mission_title); ?></h3>
                        <?php endif; ?>

                        <!-- Text -->
                        <?php $our_mission_text = $our_mission['our_mission_text']; ?>
                        <?php if ($our_mission_text) : ?>
                            <p><?php _e($our_mission_text); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endif; ?>

        </section>
        <!-- END: OUR MISSION -->



        <!-- CARDS SECTION -->
        <section class="home card">
            
        <div class="home-about us container">

                    <!-- Image-->
                    <?php $home_about_img = $home_about['home_about_img']; ?>
                    <?php if ($home_about_img) : ?>
                        <?php
                        $img_url = $home_about_img['url'];
                        ?>
    
                    <?php endif; ?>

                    <!-- Title-->
                    <?php $home_about_title = $home_about('about_us_header'); ?>
                    <?php if ($home_about_title) : ?>
                        <h4><?php _e($home_join_title); ?></h4>
                    <?php endif; ?>

                    <!-- Text -->
                    <?php $home_join_text = $home_card_1('about_us_description'); ?>
                    <?php if ($home_join_text) : ?>
                        <p><?php _e($home_join_text); ?></p>
                    <?php endif; ?>

                <?php endif; ?>
            </div>
            <!-- Card 2-->
            <div class="home-join container">

                    <!-- Image-->
                    <?php $home_join_img = $home_card_1['home_join_img']; ?>
                    <?php if ($home_join_img) : ?>
                        <?php
                        $img_url = $home_join_img['url'];
                        ?>
    
                    <?php endif; ?>

                    <!-- Title-->
                    <?php $home_join_title = $home_card_1('join_us_title'); ?>
                    <?php if ($home_join_title) : ?>
                        <h4><?php _e($home_join_title); ?></h4>
                    <?php endif; ?>

                    <!-- Text -->
                    <?php $home_join_text = $home_card_1('join_us_text'); ?>
                    <?php if ($home_join_text) : ?>
                        <p><?php _e($home_join_text); ?></p>
                    <?php endif; ?>

                <?php endif; ?>
            </div>

            <!-- Card 2-->
            <div class="home-card-container">
                <?php $home_card_2 = get_field('home_card_2'); ?>
                <?php if ($home_card_2) : ?>

                    <!-- Image-->
                    <?php $home_card_2_img = $home_card_2['home_card_2_img']; ?>
                    <?php if ($home_card_2_img) : ?>
                        <?php
                        $img_url = $home_card_2_img['url'];
                        ?>
                        <div class="img-circle">
                            <img src="<?php print_r(esc_url($img_url)); ?>">
                        </div>
                    <?php endif; ?>

                    <!-- Title-->
                    <?php $home_card_2_title = $home_card_2['home_card_2_title']; ?>
                    <?php if ($home_card_2_title) : ?>
                        <h4><?php _e($home_card_2_title); ?></h4>
                    <?php endif; ?>

                    <!-- List -->
                    <?php $home_card_2_list = $home_card_2['home_card_2_list']; ?>
                    <?php if ($home_card_2_list) : ?>
                        <ul class="list">

                            <?php $list_item_1 = $home_card_2_list['list_item_1']; ?>
                            <?php if ($list_item_1) : ?>
                                <li><?php _e($list_item_1); ?></li>
                            <?php endif; ?>

                            <?php $list_item_2 = $home_card_2_list['list_item_2']; ?>
                            <?php if ($list_item_2) : ?>
                                <li><?php _e($list_item_2); ?></li>
                            <?php endif; ?>

                            <?php $list_item_3 = $home_card_2_list['list_item_3']; ?>
                            <?php if ($list_item_3) : ?>
                                <li><?php _e($list_item_3); ?></li>
                            <?php endif; ?>

                            <?php $list_item_4 = $home_card_2_list['list_item_4']; ?>
                            <?php if ($list_item_4) : ?>
                                <li><?php _e($list_item_4); ?></li>
                            <?php endif; ?>

                            <?php $list_item_5 = $home_card_2_list['list_item_5']; ?>
                            <?php if ($list_item_5) : ?>
                                <li><?php _e($list_item_5); ?></li>
                            <?php endif; ?>

                        </ul>
                    <?php endif; ?>

                <?php endif; ?>
            </div>

            <!-- Card 3-->
            <div class="home-card-container">
                <?php $home_card_3 = get_field('home_card_3'); ?>
                <?php if ($home_card_3) : ?>

                    <!-- Image-->
                    <?php $home_card_3_img = $home_card_3['home_card_3_img']; ?>
                    <?php if ($home_card_3_img) : ?>
                        <?php
                        $img_url = $home_card_3_img['url'];
                        ?>
                        <div class="img-circle">
                            <img src="<?php print_r(esc_url($img_url)); ?>">
                        </div>
                    <?php endif; ?>

                    <!-- Title-->
                    <?php $home_card_3_title = $home_card_3['home_card_3_title']; ?>
                    <?php if ($home_card_3_title) : ?>
                        <h4><?php _e($home_card_3_title); ?></h4>
                    <?php endif; ?>

                    <!-- List -->
                    <?php $home_card_3_list = $home_card_3['home_card_3_list']; ?>
                    <?php if ($home_card_3_list) : ?>
                        <ul class="list">

                            <?php $list_item_1 = $home_card_3_list['list_item_1']; ?>
                            <?php if ($list_item_1) : ?>
                                <li><?php _e($list_item_1); ?></li>
                            <?php endif; ?>

                            <?php $list_item_2 = $home_card_3_list['list_item_2']; ?>
                            <?php if ($list_item_2) : ?>
                                <li><?php _e($list_item_2); ?></li>
                            <?php endif; ?>

                            <?php $list_item_3 = $home_card_3_list['list_item_3']; ?>
                            <?php if ($list_item_3) : ?>
                                <li><?php _e($list_item_3); ?></li>
                            <?php endif; ?>

                            <?php $list_item_4 = $home_card_3_list['list_item_4']; ?>
                            <?php if ($list_item_4) : ?>
                                <li><?php _e($list_item_4); ?></li>
                            <?php endif; ?>

                            <?php $list_item_5 = $home_card_3_list['list_item_5']; ?>
                            <?php if ($list_item_5) : ?>
                                <li><?php _e($list_item_5); ?></li>
                            <?php endif; ?>

                        </ul>
                    <?php endif; ?>

                <?php endif; ?>
            </div>

        </section>



        <!-- END: CARDS SECTION -->



        <!-- STATISTICS -->
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

    <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>

</main><!-- #main -->

<?php get_footer(); ?>
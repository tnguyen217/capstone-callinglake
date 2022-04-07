<?php
/**
 * The template for displaying the Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package calling-lake
 */

get_header();
?>

	<main id="primary" class="site-main">

        <?php if ( have_posts() ) :?>
			
			<!-- Banner -->
			<section class="banner">
				<?php $banner_image = get_field('banner_image'); ?>
				<?php if($banner_image): ?>
					<?php 
						$img_url = $banner_image['url'];
					?>
					<div class="banner-img">
						<img src="<?php print_r(esc_url($img_url)); ?>">
					</div>
				<?php endif; ?>

				<div class="banner-title">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					<div class="title-bg"></div>
				</div>

				<!-- Banner Text -->
				<?php $banner_text = get_field('banner_text'); ?>
				<?php if($banner_text): ?>
					<p><?php _e($banner_text); ?></p>
				<?php endif; ?>
			</section>
			
            <section class="contact-us">

				<!-- Title -->
				<?php $contact_us_title = get_field('contact_us_title'); ?>
				<?php if($contact_us_title): ?>
					<h3><?php _e($contact_us_title); ?></h3>
				<?php endif; ?>

				<!-- Text -->
				<?php $contact_us_text = get_field('contact_us_text'); ?>
				<?php if($contact_us_text): ?>
					<p><?php _e($contact_us_text); ?></p>
				<?php endif; ?>

				<div class="contact-form">
					<!-- Contact Us Form -->
					<?php $contact_us_form = get_field('contact_us_form'); ?>
					<?php if($contact_us_form): ?>
						<?php echo do_shortcode($contact_us_form); ?>
					<?php endif; ?>
				</div>

            </section>

			<section class="contact-map">
				<!-- Map Widget -->
				<div class="map widget">
					<?php if(is_active_sidebar('map-widget')):?>
						<?php dynamic_sidebar('map-widget'); ?>
					<?php endif; ?>
				</div>
			</section>
			

		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>

	</main><!-- #main -->

<?php

get_footer();
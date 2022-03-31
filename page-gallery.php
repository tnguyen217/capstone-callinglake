<?php
/**
 * The template for displaying Gallery page content
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

				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<!-- Banner Text -->
				<?php $banner_text = get_field('banner_text'); ?>
				<?php if($banner_text): ?>
					<p><?php _e($banner_text); ?></p>
				<?php endif; ?>
			</section>
			

			<!-- Image Gallery -->
			<?php $gallery_short_code = get_field('gallery_short_code'); ?>
			<?php if($gallery_short_code): ?>
				<div class="gallery">
					<?php echo do_shortcode($gallery_short_code); ?>
				</div>
			<?php endif; ?>

		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>

	</main><!-- #main -->

<?php

get_footer();
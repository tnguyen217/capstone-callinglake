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
			
            <section>
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
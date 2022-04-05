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
				<h2 class="entry-title">Programs</h2>
				<div class="title-bg"></div>
			</div>

			<!-- Banner Text -->
			<?php $banner_text = get_field('banner_text'); ?>
			<?php if($banner_text): ?>
				<p><?php _e($banner_text); ?></p>
			<?php endif; ?>
		</section>	

		
		<div class="programs" <?php post_class();?> id="post-<?php the_ID(); ?> ">
			<?php if(have_posts()) : ?>

				<!-- start the loop -->
				<?php while(have_posts()) : the_post(); ?>
					<section class="program-card">

						<?php $program_info_card_image = get_field('program_info_card_image'); ?>
						<?php if($program_info_card_image): ?>
							<?php 
								$img_url = $program_info_card_image['url'];
							?>
							<div class="program-card-img">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>
							
						<!-- Card Info -->
						<div class="program-card-info">
							<!-- Title -->
							<?php the_title('<h3>', '</h3>' ); ?>

							<!-- Text -->
							<?php the_content(); ?>
							
							<!-- Learn More -->
							<a class="btn-link" href="<?php the_permalink(); ?>">learn more</a>

							<?php //get_template_part( 'template-parts/content', 'page' ); ?>
						</div>

					</section>
				<?php endwhile; ?>
				<!-- end while loop -->

			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>

		</div>

	</main><!-- #main -->

<?php

get_footer();
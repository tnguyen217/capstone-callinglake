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
			

			<!-- Recruiting -->
			<section class="recruiting">

				<!-- Position Group -->
				<div class="recruiting-info">

					<!-- Title -->
					<?php $recruiting_title = get_field('recruiting_title'); ?>
					<?php if($recruiting_title): ?>
						<h3><?php _e($recruiting_title); ?></h3>
					<?php endif; ?>

					<!-- Text -->
					<?php $recruiting_info = get_field('recruiting_info'); ?>
					<?php if($recruiting_info): ?>
						<?php _e($recruiting_info); ?>
					<?php endif; ?>

				</div>

				<div class="positions">

					<!-- Position One -->
					<?php $position_one = get_field('position_one'); ?>
					<?php if($position_one): ?>
						<div class="position-card">
							<!-- Group -->
							<?php $group = $position_one['group']; ?>
							<?php if($group): ?>
								<p><?php _e($group); ?></p>
							<?php endif; ?>

							<!-- Name -->
							<?php $name = $position_one['name']; ?>
							<?php if($name): ?>
								<p><?php _e($name); ?></p>
							<?php endif; ?>

							<!-- Description -->
							<?php $description = $position_one['description']; ?>
							<?php if($description): ?>
								<p><?php _e($description); ?></p>
							<?php endif; ?>

							<!-- Status -->
							<?php $status = $position_one['status']; ?>
							<?php if($status): ?>
								<p><?php _e($status); ?></p>
							<?php endif; ?>
							</div>
					<?php endif; ?>

					<!-- Position Two -->
					<?php $position_two = get_field('position_two'); ?>
					<?php if($position_two): ?>
						<div class="position-card">
							<!-- Group -->
							<?php $group = $position_two['group']; ?>
							<?php if($group): ?>
								<p><?php _e($group); ?></p>
							<?php endif; ?>

							<!-- Name -->
							<?php $name = $position_two['name']; ?>
							<?php if($name): ?>
								<p><?php _e($name); ?></p>
							<?php endif; ?>

							<!-- Description -->
							<?php $description = $position_two['description']; ?>
							<?php if($description): ?>
								<p><?php _e($description); ?></p>
							<?php endif; ?>

							<!-- Status -->
							<?php $status = $position_two['status']; ?>
							<?php if($status): ?>
								<p><?php _e($status); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<!-- Position Three -->
					<?php $position_three = get_field('position_three'); ?>
					<?php if($position_three): ?>
						<div class="position-card">
							<!-- Group -->
							<?php $group = $position_three['group']; ?>
							<?php if($group): ?>
								<p><?php _e($group); ?></p>
							<?php endif; ?>

							<!-- Name -->
							<?php $name = $position_three['name']; ?>
							<?php if($name): ?>
								<p><?php _e($name); ?></p>
							<?php endif; ?>

							<!-- Description -->
							<?php $description = $position_three['description']; ?>
							<?php if($description): ?>
								<p><?php _e($description); ?></p>
							<?php endif; ?>

							<!-- Status -->
							<?php $status = $position_three['status']; ?>
							<?php if($status): ?>
								<p><?php _e($status); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<!-- Position Four -->
					<?php $position_four = get_field('position_four'); ?>
					<?php if($position_four): ?>
						<div class="position-card">
							<!-- Group -->
							<?php $group = $position_four['group']; ?>
							<?php if($group): ?>
								<p><?php _e($group); ?></p>
							<?php endif; ?>

							<!-- Name -->
							<?php $name = $position_four['name']; ?>
							<?php if($name): ?>
								<p><?php _e($name); ?></p>
							<?php endif; ?>

							<!-- Description -->
							<?php $description = $position_four['description']; ?>
							<?php if($description): ?>
								<p><?php _e($description); ?></p>
							<?php endif; ?>

							<!-- Status -->
							<?php $status = $position_four['status']; ?>
							<?php if($status): ?>
								<p><?php _e($status); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>

				</div>
				

			</section>


			<!-- Training -->
			<section class="training">

				<!-- Image One -->
				<?php $training_image_one = get_field('training_image_one'); ?>
				<?php if($training_image_one): ?>
					<?php 
						$img_url = $training_image_one['url'];
					?>
					<div class="training-img training-img-one">
						<img src="<?php print_r(esc_url($img_url)); ?>">
					</div>
				<?php endif; ?>

				<!-- Image Two -->
				<?php $training_image_two = get_field('training_image_two'); ?>
				<?php if($training_image_two): ?>
					<?php 
						$img_url = $training_image_two['url'];
					?>
					<div class="training-img training-img-two">
						<img src="<?php print_r(esc_url($img_url)); ?>">
					</div>
				<?php endif; ?>

				<!-- Title -->
				<?php $training_title = get_field('training_title'); ?>
				<?php if($training_title): ?>
					<h3><?php _e($training_title); ?></h3>
				<?php endif; ?>

				<!-- Text -->
				<?php $training_text = get_field('training_text'); ?>
				<?php if($training_text): ?>
					<?php _e($training_text); ?>
				<?php endif; ?>

			</section>


			<!-- Join Us -->
			<section class="join-us">

				<!-- Title -->
				<?php $join_us_title = get_field('join_us_title'); ?>
				<?php if($join_us_title): ?>
					<h3><?php _e($join_us_title); ?></h3>
				<?php endif; ?>

				<!-- Text -->
				<?php $join_us_text = get_field('join_us_text'); ?>
				<?php if($join_us_text): ?>
					<p><?php _e($join_us_text); ?></p>
				<?php endif; ?>

				<!-- Join Us Form -->
				<?php $join_us_form = get_field('join_us_form'); ?>
				<?php if($join_us_form): ?>
					<?php echo do_shortcode($join_us_form); ?>
				<?php endif; ?>

				<!-- Images -->
				<?php $join_us_images = get_field('join_us_images'); ?>
				<?php if($join_us_images): ?>
					<div class="join-us-img">

						<!-- Image One -->
						<?php $image_one = $join_us_images['image_one']; ?>
						<?php if($image_one): ?>
							<?php 
								$img_url = $image_one['url'];
							?>
							<div class="join-us-img-one">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>

						<!-- Image Two -->
						<?php $image_Two = $join_us_images['image_two']; ?>
						<?php if($image_two): ?>
							<?php 
								$img_url = $image_two['url'];
							?>
							<div class="join-us-img-two">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>

						<!-- Image Three -->
						<?php $image_three = $join_us_images['image_three']; ?>
						<?php if($image_three): ?>
							<?php 
								$img_url = $image_three['url'];
							?>
							<div class="join-us-img-three">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>

					</div>

				<?php endif; ?>

			</section>		

		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>

	</main><!-- #main -->

<?php

get_footer();
get_footer();
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package calling-lake
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) :?>

			<!-- Banner -->
			<section class="banner banner-single">
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

			<!-- displays the page/post ID of the page -->
			<div class="program-single" id="post-<?php the_ID();?>" >

				<!-- Section One -->
				<?php $program_info_section_one = get_field('program_info_section_one'); ?>
				<?php if($program_info_section_one): ?>
					<div class="program-single-section-one">

						<!-- Image One -->
						<?php $image_one = $program_info_section_one['image_one']; ?>
						<?php if($image_one): ?>
							<?php 
								$img_url = $image_one['url'];
							?>
							<div class="program-single-img program-single-img-one">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>

						<!-- Image Two -->
						<?php $image_two = $program_info_section_one['image_two']; ?>
						<?php if($image_two): ?>
							<?php 
								$img_url = $image_two['url'];
							?>
							<div class="program-single-img program-single-img-two">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>

						<!-- Image Three -->
						<?php $image_three = $program_info_section_one['image_three']; ?>
						<?php if($image_three): ?>
							<?php 
								$img_url = $image_three['url'];
							?>
							<div class="program-single-img program-single-img-three">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>
			
						
						<!-- Text -->
						<?php $section_one_text = $program_info_section_one['section_one_text']; ?>
						<?php if($section_one_text): ?>
							<p><?php _e($section_one_text); ?></p>
						<?php endif; ?>

					</div>
				<?php endif; ?>

				<!-- Section Two -->
				<?php $program_info_section_two = get_field('program_info_section_two'); ?>
				<?php if($program_info_section_two): ?>
					<div class="program-single-section-two">

						<!-- List -->
						<?php $section_two_list = $program_info_section_two['section_two_list']; ?>
						<?php if($section_two_list): ?>

							<ul>
								<!-- Item One -->
								<?php $item_one = $section_two_list['item_one']; ?>
								<?php if($item_one): ?>
									<li><?php _e($item_one); ?></li>
								<?php endif; ?>

								<!-- Item Two -->
								<?php $item_two = $section_two_list['item_two']; ?>
								<?php if($item_two): ?>
									<li><?php _e($item_two); ?></li>
								<?php endif; ?>

								<!-- Item Three -->
								<?php $item_three = $section_two_list['item_three']; ?>
								<?php if($item_three): ?>
									<li><?php _e($item_three); ?></li>
								<?php endif; ?>

								<!-- Item Four -->
								<?php $item_four = $section_two_list['item_four']; ?>
								<?php if($item_four): ?>
									<li><?php _e($item_four); ?></li>
								<?php endif; ?>
							</ul>

						<?php endif; ?>

						<!-- Image One -->
						<?php $image_one = $program_info_section_two['image_one']; ?>
						<?php if($image_one): ?>
							<?php 
								$img_url = $image_one['url'];
							?>
							<div class="program-single-img program-single-img-one">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>

						<!-- Image Two -->
						<?php $image_two = $program_info_section_two['image_two']; ?>
						<?php if($image_two): ?>
							<?php 
								$img_url = $image_two['url'];
							?>
							<div class="program-single-img program-single-img-two">
								<img src="<?php print_r(esc_url($img_url)); ?>">
							</div>
						<?php endif; ?>
						
						

					</div>
				<?php endif; ?>

			</div>

		<?php else : ?>
                <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
                <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();

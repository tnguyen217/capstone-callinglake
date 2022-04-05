<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package calling-lake
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="logo">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$calling_lake_description = get_bloginfo( 'description', 'display' );
				if ( $calling_lake_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $calling_lake_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>

			<!-- Get Involved -->
			<div class="footer-get-involved">
				<?php if(is_active_sidebar('footer-col-1')):?>
					<?php dynamic_sidebar('footer-col-1'); ?>
				<?php endif; ?>
			</div>
			
			<!-- Programs -->
			<div class="footer-programs">
				<?php if(is_active_sidebar('footer-col-2')):?>
					<?php dynamic_sidebar('footer-col-2'); ?>
				<?php endif; ?>
			</div>
			
			<!-- Contact -->
			<div class="footer-contact">
				<?php if(is_active_sidebar('footer-col-3')):?>
					<?php dynamic_sidebar('footer-col-3'); ?>
				<?php endif; ?>
			</div>

			<!-- Connect -->
			<div class="footer-social">
				<?php if(is_active_sidebar('footer-col-4')):?>
					<?php dynamic_sidebar('footer-col-4'); ?>
				<?php endif; ?>
			</div>

		</div>



		<div class="site-info">	
			
			<p class="copyright">&copy;2022 Calling Lake Search & Rescue by Lunar Point. All rights reserved.</p>		

			<p class="policy">
				<a href="#">Privacy Policy</a>
				<span class="sep"> | </span>
				<a href="#">Terms of Use</a>
			</p>
			
		</div><!-- .site-info -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

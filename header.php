<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package calling-lake
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/46e6209e11.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'calling-lake' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="container flex-container">
			<div class="logo">
				<?php if ( ! has_custom_logo() ) { ?>
					<?php if ( is_front_page() && is_home() ) : ?>
						<!-- if your page is set to front-page or blog display the site title (appearance > customize) -->
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					<?php else : ?>
					<!-- if your page is not set to front-page or blog display the site title (appearance > customize) -->
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
						<!-- otherwise display the custom logo. -->
					<?php } else {
						the_custom_logo();
					}?>
			</div>
	
			<div class="sm-screens">
				<div class="sm-logo">
					<?php if ( ! has_custom_logo() ) { ?>
						<?php if ( is_front_page() && is_home() ) : ?>
							<!-- if your page is set to front-page or blog display the site title (appearance > customize) -->
							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
						<?php else : ?>
						<!-- if your page is not set to front-page or blog display the site title (appearance > customize) -->
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
							<!-- otherwise display the custom logo. -->
						<?php } else {
							the_custom_logo();
						}?>
				</div>

				<!-- toggle icon -->
				<div class="toggle-icon">
					<i class="fa-solid fa-bars"></i>
				</div>
			</div>
	
			<nav>
				<?php 
					wp_nav_menu (
						// array of arguements
						array(
							'theme_location' => 'main-menu',
							'menu_class' => 'main-menu',
							'menu_id' => 'main-menu',
							'fallback_cb' => ''
						)
					)
				?>
			</nav>
		</div>

		
	</header><!-- #masthead -->

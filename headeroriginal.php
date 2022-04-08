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
	
			<!-- toggle icon -->
			<div class="sm-screens">
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

				<div class="toggle-icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

			<nav>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'container_class' => 'main-nav',
							'container_id' => 'main-nav',
							'menu_class' => 'main-menu',
							'menu_id'        => 'main-menu',
							'fallback_cb' => '',
						)
					);
				?>
			</nav>

		</div>
		
	</header><!-- #masthead -->

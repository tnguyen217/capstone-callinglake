<?php
/**
 * calling-lake functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package calling-lake
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function calling_lake_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on calling-lake, use a find and replace
		* to change 'calling-lake' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'calling-lake', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'calling-lake' ),
			'main-menu' => esc_html__( 'Main Menu', 'calling-lake' ),
			'footer-menu-1' => esc_html__( 'Footer Menu 1', 'calling-lake' ),
			'footer-menu-2' => esc_html__( 'Footer Menu 2', 'calling-lake' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'calling-lake' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'calling_lake_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'calling_lake_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function calling_lake_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'calling_lake_content_width', 640 );
}
add_action( 'after_setup_theme', 'calling_lake_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function calling_lake_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'calling-lake' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'calling-lake' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Header Donate Btn
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Donate Btn', 'calling-lake' ),
			'id'            => 'donate-btn',
			'description'   => esc_html__( 'Add widgets here.', 'calling-lake' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Header Donate Btn
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Donate Btn', 'calling-lake' ),
			'id'            => 'donate-btn',
			'description'   => esc_html__( 'Add widgets here.', 'calling-lake' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Footer Get Involved
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 1', 'calling-lake' ),
			'id'            => 'footer-col-1',
			'description'   => esc_html__( 'Footer: Get Involved', 'calling-lake' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Footer Programs
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 2', 'calling-lake' ),
			'id'            => 'footer-col-2',
			'description'   => esc_html__( 'Footer: Programs', 'calling-lake' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Footer Contact
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 3', 'calling-lake' ),
			'id'            => 'footer-col-3',
			'description'   => esc_html__( 'Footer: Contact', 'calling-lake' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Footer Connect
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 4', 'calling-lake' ),
			'id'            => 'footer-col-4',
			'description'   => esc_html__( 'Footer: Connect', 'calling-lake' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Map Widget
	register_sidebar(
		array(
			'name'          => esc_html__( 'Map Widget', 'calling-lake' ),
			'id'            => 'map-widget',
			'description'   => esc_html__( 'Map Widget', 'calling-lake' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'calling_lake_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function calling_lake_scripts() {
	wp_enqueue_style( 'calling-lake-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'calling-lake-style', 'rtl', 'replace' );

	//GOOGLE FONTS
    wp_enqueue_style('Ubuntu','https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap',false);
    wp_enqueue_style('Open Sans','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap',false);

	// STYLE
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css') ;
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css') ;

	// JS
	wp_enqueue_script( 'calling-lake-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	// main.js script
	// wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '3.6.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'calling_lake_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


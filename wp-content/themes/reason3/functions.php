<?php
/**
 * reason-wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package reason-wp
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
function reason_wp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on reason-wp, use a find and replace
		* to change 'reason-wp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'reason-wp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'reason-wp' ),
			'menu-2' => esc_html__( 'Top Menu', 'reason-wp' ),
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
			'reason_wp_custom_background_args',
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
add_action( 'after_setup_theme', 'reason_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reason_wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reason_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'reason_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reason_wp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'reason-wp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init' );

function reason_wp_widgets_init_slider() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Slider', 'reason-wp' ),
			'id'            => 'slider-area',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),
			'before_widget' => '<section class="banner grid layout">',
			'after_widget'  => '</section>',
		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init_slider' );

function reason_wp_widgets_init_info() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Info', 'reason-wp' ),
			'id'            => 'info-area',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),
			'before_widget' => '<section class="info grid">',
			'after_widget'  => '</section>',
		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init_info' );	
	
function reason_wp_widgets_init_card0() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Cart Title', 'reason-wp' ),
			'id'            => 'card0-area',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),

		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init_card0' );


function reason_wp_widgets_init_card1() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Cart 1', 'reason-wp' ),
			'id'            => 'card1-area',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),

		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init_card1' );


function reason_wp_widgets_init_card2() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Cart 2', 'reason-wp' ),
			'id'            => 'card2-area',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),
			
		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init_card2' );

function reason_wp_widgets_init_card3() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Cart 3', 'reason-wp' ),
			'id'            => 'card3-area',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),
		
		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init_card3' );

function reason_wp_widgets_init_card4() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Cart 4', 'reason-wp' ),
			'id'            => 'card4-area',
			'description'   => esc_html__( 'Add widgets here.', 'reason-wp' ),

		)
	);
}
add_action( 'widgets_init', 'reason_wp_widgets_init_card4' );

/**
 * Enqueue scripts and styles.
 */
function reason_wp_scripts() {
	wp_enqueue_style( 'reason-wp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'reason-wp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'reason-wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reason_wp_scripts' );

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


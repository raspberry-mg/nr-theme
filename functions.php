<?php
/**
 * nr-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nr-theme
 */

if ( ! function_exists( 'nr_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nr_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nr-theme, use a find and replace
		 * to change 'nr-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nr-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'nr-theme' ),
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
				'nr_theme_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'nr_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nr_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nr_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'nr_theme_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function nr_theme_scripts() {
	wp_enqueue_style( 'nr-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nr-theme-style', 'rtl', 'replace' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
    wp_enqueue_style( 'nr-theme-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/df6cc2c6cd.js', array(), '1.0.0', true );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-4.4.1.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'nr-theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nr_theme_scripts' );


/**
 * Theme setup.
 */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
        register_nav_menu( 'primary', __( 'Primary navigation', 'Noutrem' ) );
    } endif;

/**
 * Add Bootstrap dropdown nav
 */
require_once('class-wp-bootstrap-navwalker.php');

/**
 * include Custom Post Type 'Services'
 */
include( 'cpt_services.php' );

/**
 * include Custom Post Type 'FAQ'
 */
include( 'cpt_accordion_FAQ.php' );

/**
 * Include metaboxes
 */
include('metabox_services.php');

include('metabox_color_label.php');

/**
 * Connect ColorPicker for metabox
 */
function wpse_80236_Colorpicker(){
    wp_enqueue_style( 'wp-color-picker');
    //
    wp_enqueue_script( 'wp-color-picker');
}
add_action('admin_enqueue_scripts', 'wpse_80236_Colorpicker');








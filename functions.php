<?php
/**
 * fahrschule-team functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fahrschule-team
 */

if ( ! function_exists( 'fahrschule_team_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fahrschule_team_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fahrschule-team, use a find and replace
		 * to change 'fahrschule-team' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fahrschule-team', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'top_menu' => esc_html__( 'Primary', 'fahrschule-team' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fahrschule_team_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fahrschule_team_setup' );

function add_menuclass($nav) {
	return preg_replace('/<a /', '<a class="p-2-cust text-link"', $nav);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fahrschule_team_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fahrschule_team_content_width', 640 );
}
add_action( 'after_setup_theme', 'fahrschule_team_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fahrschule_team_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fahrschule-team' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fahrschule-team' ),
		'before_widget' => '<div class="card text-white p-3 mb-3 mt-4 bg-yellow border-0">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'fahrschule_team_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


// get theme version
function wpmix_get_version() {
	$theme_data = wp_get_theme();
	return $theme_data->Version;
}
$theme_version = wpmix_get_version();
global $theme_version;

// get random number
function wpmix_get_random() {
	$randomizr = '-' . rand(100,999);
	return $randomizr;
}
$random_number = wpmix_get_random();
global $random_number;

// include custom stylesheet
function wpmix_queue_css() {
	global $theme_version, $random_number;
	if (!is_admin()) {
		wp_register_style('fahrschule_style', get_template_directory_uri() . '/assets/css/style.css', false, $theme_version . $random_number);
		wp_enqueue_style('fahrschule_style');
	}
}
add_action('wp_print_styles', 'wpmix_queue_css');

/**
 * Enqueue scripts and styles.
 */
include( get_template_directory() . '/inc/enqueue.php' );

add_action( 'wp_enqueue_scripts', 'fahr_enqueue' );




add_filter('nav' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('a', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}


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


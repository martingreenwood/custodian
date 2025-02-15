<?php
/**
 * Custodian functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custodian
 */

if ( ! function_exists( 'custodian_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function custodian_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Custodian, use a find and replace
		 * to change 'custodian' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'custodian', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'custodian' ),
			'menu-2' => esc_html__( 'Footer', 'custodian' ),
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
add_action( 'after_setup_theme', 'custodian_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function custodian_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'custodian_content_width', 1280 );
}
add_action( 'after_setup_theme', 'custodian_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function custodian_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'custodian' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'custodian' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'custodian_widgets_init' );

/**
 * Embed scripts.
 */
function custodian_embed_scripts() {
?>
<!-- -->
<?php
}
add_action( 'wp_head', 'custodian_embed_scripts', 99 );


/**
 * Enqueue scripts and styles.
 */
function custodian_scripts() {
	wp_enqueue_style( 'custodian-style', get_stylesheet_uri() );
	wp_enqueue_style( 'custodian-map', get_template_directory_uri() . '/assets/cssmap/cssmap-continents/cssmap-continents.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'custodian-slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), '', true );
	wp_enqueue_script( 'custodian-map', get_template_directory_uri() . '/assets/cssmap/jquery.cssmap.min.js', array(), '', true );
	wp_enqueue_script( 'custodian-parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), '', true );
	wp_enqueue_script( 'custodian-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'custodian-base', get_template_directory_uri() . '/assets/js/base.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'custodian_scripts' );

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


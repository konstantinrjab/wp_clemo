<?php
/**
 * clemo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clemo
 */

if ( ! function_exists( 'clemo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function clemo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on clemo, use a find and replace
		 * to change 'clemo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'clemo', get_template_directory() . '/languages' );

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
				'Main Menu' => 'Primary',
//            'Main Menu' => esc_html__( 'primary', 'wordpress' ),
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
		add_theme_support( 'custom-background', apply_filters( 'clemo_custom_background_args', array(
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
add_action( 'after_setup_theme', 'clemo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clemo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clemo_content_width', 640 );
}

add_action( 'after_setup_theme', 'clemo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clemo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'clemo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'clemo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'clemo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clemo_scripts() {
	wp_enqueue_style( 'clemo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'clemo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'clemo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'clemo_scripts' );

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


function add_custom_css() {
	//bootstrap
	wp_enqueue_style( 'bootstrap', home_url() . '/wp-content/themes/clemo/assets/css/bootstrap.min.css' );
	//owl carousel
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owlcarousel/owl.carousel.min.css' );
	wp_enqueue_style( 'owl_theme', get_template_directory_uri() . '/assets/css/owlcarousel/owl.theme.default.min.css' );
	//font-awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	//main
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'add_custom_css' );


function wpdocs_dequeue_script() {
	wp_dequeue_script( 'jquery' );
}

add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );

function add_custom_scripts() {

//	wp_deregister_script('jquery');
//	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array( 'jquery' ), '3.2.1', true);
	wp_register_script( 'owl-carousel', home_url() . '/wp-content/themes/clemo/assets/css/owlcarousel/owl.carousel.min.js' );
//	wp_register_script( 'bootstrap', home_url() . '/wp-content/themes/clemo/assets/js/bootstrap.bundle.js' );
	wp_register_script( 'main', home_url() . '/wp-content/themes/clemo/assets/js/main.js', array( 'jquery' ), '1.0' );

//	wp_enqueue_script('jquery');
	wp_enqueue_script( 'owl-carousel' );
//	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'main' );
}

add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );
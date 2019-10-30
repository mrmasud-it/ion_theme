<?php
/**
 * ion_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ion_theme
 */
// nav walker
require_once get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
// short code & visual composer
if ( file_exists(get_template_directory().'/inc/vc-element.php') ){
	require_once get_template_directory().'/inc/vc-element.php';
}

if ( file_exists(get_template_directory().'/inc/vc-output.php') ){
	require_once get_template_directory().'/inc/vc-output.php';
}

// for all widgets
if ( file_exists(get_template_directory().'/inc/widgets-elements.php') ){
	require_once get_template_directory().'/inc/widgets-elements.php';
}

// load tgm
require_once get_template_directory() . '/inc/tgm.php';

if ( ! function_exists( 'ion_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ion_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ion_theme, use a find and replace
		 * to change 'ion_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ion_theme', get_template_directory() . '/languages' );

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
			'mainmenu' => esc_html__( 'Primary', 'ion_theme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'ion_theme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'ion_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ion_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ion_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ion_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ion_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar One', 'ion_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ion_theme' ),
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Two', 'ion_theme' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'ion_theme' ),
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'ion_theme' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'ion_theme' ),
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'ion_theme' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'ion_theme' ),
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'ion_theme' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'ion_theme' ),
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'ion_theme' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'ion_theme' ),
		'before_widget' => '<ul class="copyright">',
		'after_widget'  => '</ul>',
		'before_title'  => '',
		'after_title'   => '',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'Social', 'ion_theme' ),
		'id'            => 'social',
		'description'   => esc_html__( 'Add widgets here.', 'ion_theme' ),
		'before_widget' => '<ul class="icons">',
		'after_widget'  => '</ul>',
		'before_title'  => '',
		'after_title'   => '',
	));
}
add_action( 'widgets_init', 'ion_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ion_theme_scripts() {
	wp_enqueue_style( 'ion_theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'ion_theme-fontawesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'ion-skel', get_template_directory_uri() . '/assets/css/skel.css', '2.0.1', true );
	wp_enqueue_style( 'ion-style', get_template_directory_uri() . '/assets/css/style.css', '2.0.1', true );
	wp_enqueue_style( 'ion-xlarge', get_template_directory_uri() . '/assets/css/style-xlarge.css', '2.0.1', true );
	wp_enqueue_script( 'ion_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ion_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'ion-skel', get_template_directory_uri() . '/assets/js/skel.min.js', array('jquery'), '2.0.1', true );
	wp_enqueue_script( 'ion-layers', get_template_directory_uri() . '/assets/js/skel-layers.min.js', array('jquery'), '2.0.1', true );
	wp_enqueue_script( 'ion-init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), '2.0.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ion_theme_scripts' );

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

//admin bar position
function move_admin_bar() {
	echo '
	<style type="text/css">
	body {margin-top: -28px;padding-bottom: 28px;}
	body.admin-bar #wphead {padding-top: 0;}
	body.admin-bar #footer {padding-bottom: 28px;}
	#wpadminbar { top: auto !important;bottom: 0;}
	#wpadminbar .quicklinks .menupop ul { bottom: 28px;}
	</style>';
}
	add_action( 'wp_head', 'move_admin_bar' );
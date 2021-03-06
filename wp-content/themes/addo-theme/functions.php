<?php
/**
 * addo-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package addo-theme
 */

if ( ! function_exists( 'addo_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function addo_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on addo-theme, use a find and replace
	 * to change 'addo-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'addo-theme', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'addo-theme' ),
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
	add_theme_support( 'custom-background', apply_filters( 'addo_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'addo_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function addo_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'addo_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'addo_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function addo_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'addo-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'addo-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'addo_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function my_init() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery'); 
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', false, '1.3.2'); 
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init');

function addo_theme_scripts() {
	wp_enqueue_style( 'addo-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'addo-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'addo-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
    wp_enqueue_script('txtanim1', get_template_directory_uri() . '/js/TweenMax.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('txtanim2', get_template_directory_uri() . '/js/cooltext.animations.js', array('jquery'), '1.0', true);
    wp_enqueue_script('txtanimj', get_template_directory_uri() . '/js/cooltext.min.js', array('jquery'), '1.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'addo_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// FUNCTION FOR VARIATION OF BUTTON RETURN FOR NEWS & POSTS //

function wpdocs_excerpt_more( $more ) {
	if(is_front_page() || is_single($post = '')){
		return ' ...<div class="archive-button"><button class="cloud-btn"><a href="'.get_the_permalink().'" rel="nofollow">Read More...</a></button><button class="cloud-btn"><a href="'.get_site_url().'/news" rel="nofollow">See all our news</a></button></div>';
	} else {
		return ' ...<div class="archive-button"><button class="cloud-btn"><a href="'.get_the_permalink().'" rel="nofollow">Read More...</a></button></div>';
	}
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// FUNCTION FOR NEWS EXCERPT LENGTH //

function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


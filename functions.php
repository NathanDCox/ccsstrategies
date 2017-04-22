<?php
/**
 * ccs functions and definitions
 *
 * @package ccs
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 692; /* pixels */
}

if ( ! function_exists( 'ccs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ccs_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ccs, use a find and replace
	 * to change 'ccs' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ccs', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ccs' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.

	add_theme_support( 'custom-background', apply_filters( 'ccs_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ccs_setup
add_action( 'after_setup_theme', 'ccs_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ccs_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ccs' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ccs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ccs_scripts() {

	wp_enqueue_style( 'ccs-google-font', '//fonts.googleapis.com/css?family=Dosis');

	wp_enqueue_style( 'ccs-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

	wp_enqueue_style( 'ccs-style', get_stylesheet_uri() );
//get_stylesheet_uri()
	wp_enqueue_script( 'ccs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20170301', true );

	wp_enqueue_script( 'ccs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170301', true );

	wp_enqueue_script( 'ccs-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.js');

	wp_enqueue_script( 'ccs-jquery-cycle', get_template_directory_uri() . '/js/jquery.cycle2.min.js', array(), '20170301', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ccs_scripts' );

function my_custom_post_portfolio() {
  $labels = array(
    'name'               => _x( 'Sites', 'post type general name' ),
    'singular_name'      => _x( 'Site', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Site' ),
    'edit_item'          => __( 'Edit Site' ),
    'new_item'           => __( 'New Site' ),
    'all_items'          => __( 'All Sites' ),
    'view_item'          => __( 'View Site' ),
    'search_items'       => __( 'Search Sites' ),
    'not_found'          => __( 'No Sites found' ),
    'not_found_in_trash' => __( 'No Sites found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays portfolio items.',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields' ),
    'has_archive'   => true,
    'rewrite' => array('slug' => 'portfolio-post'),
  );
  
  register_post_type( 'portfolio-post', $args ); 
}
add_action( 'init', 'my_custom_post_portfolio' );

function my_custom_post_services() {
  $labels = array(
    'name'               => _x( 'Services', 'post type general name' ),
    'singular_name'      => _x( 'Service', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Service' ),
    'edit_item'          => __( 'Edit Service' ),
    'new_item'           => __( 'New Service' ),
    'all_items'          => __( 'All Services' ),
    'view_item'          => __( 'View Service' ),
    'search_items'       => __( 'Search Services' ),
    'not_found'          => __( 'No Services found' ),
    'not_found_in_trash' => __( 'No Services found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays service items.',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions', 'custom-fields' ),
    'has_archive'   => true,
    'rewrite' => array('slug' => 'services-post'),
  );
  
  register_post_type( 'services-post', $args ); 
}
add_action( 'init', 'my_custom_post_services' );

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


<?php
/**
 * Genozy functions and definitions
 *
 * @author hamam fajar <hamamfajar@gmail.com>
 * @package Genozy.com
 */

/**
 * Function Setup
 *
 * @package Genozy.com
 */
function genozy_setup() {

  load_theme_textdomain( 'genozy' );

  /*
   * Enable support for custom logo.
   *
   *  @since Twenty Sixteen 1.2
   */
  add_theme_support( 'custom-logo', array(
    'height'      => 240,
    'width'       => 240,
    'flex-height' => true,
  ) );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 9999 );

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'genozy' ),
    'social'  => __( 'Social Links Menu', 'genozy' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );


}
add_action( 'after_setup_theme', 'genozy_setup' );


function hook_css() {
	$output="
    <link rel='stylesheet' href='/wp-content/themes/genozy/assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/wp-content/themes/genozy/assets/css/bootstrap-theme.min.css' type='text/css' media='all' />
    ";
	echo $output;
}

function hook_footer() {
	$output="::FOOTER";
	echo $output;
}


add_action('wp_head','hook_css');
add_action('wp_footer','hook_footer');



/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function genozy_scripts() {

  // used in the main stylesheet.
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7' );
//  wp_enqueue_style( 'bootstrap-theme-css', get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css', array(), '3.3.7' );
  wp_enqueue_style( 'bootstrap-blog-css', get_template_directory_uri() . '/assets/css/clean-blog.min.css', array(), null );

  // Theme stylesheet.
	wp_enqueue_style( 'genozy-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'genozy_scripts' );


/**
 * Registers a widget area.
 *
 * @package Genozy.com
 */
function genozy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'genozy' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'genozy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Content 1', 'genozy' ),
		'id'            => 'footer-1',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'genozy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'genozy_widgets_init' );

<?php
/**
 * My Wedding functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_Wedding
 */

/*
 * First! Define theme constant usefull for directory linking
 */
define( 'WEDD_THEME_PATH', get_template_directory() . '/' );
define( 'WEDD_THEME_URI', get_template_directory_uri() . '/' );
define( 'WEDD_THEME_INC', WEDD_THEME_PATH . 'inc/' );
define( 'WEDD_THEME_ICO', WP_CONTENT_URL . '/icons/' );
define( 'WEDD_THEME_IMG', WEDD_THEME_URI . 'img/' );
define( 'WEDD_THEME_CSS', WEDD_THEME_URI . 'css/' );
define( 'WEDD_THEME_JS', WEDD_THEME_URI . 'js/' );
define( 'WEDD_THEME_CONT', 'template-parts/content' );
define( 'WEDD_THEME_SECT', 'template-parts/section' );

if ( ! function_exists( 'wedding_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wedding_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'wedding', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'wedding' ),
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
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
	) );
}
endif; // wedding_setup
add_action( 'after_setup_theme', 'wedding_setup' );

/**
 * Admin Framework
 */
require_once WEDD_THEME_PATH.'admin/framework.php';
/**
 * Load All We Neededs
 */
require WEDD_THEME_INC.'theme-tags.php';
require WEDD_THEME_INC.'theme-extras.php';
require WEDD_THEME_INC.'theme-functions.php';
require WEDD_THEME_INC.'theme-enqueue.php';
require WEDD_THEME_INC.'theme-registers.php';
require WEDD_THEME_INC.'custom-header.php';
require WEDD_THEME_INC.'customizer.php';

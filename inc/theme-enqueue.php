<?php
/**
 * My Wedding register sidebar, CPT, Taxonomy.
 *
 * @package My_Wedding
 */

/**
 * Enqueue CSS.
 */
function wedding_css_scripts()
{	
	wp_enqueue_style( 'wedding-font', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), null );
	wp_enqueue_style( 'wedding-fa', WEDD_THEME_CSS.'font-awesome.min.css', array(), null );
	wp_enqueue_style( 'bootstrap', WEDD_THEME_CSS.'bootstrap-pack.min.css', array(), null );
	wp_enqueue_style( 'wedding-style', get_stylesheet_uri(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'wedding_css_scripts' );

/**
 * Enqueue JavaScript.
 */
function wedding_js_scripts()
{
	wp_enqueue_script( 'pace-js', WEDD_THEME_JS.'pace.min.js', array(), null, false );
	wp_enqueue_script( 'modernizr', WEDD_THEME_JS.'modernizr.custom.js', array(), null, false );
	wp_enqueue_script( 'scrollReveal', WEDD_THEME_JS.'scrollReveal.min.js', array(), '2.3.2', true );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', WEDD_THEME_JS.'bootstrap.min.js', array('jquery'), '3.3.5', true );
	wp_enqueue_script( 'bootstrap-select', WEDD_THEME_JS.'bootstrap-select.min.js', array('bootstrap'), '1.7.4', true );
	
	wp_enqueue_script( 'wedding-js', WEDD_THEME_JS.'wedding.min.js', array('jquery'), '2015.1015.1956', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wedding_js_scripts' );

/**
 * Enqueue script for custom customize control.
 */
function wedding_customize_enqueue() {
    wp_enqueue_script( 'custom-customize', WEDD_THEME_JS.'customizer.min.js', array( 'jquery', 'customize-controls' ), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'wedding_customize_enqueue' );

/**
 * Enqueue at Admin.
 */
function wedding_admin_scripts( $hook )
{	
	if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
	//	wp_enqueue_style( 'adm-font', '//fonts.googleapis.com/css?family=Lato:400,700,900|Pacifico' );
	//	wp_enqueue_style( 'adm-bootstrap', WEDD_THEME_CSS.'bootstrap.min.css' );
	}
}
add_action( 'admin_enqueue_scripts', 'wedding_admin_scripts', 10, 1 );

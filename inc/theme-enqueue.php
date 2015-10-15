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
	wp_enqueue_style( 'wedding-font', '//fonts.googleapis.com/css?family=Lato:400,700,900|Pacifico' );
	wp_enqueue_style( 'wedding-fa', WEDD_THEME_CSS.'font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', WEDD_THEME_CSS.'bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-theme', WEDD_THEME_CSS.'bootstrap-theme.min.css' );
	wp_enqueue_style( 'bootstrap-select', WEDD_THEME_CSS.'bootstrap-select.min.css' );
	wp_enqueue_style( 'bootstrap-checkbox', WEDD_THEME_CSS.'bootstrap-checkbox.min.css' );
	wp_enqueue_style( 'wedding-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wedding_css_scripts' );

/**
 * Enqueue JavaScript.
 */
function wedding_js_scripts()
{
	wp_enqueue_script( 'bootstrap', WEDD_THEME_JS.'bootstrap.min.js', array(), '3.3.5', true );
	wp_enqueue_script( 'bootstrap-select', WEDD_THEME_JS.'bootstrap-select.min.js', array('bootstrap'), '1.7.4', true );
	
	wp_enqueue_script( 'scrollReveal', WEDD_THEME_JS.'scrollReveal.min.js', array(), '2.3.2', true );
	wp_enqueue_script( 'wedding-navigation', WEDD_THEME_JS.'navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'wedding-skip-link-focus-fix', WEDD_THEME_JS.'skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wedding_js_scripts' );

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
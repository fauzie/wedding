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
	wp_enqueue_style( 'wedding-font', '//fonts.googleapis.com/css?family=Lato:300,400,700|Pacifico', array(), null );
	wp_enqueue_style( 'wedding-fa', WEDD_THEME_CSS.'font-awesome.min.css', array(), null );
	wp_enqueue_style( 'bootstrap', WEDD_THEME_CSS.'bootstrap-pack.min.css', array(), null );
	wp_enqueue_style( 'wedding-style', get_stylesheet_uri(), array(), null );

	/* Development Environment */
	wp_enqueue_style( 'sidebar', WEDD_THEME_CSS.'content-sidebar.css', array(), null );
	wp_enqueue_style( 'mpmenu', WEDD_THEME_CSS.'mpmenu.css', array(), null );
	wp_enqueue_style( 'rtl', WEDD_THEME_CSS.'rtl.css', array(), null );
	wp_enqueue_style( 'pace', WEDD_THEME_CSS.'pace.css', array(), null );
	wp_enqueue_style( 'wedding', WEDD_THEME_CSS.'wedding.css', array(), null );

	/* Production Environment */
	//wp_enqueue_style( 'wedding-theme', WEDD_THEME_CSS.'wedding.min.css', array(), null );
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
	wp_enqueue_script( 'bootstrap-select', WEDD_THEME_JS.'bootstrap-select.min.js', array('jquery'), '1.7.4', true );
	wp_enqueue_script( 'parallax-scroll', WEDD_THEME_JS.'parallax-scroll.min.js', array('jquery'), '0.2.0', true );
	wp_enqueue_script( 'easing', WEDD_THEME_JS.'easing.min.js', array('jquery'), '1.3.2', true );

	/* Development Environment */
	wp_enqueue_script( 'classie-js', WEDD_THEME_JS.'classie.js', array(), null, true );
	wp_enqueue_script( 'mlpushmenu-js', WEDD_THEME_JS.'mlpushmenu.js', array(), null, true );
	wp_enqueue_script( 'navigation-js', WEDD_THEME_JS.'navigation.js', array(), null, true );
	wp_enqueue_script( 'skip-link-js', WEDD_THEME_JS.'skip-link-focus-fix.js', array(), null, true );
	wp_enqueue_script( 'wedding-js', WEDD_THEME_JS.'wedding.js', array('jquery'), '2015.1015.1956', true );

	/* Production Environment */
	//wp_enqueue_script( 'wedding-js', WEDD_THEME_JS.'wedding.min.js', array('jquery'), '2015.1015.1956', true );

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

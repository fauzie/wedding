<?php
/**
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
	wp_enqueue_style( 'wedding-style', get_stylesheet_uri(), array(), filemtime( WEDD_THEME_PATH.'style.css' ) );

	/* Development Environment */
	wp_enqueue_style( 'sidebar', WEDD_THEME_CSS.'content-sidebar.css', array(), filemtime( WEDD_THEME_PATH.'css/content-sidebar.css' ) );
	wp_enqueue_style( 'rtl', WEDD_THEME_CSS.'rtl.css', array(), filemtime( WEDD_THEME_PATH.'css/rtl.css' ) );
	wp_enqueue_style( 'pace', WEDD_THEME_CSS.'pace.css', array(), filemtime( WEDD_THEME_PATH.'css/pace.css' ) );
	wp_enqueue_style( 'wedding', WEDD_THEME_CSS.'wedding.css', array(), filemtime( WEDD_THEME_PATH.'css/wedding.css' ) );
	wp_enqueue_style( 'responsive', WEDD_THEME_CSS.'responsive.css', array(), filemtime( WEDD_THEME_PATH.'css/responsive.css' ) );

	/* Production Environment */
	//wp_enqueue_style( 'wedding-theme', WEDD_THEME_CSS.'wedding.min.css', array(), filemtime( WEDD_THEME_CSS.'wedding.min.css' ) );
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
    
    /* === Bootstrap Family === */
    if ( WP_DEBUG ) {
		wp_enqueue_script( 'bootstrap', WEDD_THEME_JS.'bootstrap.js', array('jquery'), '3.3.5', true );
		wp_enqueue_script( 'bootstrap-select', WEDD_THEME_JS.'bootstrap-select.js', array('jquery'), '1.7.4', true );
    } else {
		wp_enqueue_script( 'bootstrap', WEDD_THEME_JS.'bootstrap.min.js', array('jquery'), filemtime( WEDD_THEME_PATH.'js/bootstrap.min.js' ), true );
    }
    
    /* === jQuery Plugin Family === */
    if ( WP_DEBUG ) {
    	wp_enqueue_script( 'jquery-easing', WEDD_THEME_JS.'jquery.easing.js', array('jquery'), '1.3.2', true );
    	wp_enqueue_script( 'jquery-parallaxs', WEDD_THEME_JS.'jquery.parallax-scroll.js', array('jquery'), '0.2.0', true );
    } else {
    	wp_enqueue_script( 'jquery-plugins', WEDD_THEME_JS.'jquery.plugins.min.js', array('jquery'), filemtime( WEDD_THEME_PATH.'js/jquery.plugins.min.js' ), true );
    }
    
    /* === Theme Wedding Family === */
    if ( WP_DEBUG ) {
		wp_enqueue_script( 'classie-js', WEDD_THEME_JS.'classie.js', array(), filemtime( WEDD_THEME_PATH.'js/classie.js' ), true );
		wp_enqueue_script( 'navigation-js', WEDD_THEME_JS.'navigation.js', array(), filemtime( WEDD_THEME_PATH.'js/navigation.js' ), true );
		wp_enqueue_script( 'skip-link-js', WEDD_THEME_JS.'skip-link-focus-fix.js', array(), filemtime( WEDD_THEME_PATH.'js/skip-link-focus-fix.js' ), true );
		wp_enqueue_script( 'wedding-js', WEDD_THEME_JS.'wedding.js', array('jquery'), filemtime( WEDD_THEME_PATH.'js/wedding.js' ), true );
    } else {
		wp_enqueue_script( 'wedding-js', WEDD_THEME_JS.'wedding.min.js', array('jquery'), filemtime( WEDD_THEME_PATH.'js/wedding.min.js' ), true );
    }
}
add_action( 'wp_enqueue_scripts', 'wedding_js_scripts' );

/**
 * Enqueue script for custom customize control.
 */
function wedding_customize_enqueue() {
    wp_enqueue_script( 'custom-customize', WEDD_THEME_JS.'customizer.min.js', array( 'jquery', 'customize-controls' ), filemtime(WEDD_THEME_PATH.'js/customizer.min.js'), true );
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

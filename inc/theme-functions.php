<?php
/**
 * My Wedding custom functions.
 *
 * @package My_Wedding
 */

/**
 * Adds custom Rewrite Rules
 */
function wedding_rewrite_rule() {
	$register = cs_get_option( 'f-register', 0 );
	$register_slug = get_post( $register )->post_name;

	add_rewrite_tag( '%step%', '([^&]+)' );
	add_rewrite_rule( '^'.$register_slug.'/([^/]*)/([^/]*)/?','index.php?page_id='.$register.'&$matches[1]=$matches[2]', 'top' );
}
add_action( 'init', 'wedding_rewrite_rule', 10, 0 );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wedding_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'wedding_body_classes' );

/**
 * Adds custom classes to active menu
 */
function wedding_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'wedding_nav_class' , 10 , 2);

/**
 * Get sidebar parameters
 *
 * @param string $mode
 * @param string $post_id
 * @return array
 */
function wedding_sidebar( $mode = '', $post_id = '' ) {

	if ( $post_id == '' ) {
		global $post,$wp_query;
		if( is_object( $wp_query ) )
			$ID = $wp_query->get_queried_object_id();
		elseif ( !empty($post->ID) )
			$ID = $post->ID;
	} else {
		$ID = $post_id;
	}

	if( !is_404() && ( get_post_type() == 'page' || get_post_type() == 'post' ) )
		$mw_check = mw_meta( '_custom_page_options', 'sidebar', false, $ID );
	else
		$mw_check = false;

	$mw_pos = mw_meta( '_custom_page_options', 'sidebar-pos', false, $ID );
	$mw_the = mw_meta( '_custom_page_options', 'the-sidebar', false, $ID );

	switch( $mode ){
		case 'content':
			if ( $mw_check && $mw_pos == 'right' )
				post_class( 'col-md-9' );
			elseif ( $mw_check && $mw_pos == 'left' )
				post_class( 'col-md-9 col-md-push-3' );
			else
				post_class( 'col-md-12' );
			break;
		case 'sidebar':
			if ( $mw_check && $mw_pos == 'left' )
				echo 'hidden-xs hidden-sm col-md-3 col-md-pull-9';
			else
				echo 'hidden-xs hidden-sm col-sm-12 col-md-3';
			break;
		case 'check':
			if( isset($mw_check) && $mw_pos != 'default' )
				return $mw_check;
			else
				return false;
			break;
		default:
			if ( $mw_check && $mw_the != '' )
				return $mw_the;
			break;
	}
}

/**
 * Get URL Link frontend parameters
 *
 * @param string $template
 * @return string
 */
function wedding_get_permalink( $template = '' ) {

	if( $template == '' )
		return home_url();

	$template = 'f-' . $template;
	$optvalue = cs_get_option( $template, '' );

	if( $optvalue != '' )
		return esc_url( get_permalink( $optvalue ) );
}

/**
 * WordPress AJAX
 * Get Category Link from wp_dropdown_categories
 *
 * @array json file
 */
add_action('wp_ajax_nopriv_category_link', 'wedding_category_link');
add_action('wp_ajax_category_link', 'wedding_category_link');

function wedding_category_link() {
    $the_ID = ( !empty($_POST['cat_id']) ) ? $_POST['cat_id'] : false;

    if ( $the_ID ) $catlink = get_category_link( $the_ID );
    echo $catlink;
    wp_die();
}

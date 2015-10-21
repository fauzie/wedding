<?php
/**
 * My Wedding custom functions.
 *
 * @package My_Wedding
 */

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

function wedding_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'wedding_nav_class' , 10 , 2);

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

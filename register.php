<?php
/*
 * Template Name: Register Page
 */

if ( is_array( get_site_option( 'illegal_names' )) && isset( $_GET[ 'new' ] ) && in_array( $_GET[ 'new' ], get_site_option( 'illegal_names' ) ) ) {
	wp_redirect( network_home_url() );
	die();
}

if ( !is_multisite() ) {
	wp_redirect( site_url('wp-login.php?action=register') );
	die();
}

if ( !is_main_site() ) {
	wp_redirect( network_site_url( '/register/' ) );
	die();
}

if ( is_user_logged_in() ) {
	wp_redirect( home_url() );
	die();
}

// Main
$active_signup = get_site_option( 'registration', 'none' );

if ( $active_signup == 'none' ) {
	wp_redirect( home_url() );
	die();
}

do_action( 'signup_header' );

get_header(); ?>

<header class="strike-line entry-header">
	<h1 class="text-sans">&quot;<?php the_title(); ?>&quot;</h1>
	<div class="lineee"></div>
</header><!-- .entry-header -->

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( WEDD_THEME_SECT, 'mu_register' ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

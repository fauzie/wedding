<?php
/*
 * Template Name: Register Page
 */

if ( !is_multisite() ) {
	wp_redirect( site_url('wp-login.php?action=register') );
	die();
}

if ( !is_main_site() ) {
	wp_redirect( network_site_url( 'wp-signup.php' ) );
	die();
}

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php

			get_template_part( WEDD_THEME_SECT, 'mu_register' );
		?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

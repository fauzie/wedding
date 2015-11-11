<?php
/*
 * Template Name: Login Page
 */

get_header(); ?>

<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( WEDD_THEME_CONT, 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

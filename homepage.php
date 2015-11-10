<?php
/*
 * Template Name: Homepage
 */
get_header(); ?>

<header class="strike-line entry-header">
	<h1 class="text-sans">&quot;<?php echo cs_get_option( 'desc' ); ?>&quot;</h1>
	<div class="lineee"></div>
</header><!-- .entry-header -->

<?php get_template_part( WEDD_THEME_CONT, 'home' ); ?>

<?php get_footer(); ?>

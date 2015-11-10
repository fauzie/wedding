<?php
/**
 * Template part for displaying page content in homepage.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package My_Wedding
 */
?>

<div id="primary" class="content-area container-fluid">
	<main id="main" class="site-main row" role="main">
		
	<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php wedding_sidebar( 'content' ); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">

		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
	<?php endwhile; // End of the loop. ?>

	<?php
	if( wedding_sidebar( 'check' ) )
		get_sidebar();
	?>

	</main><!-- #main -->
</div><!-- #primary -->

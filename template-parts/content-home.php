<?php
/**
 * Template part for displaying page content in homepage.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package My_Wedding
 */

?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">
		
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">

		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php endwhile; // End of the loop. ?>
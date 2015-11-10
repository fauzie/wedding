<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Wedding
 */

if ( ! is_active_sidebar( wedding_sidebar() ) ) {
	return;
}
?>

<div id="secondary" class="widget-area <?php wedding_sidebar('sidebar') ?>" role="complementary">
	<?php dynamic_sidebar( wedding_sidebar() ); ?>
</div><!-- #secondary -->

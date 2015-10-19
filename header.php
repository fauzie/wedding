<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Wedding
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-title" content="MyWedding">
<meta name="application-name" content="MyWedding">
<meta name="msapplication-TileColor" content="#e8638e">
<meta name="msapplication-TileImage" content="<?php echo WEDD_THEME_ICO; ?>mstile-144x144.png">
<meta name="msapplication-config" content="<?php echo WEDD_THEME_ICO; ?>browserconfig.xml">
<meta name="theme-color" content="#2b3e50">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo WEDD_THEME_ICO; ?>apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo WEDD_THEME_ICO; ?>favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo WEDD_THEME_ICO; ?>android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo WEDD_THEME_ICO; ?>favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo WEDD_THEME_ICO; ?>favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo WEDD_THEME_ICO; ?>manifest.json">
<link rel="mask-icon" href="<?php echo WEDD_THEME_ICO; ?>safari-pinned-tab.svg" color="#2b3e50">
<link rel="shortcut icon" href="<?php echo WEDD_THEME_ICO; ?>favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="preloader" class="preloader">
	<h1 class="text-center" style="width:280px;padding:80px 10px 0;margin:0 auto 20px"><?php echo file_get_contents(WEDD_THEME_IMG."logo.svg"); ?></h1>
	<div class="sk-chasing-dots">
       <div class="sk-child sk-dot1"></div>
       <div class="sk-child sk-dot2"></div>
     </div>
</div>
<div id="page-container" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wedding' ); ?></a>

	<a class="logo" href="<?php echo get_bloginfo('url') ?>" data-sr="move 60px, scale down 30%">
	<h1><?php echo file_get_contents(WEDD_THEME_IMG."logo.svg"); ?></h1></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wedding' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

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
	<div class="text-center">
		<h1><?php echo file_get_contents(WEDD_THEME_IMG."logo.svg"); ?></h1>
		<div class="sk-chasing-dots">
			<div class="sk-child sk-dot1"></div>
			<div class="sk-child sk-dot2"></div>
		</div>
	</div>
</div><!-- #preloader -->
	
<nav id="menu" class="panel navbar-default" role="navigation">
    <ul class="nav">
		<li class="fa">
			<a href="<?php echo get_bloginfo('url') ?>"><?php echo file_get_contents(WEDD_THEME_IMG."logo.svg"); ?></a>
		</li>
        <?php wp_nav_menu( array(
        	'container'	=> false,
			'theme_location' => 'primary',
			'menu_id' => 'primary-menu',
			'items_wrap' => '%3$s',
        ) ); ?>
    </ul>
</nav>
<div id="ofcanvas" class="naveasy-close hide"></div>
	
<div id="page-container" class="hfeed site">	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wedding' ); ?></a>

	<header id="header" class="site-header push" role="banner" data-width="1600" data-height="900">
	<div class="wrap">
		<div class="container navbar-top">
			<div class="row">
				<div class="col-md-3">
					<div class="menu-top">
						<a href="#" id="trigger" class="menu-link"><i class="fa fa-bars"></i> <span>Menu</span></a>
					</div>
				</div>
				<div class="col-md-3 col-md-offset-6">
					<div class="menu-top text-right">
						<a href="#"><span>Login</span> <i class="fa fa-lock"></i></a>
					</div>
				</div>
			</div>
		</div><!-- .navbar-top -->
		<div class="container text-center">
			<a class="logo" href="<?php echo get_bloginfo('url') ?>" data-sr="move 60px, scale down 30%">
			<h1><?php echo file_get_contents(WEDD_THEME_IMG."logo.svg"); ?></h1></a>
			<?php if( is_front_page() ): ?>
			<div class="intro-text">
				<div class="intro-heading" data-sr="wait 0.5s, enter top, move 80px, over 0.6s">
					<?php echo cs_get_option( 'leadin' ); ?></div>
				<div class="intro-lead-in" data-sr="wait 2.1s, flip 180deg">
					<?php echo cs_get_option( 'sublead' ); ?></div>
				<div class="intro-form">
					<?php get_template_part( WEDD_THEME_SECT, 'check' ); ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	</header><!-- #header -->

	<div id="content" class="site-content push">

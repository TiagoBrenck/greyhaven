<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fellowfeather
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fellowfeather' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding c-header-branding">
			<!--
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
			-->

		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
                    <img src="<?php echo wp_make_link_relative('http://localhost/greyhaven/wp-content/themes/fellowfeather/images/Greyhaven-transparent.png'); ?>" alt="logo" id="logo">
                    <img src="<?php echo wp_make_link_relative('http://localhost/greyhaven/wp-content/themes/fellowfeather/images/header.jpg'); ?>" alt="background" id="background">
                    <button id="menu-toggle" class="menu-toggle icon-menu" aria-controls="primary-menu" aria-expanded="false"></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

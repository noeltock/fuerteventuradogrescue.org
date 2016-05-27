<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shelter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="https://use.typekit.net/lpb6dii.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script src="https://use.fonticons.com/c4aadd25.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shelter' ); ?></a>

	<div class="header-wrap">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-inner">
				<div class="site-header-left">
					Registered Charity in Spain since XXXX - NR 123-456
				</div>
				<div class="site-header-right">
					Switch language
				</div>
			</div>
		</header><!-- #masthead -->
	</div>

	<div class="nav-wrap">
		<nav class="desktop-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
		<nav class="mobile-navigation" role="navigation">
			<div class="mobile-toggle">Toggle</div>
			<div class="mobile-content">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
		</nav>
	</div>

	<?php if ( is_page_template('page-home.php') ) : ?>

		<div class="hero-wrap">

		</div>

	<?php endif; ?>

	<div class="content-wrap">
		<div id="content" class="site-content">

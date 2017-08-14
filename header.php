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
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

<script src="https://use.typekit.net/lpb6dii.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script src="https://use.fortawesome.com/27872501.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=142401569149401";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shelter' ); ?></a>

	<div class="header-wrap">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-mobile-logo">
			</div>
			<div class="site-header-inner">
				<div class="site-header-left">
          &nbsp;
				</div>
				<div class="site-header-right">
					<?php
          $switcher = array(
            'show_flags' => 1,
            'show_names' => 0
          );

          pll_the_languages( $switcher );
          ?>
				</div>
			</div>
		</header><!-- #masthead -->
	</div>

	<div class="nav-wrap">
		<nav class="desktop-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
		<nav class="mobile-navigation" role="navigation">
			<div class="mobile-toggle"><i class="fa fa-menu"></i></div>
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

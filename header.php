<?php
/**
 * The header for our theme.
 *
 * @package ccs
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/x-icon" href="/wp-content/themes/ccsstrategies/img/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="header-area full">
		<div class="main-page">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ccs' ); ?></a>

			<header id="masthead" class="site-header inner" role="banner">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="headerimg" src="/wp-content/themes/ccsstrategies/img/ccslogo.png"></a></h1>
					</div><!-- .site-branding -->


					<div id="toggle-wrapper">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div>
	</div>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custodian
 */

?>
<!--
Built by Martin Greenwood
Lead Developr @WEAREBEARD
-->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">

	<div id="loader">
		<div id="loading">
			<div id="progstat"></div>
			<div id="progress"></div>
		</div>
	</div>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="site-branding">
					<?php
						the_custom_logo();
					?>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span><?php esc_html_e( 'MENU', 'custodian' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">

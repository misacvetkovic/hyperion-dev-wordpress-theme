<?php
/**
 * The main header template file for our theme.
 *
 * @package Hyperion
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-header" id="header">

		<div class="top-header">

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-nav">
				<?php
					// Social links menu.
					wp_nav_menu( array(
						'theme_location'	=>	'social',
						'menu_id'					=>	'social-menu'
					) );
				?>
				</nav><!--/.social-navigation-->
			<?php endif; ?>

		</div><!--/.top-header-->

		<div class="site-brand">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</div><!--/.site-brand-->

		<div class="header-nav">

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="primary-nav">
				<?php 
					wp_nav_menu( array( 
						'theme_location'	=>	'primary',
						'menu_id'					=>	'primary-menu' 
					) ); 
				?>
				</nav><!--/.primary-nav-->
			<?php endif; ?>

		</div><!--/.header-nav-->
		
	</header><!--/#header-->
	
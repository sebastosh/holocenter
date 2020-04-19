<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php bulmapress_skip_link_screen_reader_text(); ?>
		<header id="header">
			<nav id="site-navigation" class="navbar" role="navigation">
			<?php if ( get_header_image() ) : ?>
			<div id="site-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="Logo of <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?>">
				</a>
			</div>
			<?php endif; ?>
			
				<div class="navbar-brand">
					<?php bulmapress_home_link('navbar-item'); ?>
					<?php bulmapress_blog_description('navbar-item is-muted'); ?>
					<?php bulmapress_menu_toggle(); ?>
				</div>
				<div class="navbar-menu">
					<div class="navbar-start"></div>
					<?php bulmapress_navigation(); ?>
				</div>
			</nav>
		</header>

		<div id="content" class="site-content">



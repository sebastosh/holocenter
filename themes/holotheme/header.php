<?php
/**
 * @package WordPress
 * @subpackage nada
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,500' rel='stylesheet' type='text/css'>-->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php bloginfo( 'template_directory' ); ?>/html5.js" type="text/javascript"></script>
<![endif]-->

<!--GOOGLE ANALYTICS SCRIPT FOR HOLOCENTER-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42337317-1', 'holocenter.org');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="topbox">
	<div id="logobox">
	<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><img class="hologo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="holocenter"></a>
	</div><!--#logobox-->
	<div id="newsbox"><div style="padding-top:15px"></div>
	<!--<p style="text-align: center;"><span style="font-size: 20px; font-family: georgia; color: #EEEEEE;"><a href="http://holocenter.org/artist-photonics">Artist Photonics</a></span>
	<br /><span style="font-size: 14px; font-family: georgia; color: #EEEEEE;">May 4 - June 10</span></p>-->
	</div><!--#newsbox-->
	<div id="subnavbox">
		<div id="subnavmenu">
			<nav id="subnavlist" role="subnavigation">
			<?php wp_nav_menu( array( 'menu' => 'subnav', 'container_class' => 'menu-subnav' ) ); ?>
			</nav><!-- #access -->

		</div><!--subnavmenu-->
		<div class="paypal">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="M99TXCEL4S74G">
		<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
		</div><!--#paypal-->
	</div><!--#subnavbox-->
</div><!--#topbox-->
	<div id="navbox">
	<div id="navleft">
			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'menu' => 'primary', 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</div><!--#navleft-->
	<div id="navright">
			<nav id="what" role="what is?">
			<?php wp_nav_menu( array( 'menu' => 'what?', 'container_class' => 'menu-what' ) ); ?>
			</nav><!-- #access -->
	</div><!--#navright-->
	</div><!--#navbox-->

<div id="page" class="hfeed">
	<header id="branding" role="banner">

	</header><!-- #branding -->


	<div id="main">
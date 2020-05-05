<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer hero is-transparent" role="contentinfo">
	<div class="container">
		<div class="hero-body has-text-centered">
			<div class="site-info">
				<?php bulmapress_copyright_link(); ?>
				<a href="https://www.facebook.com/Holocenter"  target="_blank"
              rel="noopener noreferrer" ><img src="<?php bloginfo('template_directory'); ?>/images/icons/facebook.svg" class="img-footer" /></a>
				<a href="https://www.instagram.com/holocenternyc/"  target="_blank"
              rel="noopener noreferrer" ><img src="<?php bloginfo('template_directory'); ?>/images/icons/instagram.svg" class="img-footer" /></a>
				<a href="https://linkedin.com/company/holocenter"  target="_blank"
              rel="noopener noreferrer" ><img src="<?php bloginfo('template_directory'); ?>/images/icons/linkedin.svg" class="img-footer" /></a>
				<a href="https://twitter.com/HolocenterNYC"  target="_blank"
              rel="noopener noreferrer" ><img src="<?php bloginfo('template_directory'); ?>/images/icons/twitter.svg" class="img-footer" /></a>
				<a href="https://vimeo.com/holocenter"  target="_blank"
              rel="noopener noreferrer" ><img src="<?php bloginfo('template_directory'); ?>/images/icons/vimeo.svg" class="img-footer" /></a>
				<a href="https://www.youtube.com/c/HolocenterNYC"  target="_blank"
              rel="noopener noreferrer" ><img src="<?php bloginfo('template_directory'); ?>/images/icons/youtube.svg" class="img-footer" /></a>
			</div><!-- .site-info -->
		</div>
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

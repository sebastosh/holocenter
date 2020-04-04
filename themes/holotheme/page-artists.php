<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

			<div id="blackbox">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
				<div class="page-artists-content"></div><!--.page-artists-content-->
					<?php the_content(); ?>
					<div style="clear:both"></div>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->
			</div><!-- #blackbox -->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_template_part( 'footemp' ); ?>
<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_template_part( 'footemp' ); ?>
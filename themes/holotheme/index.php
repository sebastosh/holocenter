<?php
/**
 * @package WordPress
 * @subpackage nada
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<?php the_uds_billboard( 'frontpage' ); ?>								

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_template_part( 'footemp' ); ?>
<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>
					
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php get_template_part( 'content', 'page' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_template_part( 'footemp' ); ?>
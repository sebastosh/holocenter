<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

&nbsp;
&nbsp;
&nbsp;

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div id="breadbox"><header class="entry-header">
		<span class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></span>
	</header><!-- .entry-header --></div>
	


	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

&nbsp;
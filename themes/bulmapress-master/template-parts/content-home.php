<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('card-home'); ?>>
	<?php if ( has_post_thumbnail() ): ?>
		<div class="card-image">
			<figure class="image is-16by9">
				
					<?php the_post_thumbnail('widget'); ?>
		
			</figure>
		</div>
	<?php endif; ?>
	<div class="card-home-content">
		<div class="media">
			<header class="media-content">
					<?php bulmapress_the_title('is-3'); ?>
			</header><!-- .entry-header -->
		</div>
	
</div>

</article><!-- #post-## -->

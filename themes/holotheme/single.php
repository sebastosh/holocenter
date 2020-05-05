<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
			<div>



<?php 	
    $post_objects = get_field('related_posts');
    if( $post_objects ): ?>
		
<div class="relatedposts"><h3><?php the_field('related_post_title'); ?></h3>
    
    <ul class="related">
        <?php foreach( $post_objects as $post_object): ?>
        <li>
            <?php echo get_the_post_thumbnail( $post_object->ID, 'thumbnail' ); ?><br />
            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    
    </div>
    <?php endif; ?>
</div>
		</div><!-- #primary -->

<?php get_template_part( 'footemp' ); ?>
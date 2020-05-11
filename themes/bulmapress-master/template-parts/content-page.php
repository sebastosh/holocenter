<?php
/**
 * Template part for displaying page content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
	<div class="container">
		<header class="entry-header">
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="card">
		<div class="content page-content">
			<?php the_content();?>


			<?php 	
    $post_objects = get_field('related_posts');
    if( $post_objects ): ?>
		
<h3>More...</h3>
    
    <div class="columns is-multiline">
        <?php foreach( $post_objects as $post_object): ?>
        <div class="column is-one-third">
			<a href="<?php echo get_permalink($post_object->ID); ?>">
			<?php echo get_the_post_thumbnail( $post_object->ID, 'related' ); ?>

			<?php echo get_the_title($post_object->ID); ?></a>
        </div>
        <?php endforeach; ?>
    </div>
    
    </div>
    <?php endif; ?>
	<!-- End Related Posts -->


			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'bulmapress' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
						'<span class="edit-link">',
						'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</div>
			</div>
		</article><!-- #post-## -->

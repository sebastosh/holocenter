<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bulma
 */
?>

<?php get_header(); ?>



<div id="primary" class="content-area">

	<main id="main" class="site-main wrapper" role="main">



		<?php if ( have_posts() ) : ?>
			<div class="container">

<div class="home-text"> 	<?php
 $name = "home";
 $page = get_page_by_path($name);
 echo apply_filters('the_content', $page->post_content);
 ?></div>
	
				<div class="columns is-multiline">
					<?php
						// The Query
						$the_query = new WP_Query( array( 'tag' => 'featured' ) );
					?>
					
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
									$cardclass = ($the_query->post_count == 1) ? 'home-one'  : 'home';
									
									if($the_query->post_count == 1) {
										$class = 'is-full';
									} else if ($the_query->post_count == 2 ) {
										$class = 'is-one-half';
									} else if ($the_query->post_count == 3 ) {
										$class = 'is-one-third';
									} else if ($the_query->post_count == 4 ) {
										$class = 'is-one-quarter';
									} else {
										$class = 'is-one-half';
									}
					?>
						<div class="column <?php echo $class; ?>">
							<?php get_template_part( 'template-parts/content', $cardclass ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="section pagination">
				<div class="container">
					<?php the_posts_pagination(); ?>
				</div>
			</div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

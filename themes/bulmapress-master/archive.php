<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


<?php if ( have_posts() ) : ?>
	<div class="container">

	<header class="page-header hero">
				<div class="hero-body">
					<div class="archive">
						<?php the_archive_title( '<h1>', '</h1>' ); ?>
						<?php the_archive_description( '<div class="subtitle archive-description">', '</div>' ); ?>
					</div>
				</div>
			</header><!-- .page-header -->

		<div class="columns is-multiline">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="column is-one-third">
					<?php get_template_part( 'template-parts/content', 'archive' ); ?>
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
<?php get_footer();?>
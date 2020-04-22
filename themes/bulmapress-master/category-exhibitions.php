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
			<header class="page-header hero">
				<div class="hero-body">
					<div class="container">
						<?php the_archive_title( '<h1 class="title is-2 page-title">', '</h1>' ); ?>
						<?php the_archive_description( '<div class="subtitle archive-description">', '</div>' ); ?>
					</div>
				</div>
			</header><!-- .page-header -->

	<?php get_search_form(); ?>

			<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" name="s" id="s" placeholder="<?php esc_attr_e( 'Search by Post' ); ?>" />
    <input type="hidden" name="search-type" value="posts" />
    <button type="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search' ); ?>">
    Search
    </button>
</form>

<form method="get" id="searchform2" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" name="s" id="s2" placeholder="<?php esc_attr_e( 'Search by Category' ); ?>" />
    <input type="hidden" name="search-type" value="categories" />
    <button type="submit" name="submit" id="searchsubmit2" value="<?php esc_attr_e( 'Search' ); ?>">
    Search
    </button>
</form>


			<div class="archives wrapper">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'post' ); ?>
				<?php endwhile; ?>
			</div>
			
			<div class="section pagination">
				<div class="container is-narrow">
					<?php the_posts_navigation(); ?>
				</div>
			</div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer();?>
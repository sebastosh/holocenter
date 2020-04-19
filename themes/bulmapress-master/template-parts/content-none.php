<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<section class="no-results not-found section">
	<div class="container content">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'bulmapress' ); ?></h1>
		</header><!-- .page-header -->
		<div class="content page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bulmapress' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?>HOME</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bulmapress' ); ?></p>
			<?php
			get_search_form();

			else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bulmapress' ); ?></p>
			<?php
			get_search_form();

			endif; ?>
		</div><!-- .page-content -->
	</div>
</section><!-- .no-results -->
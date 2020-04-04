<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="breadbox"><header class="entry-header">
		<span class="entry-title"><?php the_title(); ?></span>
	</header><!-- .entry-header --></div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
&nbsp;
&nbsp;
&nbsp;
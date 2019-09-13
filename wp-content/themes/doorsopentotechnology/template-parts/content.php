<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DoorsOpentoTechnology
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php doorsopentotechnology_post_thumbnail(); ?>

	<header class="entry-header content-wrapper">
		<?php the_title( '<h2 class="entry-title">', '</h2>' );?>
	</header><!-- .entry-header -->

	<div class="entry-content content-wrapper">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

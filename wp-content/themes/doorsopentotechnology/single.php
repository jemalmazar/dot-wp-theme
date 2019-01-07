<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DoorsOpentoTechnology
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<h3 class="event-sponsors">Sponsors</h3>

		<?php
			$args = array( 'post_type' => 'featured_sponsor', 'order' => 'ASC', 'posts_per_page' => -1 );
			$sponsor = get_posts( $args ); // returns an array of posts
		?>

		<ul class="sponsors-list">
			<?php foreach ( $sponsor as $post ) : setup_postdata( $post ); ?>

				<?php if ( has_tag( 'Victoria' ) ) : ?>
					<li class="sponsor">
						<?php the_post_thumbnail(); ?>
					</li>	
				<?php endif; ?>

			<?php endforeach; wp_reset_postdata(); ?>
		</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

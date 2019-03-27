<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DoorsOpentoTechnology
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="hero-home">
				<img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>/images/DOT_Tagline_Wh.png" alt="Doors Open to Technology Logo with tagline underneath">
			</section>

			<section class="dot-description content-wrapper">
				<?php
					echo CFS()->get( 'dot_description' );
				?>
			</section>

			<section class="next-event-section content-wrapper">
				<h2 class="next-event-heading">
					<?php
						$next_event= CFS()->get_field_info( 'next_event' );
						echo $next_event['label'];
					?>
				</h2>
				<p>
					<?php echo CFS()->get( 'next_event' ); ?>
				</p>
			</section>

			<section class="get-involved-section content-wrapper">
				<h2 class="get-involved-heading">Get Involved</h2>
				<p class="get-involved-paragraph">Want to become a sponsor or attend an event?</p>
				<a href="mailto:dot@inventaworld.com" class="get-involved-cta" target="_blank">Click Here</a>
			</section>

			<section class="featured-sponsors-section content-wrapper">
				<h2 class="featured-sponsors-heading">Featured Sponsors</h2>

				<?php
					$args = array( 'post_type' => 'featured_sponsor', 'order' => 'ASC', 'posts_per_page' => -1 );
					$sponsor = get_posts( $args ); // returns an array of posts
				?>

				<ul class="sponsors-list">
					<?php foreach ( $sponsor as $post ) : setup_postdata( $post ); ?>

						<?php if ( has_tag( 'Featured' ) ) : ?>
							<li class="sponsor">
								<?php the_post_thumbnail(); ?>
							</li>	
						<?php endif; ?>

					<?php endforeach; wp_reset_postdata(); ?>
				</ul>		

			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

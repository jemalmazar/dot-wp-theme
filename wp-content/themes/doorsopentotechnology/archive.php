<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DoorsOpentoTechnology
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="hero-events">
                <img class="hero-logo-events" src="<?php echo get_template_directory_uri(); ?>/images/DOT_Tagline_Wh.png" alt="Doors Open to Technology Logo with tagline underneath">
			</section><!-- .hero-events -->

			<section class="events-section content-wrapper">
				
				<h2 class="events-heading">Upcoming Events</h2>

				<?php
					$args = array( 'post_type' => 'events', 'order' => 'ASC' );
					$dot_event = get_posts( $args ); // returns an array of posts
				?>

				<div class="events-wrapper">
					<ul class="events-list">
						<?php foreach ( $dot_event as $post ) : setup_postdata( $post ); ?>

						<?php if ( $post !== end($dot_event) ) : ?>
							<li class="event-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="event-pic-wrapper">
										<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'large' ); ?></a>
									</div>
								<?php endif; ?>
								<div class="event-details">
									<h3 class="event-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<?php the_content(); ?>
								</div>
							</li>

							<hr class="style1">
						<?php else : ?>
							<li class="event-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="event-pic-wrapper">
										<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'large' ); ?></a>
									</div>
								<?php endif; ?>
								<div class="event-details">
									<h3 class="event-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<?php the_content(); ?>
								</div>
							</li>
						<?php endif; ?>

						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

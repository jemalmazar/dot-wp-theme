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
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</li>

							<hr class="style1">
						<?php else : ?>
							<li class="event-wrapper">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</li>
						<?php endif; ?>

						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>

			</section>
			

		

			<!-- <p class="dot-paragraph container">
				Doors Open to Technology events highlight the immense career opportunities available in the growing technology sector in British Columbia. High school students who attend our events leave with new information, inspiration and experiences that help to shape their future career path.
			</p>
			
			<hr class="style1">

			<div class="next-event-container container">
				<h2 class="event-heading">DOT | Building a Diverse Tech Sector</h2>
			</div>

			<div class="sched-agenda">
				<a id="sched-embed" href="//doorsopentotechnology2018.sched.com/" data-sched-sidebar="no">View the Doors Open to Technology schedule &amp; directory.</a>
				<script type="text/javascript" src="//doorsopentotechnology2018.sched.com/js/embed.js"></script>
			</div> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

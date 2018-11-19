<?php
/**
* Template Name: Events
*/

get_header(); ?>

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
					</ul><!-- .events-list -->
				</div><!-- .events-wrapper -->

			</section><!-- .events-section -->
                   
            </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
<?php
/**
* Template Name: About
*/

get_header(); ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero-about">

                <div class="about-content">
                    <img class="hero-logo-about" src="<?php echo get_template_directory_uri(); ?>/images/DOT_Tagline_Wh.png" alt="Doors Open to Technology Logo with tagline underneath">

                    <div class="about">
                        <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                        <?php endif; ?>
                    </div><!-- .about -->
                </div><!-- .about-content  -->
                
            </div><!-- .hero-about  -->
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
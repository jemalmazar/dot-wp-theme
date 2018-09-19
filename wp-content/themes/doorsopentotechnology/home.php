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

			<div class="hero-home">
				<img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>/images/DOT_Tagline_Wh.png" alt="Doors Open to Technology Logo with tagline underneath">
			</div>

			<p class="dot-paragraph">Doors Open to Technology events highlight the immense career opportunities available in the growing technology sector in British Columbia. High school students who attend our events leave with new information, inspiration and experiences that help to shape their future career path.</p>

			<div class="next-event-container">
				<h2 class="next-event-heading">Next Event</h2>
				<p class="next-event-date">October 26th, 2018</p>
				<p class="next-event-location">Vancouver, British Columbia</p>
			</div>

			<div class="featured-sponsors-container">
				<h2 class="featured-sponsors-heading">Featured Sponsors</h2>
				<ul class="sponsors-list">
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/microsoft-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/british-columbia-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/bc_tech_association-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/SAP-logo.svg" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/lux-insights-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/bc-hydro-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/inventa-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/absolute-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/truecalling-logo.png" alt=""></li>
				</ul>		

			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

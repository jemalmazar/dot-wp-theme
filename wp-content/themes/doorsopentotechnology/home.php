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

			<div class="dot-description content-wrapper">
				<?php
					echo CFS()->get( 'dot_description' );
				?>
			</div>

			<div class="next-event-container content-wrapper">
				<h2 class="next-event-heading">
					<?php
						$next_event= CFS()->get_field_info( 'next_event' );
						echo $next_event['label'];
					?>
				</h2>
				<p>
					<?php echo CFS()->get( 'next_event' ); ?>
				</p>
			</div>

			<div class="featured-sponsors-container container">
				<h2 class="featured-sponsors-heading">Featured Sponsors</h2>
				<ul class="sponsors-list">
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/microsoft-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/sony-imageworks-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/bc_tech_association-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/bc-hydro-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/absolute-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/SAP-logo.svg" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/national-logo.jpg" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/truecalling-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/witw-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/loi-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/graphic-impressions-logo.png" alt=""></li>
					<li class="sponsor"><img src="<?php echo get_template_directory_uri(); ?>/images/inventa-logo.png" alt=""></li>	
				</ul>		

			</div>

			<section class="get-involved-container content-wrapper">
				<h2 class="get-involved-heading">Get Involved</h2>
				<p class="get-involved-paragraph">Become a sponsor</p>
				<a href="mailto:dot@inventaworld.com" class="get-involved-cta">Click Here</a>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

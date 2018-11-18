<?php
/**
* Template Name: Events
*/

get_header(); ?>

    <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <div class="hero-events">
                    <img class="hero-logo-events" src="<?php echo get_template_directory_uri(); ?>/images/DOT_Tagline_Wh.png" alt="Doors Open to Technology Logo with tagline underneath">
                
                    <div class="event-details-container">
                        <p class="event-date">October 25th, 2018</p>
				        <p class="event-location">Vancouver, British Columbia</p>
                    </div><!-- .event-details-container -->
                </div><!-- .hero-events -->

                <p class="dot-paragraph container">
				    Doors Open to Technology events highlight the immense career opportunities available in the growing technology sector in British Columbia. High school students who attend our events leave with new information, inspiration and experiences that help to shape their future career path.
                </p>
                
                <hr class="style1">

                <div class="next-event-container container">
                    <h2 class="event-heading">DOT | Building a Diverse Tech Sector</h2>
                </div>

                <div class="sched-agenda">
                    <a id="sched-embed" href="//doorsopentotechnology2018.sched.com/" data-sched-sidebar="no">View the Doors Open to Technology schedule &amp; directory.</a>
                    <script type="text/javascript" src="//doorsopentotechnology2018.sched.com/js/embed.js"></script>
                </div>
                
                
            </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
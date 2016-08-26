<?php
/* Template Name: Locations Template */
/*
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/content-banner' ); ?>

		<div id="content-block">

		<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>

    <div class="content-container">
      <div class="page-content">

      <div class="locations">
				<div class="location-item">
					<div class="location-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12353.473150456857!2d-76.5752934!3d39.2798976!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x843e6c7ef10ea272!2sMama&#39;s+On+the+Half+Shell!5e0!3m2!1sen!2sus!4v1467137419076" id="map" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="location-content">
						<h3>Canton</h3>
						<address>2901 O'Donnell St,<br />
							 Baltimore, MD 21224<br /></address>
								<p>T: 410-276-3160</p>
									<p style="font-weight: bold;">Contact Us: <br/><a href="mailto:halfshell@mamasmd.com">halfshell@mamasmd.com</a></p>
								<a href="https://goo.gl/maps/YtwsbY4iP9z">Get Directions</a>

					</div>
					<div class="location-hours">
						<h4>Hours</h4>
						<p>Mon-Sat 11AM-2AM</p>
						<p>Sunday Brunch 9AM-2PM</p>
					</div>
				</div>
      </div>

      </div>
    </div>
	</main>

</div>

	</div>

	<script>

jQuery(document).ready(function($){
   $('iframe#map').attr("src", $('iframe#map').attr('src').replace("http:","https:") );
});

	</script>

<?php get_footer(); ?>

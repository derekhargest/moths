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

		<?php get_template_part( 'template-parts/cta-link' ); ?>

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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d772.0921266604076!2d-76.57563247255753!3d39.27989263191174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c8038ba65deadd%3A0xc3690a9bd071fb69!2sNacho+Mama&#39;s!5e0!3m2!1sen!2sus!4v1464710822019" id="map" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="location-content">
						<h3>Canton</h3>
						<address>2907 O'Donnell St,<br />
							 Baltimore, MD 21224<br /></address>
								<p>T: 410-675-0898</p>
								<p>Carryout: 410-342-2922</p>
								<a href="https://goo.gl/maps/4pnTeAN4dE32">Get Directions</a>

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

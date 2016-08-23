<?php
/* Template Name: Menus Template */
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

	      <div class="location-menus">

	      	<div class="menu">

						<h4>Canton Menus</h4>

						<div class="menu-content">

							<p>For Carryout Call: <span class="number">410-342-2922</span></p>

						</div>

						<div class="menu-buttons">

							<a href="<?php echo the_field('canton_dining_menu'); ?>" class="button"><span>Lunch &amp; Dinner</span></a>

							<a href="http://www.mamasmd.com/special_menus/Half Shell Dinner Specials.pdf" class="button"><span>Specials</span></a>

							<a href="<?php echo the_field('canton_brunch_menu'); ?>" class="button"><span>Brunch</span></a>

							<a href="<?php echo the_field('canton_margarita_menu'); ?>" class="button"><span>Crushes &amp; Cocktails</span></a>

						</div>

					</div>

	      </div>

      </div>

		</div>

	</main>

</div>

	</div>

<?php get_footer(); ?>

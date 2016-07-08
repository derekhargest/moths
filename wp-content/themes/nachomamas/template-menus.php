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

							<p>For Carryout Call: <span class="number">410-324-2922</span></p>

						</div>

						<div class="menu-buttons">

							<a href="<?php echo the_field('canton_dining_menu'); ?>" class="button"><span>Lunch &amp; Dinner</span></a>

							<a href="<?php echo the_field('canton_specials_menu'); ?>" class="button"><span>Specials</span></a>

							<a href="<?php echo the_field('canton_lunch_menu'); ?>" class="button"><span>Brunch</span></a>

							<a href="<?php echo the_field('canton_margarita_menu'); ?>" class="button"><span>Crushes &amp; Cocktails</span></a>

						</div>

					</div>

	      </div>

      </div>

		</div>

	</main>

</div>

	<?php if (get_field('secondary_content')): ?>

		<div id="secondary" class="content-area secondary">

			<div class="content-container secondary">

				<div class="content-title">

					<header class="entry-header">

						<h1 class="entry-title">

							<?php the_field('secondary_title'); ?>

						</h1>

					</header>

				</div>

				<div class="page-content">

					<p><?php the_field('secondary_content'); ?></p>

				</div>

        <div class="content-title">

          <header class="entry-header">

            <h1 class="entry-title">

              Word On the Street

            </h1>

          </header>

        </div>

        <div class="page-content">

          <p><?php the_field('secondary_content'); ?></p>

          <section class="quotes">

						<header class="entry-header">

  						<h1 class="entry-title">

  							Word on the Street

  						</h1>

  					</header>

            <ul class="bxslider">

							<li><div class="slide"><p>On a recent steaming hot evening, nothing appealed to the stomach more than Mexican food-a pitcher or two of margaritas, some healthy sweat-production from fresh, peppery, simply composed food. I didn’t want to think about food so much as consume it, and a casual, come-as-you-are joint felt ideal.</p><span>- City Paper</span></div></li>

							<li><div class="slide"><p>On a recent steaming hot evening, nothing appealed to the stomach more than Mexican food-a pitcher or two of margaritas, some healthy sweat-production from fresh, peppery, simply composed food. I didn’t want to think about food so much as consume it, and a casual, come-as-you-are joint felt ideal.</p><span>- City Paper</span></div></li>

						</ul>

          </section>

          <section class="insta-feed">

						<header class="entry-header">

              <h1 class="entry-title">

                Some Photos

              </h1>

            </header>

						<div id="instafeed">

            </div>

						<button id="load-more">Load More</button>

					</section>

        </div>

			</div>

		</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>

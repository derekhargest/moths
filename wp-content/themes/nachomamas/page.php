<?php
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
	</div>

	</main>

</div>

<?php if (get_field('page_main_banner_secondary')): ?>

	<?php get_template_part( 'template-parts/content-banner-secondary' ); ?>

<?php endif; ?>

	<?php if (get_field('secondary_content')): ?>

		<div id="secondary" class="content-area secondary">

			<div class="content-container secondary">

				<div class="content-title">

					<header class="entry-header">

						<h1 class="entry-title">

							<?php the_field('secondary_content_title'); ?>

						</h1>

					</header>

				</div>

				<div class="entry-content">

					<p><?php the_field('secondary_content'); ?></p>

				</div>

			</div>

		</div>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>

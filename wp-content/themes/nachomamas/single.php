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

			<div class="container">

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

			endwhile;
			?>

		</div>

	</main>

</div>

<?php get_footer(); ?>

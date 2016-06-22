<?php
/* Template Name: Home Page Template */
/**
 * @package Nacho Mama's
 * @subpackage Nacho Mama's
 * @since 2016
 */

get_header('home'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

    <?php if (get_field('page_main_banner')): ?>

    	<?php get_template_part( 'template-parts/content-banner' ); ?>

    <?php endif ?>

		<div id="content-block">

	    <?php get_template_part( 'template-parts/cta-link' ); ?>

      <div class="container">

	  		<?php

	  		while ( have_posts() ) : the_post();

	  			get_template_part( 'template-parts/content', 'home' );

	  		endwhile;

	  		?>
    	</div>

			<?php if (get_field('page_main_banner_secondary')): ?>

				<?php get_template_part( 'template-parts/content-banner-secondary' ); ?>

			<?php endif; ?>


		</div>

	</main>

</div>

<?php get_footer(); ?>

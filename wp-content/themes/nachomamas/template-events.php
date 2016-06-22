<?php
/* Template Name: Events Template */
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

    		<div class="content-container">

      		<div class="page-content">

						<div class="content-title">

							<header class="entry-header">

								<h1 class="entry-title"><?php the_title(); ?></h1>

							</header>

						</div>

						<div class="events">

							<div class="page-content">
								<?php
								$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					      $args = array(
									'post_type' => 'events',
									'posts_per_page' => 4,
									'paged' => $paged
								);
			      	$loop = new WP_Query( $args );
			      	?>

							<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); // run the loop ?>

								<div class="event-item-wrapper">

									<div class="event-item">

										<div class="event-image">

											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>

										</div>

										<div class="event-content">

											<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

											<?php the_content(); ?>

											<div class="event-info">

												<?php if (get_field('event_location')): ?><p>Location: <?php echo the_field('event_location'); ?></p><?php endif; ?>

												<?php if (get_field('event_date')): ?><p>Date: <?php echo the_field('event_date'); ?></p><?php endif; ?>

												<?php if (get_field('event_time')): ?><p>Time: <?php echo the_field('event_time'); ?></p><?php endif; ?>

											</div>
											<?php if (get_field('event_facebook_link')): ?>

												<a href="<?php echo the_field('event_facebook_link'); ?>" class="facebook-event"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/facebook-event.png" alt="Join the event on facebook" /></a>

											<?php endif; ?>
										</div>

									</div>

								</div>

							<?php endwhile;?>

							<?php if ($loop->max_num_pages > 1) { ?>
							  <nav class="prev-next-posts">

							    <div class="prev-posts-link">

							      <?php echo get_next_posts_link( '&larr;&nbsp; Older Entries', $loop->max_num_pages ); ?>

							    </div>

							    <div class="next-posts-link">

							      <?php echo get_previous_posts_link( 'Newer Entries &nbsp;&rarr;' ); ?>

							    </div>

							  </nav>

								<?php } ?>

								<?php else: ?>

								<article>

									<h1>Sorry...</h1>

									<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

								</article>

								<?php endif; ?>


						</div>

					</div>

      	</div>

    	</div>

		</div>

	</main>

</div>

<?php get_footer(); ?>

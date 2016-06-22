<?php
/**
 * @version   1.5 August 19, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

// no direct access
?>

<?php global $post, $posts, $query_string; ?>

	<div class="rt-wordpress">
		<div class="rt-post">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<!-- Begin Post -->
			
			<div class="rt-article">					
				<div class="rt-article-bg">
					<div class="module-content">
						<div class="module-tm"><div class="module-tl"><div class="module-tr"></div></div></div>
						<div class="module-l">
							<div class="module-r">
			
								<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
									
									<?php if($gantry->get('post-title')) : ?>
					
									<!-- Begin Title -->
								
									<div class="rt-headline">
										<div class="module-title">
											<div class="module-title2">										
												<h1 class="title">
													<?php the_title(); ?>
												</h1>						
											</div>
										</div>
									</div>
									<div class="clear"></div>
										
									<!-- End Title -->
										
									<?php endif; ?>
									
									<div class="module-inner">
										<div class="module-inner2">
											<div class="rt-article-content">
									
												<?php if($gantry->get('post-meta-comments') || $gantry->get('post-meta-date') || $gantry->get('post-meta-modified') || $gantry->get('post-meta-author')) : ?>
														
												
												<?php endif; ?>
												
												<!-- Begin Post Content -->		
											
												<?php the_content(); ?>
						
												<div class="clear"></div>
												
												<?php wp_link_pages('before=<div class="rt-pagination">'._r('Pages:').'&after=</div><br />'); ?>
												
												<?php if (has_tag() && $gantry->get('post-tags')) : ?>
																																								
												<div class="rt-tags">
																	
													<?php the_tags('<span>'._r('Tags:').' &nbsp;</span>', ', ', ''); ?>
																				
												</div>
						
												<?php endif; ?>
												
												<?php edit_post_link(_r('Edit this entry.'), '<div class="edit-entry">', '</div>'); ?>
												
												<?php if($gantry->get('post-footer')) : ?>
									
																					
												<?php endif; ?>
													
												
												<div class="clear"></div>
												
												<!-- End Post Content -->
						
											</div>
										</div>
									</div>
									
								</div>
								<div class="clear"></div>

							</div>
						</div>
						<div class="module-bm"><div class="module-bl"><div class="module-br"></div></div></div>
					</div>
				</div>				
			</div>
			
			<!-- End Post -->
			
			<?php endwhile;?>
			
			<?php else : ?>
																		
			<h1 class="rt-pagetitle">
				<?php _re('Sorry, no posts matched your criteria.'); ?>
			</h1>
				
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>

		</div>
	</div>
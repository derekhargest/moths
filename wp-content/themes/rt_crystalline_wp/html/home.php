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
		<div class="rt-blog">
	
			<?php if ($gantry->get('blog-page-title') != '') : ?>
			
			<div class="module-content-pagetitle">
				<div class="module-tm"><div class="module-tl"><div class="module-tr"></div></div></div>
				<div class="module-l">
					<div class="module-r">
						<div class="rt-headline"><div class="module-title"><div class="module-title2">
							<h1 class="title">
								<?php echo $gantry->get('blog-page-title'); ?>
							</h1>
						</div></div></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<?php endif; ?>
			
			<div class="rt-leading-articles">
			
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				
				if($gantry->get('blog-query') != '') : query_posts('paged='.$paged.'&'.$gantry->get('blog-query'));
				
				else: query_posts('paged='.$paged.'&orderby='.$gantry->get('blog-order').'&cat='.$gantry->get('blog-cat').'&post_type='.$gantry->get('blog-type'));
				
				endif; 
				
				?>
		
				<?php while (have_posts()) : the_post(); ?>
			
				<!-- Begin Post -->
			
				<div class="rt-article">					
					<div class="rt-article-bg">
						<div class="module-content">
							<div class="module-tm"><div class="module-tl"><div class="module-tr"></div></div></div>
							<div class="module-l">
								<div class="module-r">
						
									<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
										
										<?php if($gantry->get('blog-title')) : ?>
						
											
										<?php endif; ?>
										
										<div class="module-inner">
											<div class="module-inner2">
												<div class="rt-article-content">
												
													<?php if(function_exists('the_post_thumbnail') && has_post_thumbnail()) : the_post_thumbnail('gantryThumb', array('class' => 'rt-image '.$gantry->get('thumb-position'))); endif; ?>
										
													<?php if($gantry->get('blog-meta-comments') || $gantry->get('blog-meta-date') || $gantry->get('blog-meta-modified') || $gantry->get('blog-meta-author')) : ?>
														
													
													<?php endif; ?>							
													
													<!-- Begin Post Content -->		
												
													<?php if($gantry->get('blog-content') == 'content') : ?>
													
														<?php the_content(false); ?>
																		
													<?php else : ?>
																		
														<?php the_excerpt(); ?>
																			
													<?php endif; ?>
													
													<?php if(preg_match('/<!--more(.*?)?-->/', $post->post_content)) : ?>
													
														<p class="rt-readon-surround">																			
															<a href="<?php the_permalink(); ?>" class="readon"><span><?php echo $gantry->get('blog-readmore'); ?></span></a>
														</p>
													
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
				
				<!-- Begin Navigation -->
											
				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if($total_pages > 1) : ?>
								
				<?php endif; ?>
		
				<!-- End Navigation -->
	
			</div>
		</div>
	</div>
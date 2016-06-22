<?php if (get_field('page_main_banner')): ?>

	<div class="banner-wrapper" id="banner">
		<div class="banner main-banner">
				<img src="<?php the_field('page_main_banner'); ?>" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" class="banner-image" />
		</div>
	</div>

<?php else:?>

	<div class="banner-wrapper" id="banner">
		<div class="banner main-banner" id="main-banner">
				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/default-banner.jpg" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" class="banner-image"/>
				<div class="banner-overlay page" id="banner-overlay">
					<h3>Share The Love</h3>
				</div>
		</div>
	</div>

<?php endif; ?>

<?php
  $args = array('post_type' => 'homepage_items');
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
?>

<div class="home-item">

  <div class="home-image">

    <?php the_post_thumbnail( 'full' ); ?>

  </div>

  <div class="home-content">

    <h3><?php echo the_field('item_title'); ?></h3>

		<div class="button-wrap">

    	<a href="<?php echo the_field('item_url'); ?>" class="button"><span><?php echo the_field('item_label'); ?></span></a>

		</div>

  </div>

</div>

<?php endwhile;?>

<?php
$posts_per_page = 12;
$loop           = new WP_Query(array(
	'post_type'      => 'work',
	'posts_per_page' => $posts_per_page,
	'orderby'        => 'post_id',
	'order'          => 'DESC',
));
?>
<!--Gallery-Default-->
<section class="gallery">
  <div class="container">
    <h1 class="section-title"><?php the_field('works_section_header'); ?></h1>
    <div class="row">
	    <?php while ($loop->have_posts()) :
		    $loop->the_post(); ?>

          <div class="img-wrapper col-sm-6 col-md-4 col-lg-3 img-wrapper-small">
		      <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),
			      'single-post-thumbnail'); ?>
            <img src="<?php echo $image[0]; ?>">
            <div class="popup">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="hr margin-auto"></div>
              <p><?php the_field('work_description'); ?></p>
            </div>
          </div>

	    <?php endwhile; ?>
    </div>


	  <?php
    //pagination cond

    if ($count % 6 == 0) : ?>
    <div class="row">
      <button class="btn btn-default btn-black mt-3 mb-3 margin-auto">view more</button>
    </div>
	  <?php endif; ?>

	  <?php
	  wp_reset_query(); ?>

  </div>
</section>
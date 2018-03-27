<?php
$loop = new WP_Query(array(
	'post_type' => 'reviews',
	'orderby'   => 'post_id',
	'order'     => 'ASC'
)); ?>
<!--REVIEWS-->
<section class="reviews pb-5">
  <div class="container">
    <h1 class="section-title pb50"><?php the_field('reviews_section_header'); ?></h1>
    <div class="row">
		<?php while ($loop->have_posts()) :
			$loop->the_post(); ?>
          <div class="flash col-12" post="<?php echo get_the_ID(); ?>">
            <div class="col-sm-6 left-half">
              <h2 class="bold"><?php the_title(); ?></h2>
              <div class="hr ml-auto"></div>
              <p><?php the_field('review_position'); ?></p>
            </div>
            <div class="col-sm-6 left-half">
              <div><?php the_field('review_text'); ?></div>
            </div>
          </div>
		<?php endwhile; ?>

      <!--CAROUSEL-->
      <div class="owl-carousel owl-theme pt50" id="reviews">

		  <?php while ($loop->have_posts()) :
			  $loop->the_post();
			  $images = get_field('review_photo'); ?>

            <div class="item carousel-image-wrapper margin-auto">
              <img class="carousel-image" src="<?php echo $images['sizes']['medium']; ?>"
                   alt="<?php echo $images['alt']; ?>" post="<?php echo get_the_ID(); ?>"/>
            </div>

		  <?php endwhile;
		  wp_reset_query(); ?>
      </div>
    </div>
</section>
<?php
$loop = new WP_Query(array(
	'post_type' => 'achievements',
	'orderby'   => 'post_id',
	'order'     => 'ASC'
)); ?>

<!--Achievements-->
<section class="border-top pt50 pb50">
  <div class="container">
    <div class="row text-center">

      <div class="col-sm-4">
        <h2 class="bold"><?php the_field('achievement_1_value'); ?></h2>
        <div class="hr margin-auto"></div>
        <p><?php the_field('achievement_1_description'); ?></p>
      </div>
      <div class="col-sm-4">
        <h2 class="bold"><?php the_field('achievement_2_value'); ?></h2>
        <div class="hr margin-auto"></div>
        <p><?php the_field('achievement_2_description'); ?></p>
      </div>
      <div class="col-sm-4">
        <h2 class="bold"><?php the_field('achievement_3_value'); ?></h2>
        <div class="hr margin-auto"></div>
        <p><?php the_field('achievement_3_description'); ?></p>
      </div>

    </div>
  </div>
</section>
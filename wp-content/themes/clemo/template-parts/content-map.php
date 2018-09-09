<?php
$loop = new WP_Query(array(
    'post_type' => 'contact',
    'posts_per_page' => 1,
    'orderby' => 'post_id',
    'order' => 'DESC'
)); ?>
<!--MAP-->
<div id="map">
    <?php $loop->the_post(); ?>
    <iframe src="<?php the_field('contact_map'); ?>" width="100%" height="500" frameborder="0" style="border:0;"
            allowfullscreen></iframe>
</div>
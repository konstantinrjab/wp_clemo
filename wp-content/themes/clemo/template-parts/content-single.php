<?php
//echo 'content-single.php';
?>
<!--POST SINGLE-->
<h3 class="post-title m-auto pb-5 text-center"><?php the_title(); ?>

  <br>
  <small><?php clemo_posted_on(); ?></small>
</h3>
<div class="col-8 offset-2">
	<?php if (has_post_thumbnail()) :   //check for feature image ?>
      <div class="img-wrapper"><?php the_post_thumbnail('large'); ?></div>
	<?php endif; ?>
  <div class="hr"></div>
  <h2 class="title">
    <small>creative</small>
    <br> kitchen
  </h2>
  <p class="text"><?php the_content(); ?></p>
  <!--SHARE-->
  <div class="share mt50 mb50">
    <div class="share-wrapper rounded-circle">
      <i class="fa fa-facebook margin-auto"></i>
    </div>
    <div class="share-wrapper rounded-circle">
      <i class="fa fa-twitter margin-auto"></i>
    </div>
    <div class="share-wrapper rounded-circle">
      <i class="fa fa-google-plus margin-auto"></i>
    </div>
    <div class="share-wrapper rounded-circle">
      <i class="fa fa-instagram margin-auto"></i>
    </div>
  </div>
</div>

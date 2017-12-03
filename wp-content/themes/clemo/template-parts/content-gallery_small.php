<?php
if ( get_page_template_slug() == 'page-home.php' ) {
    $page = 'home';
	$posts_per_page = 6;
} else {
	$posts_per_page = 0;
}
$loop  = new WP_Query( array(
	'post_type'      => 'work',
	'posts_per_page' => $posts_per_page,
	'orderby'        => 'post_id',
	'order'          => 'DESC',
) );
$count = 0;
?>
<!--Gallery-->
<section class="gallery">
    <div class="container">
        <h1 class="section-title"><?php the_field( 'gallery_title' ); ?></h1>
        <div class="row">
			<?php while ( $loop->have_posts() ) :
				$loop->the_post(); ?>
				<?php
				$count ++;
				//wrapper size
				if ( $count & 2 ) {
					$size = 'img-wrapper-big';
				} else {
					$size = 'img-wrapper-small';
				}
				// 5 and 6 image class
				if ( $count % 5 == 0 or $count % 6 == 0 ) {
					$wrapper_class = '';
				} else {
					$wrapper_class = 'col-sm-6';
				}
				//6 image only
				if ( $count > 6 ) {
					break;
				} ?>

				<?php if ( $count % 2 ) {
				echo '<div class="col-lg-4 ' . $wrapper_class . '">';
			} ?>
                <div class="img-wrapper <?php echo $size; ?>">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),
						'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>">
                    <div class="popup">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="hr margin-auto"></div>
                        <p><?php the_field( 'work_description' ); ?></p>
                    </div>
                </div>
				<?php if ( $count % 2 == 0 ) {
				echo '</div>';
			} ?>
			<?php endwhile; ?>

			<?php
			wp_reset_query(); ?>
        </div>
    </div>
</section>
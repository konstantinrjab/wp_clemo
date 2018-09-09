<?php
if ( get_page_template_slug() == 'page-home.php' ) {
	$page           = 'home';
	$posts_per_page = 6;
} else {
	$page           = '';
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
        <div class="row">
            <h1 class="section-title w-100"><?php the_field( 'works_header' ); ?></h1>
        </div>
        <div class="row">
        <?php while ( $loop->have_posts() ) :
                $loop->the_post(); ?>
                <div class="img-wrapper col-3">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),
                        'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>">
                    <div class="popup">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="hr margin-auto"></div>
                        <p><?php the_field( 'work_description' ); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php wp_reset_query(); ?>
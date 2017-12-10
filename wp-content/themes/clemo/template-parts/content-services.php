<?php
if ( get_page_template_slug() == 'page-home.php' ) {
	$posts_per_page = 2;
}

$loop = new WP_Query( array(
	'post_type'      => 'service',
	'posts_per_page' => $posts_per_page,
	'orderby'        => 'post_id',
	'order'          => 'DESC'
) ); ?>

<!--SERVICES-->
<section class="services pb50">
    <div class="container">
        <h1 class="section-title"><?php the_field( 'services_section_header' ); ?></h1>

		<?php
		$count = 1;
		while ( $loop->have_posts() ) :
			$loop->the_post(); ?>

			<?php $count ++; ?>
            <div class="row pt100">
				<?php if ( $count % 2 ) {
					$class_img  = ' order-1 order-sm-2 ';
					$class_text = ' order-2 order-sm-1 ';
				} else {
					$class_img  = '';
					$class_text = '';
				} ?>

                <div class="col-sm-6 thumbnail-wrapper <?php echo $class_img; ?>">
					<?php if ( has_post_thumbnail() ) {  //check for feature image
						the_post_thumbnail();
					} ?>
                </div>
                <div class="col-sm-6 <?php echo $class_text; ?>">
                    <h2 class="title">
                        <a href="<?php the_permalink(); ?>">
                            <small><?php the_field( 'service_subtitle' ); ?></small>
                            <br><?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="hr"></div>
                    <p><?php the_content(); ?></p>
					<?php if ( get_field( 'service_add_a_button' ) ) : ?>
                        <form action="<?php the_field( 'service_button_link' ); ?>">
                            <input class="btn btn-default btn-white mt50" type="submit"
                                   value="<?php the_field( 'service_button_text' ); ?>"/>
                        </form>
					<?php endif; ?>
                </div>
            </div>

		<?php endwhile;
		wp_reset_query(); ?>
    </div>
</section>
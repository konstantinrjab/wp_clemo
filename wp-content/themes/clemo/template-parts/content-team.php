<?php $loop = new WP_Query( array(
	'post_type' => 'carousel_team',
	'orderby'   => 'post_id',
	'order'     => 'ASC'
) ); ?>

<!--BEST TEAM-->
<section class="best-team bisque pb100">
    <h1 class="section-title pb50"><?php the_field( 'team_section_header' ); ?></h1>
    <div class="owl-carousel owl-theme" id="best-team-owl">
		<?php while ( $loop->have_posts() ) :
			$loop->the_post(); ?>
            <div class="item text-center">

				<?php
				$image = get_field( 'member_photo' );

				if ( ! empty( $image ) ) : ?>
                    <div class="carousel-image-wrapper margin-auto">
                        <img class="carousel-image rounded-circle" src="<?php echo $image['url']; ?>"
                             alt="<?php echo $image['alt']; ?>"/>
                    </div>
				<?php endif; ?>

                <h2 class="bold"><?php the_title(); ?></h2>
                <div class="hr margin-auto"></div>
                <p><?php the_field( 'member_position' ); ?></p>
            </div>
		<?php endwhile;
		wp_reset_query(); ?>
    </div>
</section>

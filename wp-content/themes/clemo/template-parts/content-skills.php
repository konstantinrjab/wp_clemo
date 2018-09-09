<?php
$feature_title       = get_field( 'skill_name' );
$feature_text        = get_field( 'skill_text' );
$feature_button_text = get_field( 'skill_button_text' );
?>

<?php $loop = new WP_Query( array(
	'post_type' => 'skills',
	'orderby'   => 'post_id',
	'order'     => 'ASC'
) ); ?>


<!--CAROUSEL BANNER-->
<section class="carousel">
    <div class="container">
        <div class="owl-carousel owl-theme pt100 banner-carousel bisque" id="banner-owl">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="item">
                    <div class="margin-auto text-center bisque">
                        <h2 class="bold"><?php the_title(); ?></h2>
                        <div class="hr margin-auto"></div>
                        <p><?php the_field( 'skill_text' ); ?></p>
	                    <?php if ( get_field( 'skill_add_button' ) ) : ?>
                            <form action="<?php the_field( 'skill_button_link' ); ?>">
                                <input class="btn btn-default btn-black mt50" type="submit" value="<?php the_field( 'skill_button_text' ); ?>" />
                            </form>
	                    <?php endif; ?>
                    </div>
                </div>
			<?php endwhile;
			wp_reset_query(); ?>
        </div>
    </div>
</section>
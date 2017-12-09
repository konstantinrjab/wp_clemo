<?php
if ( get_page_template_slug() == 'page-contacts.php' ) {
	$class = 'border-top';
} else {
	$class = 'black';
}
$loop = new WP_Query( array(
	'post_type'      => 'contact',
	'posts_per_page' => 1,
	'orderby'        => 'post_id',
	'order'          => 'DESC'
) ); ?>
<!--CONTACTS-->
<section class="contacts <?php echo $class; ?> pb100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb50"><?php the_field( 'header' ); ?></h2></div>
			<?php while ( $loop->have_posts() ) :
				$loop->the_post(); ?>
                <div class="col-sm-6">
                    <div class="text-wrapper"><i class="fa fa-map-marker"></i>
                        <p class="icon-left"><?php the_field( 'contact_address' ); ?></p>
                    </div>
                    <div class="text-wrapper"><i class="fa fa-mobile-phone"></i>
                        <p class="icon-left"><?php the_field( 'contact_phone_number' ); ?></p>
                    </div>
                    <div class="text-wrapper"><i class="fa fa-envelope-o"></i>
                        <p class="icon-left"><?php the_field( 'contact_email' ); ?></p>
                    </div>
                    <div class="share mt50">
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
                <div class="col-sm-6">
                    <input class="contact" placeholder="<?php the_field( 'contact_name_placeholder' ); ?>">
                    <input class="contact" placeholder="<?php the_field( 'contact_email_placeholder' ); ?>">
                    <input class="btn btn-white mt50" value="submit" type="button">
                </div>
			<?php endwhile;
			wp_reset_query(); ?>
        </div>
    </div>
</section>

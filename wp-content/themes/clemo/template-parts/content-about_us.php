<!--ABOUT US-->
<section class="services pb50">
    <div class="container">
        <h1 class="section-title"><?php the_field( 'about_us_section_header' ); ?></h1>

        <div class="row pt100">
            <div class="col-sm-6 thumbnail-wrapper ">
				<?php if ( has_post_thumbnail() ) :   //check for feature image ?>
                    <div class="text-center"><?php the_post_thumbnail( 'large' ); ?></div>
				<?php endif; ?>
                <div class="hr"></div>
                <h2 class="title">
					<?php the_field( 'about_us_subtitle' ); ?>
                </h2>
            </div>
            <div class="col-sm-6">
                <div class="hr mt-0"></div>
				<?php while ( have_posts() ) : the_post(); ?>
                    <div class="entry-content-page">
						<?php the_content(); ?>
                    </div>
				<?php
				endwhile; //resetting the page loop
				wp_reset_query(); //resetting the page query
				?>

                <!--                --><?php //if (get_field('about_us_add_a_button')) : ?>
                <!--                    <form action="--><?php //the_field('about_us_button_link'); ?><!--">-->
                <!--                        <input class="btn btn-default btn-white mt50" type="submit"-->
                <!--                               value="--><?php //the_field('about_us_button_text'); ?><!--"/>-->
                <!--                    </form>-->
                <!--                --><?php //endif; ?>
            </div>
        </div>

    </div>
</section>
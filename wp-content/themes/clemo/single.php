<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package clemo
 */

get_header();
//echo 'single.php';
?>

    <div class="container">
        <div class="row" id="primary">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template.
				?>
				<?php if ( comments_open() || get_comments_number() ) : ?>
                    <div class="w-100"><?php comments_template(); ?></div>
				<?php endif; ?>
			<?php endwhile; // End of the loop.?>

        </div>
    </div>

    <!--RELATED POSTS-->

    <div class="best-team bisque pb100">
        <h1 class="section-title pb50">posts in this category</h1>
        <div class="owl-carousel owl-theme" id="related-posts">
	        <?php $categories = get_the_category();
	        foreach ( $categories as $category ) : ?>

                <div class="item text-center">
                    <?=$category->name;?>

                </div>
	        <?php endforeach; ?>

        </div>
    </div>
<?php //the_post_navigation(); ?>
<?php
get_footer();

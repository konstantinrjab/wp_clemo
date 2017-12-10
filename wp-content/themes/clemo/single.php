<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package clemo
 */

get_header();
echo 'single.php'; ?>

    <div class="container">
        <div class="row" id="primary">
<!--            <main id="content">-->

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

<!--            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

    <!--RELATED POSTS-->
    <div class="best-team bisque pb100">
        <h1 class="section-title pb50">related posts</h1>
        <div class="owl-carousel owl-theme" id="related-posts">
            <div class="item text-center">
                <?php the_post_navigation(); ?>
            </div>
        </div>
    </div>
<?php
//get_sidebar();
get_footer();

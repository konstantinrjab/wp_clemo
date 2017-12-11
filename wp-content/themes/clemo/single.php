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
<?php
//$cat              = '';
//			echo $categories[0]->name;
//foreach ( $categories as $category ) {
//	$cat += $category->name;
//
//}
//echo $cat;
?>
<?php
$categories = get_the_category();
var_dump( $categories );

$post = get_posts( array(
	'numberposts'   => 10,
	'offset'        => 0,
//	'category_name' => $categories[1]->id,
	'category__and' => array($categories),
	'post_status'   => 'publish',
	'order'         => 'ASC'
) );;
//var_dump( $post );
?>

    <div class="best-team bisque pb100">
        <div class="container">
            <h1 class="section-title pb50">posts in this category</h1>
            <div class="owl-carousel owl-theme" id="related-posts">

				<?php foreach ( $post as $key ) : ?>
                    <div class="item ">
                        <h3 class="post-title bold">
                            <a href="<?= $key->guid ?>"><?= $key->post_title; ?></a>
                        </h3>

                        <div class="hr "></div>
                        <h4 class="post-subtitle mt-3"><?=$key->post_date; ?></h4>

                    </div>
				<?php endforeach; ?>


            </div>
        </div>
    </div>
<?php //the_post_navigation(); ?>
<?php
get_footer();

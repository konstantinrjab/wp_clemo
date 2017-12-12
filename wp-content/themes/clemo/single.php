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
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'single');

                // If comments are open or we have at least one comment, load up the comment template.
                ?>
                <?php if (comments_open() || get_comments_number()) : ?>
                    <div class="w-100"><?php comments_template(); ?></div>
                <?php endif; ?>
            <?php endwhile; ?>

        </div>
    </div>

    <!--RELATED POSTS-->
<?php
$categories = get_the_category();

$cat = '';
foreach ($categories as $category) {
    $cat .= $category->cat_ID . ', ';

}
?>
<?php
$categories = get_the_category();

$post = get_posts(array(
    'numberposts' => 10,
    'offset' => 0,
    'cat' => $cat,
    'post__not_in' => array(get_the_id()),
    'post_status' => 'publish',
    'order' => 'ASC'
));;
?>

    <div class="best-team bisque pb100">
        <div class="container">
            <h1 class="section-title pb50">posts in this category</h1>
            <div class="owl-carousel owl-theme" id="related-posts">

                <?php foreach ($post as $key) : ?>
                    <div class="item ">
                        <h3 class="post-title bold">
                            <a href="<?= $key->guid ?>"><?= $key->post_title; ?></a>
                        </h3>

                        <div class="hr "></div>
                        <h4 class="post-subtitle mt-3"><?= date('Y-m-d', strtotime($key->post_date)); ?></h4>

                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
<?php //the_post_navigation(); ?>
<?php
get_footer();

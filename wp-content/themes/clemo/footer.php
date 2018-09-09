<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clemo
 */

?>

</div><!-- #content -->

<footer>
    <footer class="container">
        <div class="row">
            <div class="col-12 text-center pt50">
                <p class="bold">
                    <?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>
                </p>
                <p>all rights reserved</p>
            </div>
        </div>
    </footer>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

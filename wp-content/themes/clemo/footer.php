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

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/assets/css/owlcarousel/owl.carousel.min.js"></script>

<script src="<?php bloginfo( 'template_directory' ) ?>/assets/js/main.js"></script>

</body>
</html>

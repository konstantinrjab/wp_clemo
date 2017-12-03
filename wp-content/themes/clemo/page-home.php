<?php
/*
	The template name: Home Page
*/


get_header(); ?>

<?php get_template_part( 'template-parts/content', 'skills' ); ?>

<?php get_template_part( 'template-parts/content', 'services' ); ?>

<?php
$num_services = 2;
include( locate_template( 'template-parts/content-gallery.php' ) ); ?>
<?php //get_template_part( 'template-parts/content', 'gallery_small' ); ?>

<?php get_template_part( 'template-parts/content', 'team' ); ?>

<?php get_template_part( 'template-parts/content', 'reviews' ); ?>

<?php get_template_part( 'template-parts/content', 'contacts' ); ?>


<?php get_footer();
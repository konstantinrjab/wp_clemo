<?php
/*
	The template name: Home Page
*/

get_header();

get_template_part( 'template-parts/content', 'skills' );

get_template_part( 'template-parts/content', 'services' );

get_template_part( 'template-parts/content', 'gallery_small' );

get_template_part( 'template-parts/content', 'team' );

get_template_part( 'template-parts/content', 'reviews' );

get_template_part( 'template-parts/content', 'contacts' );

get_footer();
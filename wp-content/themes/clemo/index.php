<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clemo
 */

get_header();?>

    <section class="blog pb50">
        <div class="container">
            <h1 class="section-title">blog</h1>
            <ul class="list-inline text-center pt50 pb50">
            <?php $categories = get_categories();
            foreach( $categories as $category ) {
	            $category_link = sprintf(
		            '<a href="%1$s" alt="%2$s">%3$s</a>',
		            esc_url( get_category_link( $category->term_id ) ),
		            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
		            esc_html( $category->name )
	            );

	            echo '<li class="list-inline-item ml-3 nav-item">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
//	            echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
//	            echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
            } ?>
            </ul>

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
        </div>
    </section>
    <aside></aside>


<?php
get_footer();

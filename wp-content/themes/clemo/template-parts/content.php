<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clemo
 */

?>

<div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header row">
			<div class="col-12">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title section-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title section-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
                <p class="post-subtitle"><?php echo get_the_date(); ?></p>
                <?php
                if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                        <?php clemo_posted_on(); ?>
                    </div><!-- .entry-meta -->
                <?php
                endif; ?>
            </div>
        </header><!-- .entry-header -->

        <div class="entry-content row">
            <div class="col-md-10 offset-1">
				<?php if ( has_post_thumbnail() ) :   //check for feature image ?>
                    <div class="text-center"><?php the_post_thumbnail( 'large' ); ?></div>
				<?php endif; ?>

                <div class="hr"></div>

                <?php if(get_field('subtitle')) : ?>
                    <p class="post-subtitle"><?php the_field('subtitle') ?></p>
                <?php endif; ?>

				<?php
				the_content( sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clemo' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clemo' ),
					'after'  => '</div>',
				) );
				?>
            </div>
<!--	        --><?php
//            if ( get_post_gallery() ) :
//            $gallery = get_post_gallery( get_the_ID(), false );
//
//            foreach( $gallery['src'] as $src ) : ?>
<!--            <img src="--><?php //echo $src; ?><!--" class="my-custom-class" alt="Gallery image" />-->
<!---->
<!--	        --><?php //endforeach; ?>
<!--            --><?php //endif; ?>

        </div><!-- .entry-content -->

        <footer class="entry-footer">
			<?php clemo_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </article><!-- #post-<?php the_ID(); ?> -->
</div>

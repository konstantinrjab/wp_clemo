<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package clemo
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <section class="error-404 not-found">
        <div class="container">
          <header class="page-header">
            <h1 class="page-title section-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'clemo'); ?></h1>
          </header><!-- .page-header -->

          <div class="page-content">
            <div class="row">

              <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'clemo'); ?></p>

              <div class="col-md-6">
				  <?php
				  get_search_form();

				  the_widget('WP_Widget_Recent_Posts');
				  ?>
              </div>

              <div class="col-md-6">
                <div class="widget widget_categories">
                  <h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'clemo'); ?></h2>
                  <ul>
					  <?php
					  wp_list_categories(array(
						  'orderby'    => 'count',
						  'order'      => 'DESC',
						  'show_count' => 1,
						  'title_li'   => '',
						  'number'     => 10,
					  ));
					  ?>
                  </ul>
                </div><!-- .widget -->
              </div>


				<?php

				/* translators: %1$s: smiley */
				$archive_content = '<p>'.sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'clemo'), convert_smilies(':)')).'</p>';
				the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");

				the_widget('WP_Widget_Tag_Cloud');
				?>
            </div>

          </div><!-- .page-content -->
        </div>
      </section><!-- .error-404 -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clemo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Fonts -->
    <link href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/fonts/fontawesome-webfont.woff2" rel="text/css">
    <link href="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/fonts/Montserrat-Regular.ttf" rel="text/css">

	<?php wp_head(); ?>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'clemo' ); ?></a>

    <header class="header" role="banner">
        <!-- NAVBAR-->
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light navbar-header mt50 mb50">
                <div class="bar-brand">
                    <a href="<?php get_home_url(); ?>">
						<?php the_custom_logo(); ?>
                    </a>
	                <?php get_custom_logo(); ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<?php
					wp_nav_menu(
						array(
							'sort_column'     => 'menu_order',
							'theme_location'  => 'Main Menu',
							'container'       => 'ul',
							'container_class' => 'navbar-collapse collapse',
							'menu_class'      => 'navbar-nav',
						) );
					?>
                </div>
            </nav>
        </div>
    </header>

    <div id="content" class="site-content">

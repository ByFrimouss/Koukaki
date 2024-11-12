<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            
        <div class="primary-header">
            <h1 class="site-title-primary">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>

            <!-- Bouton Menu Burger -->
            <button id="burger-menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button> 
        </div>
        
            <!-- Menu Overlay -->
            <div id="menu-overlay" class="menu-overlay">
                <div class="overlay-header">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </h1>

            <!-- Bouton croix pour fermer le menu -->
                    <button id="close-menu" class="menu-close">
                        &#10005; <!-- Unicode pour une croix -->
                    </button>
            </div>

                <div class="overlay-navigation">
                    <img class="menu-logo-burger" src="<?php echo get_theme_file_uri() . '/images/Image-logo-en-paralax.png'; ?>"
                        alt="Logo fleurs d'oranger & chats errants">
                    <ul>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                </div>


    <!-- Fleurs décoratives -->
    <div id="i-img-burg" class="img-burg-all">
        <img class="img-burg flower-burg hibiscus-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/hibiscus.png'; ?> " alt="Fleur d'hibiscus">
        <img class="img-burg flower-burg flower-simple-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/Flower.png'; ?> " alt="Fleur simple">
        <img class="img-burg flower-burg orchid-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/orchid.png'; ?> " alt="Fleur d'orchidé">
        <img class="img-burg flower-burg flower-random-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/random_flower.png'; ?> " alt="Fleur simple">
        <img class="img-burg flower-burg sunflower-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/Sunflower.png'; ?> " alt="Fleur de tournesol">
        <img class="img-burg cat-burg cat-1-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/cat.png'; ?> " alt="Chat 1">
        <img class="img-burg cat-burg cat-2-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/cat-1.png'; ?> " alt="Chat 2">
        <img class="img-burg cat-burg cat-3-burg" src="<?php echo get_stylesheet_directory_uri() . '/images/Group-180.png'; ?> " alt="Chat 3">
    </div>

    <span class="foot-burg">Studio Koukaki</span>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

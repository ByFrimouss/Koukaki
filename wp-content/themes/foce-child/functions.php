<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    //POUR RELIER LE CSS ET JS DU THÈME ENFANT //
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/install-sass/assets/theme.css', array(), filemtime(get_stylesheet_directory() . '/install-sass/assets/theme.css'));
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/script.js', array(), false, true);
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
<?php
// Add scripts and style
function TPCHR_wp_theme_styles() {
    // Bootstrap from CDN
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    // Theme Style
    wp_register_style('global', get_template_directory_uri() . '/css/global.css', array(), 1, 'all');
    wp_enqueue_style('global');
    wp_register_style('header', get_template_directory_uri() . '/css/header.css', array(), 1, 'all');
    wp_enqueue_style('header');
    wp_register_style('footer', get_template_directory_uri() . '/css/footer.css', array(), 1, 'all');
    wp_enqueue_style('footer');
}
add_action('wp_enqueue_scripts', 'TPCHR_wp_theme_styles' );

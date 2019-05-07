<?php
// Add scripts and style
function TPCHR_wp_theme_styles() {
    // Bootstrap from CDN
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');
    // Theme Style
    wp_register_style('theme-style', get_template_directory_uri() . '/css/theme.css', array(), 1, 'all');
    wp_enqueue_style('theme-style');
}
add_action('wp_enqueue_scripts', 'TPCHR_wp_theme_styles' );

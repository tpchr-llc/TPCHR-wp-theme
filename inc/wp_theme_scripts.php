<?php
// Add scripts and style
function TPCHR_wp_theme_scripts() {
    // Bootstrap from CDN
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap');
    // jquery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), 1, true);
    wp_enqueue_script('jquery');
    // Theme js
    wp_register_script('global', get_template_directory_uri() . '/js/global.js', array(), 1, true);
    wp_enqueue_script('global');
}
add_action('wp_enqueue_scripts', 'TPCHR_wp_theme_scripts' );

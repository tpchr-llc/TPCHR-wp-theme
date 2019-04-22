<?php
// Add scripts and style
function TPCHR_wp_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

function TPCHR_wp_theme_fonts() {
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style( 'OpenSans');
}

add_action( 'wp_enqueue_scripts', 'TPCHR_wp_theme_scripts' );
add_action( 'wp_print_styles', 'TPCHR_wp_theme_fonts' );
// WordPress Titles
add_theme_support( 'title-tag' );

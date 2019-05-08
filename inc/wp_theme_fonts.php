<?php
// Add access to a google font to be used.
function TPCHR_wp_theme_fonts() {
    wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat');
    wp_enqueue_style('Montserrat');
}
add_action('wp_print_styles', 'TPCHR_wp_theme_fonts' );

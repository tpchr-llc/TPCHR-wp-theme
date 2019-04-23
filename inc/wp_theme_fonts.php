<?php
// Add access to a google font to be used.
function TPCHR_wp_theme_fonts() {
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style( 'OpenSans');
}
add_action('wp_print_styles', 'TPCHR_wp_theme_fonts' );

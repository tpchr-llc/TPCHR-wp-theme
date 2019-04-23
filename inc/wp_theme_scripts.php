<?php
// Add scripts and style
function TPCHR_wp_theme_scripts() {
    wp_enqueue_style( 'global', get_template_directory_uri() . '/css/global.css' ); // Get rid of...
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
}
add_action('wp_enqueue_scripts', 'TPCHR_wp_theme_scripts' );

<?php

function TPCHR_wp_theme_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme')
        )
    );
}
add_action( 'init', 'TPCHR_wp_theme_menus' );

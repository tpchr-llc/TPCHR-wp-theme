<?php

function Customizer_Section_Footer($wp_customize) {
    $wp_customize->add_section(
        'custom_footer',
        array(
            'title' => __('Footer'),
            'description' => __('Custom footer infromation.'),
            'panel' => '', // Not needed.
            'priority' => 160,
            'capability' => 'edit_theme_options',
            'theme_supports' => '' // Rarely Needed.
        )
    );

    $wp_customize->add_setting(
        'TPCHR-wp-theme_footer_cYear',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'transport' => 'refresh',
            'sanitize_callback' => '',
            'sanitize_js_callback' => ''
        )
    );
    $wp_customize->add_control(
        'TPCHR-wp-theme_footer_cYear',
        array(
            'type' => 'text',
            'section' => 'custom_footer',
            'priority' => 1,
            'label' => __('Copy Right Year'),
            'description' => __('Copy right your site!'),
        )
    );

    $wp_customize->add_setting(
        'TPCHR-wp-theme_footer_Address',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'transport' => 'refresh',
            'sanitize_callback' => '',
            'sanitize_js_callback' => ''
        )
    );
    $wp_customize->add_control(
        'TPCHR-wp-theme_footer_Address',
        array(
            'type' => 'text',
            'section' => 'custom_footer',
            'priority' => 2,
            'label' => __('Company Address'),
            'description' => __('The address displayed at the bottom of the page.'),
        )
    );



}

<?php

function Customizer_Section_Contact($wp_customize) {
    $wp_customize->add_section(
        'custom_contact',
        array(
            'title' => __('Contact'),
            'description' => __('Contact information.'),
            'panel' => '', // Not needed.
            'priority' => 150,
            'capability' => 'edit_theme_options',
            'theme_supports' => '' // Rarely Needed.
        )
    );

    $wp_customize->add_setting(
        'TPCHR-wp-theme_contact_phone1',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'default' => '867-5309',
            'transport' => 'refresh',
            'sanitize_callback' => '',
            'sanitize_js_callback' => ''
        )
    );
    $wp_customize->add_control(
        'TPCHR-wp-theme_contact_phone1',
        array(
            'type' => 'tel',
            'section' => 'custom_contact',
            'priority' => 1,
            'label' => __('Primary Phone'),
            //'description' => __(''),
        )
    );

    $wp_customize->add_setting(
        'TPCHR-wp-theme_contact_phone2',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'default' => '867-5309',
            'transport' => 'refresh',
            'sanitize_callback' => '',
            'sanitize_js_callback' => ''
        )
    );
    $wp_customize->add_control(
        'TPCHR-wp-theme_contact_phone2',
        array(
            'type' => 'tel',
            'section' => 'custom_contact',
            'priority' => 2,
            'label' => __('Secondary Phone'),
            //'description' => __(''),
        )
    );
}

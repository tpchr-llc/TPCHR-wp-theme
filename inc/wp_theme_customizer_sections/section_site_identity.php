<?php

function Customizer_Section_Site_Identity($wp_customize) {
    // add a setting for the site logo
    $wp_customize->add_setting('TPCHR-wp-theme_logo');

    // Add a control to upload the logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'your_theme_logo',
            array(
                'label' => 'Upload Logo',
                'section' => 'title_tagline',
                'settings' => 'TPCHR-wp-theme_logo',
            )
        )
    );
}

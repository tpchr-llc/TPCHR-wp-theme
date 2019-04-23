<?php
/**
* Create Logo Setting and Upload Control
*/
function TPCHR_wp_theme_customize_register( $wp_customize ) {
    // add a setting for the site logo
    $wp_customize->add_setting('your_theme_logo');

    // Add a control to upload the logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'your_theme_logo',
            array(
                'label' => 'Upload Logo',
                'section' => 'title_tagline',
                'settings' => 'your_theme_logo',
            )
        )
    );
}
add_action( 'customize_register', 'TPCHR_wp_theme_customize_register' );

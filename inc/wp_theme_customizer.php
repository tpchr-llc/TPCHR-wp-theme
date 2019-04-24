<?php
require get_template_directory() . '/inc/wp_theme_customizer_sections/section_site_identity.php';
require get_template_directory() . '/inc/wp_theme_customizer_sections/section_contact.php';
require get_template_directory() . '/inc/wp_theme_customizer_sections/section_footer.php';

/**
*/
function TPCHR_wp_theme_customize_register( $wp_customize ) {
    Customizer_Section_Site_Identity($wp_customize);
    Customizer_Section_Contact($wp_customize);
    Customizer_Section_Footer($wp_customize);
}
add_action( 'customize_register', 'TPCHR_wp_theme_customize_register' );

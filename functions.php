<?php

// Add scripts and style
function TPCHR_wp_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' ); // Get rid of...
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), '3.3.6' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

// Add access to a google font to be used.
function TPCHR_wp_theme_fonts() {
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style( 'OpenSans');
}

// Add a custom admin menue item.
function TPCHR_wp_theme_Add_Menu() {
    add_menu_page('TPCHR Theme Settings', 'TPCHR Theme Settings', 'manage_options','custom-settings', 'TPCHR_Theme_Settings_Page', null, 99 );
}

function TPCHR_Theme_Settings_Page() {
?>
    <div class="wrap">
        <h1>TPCHR Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields('section');
                do_settings_sections('theme-options');
                submit_button();
            ?>
        </form>
    </div>
<?php
}

function setting_facebook() {
    ?>
    <input type="text" name="facebook"  id="facebook"  value="<?php echo get_option('facebook'); ?>" />
    <?php
}
function setting_linkedin() {
    ?>
    <input type="text" name="linkedin"  id="linkedin"  value="<?php echo get_option('linkedin'); ?>" />
    <?php
}
function setting_twitter() {
    ?>
    <input type="text" name="twitter"   id="twitter"   value="<?php echo get_option('twitter'); ?>" />
    <?php
}
function setting_instagram() {
    ?>
    <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
    <?php
}

function TPCHR_Theme_Settings_Page_Setup() {
    add_settings_section('section', 'All Settings', null, 'theme-options');

    add_settings_field('facebook',  'facebook URL',  'setting_facebook',  'theme-options', 'section');
    add_settings_field('linkedin',  'Linkedin URL',  'setting_linkedin',  'theme-options', 'section');
    add_settings_field('twitter',   'Twitter URL',   'setting_twitter',   'theme-options', 'section');
    add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');

    register_setting('section', 'facebook');
    register_setting('section', 'linkedin');
    register_setting('section', 'twitter');
    register_setting('section', 'instagram');
}

add_action('wp_enqueue_scripts', 'TPCHR_wp_theme_scripts' );
add_action('wp_print_styles', 'TPCHR_wp_theme_fonts' );
// WordPress Titles
add_theme_support( 'title-tag' );
add_action('admin_menu', 'TPCHR_wp_theme_Add_Menu' );
add_action('admin_init', 'TPCHR_Theme_Settings_Page_Setup');
// Support Featured Images in posts.
add_theme_support('post_thumbnail');

<?php
add_theme_support( 'title-tag' );
add_theme_support('post_thumbnail');

require get_template_directory() . '/inc/wp_theme_scripts.php';
require get_template_directory() . '/inc/wp_theme_fonts.php';
require get_template_directory() . '/inc/wp_theme_menu.php';
require get_template_directory() . '/inc/wp_theme_customizer.php';

/**\
 * @param String $tag        The tag used to display the element.
 * @param Array  $atts       The attributes to be used in $tag.
 * @param String $content    The content that would lie between the element open and close tags.
 *
 * If Customiser setting is not set, these backup values are used.
 * @param String $backupTag
 * @param String $backupatts
 * @param String $backupVal
 */
function Output_Customizer_Setting($tag, $atts, $content, $backupTag, $backupatts, $backupVal){
    $attributeStr = "";
    $contentStr;
    $settingSet = true;
    $echostr;
    foreach ($atts as $attribute => $value) {
        if (substr($value, 0, strlen("TPCHR-wp-theme")) === "TPCHR-wp-theme") {
            if (get_theme_mod($value)) {
                $value = get_theme_mod($value);
            } else {
                $settingSet = false;
                break;
            }
        }
        $attributeStr .= $attribute . "='$value' ";
    }
    if ($content) {
        if (substr($content, 0, strlen("TPCHR-wp-theme")) === "TPCHR-wp-theme") {
            if (get_theme_mod($content)) {
                $contentStr = get_theme_mod($content);
            } else {
                $settingSet = false;
            }
        } else {
            $contentStr = $content;
        }
    }
    if ($settingSet) {
        if ($contentStr) {
            $echostr = "<$tag $attributeStr >$contentStr</$tag>";
        } else {
            $echostr = "<$tag $attributeStr />";
        }
    } else {
        $echostr = "<$backupTag $backupatts >$backupVal</$backupTag>";
    }
    echo $echostr;
}

function Customizer_Setting_Out($setting, $backupStr) {
    if (get_theme_mod($setting)) {
        $setting = get_theme_mod($setting);
    } else {
        $setting = $backupStr;
    }
    echo $setting;
}

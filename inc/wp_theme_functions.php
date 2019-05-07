<?php

/**
 * Function will echo the setting if it's set or it will echo the backup String
 * if not.
 *
 * @param String $setting contains the name of the setting to echo.
 * @param String $backupStr contains the text if $setting is unset.
 */
function Customizer_Setting_Out($setting, $backupStr) {
    if (get_theme_mod($setting)) {
        $setting = get_theme_mod($setting);
    } else {
        $setting = $backupStr;
    }
    echo $setting;
}

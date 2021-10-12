<?php
/**
 * @package  AlecadddPlugin
 */

namespace Plugin\Base;

class Plugin
{
    public static function path(): string
    {
        return plugin_dir_path(dirname(__FILE__, 3));
    }

    public static function url(): string
    {
        return plugin_dir_url(dirname(__FILE__, 3));
    }

    public static function name(): string
    {
        return plugin_basename(dirname(__FILE__, 4)) . '/alecaddd-settings-api.php';
    }
}

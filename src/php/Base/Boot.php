<?php
/**
 * @package  AlecadddPlugin
 */

namespace Plugin\Base;

use Plugin\Pages\AdminPages;
use Plugin\Pages\AlecadddPageSettingsLinks;

final class Boot
{
    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exists
     * @return
     */
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    private static function get_services()
    {
        return [
            Enqueue::class,
            AdminPages::class,
        ];
    }

    /**
     * Initialize the class
     * @param class $class class from the services array
     * @return class instance  new instance of the class
     */
    private static function instantiate($class)
    {
        return new $class();
    }
}

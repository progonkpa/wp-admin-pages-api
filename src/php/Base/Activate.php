<?php
/**
 * @package  AlecadddPlugin
 */

namespace Plugin\Base;

class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}

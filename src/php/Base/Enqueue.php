<?php
/**
 * @package  AlecadddPlugin
 */

namespace Plugin\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue']);
    }

    function enqueue()
    {
        wp_enqueue_style('mypluginstyle', Plugin::url() . 'assets/mystyle.css');
        wp_enqueue_script('mypluginscript', Plugin::url() . 'assets/myscript.js');
    }
}

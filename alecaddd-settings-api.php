<?php

/**
 * @package  AlecadddPlugin
 */

/*
Plugin Name: Alecaddd Settings API
Plugin URI: http://alecaddd.com/plugin
Description: This is my first attempt on writing a custom Plugin for this amazing tutorial series.
Version: 1.0.0
Author: Alessandro "Alecaddd" Castellani
Author URI: http://alecaddd.com
License: GPLv2 or later
Text Domain: alecaddd-settings-api
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

if ( file_exists( dirname( __FILE__ ) . '/src/php/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/src/php/vendor/autoload.php';
}

function activate_alecaddd_plugin() {
	Plugin\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_alecaddd_plugin' );

function deactivate_alecaddd_plugin() {
    Plugin\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists('Plugin\Base\Boot') ) {
    Plugin\Base\Boot::register_services();
}

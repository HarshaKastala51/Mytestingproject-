<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.applozic.com
 * @since             1.0.0
 * @package           Applozic_Chat_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Applozic Chat Plugin
 * Plugin URI:        chat
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Applozic Inc
 * Author URI:        https://www.applozic.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       applozic-chat-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-applozic-chat-plugin-activator.php
 */
function activate_applozic_chat_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-applozic-chat-plugin-activator.php';
	Applozic_Chat_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-applozic-chat-plugin-deactivator.php
 */
function deactivate_applozic_chat_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-applozic-chat-plugin-deactivator.php';
	Applozic_Chat_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_applozic_chat_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_applozic_chat_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-applozic-chat-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_applozic_chat_plugin() {

	$plugin = new Applozic_Chat_Plugin();
	$plugin->run();

}
run_applozic_chat_plugin();

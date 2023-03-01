<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.applozic.com
 * @since      1.0.0
 *
 * @package    Applozic_Chat_Plugin
 * @subpackage Applozic_Chat_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Applozic_Chat_Plugin
 * @subpackage Applozic_Chat_Plugin/includes
 * @author     Applozic Inc <devashish@applozic.com>
 */
class Applozic_Chat_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'applozic-chat-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

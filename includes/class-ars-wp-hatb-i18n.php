<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://madebyaris.com
 * @since      1.0.0
 *
 * @package    Ars_Wp_Hatb
 * @subpackage Ars_Wp_Hatb/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ars_Wp_Hatb
 * @subpackage Ars_Wp_Hatb/includes
 * @author     Aris Setiawan <arissetia.m@gmail.com>
 */
class Ars_Wp_Hatb_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ars-wp-hatb',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

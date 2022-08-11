<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://madebyaris.com
 * @since             1.0.0
 * @package           Ars_Wp_Hatb
 *
 * @wordpress-plugin
 * Plugin Name:       WP Hide Admin Top Bar
 * Plugin URI:        https://github.com/madebyaris/wp-hide-admin-top-bar
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Aris Setiawan
 * Author URI:        https://madebyaris.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ars-wp-hatb
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ARS_WP_HATB_VERSION', '1.0.0' );

/**
 * View the full path directory.
 */
if ( ! defined( 'ARS_WP_HATB_DIR' ) ) {
	define( 'ARS_WP_HATB_DIR', plugin_dir_path( __FILE__ ) );
}
/**
 * View the url directory.
 */
if ( ! defined( 'ARS_WP_HATB_URL' ) ) {
	define( 'ARS_WP_HATB_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * View the name of the directory.
 */
if ( ! defined( 'ARS_WP_HATB_DIR_NAME' ) ) {
	define( 'ARS_WP_HATB_DIR_NAME', basename( __DIR__ ) );
}

/**
 * Get the plugin root file.
 */
if ( ! defined( 'ARS_WP_HATB_NAME_FILE' ) ) {
	define( 'ARS_WP_HATB_NAME_FILE', __FILE__ );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ars-wp-hatb-activator.php
 */
function activate_ars_wp_hatb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ars-wp-hatb-activator.php';
	Ars_Wp_Hatb_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ars-wp-hatb-deactivator.php
 */
function deactivate_ars_wp_hatb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ars-wp-hatb-deactivator.php';
	Ars_Wp_Hatb_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ars_wp_hatb' );
register_deactivation_hook( __FILE__, 'deactivate_ars_wp_hatb' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ars-wp-hatb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ars_wp_hatb() {

	$plugin = new Ars_Wp_Hatb();
	$plugin->run();

}
run_ars_wp_hatb();

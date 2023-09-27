<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://moxcar.com
 * @since             1.0.0
 * @package           Moxcar_Utilities
 *
 * @wordpress-plugin
 * Plugin Name:       Moxcar Utilities
 * Plugin URI:        https://moxcar.com
 * Description:       This plugin is to carry out basic utilities for sites
 * Version:           1.0.0
 * Author:            Gino Peterson
 * Author URI:        https://moxcar.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       moxcar-utilities
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'MOXCAR_UTILITIES_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MOXCAR_UTILITIES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
 
require_once MOXCAR_UTILITIES_PLUGIN_DIR . 'utils/utils.php';



/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MOXCAR_UTILITIES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-moxcar-utilities-activator.php
 */
function activate_moxcar_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-moxcar-utilities-activator.php';
	Moxcar_Utilities_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-moxcar-utilities-deactivator.php
 */
function deactivate_moxcar_utilities() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-moxcar-utilities-deactivator.php';
	Moxcar_Utilities_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_moxcar_utilities' );
register_deactivation_hook( __FILE__, 'deactivate_moxcar_utilities' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-moxcar-utilities.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_moxcar_utilities() {

	$plugin = new Moxcar_Utilities();
	$plugin->run();

}
run_moxcar_utilities();

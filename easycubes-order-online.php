<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.facebook.com/llxx.lord.xxll
 * @since             1.0.0
 * @package           Easycubes_Order_Online
 *
 * @wordpress-plugin
 * Plugin Name:       Easycubes Order
 * Plugin URI:        #
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Arifuzzaman Pranto
 * Author URI:        https://www.facebook.com/llxx.lord.xxll
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       easycubes-order-online
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'EASYCUBES_ORDER_ONLINE_PLUGIN_DIR' ) ) {
	define("EASYCUBES_ORDER_ONLINE_PLUGIN_DIR",plugin_dir_path(__FILE__));
}

if ( ! defined( 'EASYCUBES_ORDER_ONLINE_PLUGIN_URL' ) ) {
	define("EASYCUBES_ORDER_ONLINE_PLUGIN_URL",plugins_url()."/easycubes-order-online");
}


/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EASYCUBES_ORDER_ONLINE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-easycubes-order-online-activator.php
 */
function activate_easycubes_order_online() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easycubes-order-online-activator.php';
	Easycubes_Order_Online_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-easycubes-order-online-deactivator.php
 */
function deactivate_easycubes_order_online() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easycubes-order-online-deactivator.php';
	Easycubes_Order_Online_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_easycubes_order_online' );
register_deactivation_hook( __FILE__, 'deactivate_easycubes_order_online' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-easycubes-order-online.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_easycubes_order_online() {

	$plugin = new Easycubes_Order_Online();
	$plugin->run();

}
run_easycubes_order_online();

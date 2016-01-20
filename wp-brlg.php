<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://twitter.com/Brolag
 * @since             1.0.0
 * @package           Wp_Brlg
 *
 * @wordpress-plugin
 * Plugin Name:       WP Cleanup and base functions
 * Plugin URI:        https://github.com/Brolag/wp-brlg
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Alfredo Bonilla
 * Author URI:        https://twitter.com/Brolag
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-brlg
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-brlg-activator.php
 */
function activate_wp_brlg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-brlg-activator.php';
	Wp_Brlg_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-brlg-deactivator.php
 */
function deactivate_wp_brlg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-brlg-deactivator.php';
	Wp_Brlg_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_brlg' );
register_deactivation_hook( __FILE__, 'deactivate_wp_brlg' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-brlg.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_brlg() {

	$plugin = new Wp_Brlg();
	$plugin->run();

}
run_wp_brlg();

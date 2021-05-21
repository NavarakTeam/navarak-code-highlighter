<?php

/**
 * @link              http://navarak.ir/
 * @since             1.0.0
 * @package           Navarak_Code_Highlighter
 *
 * @wordpress-plugin
 * Plugin Name:       Navarak Code Highlighter
 * Plugin URI:        https://navarak.ir/ساخت-افزونه-نمایش-کد-در-وردپرس-از-مبتد/
 * Description:       This plugin is developed by NAVARAK team from 0 to learn users how to insert codes inside their posts
 * Version:           1.0.0
 * Author:            Seyyed Sajjad Kashizadeh
 * Author URI:        http://kashizadeh.ir/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       navarak-code-highlighter
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
define( 'NAVARAK_CODE_HIGHLIGHTER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-navarak-code-highlighter-activator.php
 */
function activate_navarak_code_highlighter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-navarak-code-highlighter-activator.php';
	Navarak_Code_Highlighter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-navarak-code-highlighter-deactivator.php
 */
function deactivate_navarak_code_highlighter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-navarak-code-highlighter-deactivator.php';
	Navarak_Code_Highlighter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_navarak_code_highlighter' );
register_deactivation_hook( __FILE__, 'deactivate_navarak_code_highlighter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-navarak-code-highlighter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_navarak_code_highlighter() {

	$plugin = new Navarak_Code_Highlighter();
	$plugin->run();

}
run_navarak_code_highlighter();

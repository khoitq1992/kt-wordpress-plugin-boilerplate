<?php

/**
 * Plugin Name Plugin
 *
 * @package           Plugin Name
 *
 * Plugin Name:       Plugin Name
 * Description:       Plugin description
 * Version:           1.0.0
 * Author:            Khoi Tran
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

use PluginName\PluginName;
use PluginName\Activator;
use PluginName\Deactivator;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * Require the constants file
 */
require_once plugin_dir_path( __FILE__ ) . 'constants.php';

/**
 * Autoload classes
 */
function pampermeAutoloader($class) {
    if (strpos($class, 'PluginName\\') === 0) {
        $class = str_replace('PluginName\\', '', $class);
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $file = __DIR__ . '/inc/' . $class . '.php';

        if (file_exists($file)) {
            require $file;
        }
    }
}
spl_autoload_register('pampermeAutoloader');

/**
 * Activate the plugin.
 */
function activatePluginName() {
	Activator::activate();
}

/**
 * Deactivate the plugin.
 */
function deactivatePluginName() {
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activatePluginName' );
register_deactivation_hook( __FILE__, 'deactivatePluginName' );

/**
 * Begins execution of the plugin.
 */
$plugin = new PluginName();
$plugin->run();
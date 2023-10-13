<?php 
/**
 * This class is responsible for loading the text domain
 */

namespace PluginName;

class TextDomain {
    public static function load() {
		load_plugin_textdomain(
			'pamperme-ext',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
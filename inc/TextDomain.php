<?php 

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
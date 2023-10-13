<?php

namespace PluginName;

class PluginName {

    public function __construct() {
        // Do nothing
    }

    function run() {
        TextDomain::load();

        // load admin or front depending on the context
        if (is_admin()) {
            $admin = new Admin();
            $admin->init();
        } else {
            $front = new Front();
            $front->init();
        }

        // common logic of admin and front go here
        // ................
    }
}
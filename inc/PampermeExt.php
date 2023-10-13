<?php

namespace PluginName;

class PluginName {

    public function __construct() {
        // Do nothing
    }

    function run() {
        TextDomain::load();

        // admin or front
        if (is_admin()) {
            $admin = new Admin();
            $admin->init();
        } else {
            $front = new Front();
            $front->init();
        }

        // common
        new HappyForms();
    }
}
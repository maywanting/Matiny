<?php namespace Plugin;

use \Config\Plugin\PluginConfig;

class Plugin extends PluginConfig {

    //分发路由
    public function index($commond, $argv = []) {
        return call_user_func_array(array($this, $commond), $argv);
    }

    public function __call($name, $params) {
        return true;
    }
}

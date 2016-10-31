<?php namespace Plugin;

class Plugin {

    //分发路由
    // public function index($commond, $argv = []) {
        // return call_user_func_array(array($this, $commond), $argv);
    // }

    public function __call($name, $params) {
        return true;
    }
}

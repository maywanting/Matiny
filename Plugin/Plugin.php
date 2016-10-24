<?php namespace Plugin;

class Plugin {
    public function index($commond, $argv = []) {
        return call_user_func_array(array($this, $commond), $argv);
    }
}

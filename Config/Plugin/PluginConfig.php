<?php namespace Config\Plugin;

class PluginConfig {

    protected $config;

    public function __construct() {
        $this->config = json_decode(file_get_contents(__APPDIR__ . '/Config/Plugin/config.json'), true);
    }

    public static function getConfig() {
        return $this->config;
    }
}

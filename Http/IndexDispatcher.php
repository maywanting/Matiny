<?php namespace Http;

use \Config\ThemeConfig;

class IndexDispatcher {
    public $theme;

    public function __construct() {
        $this->theme = ThemeConfig::getTheme();
    }

    public function index () {
        $path = __APPDIR__ . '/Theme/' . $this->theme . '/index.template.html';
        $html = file_get_contents($path);
        return $html;
    }
}

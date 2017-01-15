<?php namespace Console;

use \Config\Console\NewConsoleConfig;

class NewConsole extends NewConsoleConfig implements Console {

    protected $params;

    public function __construct($params) {
        $this->params = $params;
    }

    public function getDescription() {
    }

    public function success() {
    }

    public function error() {
    }

    public function getParams() {
        return $this->params;
    }

    public function previous() {
        $newPath = $this->getNewUrl() . $this->params[0] . '/';
        if (!is_dir($newPath)) {
            mkdir($newPath, 0775, true);
        }
    }

    public function __call($name, $params) {
        return true;
    }
}

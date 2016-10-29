<?php namespace Console;

use \Config\Console\ConstructConsoleConfig;

class ConstructConsole extends ConstructConsoleConfig implements Console {

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

    public function __call($name, $params) {
        return true;
    }
}

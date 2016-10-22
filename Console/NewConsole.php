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
}

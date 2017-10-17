<?php namespace Console;

use \Config\Console\ConstructConsoleConfig;

class ConstructConsole extends ConstructConsoleConfig implements Console {

    protected $params;

    public function __construct($params) {
        $this->params = $params;
    }

    public function getDescription() {
        return '将markdown博客原文转化生成html';
    }

    public function success() {
    }

    public function error() {
    }

    public function getParams() {
        if (count($this->params) == 0) { //没有参数则默认为
            $handler = opendir(__APPDIR__ . '/source/');
            $blogs = [];
            while (($fileName = readdir($handler)) !== false) {
                if ($fileName != '.' && $fileName != '..') {
                    $blogs[] = $fileName;
                }
            }
            return array(json_encode($blogs));
        } else {
            return array(json_encode($this->params));
        }
    }

    public function __call($name, $params) {
        return true;
    }
}

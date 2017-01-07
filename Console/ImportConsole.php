<?php namespace Console;

use \Config\Console\ImportConsoleConfig;

class ImportConsole extends ImportConsoleConfig implements Console {
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

    public function previous() {
        $path = $this->params[0];
        $handler = opendir($path);

        while (($fileName = readdir($handler)) !== false) {
            if (!preg_match("/\.md$/", $fileName)) continue;
            $newPath = __APPDIR__ . '/source/' . substr($fileName, 0, -3) . '/';
            if (!is_dir($newPath)) {
                mkdir($newPath, 0775, true);
            }
        }
    }

    public function __call($name, $params) {
        return true;
    }
}



<?php namespace Config\Console;

class NewConsoleConfig implements ConsoleConfig {

    public function getSupportPlugin() {
        return [
            'MdPlugin',
            'InfoPlugin',
        ];
    }

    public function getNewUrl() {
        return __APPDIR__ . '/source/';
    }
}

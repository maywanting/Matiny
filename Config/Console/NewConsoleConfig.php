<?php namespace Config\Console;

class NewConsoleConfig implements ConsoleConfig {

    public function getSupportPlugin() {
        return [
            'MdPlugin',
            'InfoPlugin',
        ];
    }
}

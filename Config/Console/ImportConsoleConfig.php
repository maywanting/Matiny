<?php namespace Config\Console;

class ImportConsoleConfig implements ConsoleConfig {

    public function getSupportPlugin() {
        return [
            'MdPlugin',
        ];
    }
}

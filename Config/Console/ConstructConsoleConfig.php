<?php namespace Config\Console;

class ConstructConsoleConfig implements ConsoleConfig {

    public function getSupportPlugin() {
        return [
            'MdPlugin'
        ];
    }
}

<?php namespace Plugin;

use \Config\Plugin\PluginConfig;

class MdPlugin extends Plugin{

    public function new($avg) {
        $filePath = __APPDIR__ . '/source/' . $this->config['number'] . $avg . '/';
        $fileName = $filePath . $avg . '.md';

        if (file_exists($fileName)) {
            echo $fileName. " is exist\n";
            return false;
        } else {
            if (!is_dir($filePath)) {
                mkdir($filePath, 0775, true);
            }
            file_put_contents($fileName, '');  //default file can be setted;
            echo $fileName . " created\n";
            return true;
        }
    }
}

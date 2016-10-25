<?php namespace Plugin;

class InfoPlugin extends Plugin{
    public function new($argv) {
        $filePath = __APPDIR__ . '/source/' . $this->config['number'] . $argv . '/';
        $fileName = $filePath . $argv . '.info';
        $modelName = __APPDIR__ . '/Plugin/InfoPlugin/model.info';

        if (file_exists($fileName)) {
            echo $fileName. " is exist\n";
            return false;
        } else {
            if (!is_dir($filePath)) {
                mkdir($filePath, 0775, true);
            }
            file_put_contents($fileName, file_get_contents($modelName));  //default file can be setted;
            echo $fileName . " created\n";
            return true;
        }
    }
}

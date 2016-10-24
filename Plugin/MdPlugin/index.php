<?php namespace Plugin;

class MdPlugin extends Plugin{
    public function new($avg) {
        $filePath = __APPDIR__ . '/public/' . date('Y/m/d') . '/';
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

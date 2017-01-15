<?php namespace Plugin;

require_once __APPDIR__ . '/Extension/Parsedown.php';

class MdPlugin extends Plugin{

    //new 命令
    public static function new($avg) {
        $fileName = __APPDIR__ . '/source/' . $avg . '/' . $avg . '.md';

        if (file_exists($fileName)) {
            echo $fileName. " is exist\n";
            return false;
        } else {
            file_put_contents($fileName, '');  //default file can be setted;
            echo $fileName . " created\n";
            return true;
        }
    }

    //construct 命令
    public static function construct($avg) {
        $blogs = json_decode($avg, true);
        foreach ($blogs as $blogName) {
            $fileName = __APPDIR__ . '/source/' . $blogName . '/' . $blogName . '.md';
            $htmlName = __APPDIR__ . '/source/' . $blogName . '/' . $blogName . '.html';

            $markdown = file_get_contents($fileName);

            $parsedown = new \Parsedown();
            file_put_contents($htmlName, $parsedown->text($markdown));
        }
    }

    //import 命令
    public static function import($avg) {
        $path = $avg . '/';
        $handler = opendir($path);

        while (($fileName = readdir($handler)) !== false) {
            if (!preg_match("/\.md$/", $fileName)) continue;

            $markdownName = __APPDIR__ . '/source/' . substr($fileName, 0, -3) . '/' . $fileName;
            $markdown = file_get_contents($path . $fileName);

            file_put_contents($markdownName, $markdown);
        }
    }
}

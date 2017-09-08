<?php

namespace Unity\Support;

class File
{
    /**
     * Returns the extension
     *
     * @param $filename
     * @return bool|string
     */
    static function ext($filename) {
        return substr(strrchr($filename, "."), 1);
    }

    /**
     * @param $path string File path
     */
    static function isFile($path)
    {
        return is_file($path);
    }

    /**
     * @param $path string Dir path
     */
    static function isDir($path)
    {
        return is_dir($path);
    }

    /**
     * @param $path string File|Dir path
     */
    static function exists($path){
        return file_exists($path);
    }
}

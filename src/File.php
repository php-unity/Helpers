<?php

namespace Unity\Support;

/**
 * Class File
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
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
     *
     * @return bool
     */
    static function isFile($path)
    {
        return is_file($path);
    }

    /**
     * @param $path string Dir path
     *
     * @return bool
     */
    static function isDir($path)
    {
        return is_dir($path);
    }

    /**
     * @param $path string File|Dir path
     *
     * @return bool
     */
    static function exists($path){
        return file_exists($path);
    }
}

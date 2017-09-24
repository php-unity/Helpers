<?php

namespace Unity\Support;

/**
 * Class File.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class File
{
    /**
     * Returns the file name.
     *
     * @param $path
     *
     * @return string
     */
    public static function name($path)
    {
        return pathinfo($path, PATHINFO_FILENAME);
    }

    /**
     * Returns the file base name.
     *
     * @param $path
     *
     * @return string
     */
    public static function baseName($path)
    {
        return pathinfo($path, PATHINFO_BASENAME);
    }

    /**
     * Returns the extension.
     *
     * @param $path
     *
     * @return bool|string
     */
    public static function ext($path)
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }

    /**
     * Returns the parent folder.
     *
     * @param $path
     *
     * @return string
     */
    public static function parentDir($path)
    {
        return pathinfo($path, PATHINFO_DIRNAME);
    }

    /**
     * @param $path string File path
     *
     * @return bool
     */
    public static function isFile($path)
    {
        return is_file($path);
    }

    /**
     * @param $path string Dir path
     *
     * @return bool
     */
    public static function isDir($path)
    {
        return is_dir($path);
    }

    /**
     * @param $path strings
     *
     * @return bool
     */
    public static function isWritable($path)
    {
        return is_writable($path);
    }

    /**
     * @param $path strings
     *
     * @return bool
     */
    public static function isReadable($path)
    {
        return is_readable($path);
    }

    /**
     * @param $path string File|Dir path
     *
     * @return bool
     */
    public static function exists($path)
    {
        return file_exists($path);
    }
}

<?php

namespace Unity\Support;

/**
 * Class File.
 *
 * A Collection of methods that provides support to work with file system.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class File
{
    /**
     * Returns the file name.
     *
     * @param string $path
     *
     * @return string
     */
    public static function name(string $path)
    {
        return pathinfo($path, PATHINFO_FILENAME);
    }

    /**
     * Returns the file base name.
     *
     * @param string $path
     *
     * @return string
     */
    public static function baseName(string $path)
    {
        return pathinfo($path, PATHINFO_BASENAME);
    }

    /**
     * Returns the extension.
     *
     * @param string $path
     *
     * @return bool|string
     */
    public static function ext(string $path)
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }

    /**
     * Returns the parent folder.
     *
     * @param string $path
     *
     * @return string
     */
    public static function parentDir(string $path)
    {
        return pathinfo($path, PATHINFO_DIRNAME);
    }
}

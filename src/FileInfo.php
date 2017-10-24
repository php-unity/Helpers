<?php

namespace Unity\Support;

/**
 * Class FileInfo.
 *
 * Provides file informations.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class FileInfo
{
    /**
     * Returns the file name.
     *
     * @param string $path
     *
     * @return string
     */
    public function name(string $path)
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
    public function baseName(string $path)
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
    public function ext(string $path)
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
    public function parentDir(string $path)
    {
        return pathinfo($path, PATHINFO_DIRNAME);
    }
}

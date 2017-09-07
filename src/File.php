<?php

namespace Unity\Support;

class File
{
    /**
     * Returns the extension
     *
     * @param $file
     * @return bool|string
     */
    static function ext($file)
    {
        return substr(strrchr($file, "."), 1);
    }
}
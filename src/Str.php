<?php

namespace Unity\Support;

/**
 * Class Str.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class Str
{
    public static function contains($needle, $source)
    {
        return strpos($source, $needle) !== false;
    }

    public static function startsWith($needle, $source)
    {
        return strpos($source, $needle) == 0;
    }

    public static function endsWith($needle, $source)
    {
        $sourceLength = strlen($source);

        return strpos($source, $needle) == ($sourceLength - 1);
    }
}

<?php

namespace Unity\Support;

/**
 * Class Str
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class Str
{
    static function contains($needle, $source)
    {
        return strpos($source, $needle) !== false;
    }

    static function startsWith($needle, $source)
    {
        return strpos($source, $needle) == 0;
    }

    static function endsWith($needle, $source)
    {
        $sourceLength = strlen($source);

        return strpos($source, $needle) == ($sourceLength - 1);
    }
}

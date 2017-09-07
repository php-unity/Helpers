<?php

namespace Unity\Support;

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

    static function endsWIth($needle, $source)
    {
        $sourceLength = strlen($source);

        return strpos($source, $needle) == ($sourceLength - 1);
    }
}
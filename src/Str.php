<?php

namespace Unity\Support;

/**
 * Class Str.
 *
 * Contains methods that helps working with strings.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 *
 * @link   https://github.com/e200/
 */
class Str
{
    /**
     * Checks if a `$needle` exists into the `$string`.
     *
     * @param string $needle
     * @param string $string
     * 
     * @return bool
     */
    public function contains($needle, $string)
    {
        return strpos($string, $needle) !== false;
    }

    /**
     * Checks if a string starts with `$needle`.
     *
     * @param string $needle
     * @param string $string
     * 
     * @return bool
     */
    public function startsWith($needle, $string)
    {
        return strpos($string, $needle) == 0;
    }

    /**
     * Checks if a string ends with `$needle`.
     *
     * @param string $needle
     * @param string $string
     * 
     * @return bool
     */
    public function endsWith($needle, $string)
    {
        $stringLength = strlen($string);

        return strpos($string, $needle) == ($stringLength - 1);
    }
}

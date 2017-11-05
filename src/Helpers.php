<?php

/**
 * Global helper functions.
 * 
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 *
 * @link   https://github.com/e200/
 */

/**
 * Checks if a string is null or contains
 * only white spaces.
 *
 * @param string $string
 * 
 * @return bool
 */
function isWhiteSpaceOrNull($string)
{
    return is_null($string) || (trim($string) === '');
}
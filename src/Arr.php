<?php

namespace Unity\Support;

/**
 * Class Arr.
 *
 * @author Eleandro Duzentos <eleandro@inbox.ru>
 */
class Arr
{
    /**
     * Searches for values in nested arrays.
     *
     * @param array $array Top most array
     * @param array $keys  Collection of keys
     *
     * @return mixed|null
     */
    public static function nestedSearch(array &$array, array &$keys)
    {
        $data = null;
        $count = count($keys);

        /*
         * If $keys contains only one key, we just
         * return the $array data associated to that key.
         *
         * If $keys contains more then one key, we access
         * and stores the first $array[$key] data (it must be an array)
         * to the $data, and we do the same with
         * the remaining of keys until they finish, the
         * last $searchKeys contains the value
         */
        for ($i = 0; $i < $count; $i++) {
            $key = $keys[$i];

            if ($i == 0)
                $data = $array[$key];
            else
                $data = $data[$key];
        }

        return $data;
    }

    /**
     * Merge two arrays.
     *
     * @param array $array1
     * @param array $array2
     *
     * @return array
     */
    public static function merge(array &$array1, array &$array2)
    {
        return array_merge($array1, $array2);
    }
}

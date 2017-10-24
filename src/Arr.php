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
     * Gets values in nested arrays.
     *
     * @param array $keys      Keys to match
     * @param array $mainArray The top most array
     *
     * @return mixed
     */
    public static function nestedGet(array $keys, array $mainArray)
    {
        $data = null;
        $count = count($keys);

        /*
         * If $keys contains only one key, we just
         * return the $array data associated to that key.
         *
         * If $keys contains more then one key, we access
         * and stores the first $mainArray[$key] data (it must be an array)
         * to the $data, and we do the same with
         * the remaining of keys until they finish, the
         * last $keys contains the value
         */
        for ($i = 0; $i < $count; $i++) {
            $key = $keys[$i];

            if ($i == 0) {
                $data = $mainArray[$key];
            } else {
                $data = $data[$key];
            }
        }

        return $data;
    }

    /**
     * Gets values in nested arrays.
     *
     * @param array $keys      Keys to match
     * @param array $mainArray The top most array
     *
     * @return bool
     */
    public static function nestedHas(array $keys, array $mainArray)
    {
        $data = null;
        $count = count($keys);

        /*
         * If $keys contains only one key, we just
         * returns if that key exists.
         *
         * If $keys contains more then one key, we first check
         * if the first key exists, if not, we return false
         * imediatly, else, we keep checking if the remaining keys
         * exists until we find one that does'nt exists and return false
         * or return true if all keys exists.
         */
        for ($i = 0; $i < $count; $i++) {
            $key = $keys[$i];

            if ($i == 0) {
                if (!isset($mainArray[$key])) {
                    return false;
                }

                $data = $mainArray[$key];
            } else {
                if (!isset($data[$key])) {
                    return false;
                }

                $data = $data[$key];
            }

            if (($i + 1) == $count)
                return true;
        }
    }

    /**
     * Merge two arrays.
     *
     * @param array $array1
     * @param array $array2
     *
     * @return array
     */
    public static function merge(array $array1, array $array2)
    {
        return array_merge($array1, $array2);
    }
}

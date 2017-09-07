<?php

namespace Unity\Support;

class Obj
{
    /**
     * Checks if the given $class implements $interface
     *
     * @param $class
     * @param $interface
     *
     * @return bool
     */
    static function implementsInterface($class, $interface)
    {
        return $interface == class_implements($class);
    }
}
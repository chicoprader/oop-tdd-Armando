<?php

namespace LateStatic;

class Computer
{
    public static $brand = 'PC';

    final public static function getBrand()
    {
        return self::$brand;
    }
}
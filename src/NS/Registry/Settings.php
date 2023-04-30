<?php

namespace NS\Registry;

class Settings
{
    protected static $items = [];

    public static function set($key, $value)
    {
        self::$items[$key] = $value;
    }

    public static function get($key)
    {
        return isset(self::$items[$key]) ? self::$items[$key] : null;
    }

    final public static function removeObject($key)
    {
        if (array_key_exists($key, self::$items)) {
            unset(self::$items[$key]);
        }
    }
}
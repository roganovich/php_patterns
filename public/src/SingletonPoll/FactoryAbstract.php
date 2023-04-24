<?php
namespace SingletonPoll;

abstract class FactoryAbstract {

    protected static $instances = array();

    public static function getInstance() {
        $className = static::getClassName();
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = new $className();
        }
        return self::$instances[$className];
    }

    public static function removeInstance() {
        $className = static::getClassName();
        if (array_key_exists($className, self::$instances)) {
            unset(self::$instances[$className]);
        }
    }

    final protected static function getClassName() {
        return get_called_class();
    }

    protected function __construct() { }

    final protected function __clone() { }
}
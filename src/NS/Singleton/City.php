<?php
namespace NS\Singleton;
/**
 * Singleton class
 */
class City
{

    /**
     * @var self
     */
    private static $instance;

    /**
     * @var string
     */
    public $name;

    /**
     * Return self instance
     *
     * @return self
     */
    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}


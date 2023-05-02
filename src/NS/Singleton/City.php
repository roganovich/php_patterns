<?php

namespace NS\Singleton;

use NS\JsonSerializable;

/**
 * Singleton class
 */
class City implements JsonSerializable
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

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

    public function json(): string
    {
        return json_encode([
            'name' => $this->name
        ]);
    }
}


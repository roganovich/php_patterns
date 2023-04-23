<?php

/**
 * Singleton class
 */
class SiteCity
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

function start()
{
    $siteCity1 = SiteCity::getInstance();
    $siteCity2 = SiteCity::getInstance();
    $siteCity3 = SiteCity::getInstance();

    $siteCity1->name = 'SPB';
    $siteCity2->name = 'MSK';
    $siteCity3->name = 'UFA';

    echo sprintf('Город 1: %s', $siteCity1->name);
    echo '<br>';
    echo sprintf('Город 2: %s', $siteCity2->name);
    echo '<br>';
    echo sprintf('Город 3: %s', $siteCity3->name);
}

start();

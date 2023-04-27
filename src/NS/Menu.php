<?php

namespace NS;

class Menu
{

    /**
     * @var self
     */
    private static $instance;

    private $menuItems = [
        '/singleton.php' => 'Singleton',
        '/singleton_poll.php' => 'SingletonPoll',
        '/strategy.php' => 'Strategy',
        '/decorator.php' => 'Decorator',
    ];

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

    public function getMenu()
    {
        $menu = '<ol style="padding:10px">';
        foreach ($this->menuItems as $href => $item) {
            $menu .= '<li>';
            $menu .= sprintf('<a href="%s">%s</a>', $href, $item);
            $menu .= '</li>';
        }
        $menu .= '</ol>';

        return $menu;
    }

}
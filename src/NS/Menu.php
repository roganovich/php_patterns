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
        '/registry.php' => 'Registry',
        '/factory.php' => 'Factory',
        '/abstractfactory.php' => 'Abstract Factory',
        '/observer.php' => 'Observer',
        '/adapter.php' => 'Adapter',
        '/lazyinitialization.php' => 'LazyInitialization',
        '/chainofresponsibility.php' => 'ChainOfResponsibility',
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
        echo \NS\HtmlTag::open('div', ['padding:10px']);
        $menu = '<ol style="padding:10px">';
        foreach ($this->menuItems as $href => $item) {
            $menu .= '<li>';
            $menu .= sprintf('<a href="%s">%s</a>', $href, $item);
            $menu .= '</li>';
        }
        $menu .= '</ol>';
        echo $menu;
        echo \NS\HtmlTag::close('div');
    }

}
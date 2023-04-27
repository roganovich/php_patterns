<?php
/**
 * Шаблон одиночка позволяет гарантировать, что обьект класса не будет перезаписан, а его состояние всегда одно
 *
*/
require __DIR__ . '/../vendor/autoload.php';

use NS\Singleton\City;

function run()
{
    /**
     * Например город на сайте, во всех местах кода он должен быть один.
    */
    $siteCity1 = City::getInstance();
    $siteCity2 = City::getInstance();
    $siteCity3 = City::getInstance();

    $siteCity1->name = 'SPB';
    $siteCity2->name = 'MSK';
    $siteCity3->name = 'UFA';

    /**
     * Мы всегда будет работать только с одним одьектом класса город
    */
    echo sprintf('Город 1: %s', $siteCity1->name);
    echo '<br>';
    echo sprintf('Город 2: %s', $siteCity2->name);
    echo '<br>';
    echo sprintf('Город 3: %s', $siteCity3->name);
}

echo \NS\HtmlTag::open('div', ['padding:10px']);
echo \NS\Menu::getInstance()->getMenu();
echo \NS\HtmlTag::close('div');
echo __FILE__;
echo \NS\HtmlTag::open('div', ['padding:10px']);
run();
echo \NS\HtmlTag::close('div');
<?php
/**
 * Шаблон одиночка позволяет гарантировать, что объект класса не будет перезаписан, а его состояние всегда одно
 *
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Singleton\City;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, город на сайте, во всех местах кода он должен быть один.
     */
    $siteCity1 = City::getInstance();
    $siteCity2 = City::getInstance();
    $siteCity3 = City::getInstance();

    $siteCity1->name = 'SPB';
    $siteCity2->name = 'MSK';
    $siteCity3->name = 'UFA';

    /**
     * Мы всегда будет работать только с одним объектом класса город
     */
    \NS\Log::print(sprintf('Город 1: %s', $siteCity1->name));
    \NS\Log::print(sprintf('Город 2: %s', $siteCity2->name));
    \NS\Log::print(sprintf('Город 3: %s', $siteCity3->name));
}

\NS\Menu::getInstance()->getMenu();
run();

<?php
/**
 * Абстрактная фабрика
 *
 * Бывают ситуации, когда у нас есть несколько схожих фабрик,
 * и нам нужно скрыть логику выбора фабрики для каждого конкретного запроса.
 * В этом нам поможет шаблон «Абстрактная фабрика»:
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\AbstractFactory\AbstractFactory;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, можно создать объект товара не зная по какой логике будет выбираться клас и какие фабрики под капотом
     */
    $firstProduct = AbstractFactory::getFactory('NEW')->getProduct();
    $secondProduct = AbstractFactory::getFactory('USED')->getProduct();

    \NS\Log::print(sprintf('Создали товар с типом: %s', $firstProduct->getType()));
    \NS\Log::print(sprintf('Создали товар с типом: %s', $secondProduct->getType()));
}

\NS\Menu::getInstance()->getMenu();
run();

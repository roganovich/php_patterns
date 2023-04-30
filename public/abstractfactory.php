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
    /**
     * Например, можно создать объект товара не зная по какой логике будет выбираться клас и какие фабрики под капотом
     */
    $firstProduct = AbstractFactory::getFactory('NEW')->getProduct();
    $secondProduct = AbstractFactory::getFactory('USED')->getProduct();

    echo sprintf('Создали товар с типом: %s', $firstProduct->getType());
    echo '<br>';
    echo sprintf('Создали товар с типом: %s', $secondProduct->getType());
}

echo \NS\HtmlTag::open('div', ['padding:10px']);
echo \NS\Menu::getInstance()->getMenu();
echo \NS\HtmlTag::close('div');
echo __FILE__;
echo \NS\HtmlTag::open('div', ['padding:10px']);
run();
echo \NS\HtmlTag::close('div');
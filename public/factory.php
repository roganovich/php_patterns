<?php
/**
 * Фабрика
 *
 * Это ещё один очень распространённый шаблон.
 * Он делает именно то, что можно предположить, исходя из его названия: производит инстанции объектов.
 * Другими словами, представьте, что у вас есть настоящая фабрика, производящая некое изделие.
 * Мы можем понятия не иметь, как именно фабрика производит это изделие,
 * зато у нас есть универсальный способ заказать его:
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Registry\Settings;
use NS\Factory\ProductNewFactory;
use NS\Factory\ProductUsedFactory;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, можно создать объект товара
     */

    /**
     * Фабрика вернула объект товара с нужным нам интерфейсом
     * При этом мы не знаем каким образом она получила этот объект
    */
    $factory = new ProductNewFactory();
    $firstProduct = $factory->getProduct();

    /**
     * Возможно у БУ товаров вообще другой источник данных
     * Главное, что бы они были объеденины одним интерфейсом
    */
    $factory = new ProductUsedFactory();
    $secondProduct = $factory->getProduct();

    \NS\Log::print(sprintf('Создали товар с типом: %s', $firstProduct->getType()));
    \NS\Log::print(sprintf('Создали товар с типом: %s', $secondProduct->getType()));
}

\NS\Menu::getInstance()->getMenu();
run();

<?php
/**
 * Прототип
 *
 * Иногда инициализация некоторых объектов может протекать в несколько стадий.
 * Разумно было бы сэкономить ресурсы на первой стадии.
 * Для этого создаётся «прототип» – предварительно инициализированный и сохранённый объект,
 * который затем может быть клонирован и окончательно инициализирован:
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Prototype\Factory;
use NS\Prototype\ProductShop;
use NS\Prototype\InternetProduct;

function run()
{
    \NS\Log::print(__FILE__);

    /**
     * Например, нам нужно сделать несколько обьектов по примеру одного
     * За основу берем некий пустой обьект класса
     * При каждом новом обнащении будет делаться его клон
     */

    \NS\Log::print('Создадим пару розничных товаров из прототипа ProductShop');
    /**
     * @var NS\Prototype\ProductShop
     */
    $productProtorype = new Factory(new ProductShop());

    $product1 = $productProtorype->getProduct()->setName('Oil')->setCost('100');
    \NS\Log::print($product1->json());

    $product2 = $productProtorype->getProduct()->setName('Sugar')->setCost('75');
    \NS\Log::print($product2->json());

    /**
     * @var NS\Prototype\InternetProduct
     */
    \NS\Log::print('Создадим пару интерент товаров из прототипа InternetProduct');
    $productProtorype = new Factory(new InternetProduct());

    $product3 = $productProtorype->getProduct()->setName('Oil')->setCost('100');
    \NS\Log::print($product3->json());

    $product4 = $productProtorype->getProduct()->setName('Sugar')->setCost('75');
    \NS\Log::print($product4->json());
}

\NS\Menu::getInstance()->getMenu();
run();

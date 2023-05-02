<?php
/**
 * Строитель
 *
 * Шаблон позволяет создавать разные свойства объекта,
 * избегая загрязнения конструктора (constructor pollution).
 * Это полезно, когда у объекта может быть несколько свойств.
 * Или когда создание объекта состоит из большого количества этапов.
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Builder\OrderBuilder;
use NS\Builder\Order;
use NS\Singleton\City;
use NS\Adapter\Profile;
use NS\Prototype\ProductShop;
use NS\Adapter\WebUserAdapter;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, нам нужно сделать обьект зказа который состоит из товара, пользователя и города
     * Что бы не перегружать его сложными обьектами в свойствах передадим эту работу Строителю,
     * а наш класс заберет только нужные ему данные
     */

    $city = City::getInstance();
    $city->name = 'SPB';
    \NS\Log::print(sprintf('Создаем город: %s ', $city->json()));

    $user = new Profile('Ivan', 'Ivanov', 'Ivanovich', 'Moscow', '79111234567');
    $webUser = new WebUserAdapter($user);
    \NS\Log::print(sprintf('Создаем пользователя: %s ', $webUser->json()));

    $product = new ProductShop();
    $product->setName('Sugar')->setCost(100);
    \NS\Log::print(sprintf('Создаем товар: %s ', $product->json()));

    $orderBuilder = new OrderBuilder();
    $orderBuilder
        ->setCity($city)
        ->setUser($webUser)
        ->setProduct($product);

    $order = new Order($orderBuilder);
    \NS\Log::print(sprintf('Получаем заказ: %s ', $order->json()));

}

\NS\Menu::getInstance()->getMenu();
run();

<?php
/**
 * Наблюдатель
 *
 * «Наблюдатель» – это шаблон, предусматривающий для наблюдаемого объекта возможность зарегистрировать наблюдателя,
 * когда тот вызовет специальный метод.
 * Далее, если состояние наблюдаемого объекта меняется,
 * он посылает сообщение об этом своим наблюдателям:
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\AbstractFactory\AbstractFactory;
use NS\Observer\OrderList;
use NS\Observer\OrderListLogger;
use NS\Observer\OrderListSender;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, можно после добавляения товара в заказ выполнить с ним несколько действий
     */
    $product = AbstractFactory::getFactory('NEW')->getProduct();

    $order = new OrderList();
    $order->addObserver(new OrderListLogger())
            ->addObserver(new OrderListSender())
            ->addProduct($product);
}

\NS\Menu::getInstance()->getMenu();
run();

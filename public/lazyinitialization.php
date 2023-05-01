<?php
/**
 * Поздняя (ленивая) инициализация
 *
 * Представьте себе такую ситуацию: при создании инстанции объекта вы ещё не знаете,
 * какие из (довольно ресурсоёмких) функций понадобятся объекту в будущем, а какие – нет.
 *
 * В таких случаях необходимые операции по инициализации производятся только тогда,
 * когда функция была впервые задействована, и при этом – только один раз:
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\LazyInitialization;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, у нас есть модель внутри могут быть подключены другие модели
     * На не обязательно вызывать все подключения сразу, можно дождатся нужно го момента, если он наступит
     */
    $stock = new NS\LazyInitialization\Stock();
    \NS\Log::print($stock->json());

    $stock->getFirstProduct();
    $stock->getFirstProduct();
    $stock->getFirstProduct();
    $stock->getFirstProduct();
    \NS\Log::print($stock->getFirstProduct()->getType());
    // Как видим подключение выполнилось только 1 раз

    \NS\Log::print($stock->json());

    \NS\Log::print($stock->getSecondProduct()->getType());
    \NS\Log::print($stock->json());

    /**
     * Как видим getUser мы не запрашивали, поэтому он нам и не нужен
    */
    //$stock->getUser();
    \NS\Log::print($stock->json());
}

\NS\Menu::getInstance()->getMenu();
run();

<?php
/**
 * Выбираем стратегию сортировки
 *
 * Шаблон проектирования «Стратегия» имеет дело с алгоритмами.
 * Реализуя его, вы инкапсулируете определённую группу алгоритмов так,
 * чтобы порождённый класс мог воспользоваться ими,
 * не зная ничего об их конкретной реализации. Например
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Strategy\Bubble;
use NS\Strategy\QuickSort;
use NS\Strategy\Sorter;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Наример, у нас есть список и мы можем выбрать каким методом/классом его обработать
     * Вместо написания 2х функций, правильнее сделать 2 разных класса и просто передать его в наш список
     */
    $dataset = [];

    for ($i = 0; $i < 5000; $i++) {
        $dataset[$i] = mt_rand(0, 1000);
    }

    $start = microtime(true);
    $sorter = new Sorter(new Bubble());
    $sorter->sort($dataset);
    \NS\Log::print(sprintf('Время выполнения пузырьковой сортировки: %s с.', microtime(true) - $start));

    $start = microtime(true);
    $sorter = new Sorter(new QuickSort());
    $sort_2 = $sorter->sort($dataset);
    \NS\Log::print(sprintf('Время выполнения быстрой сортировки: %s с.', microtime(true) - $start));
}

\NS\Menu::getInstance()->getMenu();
run();

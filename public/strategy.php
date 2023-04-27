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
    $dataset = [];

    for ($i = 0; $i < 5000; $i++) {
        $dataset[$i] = mt_rand(0, 1000);
    }

    $start = microtime(true);
    $sorter = new Sorter(new Bubble());
    $sorter->sort($dataset);
    echo sprintf('Время выполнения пузырьковой сортировки: %s с.', microtime(true) - $start);

    echo '<hr>';

    $start = microtime(true);
    $sorter = new Sorter(new QuickSort());
    $sort_2 = $sorter->sort($dataset);
    echo sprintf('Время выполнения быстрой сортировки: %s с.', microtime(true) - $start);
}

echo \NS\HtmlTag::open('div', ['padding:10px']);
echo \NS\Menu::getInstance()->getMenu();
echo \NS\HtmlTag::close('div');
echo __FILE__;
echo \NS\HtmlTag::open('div', ['padding:10px']);
run();
echo \NS\HtmlTag::close('div');
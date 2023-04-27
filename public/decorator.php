<?php
/**
 *
 * Шаблон «Декоратор» позволяет подключать к объекту дополнительное поведение (статически или динамически),
 * не влияя на поведение других объектов того же класса.
 * Шаблон часто используется для соблюдения принципа единственной обязанности (Single Responsibility Principle),
 * поскольку позволяет разделить функциональность между классами для решения конкретных задач.
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Decorator\Simple;
use NS\Decorator\TiresWithDisc;
use NS\Decorator\TiresWithRunflet;

function run()
{
    /**
     * Можно таким образом декорировать компановку сложной работы по шиномонтажу
     * Мы к изменяем состояние уже созданного обьекта, при этом другие обьекты не трогаются
     */
    $simpleTires = new Simple();
    echo $simpleTires->getDescription() . ' '; // Установка шин
    echo $simpleTires->getCost() . '<br>'; // 250

    $tiresWithDisc = new TiresWithDisc($simpleTires);
    echo $tiresWithDisc->getDescription() . ' '; // Установка шин, с дисками
    echo $tiresWithDisc->getCost() . '<br>';  // 250 + 50

    $tiresWithRunflet = new TiresWithRunflet($tiresWithDisc);
    echo $tiresWithRunflet->getDescription() . ' '; // Установка шин, с дисками, с ранфлет
    echo $tiresWithRunflet->getCost() . '<br>'; // 250 + 50 + 300

}

echo \NS\HtmlTag::open('div', ['padding:10px']);
echo \NS\Menu::getInstance()->getMenu();
echo \NS\HtmlTag::close('div');
echo __FILE__;
echo \NS\HtmlTag::open('div', ['padding:10px']);
run();
echo \NS\HtmlTag::close('div');
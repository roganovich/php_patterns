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
    \NS\Log::print(__FILE__);
    /**
     * Можно таким образом декорировать компоновку сложной работы по шиномонтажу
     * Мы к изменяем состояние уже созданного объекта, при этом другие объекты не трогаются
     */
    $simpleTires = new Simple();
    $row = $simpleTires->getDescription() . ' '; // Установка шин
    $row .= $simpleTires->getCost(); // 250
    \NS\Log::print($row);

    $tiresWithDisc = new TiresWithDisc($simpleTires);
    $row = $tiresWithDisc->getDescription() . ' '; // Установка шин, с дисками
    $row .= $tiresWithDisc->getCost();  // 250 + 50
    \NS\Log::print($row);

    $tiresWithRunflet = new TiresWithRunflet($tiresWithDisc);
    $row = $tiresWithRunflet->getDescription() . ' '; // Установка шин, с дисками, с ранфлет
    $row .= $tiresWithRunflet->getCost(); // 250 + 50 + 300
    \NS\Log::print($row);
}

\NS\Menu::getInstance()->getMenu();
run();

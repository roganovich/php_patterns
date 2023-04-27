<?php

namespace NS\Decorator;

class Simple implements TireWork
{
    public function getCost()
    {
        return 250;
    }

    public function getDescription()
    {
        return 'Установка шин';
    }
}
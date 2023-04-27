<?php

namespace NS\Decorator;

class TiresWithRunflet implements TireWork
{
    protected $work;

    public function __construct(TireWork $work)
    {
        $this->work = $work;
    }

    public function getCost()
    {
        return $this->work->getCost() + 300;
    }

    public function getDescription()
    {
        return $this->work->getDescription() . ', с ранфлет';
    }
}
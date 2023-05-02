<?php

namespace NS\Prototype;

class Factory
{
    private $product;

    public function __construct(AbstractProduct $product)
    {
        $this->product = $product;
    }
    public function getProduct()
    {
        return clone $this->product;
    }
}
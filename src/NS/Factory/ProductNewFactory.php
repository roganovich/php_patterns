<?php

namespace NS\Factory;

class ProductNewFactory implements FactoryInterface
{
    public function getProduct()
    {
        return new ProductNew();
    }
}
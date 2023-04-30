<?php

namespace NS\Factory;

class ProductUsedFactory implements FactoryInterface
{
    public function getProduct()
    {
        return new ProductUsed();
    }
}
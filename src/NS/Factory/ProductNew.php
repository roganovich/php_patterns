<?php

namespace NS\Factory;

class ProductNew implements ProductInterface
{
    public function getType()
    {
        return "NEW";
    }
}
<?php

namespace NS\Factory;

class ProductUsed implements ProductInterface
{
    public function getType()
    {
        return "USED";
    }
}
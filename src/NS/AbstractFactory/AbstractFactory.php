<?php

namespace NS\AbstractFactory;

use NS\Factory\ProductNewFactory;
use NS\Factory\ProductUsedFactory;

class AbstractFactory
{
    public static function getFactory($type)
    {
        switch ($type) {
            case 'NEW':
                return new ProductNewFactory();
            case 'USED':
                return new ProductUsedFactory();
        }
        throw new Exception('Bad config');
    }
}

<?php

namespace NS\Builder;

use NS\JsonSerializable;

class Order implements JsonSerializable
{
    protected $userName;
    protected $productName;
    protected $cityName;

    public function __construct(OrderBuilder $orderBuilder)
    {
        $this->userName = $orderBuilder->getUser()->getFullName();
        $this->productName = $orderBuilder->getProduct()->getName();
        $this->cityName = $orderBuilder->getCity()->getName();
    }

    public function json(): string
    {
        return json_encode([
            'userName' => $this->userName,
            'productName' => $this->productName,
            'cityName' => $this->cityName,
        ]);
    }
}
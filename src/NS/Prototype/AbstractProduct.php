<?php

namespace NS\Prototype;

use NS\JsonSerializable;

abstract class AbstractProduct implements ProductShopInterface, JsonSerializable
{
    private $cost;
    private $name;

    /**
     * @return string
     */
    public function getCost(): string
    {
        return $this->cost;
    }

    /**
     * @param string $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return md5($this->getName() . $this->getCost() . get_called_class());
    }


    public function json(): string
    {
        return json_encode([
            'id' => $this->getId(),
            'name' => $this->getName(),
            'cost' => $this->getCost(),
            'class' => get_called_class()
        ]);
    }
}
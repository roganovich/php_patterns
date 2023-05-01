<?php

namespace NS\LazyInitialization;

use NS\Adapter\Profile;
use NS\Factory\ProductNew;
use NS\Factory\ProductUsed;
use NS\JsonSerializable;

class Stock implements JsonSerializable
{
    protected $_firstProduct;
    protected $_secondProduct;
    protected $_user;

    public function getFirstProduct()
    {
        if (!$this->_firstProduct) {
            $this->_firstProduct = new ProductNew();
            \NS\Log::print(get_class($this->_firstProduct ));
        }
        return $this->_firstProduct;
    }

    public function getSecondProduct()
    {
        if (!$this->_secondProduct) {
            $this->_secondProduct = new ProductUsed();
            \NS\Log::print(get_class($this->_secondProduct ));
        }
        return $this->_secondProduct;
    }

    public function getUser()
    {
        if (!$this->_user) {
            $this->_user = new Profile('Ivan', 'Ivanov', 'Ivanovich', 'Moscow', '79111234567');
            \NS\Log::print(get_class($this->_user ));
        }
        return $this->_user;
    }

    public function json(): string
    {
        return json_encode([
            'firstProduct' => (isset($this->_firstProduct)) ?? get_class($this->_firstProduct),
            'secondProduct' => (isset($this->_secondProduct)) ?? get_class($this->_secondProduct),
            'user' => (isset($this->_user)) ?? get_class($this->_user),
        ]);
    }
}
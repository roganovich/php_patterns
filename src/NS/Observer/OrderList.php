<?php

namespace NS\Observer;

use NS\Factory\ProductInterface;

class OrderList implements ObservableInterface
{
    private $_observers = array();

    public function addObserver($observer)
    {
        $this->_observers [] = $observer;

        return $this;
    }

    public function addProduct($product) {
        foreach($this->_observers as $obs){
            $obs->onChanged($this, $product);
        }
    }

}
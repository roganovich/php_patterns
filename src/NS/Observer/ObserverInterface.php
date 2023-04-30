<?php

namespace NS\Observer;

interface ObserverInterface
{
    function onChanged($sender, $product);
}
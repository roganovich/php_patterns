<?php

namespace NS\Observer;

interface ObservableInterface
{
    function addObserver($observer);
}
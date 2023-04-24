<?php
namespace SingletonPoll;

use SingletonPoll\FactoryAbstract;

abstract class Factory extends FactoryAbstract {

    final public static function getInstance() {
        return parent::getInstance();
    }

    final public static function removeInstance() {
        parent::removeInstance();
    }
}
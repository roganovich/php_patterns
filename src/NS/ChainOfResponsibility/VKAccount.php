<?php

namespace NS\ChainOfResponsibility;

class VKAccount extends AbstractAccount
{
    public function __construct(bool $isEnabled)
    {
        $this->setIsEnabled($isEnabled);
    }
}
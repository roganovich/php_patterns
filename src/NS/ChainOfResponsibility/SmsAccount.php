<?php

namespace NS\ChainOfResponsibility;

class SmsAccount extends AbstractAccount
{
    public function __construct(bool $isEnabled)
    {
        $this->setIsEnabled($isEnabled);
    }
}
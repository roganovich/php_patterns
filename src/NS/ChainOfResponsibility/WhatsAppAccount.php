<?php

namespace NS\ChainOfResponsibility;

class WhatsAppAccount extends AbstractAccount
{
    public function __construct(bool $isEnabled)
    {
        $this->setIsEnabled($isEnabled);
    }
}
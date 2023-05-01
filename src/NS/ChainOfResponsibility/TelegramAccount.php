<?php

namespace NS\ChainOfResponsibility;

class TelegramAccount extends AbstractAccount
{
    public function __construct(bool $isEnabled)
    {
        $this->setIsEnabled($isEnabled);
    }
}
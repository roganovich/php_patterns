<?php

namespace NS\ChainOfResponsibility;

abstract class AbstractAccount
{
    protected $child;
    protected $isEnabled;

    public function setIsEnabled(bool $isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function setChild(AbstractAccount $account)
    {
        $this->child = $account;

        return $this;
    }

    public function send()
    {
        if ($this->canSend()) {
            \NS\Log::print(sprintf('Отправил сообщение через %s', get_called_class()));
        } elseif ($this->child) {
            \NS\Log::print(sprintf('Не смогу отправить сообщение через %s', get_called_class()));
            $this->child->send();
        } else {
            throw new Exception('Не знаю чем отправить сообщение');
        }
    }

    public function canSend(): bool
    {
        return $this->isEnabled;
    }

}
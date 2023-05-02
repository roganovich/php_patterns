<?php

namespace NS\Adapter;

use NS\JsonSerializable;

class WebUserAdapter implements JsonSerializable
{
    private $profile;

    function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function getFullName()
    {
        return implode(' ', [
            $this->profile->getLastname(),
            $this->profile->getFirstname(),
            $this->profile->getPatronymic(),
        ]);
    }

    public function getPhone()
    {
        $number = substr($this->profile->getPhonenumber(), -10, 10);
        return preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{2})(\d{2}).*~', '8 ($1) $2-$3-$4', $number);
    }

    public function json(): string
    {
        return json_encode([
            'name' => $this->getFullName(),
            'city' => $this->profile->getCityname(),
            'phone' => $this->getPhone()
        ]);
    }
}
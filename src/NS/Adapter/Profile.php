<?php

namespace NS\Adapter;

use NS\JsonSerializable;

class Profile implements JsonSerializable
{
    protected $firstname;
    protected $lastname;
    protected $patronymic;
    protected $cityname;
    protected $phonenumber;

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * @param mixed $patronymic
     */
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @return mixed
     */
    public function getCityname()
    {
        return $this->cityname;
    }

    /**
     * @param mixed $cityname
     */
    public function setCityname($cityname)
    {
        $this->cityname = $cityname;
    }

    /**
     * @return mixed
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * @param mixed $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }

    function __construct($firstname, $lastname, $patronymic, $cityname, $phonenumber)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setPatronymic($patronymic);
        $this->setCityname($cityname);
        $this->setPhonenumber($phonenumber);
    }

    public function json(): string
    {
        return json_encode([
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'patronymic' => $this->getPatronymic(),
            'cityname' => $this->getCityname(),
            'phonenumber' => $this->getPhonenumber()
        ]);
    }
}

<?php

/**
 * Created by PhpStorm.
 * User: Tidiane
 * Date: 27/08/2016
 * Time: 12:51
 */
class Contact
{
    private $id;
    private $address;
    private $phone;

    /**
     * Contact constructor.
     * @param $id
     * @param $address
     * @param $phone
     */
    public function __construct($address, $phone)
    {
        $this->address = $address;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

}
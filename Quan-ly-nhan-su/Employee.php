<?php

class Employee
{
    public $ho;
    public $name;
    public $birthday;
    public $address;
    public $job;

    public function __construct($ho,$name,$birthday,$address,$job)
    {
        $this->ho = $ho;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getHo()
    {
        return $this->ho;
    }

    /**
     * @param mixed $ho
     */
    public function setHo($ho)
    {
        $this->ho = $ho;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

}
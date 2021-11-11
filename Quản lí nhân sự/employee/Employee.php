<?php

class Employee
{
  public $ho;
    public $name;
    public $birthday;
    public $address;
    public $job;
//  public $employee = [];
  public function __construct($ho,$name,$birthday,$address,$job)
  {
      $this->ho = $ho;
      $this->name = $name;
      $this->birthday = $birthday;
      $this->address = $address;
      $this->job = $job;
//  {   $this->employee = [
//      "ho" => $ho,
//      "name" => $name,
//      "birthday" => $birthday,
//      "address" =>$address,
//      "job" => $job
//      ];
  }

    /**
     * @return mixed
     */
    public function getHo()
    {
        return $this->employee["ho"];
    }

    /**
     * @param mixed $ho
     */
    public function setHo($ho)
    {
        $this->employee["ho"] = $ho;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return  $this->employee["name"];
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->employee["name"] = $name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->employee["birthday"];
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->employee["birthday"] = $birthday;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->employee["address"];
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->employee["address"] = $address;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->employee["job"];
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->employee["job"] = $job;
    }


}
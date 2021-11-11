<?php

class User
{
    protected $name;
    protected $email;
    public $role;

    public function __construct()
    {

    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getInfo()
    {
        return "name: $this->name , email: $this->email , chức danh : ".$this->isAdmin();
    }

    public function isAdmin()
    {
        if($this->role == 1) {
            return $this->role = "admin";
        }else{
            return $this->role = "user";
        }
    }
}
<?php

class EmployeeManager
{
    private static $list;

    public function __construct()
    {
        self::$list = [];
    }

    /**
     * @return array
     */
    public static function getList()
    {
        return self::$list;
    }
    public function display() {
        return self::$list;
    }
    public function addEmployee($employee)
    {
        array_push(self::$list,$employee);
    }

    public function deleteEmployee($index)
    {
      array_splice(self::$list,$index,1);
      return self::$list;
    }
    public function editInfo($index,$new) {
        self::$list[$index] = $new;
        return self::$list;
    }

}
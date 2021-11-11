<?php

class Person
{
    private $name;
    public static  $count = 0;

    public function __construct( $name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        return 'Application name: ' . $this->name;
    }
}
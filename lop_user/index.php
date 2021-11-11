<?php
include_once "User.php";
$person1 = new User();
$person1->setName("Thùy Dung");
$person1->setEmail("dung@gmail.com");
$person1->setRole(1);
echo $person1->getInfo();

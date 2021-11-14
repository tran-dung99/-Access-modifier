<?php
include_once "EmployeeManager.php";
$index = $_REQUEST["id"];
$employeeManager = new EmployeeManager();
$employeeManager->delete($index);
header("location: index.php");
?>

<?php

include_once "employee/Employee.php";
include_once "Service/EmployeeManager.php";

$listEmployee = new EmployeeManager();
$listEmployee->addEmployee(new Employee("Trần", "Dung", "27/12/1999", "Nghệ an", "Giám đốc"));
$listEmployee->addEmployee(new Employee("Nguyễn", "Hoa", "3/1/1997", "Huế", "Nhân viên"));
$listEmployee->addEmployee(new Employee("Nguyễn", "Nhung", "5/1/1998", "Bắc Giang", "Thử Ký"));
$listEmployee->addEmployee(new Employee("Phan", "Ly", "3/1/1997", "Bình Định", "Nhân viên"));
$listEmployee->addEmployee(new Employee("Chu", "Hải", "3/1/1997", "Vinh", "Nhân viên"));
$listEmployee->addEmployee(new Employee("Nguyễn", "Nhi", "3/1/1997", "Đà Nẵng", "Nhân viên"));
$listEmployee->editInfo(3,new Employee("Phan", "Huệ", "3/1/1997", "Bình Định", "Nhân viên"));
$array = $listEmployee->display();
$listEmployee->deleteEmployee(1);
$array = $listEmployee->display();
?>

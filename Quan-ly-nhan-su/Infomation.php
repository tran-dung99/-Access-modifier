<?php
include_once "EmployeeManager.php";
$employeeManager = new EmployeeManager();
$employees = $employeeManager->load();
$index = $_REQUEST["id"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        margin-top: 100px;
        margin-left: 300px;
        border-collapse: collapse;

    }
    table tr th{
        padding: 20px ;
        border: 1px solid blue;
    }
    table tr td{
        padding: 20px ;
        border: 1px solid blue;
    }
</style>
<body>
<a href="index.php">Trở về</a>
<table>
    <tr>
        <th>Họ và tên</th>
        <th>Địa chỉ</th>
        <th>Công việc</th>
    </tr>
    <tbody>
    <tr>
        <td><?php echo $employees[$index]->getHo().' '.$employees[$index]->getName() ?></td>
        <td><?php echo $employees[$index]->getAddress() ?></td>
        <td><?php echo $employees[$index]->getJob() ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>

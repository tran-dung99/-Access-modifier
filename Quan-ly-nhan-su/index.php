<?php
include_once "EmployeeManager.php";
$employees1 = new EmployeeManager();
$employees = $employees1->load();
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
<table>

    <thead>
    <tr>
        <td colspan="8"><a href="Create.php">Thêm Nhân sự</a></td>
    </tr>
    <tr>
        <th>Họ</th>
        <th>Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa chỉ</th>
        <th>Vị trí công việc</th>
        <th>Thông tin chi tiết</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $key=>$employee):?>
    <tr>
        <td><?php echo $employee->getHo() ?></td>
        <td><?php echo $employee->getName() ?></td>
        <td><?php echo $employee->getBirthday() ?></td>
        <td><?php echo $employee->getAddress() ?></td>
        <td><?php echo $employee->getJob() ?></td>
        <td><a href="Infomation.php?id=<?php echo $key?>">Xem</a></td>
        <td><a href="Delete.php?id=<?php echo $key?>">Xóa</a></td>
        <td><a href="edit.php?id=<?php echo $key?>">Chỉnh sửa</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>

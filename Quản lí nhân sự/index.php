<?php
include "data.php";
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
<style >
    table tr td{
        padding: 20px;
    }
    table tr th {
        background-color: green;
        height: 50px;
        font-size: 20px;
    }
</style>
<body>
<table>
    <tr>
        <th>Họ</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Vị trí công việc</th>
    </tr>

    <?php if (isset($array)) {
        foreach ($array as $key => $employee) : ?>
            <tr>
            <td><?php echo $employee-> ho?></td>
            <td><?php echo $employee->name?></td>
            <td><?php echo $employee->birthday?></td>
            <td><?php echo $employee->address?></td>
            <td><?php echo $employee->job?></td>
            </tr>
        <?php endforeach;
    } ?>
</table>
</body>
</html>

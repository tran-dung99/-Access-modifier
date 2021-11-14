<?php
include_once "EmployeeManager.php";
$employees = new EmployeeManager();
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
<body>
<form method="post">
    <label><input type="text" name="ho" placeholder="Nhập họ"></label>
    <label><input type="text" name="name" placeholder="Nhập Tên"></label>
    <label><input type="text" name="birthday" placeholder="Nhập ngày sinh"></label>
    <label><input type="text" name="address" placeholder="Nhập địa chỉ"></label>
    <label><input type="text" name="job" placeholder="Nhập vị trí công việc"></label>
    <input type="submit" value="Thêm">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $employees->add($_REQUEST);
    header("location:index.php");
}
?>

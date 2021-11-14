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
<body>
<form method="post">
    <label><input type="text" name="ho" value="<?php echo $employees[$index]->getHo() ?>"></label>
    <label><input type="text" name="name" value="<?php echo $employees[$index]->getName() ?>"></label>
    <label><input type="text" name="birthday" value="<?php echo $employees[$index]->getBirthday() ?>"></label>
    <label><input type="text" name="address" value="<?php echo $employees[$index]->getAddress() ?>"></label>
    <label><input type="text" name="job" value="<?php echo $employees[$index]->getJob() ?>"></label>
    <input type="submit" value="Thêm">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $employeeManager->edit($index);
    header("location:index.php");
}
?>

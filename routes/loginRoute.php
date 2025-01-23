<?php 
include "../controller/employeeController.php";
extract($_POST);
$idn = $_POST['idn'];
$pass = sha1($_POST['pass']);
$log = new readEmployeeControllerClass;
$log2 = $log -> readEmployeeByIdControllerFunction($idn, $pass);
echo "login";
?>
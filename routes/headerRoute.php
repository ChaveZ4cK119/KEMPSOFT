<?php
include "../controller/imgController.php";
include "../controller/employeeController.php";
$ac = 1;
$idn = $_SESSION['user'];
$emp = new readEmployeeControllerClass;
$emp1 = $emp -> readEmployeebyIdnControllerFunction($idn);
$name = $emp1['name_kem'];
$surname = $emp1['surname_kem'];
$id = $emp1['id_kem'];
$img = new readImgControllerClass;
$img1 = $img -> readImgByEmpIdControllerFunction($id);
$img2 = $img1['urlimg_kim'];
$header = new headerElementsClass;
$header1 = $header -> normalHeaderElementsFunction($name, $img2, $surname);
?>
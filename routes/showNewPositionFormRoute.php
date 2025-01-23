<?php
header("Access-Control-Allow-Origin: https://localhost");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
include "../element/formElements.php";
$npo = new formElementClass;
$npo = $npo -> nPositionFormElementFunction();
?>
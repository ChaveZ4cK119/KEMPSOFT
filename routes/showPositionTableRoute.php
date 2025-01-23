<?php 
header("Access-Control-Allow-Origin: https://localhost");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include "../controller/positionController.php";
include "../element/tableElements.php";
$stat = 1;
$kpo0 = new readEnablePositionsControllerClass;
$kpo = $kpo0 -> readEnablePositionsControllerFunction($stat);
if(!empty($kpo)){
    $table0 = new hrTablesElementClass;
    $table = $table0 -> positionTableElementFunction($kpo);
}else{
    ?> <html><h1>No hay datos que mostrar en la tabla de Cargos</h1></html> <?php
}

?>
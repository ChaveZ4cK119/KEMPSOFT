<?php 
header("Access-Control-Allow-Origin: https://localhost");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
include "../controller/positionController.php";
$idu = $_POST['id'];
$stat = 0;
$ndel = new delPositionControllerClass($stat, $idu);
$ndel2 = $ndel -> fDelPositionControllerFunction($stat, $idu);

if (!empty($ndel2)){
    $response = [
        'status' => 'success',
        'message' => 'Valor eliminado correctamente',
      ];
}else{
    $response = [
        'status' => 'error',
        'message' => 'No se ha podido eliminar el valor',
      ];
}
header('Content-Type: application/json');
  echo json_encode($response);
?> 
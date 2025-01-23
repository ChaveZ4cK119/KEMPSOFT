<?php
header("Access-Control-Allow-Origin: https://localhost");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
include "../controller/positionController.php";

$input = file_get_contents("php://input"); 
$data0 = json_decode($input, true);  



// // $data0 = ($_POST['data']);

// if (empty($data0)){
//     $response = array('status' => 'error', 'message' => 'Failed to process data');
// }else{
//     $response = array('status' => 'success', 'message' => 'Data processed successfully');
// }




if (!empty($data0['data'])) {
 
    foreach ($data0['data'] as $item) {
    $detail = $item['det'];      
    $name = $item['nam'];
    echo $nam, $det;

    // $rs0 = new regPositionControllerClass;
    // $rs = $rs0 -> regPositionControllerfunction($name, $detail);
        
    }
   
    
    $response = array('status' => 'success', 'message' => 'Data processed successfully', 'values');
} else {
  
    $response = array('status' => 'error', 'message' => 'Failed to process data');
}

echo json_encode($response);



?>
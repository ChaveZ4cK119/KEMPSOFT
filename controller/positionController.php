<?php 
include_once "../web/conection.php";
include "../model/positionModel.php";
class readEnablePositionsControllerClass{
    public function readEnablePositionsControllerFunction($stat){
        $kpo0 = new readEnablePositionsModelClass;
        $kpo = $kpo0 -> readEnablePositionsModelFunction($stat);
        return $kpo;
    }
}
class delPositionControllerClass{
    public function fDelPositionControllerFunction($stat, $idu){
        $fdel = new delPositionModelClass;
        $fdel1 = $fdel -> fDelPositionModelFunction($stat, $idu );
        return $fdel1;
    } 
}
class regPositionControllerClass{
    public function regPositionControllerfunction($name, $detail){
        $reg0 = new regPositionModelClass;
        $reg1 = $reg0 -> regNewPositionModelFunction($name,  $detail);
        return $reg1;
    }
}
?>
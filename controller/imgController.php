<?php 
include "../model/imgModel.php";
include_once("../web/conection.php"); 
class readImgControllerClass{
    public function readImgByEmpIdControllerFunction($id){
        $img = new readImgModelClass;
        $img1 = $img -> readImgByEmpIdModelFunction($id);
        return $img1;
    }
}
?>
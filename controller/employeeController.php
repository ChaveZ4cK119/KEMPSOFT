<?php 
include_once("../web/conection.php"); 
include "../model/employeeModel.php";
class readEmployeeControllerClass{
    public function readEmployeeByIdControllerFunction($idn, $pass){ //login i'm sorry by name 
        $r1 = new readEmployeeModelClass;
        $r2 = $r1 -> ReadEmployeeByIdModelFunction($idn, $pass);
        if (!empty($r2)){
            include "../web/createSession.php";
            header("location: ../view/home.php");
        }else{
            header("location: ../index.php?e=1");
        }
    }
    public function readEmployeebyIdnControllerFunction($idn){
        $emp = new readEmployeeModelClass;
        $emp1 = $emp -> readEmployeeByIdnModelFunction($idn);

        
        return $emp1;
        
    }

}
?>
<?php 
class readEmployeeModelClass{
    public function ReadEmployeeByIdModelFunction($idn, $pass){
        $link = CDB();
        $sql1 = $link -> prepare("SELECT * FROM kuser WHERE idnumber_kus = ? and pass_kus = ?");
        $sql1 -> bindParam(1, $idn);
        $sql1 -> bindParam(2, $pass);
        $sql1 -> execute();
        $r2 = $sql1 -> fetch(PDO::FETCH_ASSOC);
        return $r2;
    }
    public function readEmployeeByIdnModelFunction($idn){
        $link = CDB();
        $sql1 = $link -> prepare("SELECT * FROM kemployee WHERE idnumber_kem = ?");
        $sql1 -> bindParam(1, $idn);
        $sql1 -> execute();
        $emp = $sql1 -> fetch(PDO::FETCH_ASSOC);
        return $emp;

    }
    
}
class insertEmployeeModelClass{
    public function insertEmployeeModelFunction(){
            $link = CDB();
            $sql1 = $link -> prepare("INSERT INTO kemployee (name_kem, surname_kem, idnumber_kem, dateinsert_kem) VALUES (?,?,?,now()");
            $sql1 -> bindParam(1, $name);
            $sql1 -> bindParam(2, $surname);
            $sql1 -> bindParam(3, $idn);
            $sql1 -> execute();
            $r2 = $sql1 -> fetchAll();
            return $r2;
    }
}
?>
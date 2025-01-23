<?php 
class readEnablePositionsModelClass{
    public function readEnablePositionsModelFunction($stat){
        $link = CDB();
        $sql1 = $link -> prepare ("SELECT * FROM kposition WHERE state_kpo = ?");
        $sql1 -> bindParam(1, $stat);
        $sql1 -> execute();
        $kpo = $sql1 -> fetchAll();
        return $kpo;
    }
}

class delPositionModelClass{
    public function fDelPositionModelFunction($stat, $idu){
        $link = CDB();
        $sql1 = $link -> prepare ("UPDATE kposition SET state_kpo = ? WHERE id_kpo = ?");
        $sql1 -> bindParam(1, $stat);
        $sql1 -> bindParam(2, $idu);
        $sql1 -> execute();
        $sf = $sql1 -> rowCount();
        return $sf;
    }
}

class regPositionModelClass{
    public function regNewPositionModelFunction($name, $detail){
        $link = CDB();
        $sql1 = $link -> prepare ("INSERT INTO kposition (name_kpo, details_kpo) VALUES (?, ?)");
        $sql1 -> bindParam(1, $name);
        $sql1 -> bindParam(2, $detail);
        $rs = $sql1 -> execute();
        return $rs;
    }
}
?>

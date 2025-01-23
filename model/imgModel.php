<?php 
class readImgModelClass{
    public function readImgByEmpIdModelFunction($id){
        $link = CDB();
        $sql1 = $link -> prepare ("SELECT * FROM kimg WHERE idkem_kim  = ?");
        $sql1 -> bindParam(1,$id);
        $sql1 -> execute();
        $img = $sql1 -> fetch(PDO::FETCH_ASSOC);
        return $img;
    }
}
?>
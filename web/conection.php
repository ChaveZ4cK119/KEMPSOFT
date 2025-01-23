<?php
function CDB(){

    try {
        $link = new PDO('mysql:host=localhost;dbname=kemp02', 'chavez', 'eddiach117');
        return $link;
    }
    catch(PDOException $e){
        echo "La conexion ha fallad".$e ->getMessage();
    }
}

?>  

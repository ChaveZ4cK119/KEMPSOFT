<?php 
include "../web/FindSession.php";

?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/homeStyle.css">
    
    <title>Kemp</title>
</head>
<body>
 <?php 
        //header
        include_once "../element/homeElements.php";
        include "../routes/headerRoute.php";
        //Barra lateral
        ?>

    <div class="vbody">
        
        <div class="lb">
        <?php
        include "../routes/lateralBarRoute.php";
        ?>
        </div>
        <?php

       
        
       
        ?>
        <div class="tables" id="tables">
            <h1>Tus tablas apareceran aquí</h1>
        </div>
    </div>
   
<script src="../js/homeJs.js"> </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
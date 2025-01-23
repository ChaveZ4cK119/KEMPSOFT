<?php
session_start();
if (empty($_SESSION['user'])){
    header('Location: ../index.php?ms=debe_iniciar_sesion');
    exit();
}
?>
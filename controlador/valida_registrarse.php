<?php
session_start();
require '../controlador/controlador.php';        

if($_POST){
    $controlador = new Controlador();
    $controlador->registrase($_POST);    
}    
?>
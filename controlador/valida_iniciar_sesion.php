<?php
session_start();
require '../controlador/controlador.php';        

if($_POST){
    $controlador = new Controlador();
    $controlador->iniciar_sesion($_POST);    
}    
?>
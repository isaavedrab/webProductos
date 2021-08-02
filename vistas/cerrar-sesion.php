<?php
session_start();
require '../controlador/controlador.php';        
$controlador = new Controlador();
$controlador->cerrar_sesion();      
?>
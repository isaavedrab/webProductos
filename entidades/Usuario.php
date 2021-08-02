<?php

class Usuario{

    public $idusuario;    
    public $nombre;    
    public $apepaterno;
    public $apematerno;
    public $rut;
    public $edad;
    public $correo;
    public $telefono;
    public $comuna;
    public $region;    
    public $nombreusuario;    
    public $contrasenna;    
    public $idperfil;
    public $idimagen;   
    
    public function __construct() {
        
    }    
    
    public function getIdUsuario(){
        return $this->idusuario;
    }
    public function setIdUsuario($idusuario){
        return $this->idusuario = $idusuario;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }

    public function getApepaterno(){
        return $this->apepaterno;
    }
    public function setApepaterno($apepaterno){
        return $this->apepaterno = $apepaterno;
    }
    
    public function getApematerno(){
        return $this->apematerno;
    }
    public function setApematerno($apematerno){
        return $this->apematerno = $apematerno;
    }

    public function getRut(){
        return $this->rut;
    }
    public function setRut($rut){
        return $this->rut = $rut;
    }

    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        return $this->edad = $edad;
    }

    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        return $this->correo = $correo;
    }

    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        return $this->telefono = $telefono;
    }

    public function getRegion(){
        return $this->region;
    }
    public function setRegion($region){
        return $this->region = $region;
    }

    public function getComuna(){
        return $this->comuna;
    }
    public function setComuna($comuna){
        return $this->comuna = $comuna;
    }

    public function getNombreusuario(){
        return $this->nombreusuario;
    }
    public function setNombreusuario($nombreusuario){
        return $this->nombreusuario = $nombreusuario;
    }

    public function getContrasenna(){
        return $this->contrasenna;
    }
    public function setContrasenna($contrasenna){
        return $this->contrasenna = $contrasenna;
    }

    public function getIdPefil(){
        return $this->idperfil;
    }
    public function setIdPerfil($idperfil){
        return $this->idperfil = $idperfil;
    }

    public function getIdimagen(){
        return $this->idimagen;
    }
    public function setIdimagen($idimagen){
        return $this->idimagen = $idimagen;
    }

}

?>
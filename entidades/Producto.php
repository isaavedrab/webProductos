<?php

class Producto{

    public $idproducto;    
    public $producto;    
    public $descripcion;
    public $valor;
    public $idimagen;
        
    public function __construct() {
        
    }    
    
    public function getIdproductor(){
        return $this->idproducto;
    }
    public function setIdproductor($idproducto){
        return $this->idproducto = $idproducto;
    }

    public function getProducto(){
        return $this->idproducto;
    }
    public function setProducto($idproducto){
        return $this->idproducto = $idproducto;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        return $this->descripcion = $descripcion;
    }
    
    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        return $this->valor = $valor;
    }

    public function getIdimagen(){
        return $this->idimagen;
    }
    public function setIdimagen($idimagen){
        return $this->idimagen = $idimagen;
    }  

}

?>
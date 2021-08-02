<?php

class Conexion{

    public $conexion;

    public function __construct(){
				
    }

    public function conectar(){

        try{
            $conexion = $this->conexion = mysqli_connect("localhost","root","123456","dai2");
            return $conexion;
            
        }catch(mysqli_sql_exception $e){
            // Excepciones
            echo "Error: ". $e->getMessage();
        }       
    }
}

?>
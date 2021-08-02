<?php 

require_once '../controlador/Conexion.php';
require '../entidades/Producto.php';

class ProductoDAO extends Producto{

    public function __construct() {
        
    } 

    public function create(Producto $producto){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar, "INSERT INTO producto (producto,descripcion,valor,idimagen) VALUES (?,?,?,?)");                                       
        $consulta->bind_param("ssii", $producto->producto, $producto->descripcion, $producto->valor, $producto->idimagen);
        $consulta->execute();
        $idproducto = $consulta->insert_id;
        return $idproducto;        
    }
    
    public function read($idproducto){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar,"SELECT * FROM producto WHERE idproducto=?");
        $consulta->bind_param("i",$idproducto);
        $consulta->execute();
        $resultado = $consulta->get_result();
        return $resultado->fetch_object(Producto::class);
    }
       
    public function update(Producto $producto, $idproducto){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar, "UPDATE producto SET producto=?, descripcion=?,valor=?, idimagen=? WHERE idproducto=?");
        $consulta->bind_param("ssiii",$producto->producto,$producto->descripcion,$producto->valor,$producto->idimagen, $idproducto);
        $consulta->execute();
        return $consulta->affected_rows;            
    }
   
    public function delete($idproducto){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar, "DELETE FROM producto WHERE idproducto=?");
        $consulta->bind_param("i", $idproducto);
        $consulta->execute();
        return $consulta->affected_rows;            
    }

    public function getAll(){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar,"SELECT * FROM producto");
        $consulta->execute();
        $resultado = $consulta->get_result();
        $productos = [];
        while($producto = $resultado->fetch_object(Producto::class))
            array_push($productos, $producto);
        return $productos;
    }   
}
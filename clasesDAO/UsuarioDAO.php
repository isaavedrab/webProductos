<?php 

require_once '../controlador/Conexion.php';
require '../entidades/Usuario.php';

class UsuarioDAO extends Usuario{

    public function __construct() {
        
    }    

    public function create(Usuario $usuario){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        
        $consulta = mysqli_prepare($conectar, "INSERT INTO usuario (nombre,apepaterno,apematerno,rut,edad,correo,telefono,comuna,region,nombreusuario,contrasenna,idperfil,idimagen) 
                                          VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $usuario->idperfil = 2;        
        if($usuario->edad == null || $usuario->edad == ""){
            $usuario->edad = 0;
        }
                                
        $consulta->bind_param(
            "ssssissssssii",
            $usuario->nombre,
            $usuario->apepaterno,
            $usuario->apematerno,
            $usuario->rut,
            $usuario->edad,
            $usuario->correo,
            $usuario->telefono,
            $usuario->comuna,
            $usuario->region,
            $usuario->nombreusuario,
            $usuario->contrasenna,
            $usuario->idperfil,
            $usuario->idimagen
        );
        $consulta->execute();
        $idusuario = $consulta->insert_id;
        return $idusuario;        
    }
    
    public function read($idusuario){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar,"SELECT * FROM usuario WHERE idusuario=?");
        $consulta->bind_param("i",$idusuario);
        $consulta->execute();
        $resultado = $consulta->get_result();
        return $resultado->fetch_object(Usuario::class);
    }
        
    public function update(Usuario $usuario, $idusuario){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        
        $consulta = mysqli_prepare(
            $conectar, 
            "UPDATE usuario SET nombre=?, apepaterno=?,apematerno=?, rut=?, edad=?, correo=?, telefono=?, comuna=?, region=?, nombreusuario=?, idimagen=?
             WHERE idusuario=?");
        
            $consulta->bind_param(
            "ssssisssssii",
            $usuario->nombre,
            $usuario->apepaterno,
            $usuario->apematerno,
            $usuario->rut,
            $usuario->edad,
            $usuario->correo,
            $usuario->telefono,
            $usuario->comuna,
            $usuario->region,
            $usuario->nombreusuario,          
            $usuario->idimagen,
            $idusuario,
        );
        $consulta->execute();
        return $consulta->affected_rows;            
    }

    public function delete($idusuario){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar, "DELETE FROM usuario WHERE idusuario=?");
        $consulta->bind_param("i", $idusuario);
        $consulta->execute();
        return $consulta->affected_rows;            
    }
        
    public function getAll(){
        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar,"SELECT * FROM usuario");
        $consulta->execute();
        $resultado = $consulta->get_result();
        $usuarios = [];
        while($usuario = $resultado->fetch_object(Usuario::class))
            array_push($usuarios, $usuario);
        return $usuarios;
    }

    public function login($usuarioDAO){

        $conexion = new Conexion();
        $conectar = $conexion->conectar();
        $consulta = mysqli_prepare($conectar,"SELECT * FROM usuario WHERE nombreusuario =? AND contrasenna = ?");
        $consulta->bind_param("ss",$usuarioDAO->nombreusuario,$usuarioDAO->contrasenna);
        $consulta->execute();
        $resultado = $consulta->get_result();
        return $resultado->fetch_object(Usuario::class);
    }

}

?>
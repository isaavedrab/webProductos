<?php          
    require '../clasesDAO/UsuarioDAO.php';
    require '../clasesDAO/ProductoDAO.php';
    
    class Controlador
    {         
        
        function __construct(){
            
        }     

        public function iniciar_sesion($post){
                        
            $usuarioDAO = new UsuarioDAO();
            $usuarioDAO->setNombreUsuario($post['nombreusuario']);
            $usuarioDAO->setContrasenna($post['contrasenna']);
            
            $login = $usuarioDAO->login($usuarioDAO);
            if($login){                
                $_SESSION['idusuario'] = $login->idusuario;
                $_SESSION['nombreusuario'] = strtoupper($login->nombreusuario);
                $_SESSION['idperfil'] = $login->idperfil;

                header('Location: ../vistas/inicio.php');
                
                /*
                if(!headers_sent()){
                    header('Location: inicio.php');
                }
                */
                
            }else{
                echo "Usuario no registrado.";
            }
            exit();            
        }        

        public function cerrar_sesion(){
            
            session_start();
            session_destroy();                        
            header('Location: ./inicio.php');  
            /*
            if(isset($_SERVER['HTTP_REFERER'])) {
                header('Location: '.$_SERVER['HTTP_REFERER']);  
            }else{
                header('Location: ./inicio.php');  
            } 
            */           
            exit;  
        }

        public function registrase($post){
            
            $usuarioDAO = new UsuarioDAO();            
            $usuarioDAO->nombre     = $post['nombre']; 
            $usuarioDAO->apepaterno = $post['apepaterno']; 
            $usuarioDAO->apematerno = $post['apematerno']; 
            $usuarioDAO->rut        = $post['rut']; 
            $usuarioDAO->edad       = $post['edad']; 
            $usuarioDAO->correo      = $post['correo']; 
            $usuarioDAO->telefono   = $post['telefono']; 
            $usuarioDAO->comuna     = $post['comuna']; 
            $usuarioDAO->region     = $post['region']; 
            $usuarioDAO->nombreusuario = $post['nombreusuario'];
            $usuarioDAO->contrasenna = $post['contrasenna'];                      

            $registro = $usuarioDAO->create($usuarioDAO);
            
            header('Location: ../vistas/iniciar-sesion.php');
            exit();
        }
          
        //Usuarios
        public function agregarUsuario($post){

            $usuarioDAO = new UsuarioDAO();            
            $usuarioDAO->nombre     = $post['nombre']; 
            $usuarioDAO->apepaterno = $post['apepaterno']; 
            $usuarioDAO->apematerno = $post['apematerno']; 
            $usuarioDAO->rut        = $post['rut']; 
            $usuarioDAO->edad       = $post['edad']; 
            $usuarioDAO->correo      = $post['correo']; 
            $usuarioDAO->telefono   = $post['telefono']; 
            $usuarioDAO->comuna     = $post['comuna']; 
            $usuarioDAO->region     = $post['region']; 
            $usuarioDAO->nombreusuario = $post['nombreusuario'];
            $usuarioDAO->contrasenna = $post['contrasenna'];                      

            $respuesta = $usuarioDAO->create($usuarioDAO);
            
            header('Location: ../vistas/usuarios.php');
            exit();
        }

        public function editarUsuario($idusuario){

            $usuarioDAO = new UsuarioDAO();                  
            $usuario = $usuarioDAO->read($idusuario);
            return $usuario;            
        }

        public function actualizarUsuario($post, $idusuario){

            $usuarioDAO = new UsuarioDAO();                        
            $usuarioDAO->nombre     = $post['nombre']; 
            $usuarioDAO->apepaterno = $post['apepaterno']; 
            $usuarioDAO->apematerno = $post['apematerno']; 
            $usuarioDAO->rut        = $post['rut']; 
            $usuarioDAO->edad       = $post['edad']; 
            $usuarioDAO->correo      = $post['correo']; 
            $usuarioDAO->telefono   = $post['telefono']; 
            $usuarioDAO->comuna     = $post['comuna']; 
            $usuarioDAO->region     = $post['region']; 
            $usuarioDAO->nombreusuario = $post['nombreusuario'];                              
            
            $respuesta = $usuarioDAO->update($usuarioDAO, $idusuario);
            header('Location: ../vistas/usuarios.php');
            exit();            
        }
        
        public function eliminarUsuario($idusuario){

            $usuarioDAO = new UsuarioDAO();
            $respuesta = $usuarioDAO->delete($idusuario);            
            return $respuesta;
        }

        public function getUsuarios(){

            $usuarioDAO = new UsuarioDAO();
            $usuarios = $usuarioDAO->getAll();
            return $usuarios;
        }

        //Productos
        public function agregarProducto($post){

            $productoDAO = new ProductoDAO();            
            $productoDAO->producto    = $post['producto']; 
            $productoDAO->descripcion = $post['descripcion']; 
            $productoDAO->valor       = $post['valor']; 
            $productoDAO->idimagen    = $post['idimagen']; 
            
            $respuesta = $productoDAO->create($productoDAO);
            
            header('Location: ../vistas/productos.php');
            exit();
        }

        public function editarProducto($idproducto){

            $productoDAO = new ProductoDAO();                  
            $producto = $productoDAO->read($idproducto);
            return $producto;            
        }

        public function actualizarProducto($post, $idproducto){

            $productoDAO = new ProductoDAO();            
            $productoDAO->producto    = $post['producto']; 
            $productoDAO->descripcion = $post['descripcion']; 
            $productoDAO->valor       = $post['valor']; 
            $productoDAO->idimagen    = $post['idimagen'];                         
            
            $respuesta = $productoDAO->update($productoDAO, $idproducto);
            header('Location: ../vistas/productos.php');
            exit();            
        }

        public function eliminarProducto($idproducto){

            $productoDAO = new ProductoDAO();
            $respuesta = $productoDAO->delete($idproducto);            
            return $respuesta;
        }
        
        public function getProductos(){

            $productoDAO = new ProductoDAO();
            $productos = $productoDAO->getAll();
            return $productos;
        }
    }

?>
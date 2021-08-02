<?php
session_start();
require '../controlador/controlador.php';
$controlador = new Controlador();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if ($_REQUEST) {
        $producto = $controlador->editarProducto($_REQUEST['idproducto']);
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <form class="procesa-producto">
        <div class="text-center mb-4">
            <img class="mb-4" src="../img/no_disponible.png" alt="" width="300" height="200">                        
        </div>

        <div class="form-label-group">
            <div class="row mx-0">
                <div class="col-md-6 pr-0">   
                    <span class="form-text text-muted">Producto:</span>                        
                </div>
                <div class="col-md-6 pr-0">   
                    <span class="form-text text-muted"><?php echo $producto->producto ?></span>                                            
                </div>                
            </div>            
        </div>
        <div class="form-label-group">
            <div class="row mx-0">
                <div class="col-md-6 pr-0">   
                    <span class="form-text text-muted">Descripción:</span>                       
                </div>   
                <div class="col-md-6 pr-0">   
                    <span class="form-text text-muted"><?php echo $producto->descripcion ?></span>                       
                </div>   
            </div>   
        </div>
        <div class="form-label-group">       
            <div class="row mx-0">
                <div class="col-md-6 pr-0">      
                    <span class="form-text text-muted">Valor:</span> 
                </div>   
                <div class="col-md-6 pr-0">      
                    <span class="form-text text-muted"><?php echo '$' . $producto->valor ?></span>                                           
                </div>   
            </div>   
        </div>        
        <br>
        <button class="btn btn-lg btn-primary btn-block disabled" type="submit">Confirmar Compra</button>        
    </form>
</body>
</html>
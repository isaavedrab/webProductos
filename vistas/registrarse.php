<?php
session_start();
require '../controlador/controlador.php';
if ($_POST) {
    $controlador = new Controlador();
    $controlador->registrase($_POST);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark border mb-4">
            <a class="navbar-brand" href="../index.php">Proyecto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./inicio.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./catalogo.php">Catálogo de Productos</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php if (empty($_SESSION)) {
                        echo
                        '<li class="nav-item">
                            <a class="nav-link" href="./iniciar-sesion.php">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="./registrarse.php">Registrarse</a>
                        </li>';
                    } else {
                        echo
                        '<li class="nav-item">
                            <a class="nav-link" href="">Bienvenido/a &emsp; <b>' . $_SESSION['nombreusuario'] . '</b></a>                                            
                        </li>                
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menú
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                        if ($_SESSION['idperfil'] === 1) {
                            echo
                            '<a class="dropdown-item" href="./usuarios.php">Adm. Usuarios</a>                
                                    <a class="dropdown-item" href="./productos.php">Adm. Productos</a>';
                        }
                        echo
                        '<a class="dropdown-item" href="#">Mi Perfil</a>                                                                                                   
                                <a class="dropdown-item" href="./cerrar-sesion.php">Cerrar Sesión</a>                
                            </div>    
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>

        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Registrarse</div>
                            <div class="card-body">
                                <form name="formulario_registro" onsubmit="return valida_formulario()" action="../controlador/valida_registrarse.php" method="POST">
                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Nombre (*)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nombre" class="form-control" name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Apellido Paterno</label>
                                        <div class="col-md-6">
                                            <input type="text" id="apepaterno" class="form-control" name="apepaterno">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Apellido Materno</label>
                                        <div class="col-md-6">
                                            <input type="text" id="apematerno" class="form-control" name="apematerno">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">RUT</label>
                                        <div class="col-md-3">
                                            <input type="text" id="rut" class="form-control" name="rut" max="12">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Edad (*)</label>
                                        <div class="col-md-2">
                                            <input type="number" id="edad" class="form-control" name="edad" min="0">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Correo (*)</label>
                                        <div class="col-md-6">
                                            <input type="email" id="correo" class="form-control" name="correo" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-4 col-form-label text-md-right">Teléfono</label>
                                        <div class="col-md-6">
                                            <input type="number" id="telefono" class="form-control" name="telefono">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Región</label>
                                        <div class="col-md-6">
                                            <input type="text" id="region" class="form-control" name="region">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Comuna</label>
                                        <div class="col-md-6">
                                            <input type="text" id="comuna" class="form-control" name="comuna">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right">Nombre de Usuario (*)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nombreusuario" class="form-control" name="nombreusuario" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right">Contraseña (*)</label>
                                        <div class="col-md-6">
                                            <input type="password" id="contrasenna" class="form-control" name="contrasenna" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right">Repita contraseña (*)</label>
                                        <div class="col-md-6">
                                            <input type="password" id="contrasenna2" class="form-control" name="contrasenna2" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Registrar
                                        </button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </main>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="../js/valida_registrarse.js"></script>
</body>

</html>
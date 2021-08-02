<?php
session_start();
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

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Bienvenido</h1>
                <p class="lead">Proyecto MVC.</p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>
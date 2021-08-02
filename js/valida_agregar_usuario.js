$(document).ready(function() {
    console.log( "valida_agregar_usuario" );
});

function valida_formulario() {

    var nombre        = document.forms["agregar_usuario"]["nombre"].value;
    var apepaterno    = document.forms["agregar_usuario"]["apepaterno"].value;
    var apematerno    = document.forms["agregar_usuario"]["apematerno"].value;
    var rut           = document.forms["agregar_usuario"]["rut"].value;
    var edad          = document.forms["agregar_usuario"]["edad"].value;
    var correo        = document.forms["agregar_usuario"]["correo"].value;
    var telefono      = document.forms["agregar_usuario"]["telefono"].value;
    var region        = document.forms["agregar_usuario"]["region"].value;
    var comuna        = document.forms["agregar_usuario"]["comuna"].value;
    var nombreusuario = document.forms["agregar_usuario"]["nombreusuario"].value;
    var contrasenna   = document.forms["agregar_usuario"]["contrasenna"].value;
    var contrasenna2  = document.forms["agregar_usuario"]["contrasenna2"].value;


    if (nombre ==null || nombre ==""){
        alert("Ingresa nombre");
        return false;   
    }else if(rut.length > 12){
        alert("El RUT no puede superar los 12 caracteres");
        return false;
    }else if(edad == null || edad == ""){
        alert("Ingrese Edad");
        return false;
    }else if(correo == null || correo == ""){
        alert("Ingrese correo");
        return false;
    }else if(nombreusuario == null || nombreusuario ==""){
        alert("Ingrese nombre de usuario");
        return false;
    }else if(contrasenna == null || contrasenna == ""){
        alert("Ingrese contraseña");
        return false;
    }else if(contrasenna2 == null || contrasenna2 == ""){
        alert("Ingrese contraseña de verificación");
        return false;
    }

    if(contrasenna2 !== contrasenna){
        alert("Las contraseñas no coinciden");
        return false;
    }
}
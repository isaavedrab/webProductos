$(document).ready(function() {
    console.log( "valida_editar_usuario" );
});

function valida_formulario() {

    var nombre        = document.forms["formulario_registro"]["nombre"].value;
    var apepaterno    = document.forms["formulario_registro"]["apepaterno"].value;
    var apematerno    = document.forms["formulario_registro"]["apematerno"].value;
    var rut           = document.forms["formulario_registro"]["rut"].value;
    var edad          = document.forms["formulario_registro"]["edad"].value;
    var correo        = document.forms["formulario_registro"]["correo"].value;
    var telefono      = document.forms["formulario_registro"]["telefono"].value;
    var region        = document.forms["formulario_registro"]["region"].value;
    var comuna        = document.forms["formulario_registro"]["comuna"].value;
    var nombreusuario = document.forms["formulario_registro"]["nombreusuario"].value;
    var contrasenna   = document.forms["formulario_registro"]["contrasenna"].value;
    var contrasenna2  = document.forms["formulario_registro"]["contrasenna2"].value;


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
$(document).ready(function() {
    console.log( "valida_registrarse" );
});

function valida_formulario() {

    var nombre        = document.forms["editar_usuario"]["nombre"].value;
    var apepaterno    = document.forms["editar_usuario"]["apepaterno"].value;
    var apematerno    = document.forms["editar_usuario"]["apematerno"].value;
    var rut           = document.forms["editar_usuario"]["rut"].value;
    var edad          = document.forms["editar_usuario"]["edad"].value;
    var correo        = document.forms["editar_usuario"]["correo"].value;
    var telefono      = document.forms["editar_usuario"]["telefono"].value;
    var region        = document.forms["editar_usuario"]["region"].value;
    var comuna        = document.forms["editar_usuario"]["comuna"].value;
    var nombreusuario = document.forms["editar_usuario"]["nombreusuario"].value;
    
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
    }
}
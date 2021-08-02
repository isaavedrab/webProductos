$(document).ready(function() {
    console.log( "ready!" );
});

function valida_formulario() {

    var nombreusuario = document.forms["formulario_inicio_sesion"]["nombreusuario"].value;
    var contrasenna   = document.forms["formulario_inicio_sesion"]["contrasenna"].value;
    
    if (nombreusuario == null || nombreusuario ==""){
        alert("Ingresa nombre");
        return false;   
    }else if(nombreusuario.length > 20){
        alert("El nombre de usuario no puede superar los 20 caracteres");
        return false;
    }
}
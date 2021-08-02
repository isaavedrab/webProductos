$(document).ready(function() {
    console.log( "valida_agregar_producto" );
});

function valida_formulario() {

    var producto   = document.forms["agregar_producto"]["producto"].value;
    var descripcion = document.forms["agregar_producto"]["descripcion"].value;
    var valor      = document.forms["agregar_producto"]["valor"].value;
    
    if (producto == null || producto ==""){
        alert("Ingresa nombre del producto");
        return false;      
    }else if(descripcion == null || descripcion == ""){
        alert("Ingrese descripción");
        return false;
    }else if(valor == null || valor == ""){
        alert("Ingrese valor");
        return false;
    }        
}
document.getElementById("icon-menu").addEventListener("click", mostrar_menu);

function mostrar_menu(){

    document.getElementById("move-contenido").classList.toggle('move-contenido');
    document.getElementById("footer").classList.toggle('move-contenido');
    document.getElementById("nav-menu").classList.toggle('show-menu');
    
}

//Funcion para validar si desea enviar el mensaje o no
validate = ()=>{
    return confirm("¿Quiere enviar este mensaje?");
}
 
<<<<<<< HEAD
=======
//Envia el mensaje en el boton enviar y muestra un msj, sino no muestra el msj.
function enviar() {
    let apellido = document.form.apellido.value;
    if (validate(form)) {
        alert(`Gracias por su mensaje! Nos contactaremos con usted lo más pronto posible. Estimado(@) ${apellido}`)
    }    
}
>>>>>>> 3ffa9a2173af93d7e0f57995bc664d76e210775d

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
 

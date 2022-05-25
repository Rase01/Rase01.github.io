document.getElementById("icon-menu").addEventListener("click", mostrar_menu);

function mostrar_menu(){

    document.getElementById("move-contenido").classList.toggle('move-contenido');
    document.getElementById("footer").classList.toggle('move-contenido');
    document.getElementById("nav-menu").classList.toggle('show-menu');
    
}

function enviar() {
    let apellido = document.form.apellido.value;
    if (apellido) {
        alert(`Gracias por su mensaje! Nos contactaremos con usted lo más pronto posible. Estimado(@) ${apellido}`)
    }    
}

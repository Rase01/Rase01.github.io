document.getElementById("icon-menu").addEventListener("click", mostrar_menu);

function mostrar_menu(){

    document.getElementById("move-contenido").classList.toggle('move-contenido');
    document.getElementById("footer").classList.toggle('move-contenido');
    document.getElementById("widget1").classList.toggle('move-contenido');
    document.getElementById("widget2").classList.toggle('move-contenido');
    document.getElementById("nav-menu").classList.toggle('show-menu')
    
}
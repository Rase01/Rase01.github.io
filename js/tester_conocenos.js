document.getElementById("icon-menu").addEventListener("click", mostrar_menu);

function mostrar_menu(){

    document.getElementById("move-contenido").classList.toggle('move-contenido');
    document.getElementById("footer").classList.toggle('move-contenido');
    document.getElementById("article-resume").classList.toggle('move-contenido');
    document.getElementById("article-values").classList.toggle('move-contenido');
    document.getElementById("nav-menu").classList.toggle('show-menu')
    
}
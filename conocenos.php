<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style_conocenos.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Conocenos</title>
</head>
<body>
    <!--CONTAINER FOR ALL ELEMENTS-->
    <div class="container">

        <?php include 'view/header.php'?>

        <!--main title-->
        <div class="title" id="move-contenido">
            <div class="title__h1">
                <h1>CONÓCENOS</h1>
            </div>
        </div>

        <!--Resume of the company section-->
        <div class="article-resume" id="article-resume">
            <div class="article-resume__text">
                <div class="article-resume__text-title">
                    <h2>TAVA PERU</h2>
                </div>
                <div class="article-resume__text-paragraph">
                    <p>
                        Siendo especialistas en la producción de uvas de mesa, 
                        nos hemos consolidado como una de las empresas a la vanguardia en producción.
                        Somos un grupo de empresas dedicadas a la producción, empaquetación y comercialización de frutas
                        frescas, que, desde el año 2010 viene operando en el sector agroexportador peruano.
                        Nuestro grupo viene creciendo año a año en el volumen exportado de uvas y paltas. 
                        <br><br>
                        <b>Misión:</b>
                        Producir y comercializar frutas frescas de extraordinaria calidad, 
                        manteniendo una sólida y reconocida posición en los mercados internacionales, realizando 
                        procedimientos que garantizan el máximo respeto a la naturaleza y sociedad mundial.
                        <br><br>
                        <b>Visión:</b>
                        Ser considerados como el mejor lugar para trabajar en el sector agroexportador peruano y 
                        posicionarnos como el mejor productor de frutas secas del hemisferio sur.
                    </p>
                </div>
            </div>
            <div class="article-resume__img">
                <img src="img/resume_img.jpg" alt="produccion de uva">
            </div>
        </div>

        <!--Values of the company section-->
        <div class="article-values" id="article-values">
            <div class="article-values__img">
                <img src="img/Finca.jpg" alt="produccion de uva">
            </div>
            <div class="article-values__text">
                <div class="article-values__text-title">
                    <h2>VALORES</h2>
                </div>
                <div class="article-values__text-list">
                    <ul>
                        <li class="article-values__text-list-item">
                            <i class="fa-solid fa-heart"></i> 
                            <b>Solidaridad</b>
                            <br>
                            Nuestra gente es lo primero. Siempre estaremos para ellos.
                        </li>
                        <li class="article-values__text-list-item">
                            <i class="fa-solid fa-star"></i>
                            <b>Respeto</b>
                            <br>
                            Queremos generar un cambio en la sociedad peruana buscando el respeto mutuo y 
                            continuo entre las personas y medio ambiente.
                        </li>
                        <li class="article-values__text-list-item">
                            <i class="fa-solid fa-gear"></i>
                            <b>Responsabilidad</b>
                            <br>
                            Nos debemos al entorno que nos permite existir y crecer, por lo que buscamos el equilibrio
                            positivo entre nuestras operaciones y el medio ambiente.
                        </li>
                        <li class="article-values__text-list-item">
                            <i class="fa-solid fa-check"></i>
                            <b>Honestidad</b>
                            <br>
                            Buscamos ser claros y transparentes con todas las personas y 
                            empresas con las que trabajamos: proveedores, clientes, colaboradores.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php include 'view/footer.php'?>
    </div>
    <script src="js/script_conocenos.js"></script>
</body>
</html>
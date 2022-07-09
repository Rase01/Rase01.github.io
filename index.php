<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Tava Peru</title>
</head>
<body>
    <!--CONTAINER FOR ALL ELEMENTS-->
    <div class="container">
        <?php include 'view/header.php' ?>
        <!--Main part includes title and img with description-->
        <div class="main" id="move-contenido">
            <main>
                <h1 class="main__h1">TAVA <span class="main__h1--part">PERÚ</span></h1>
                <section class="main__resume">
                    <img class="main__resume-img" src="img/fundo_algarrobo_pampeano.png" alt="fundo_algarrobo_pampeano">
                    <p class="main__resume-p">
                        Somos un grupo de empresas dedicadas a la producción,
                        empaque y comercialización de frutas frescas. Desde el año 2010 trabajamos con los 
                        distintos actores del sector agroexportador peruano y hoy en día producimos y 
                        empacamos el grueso de la fruta que exportamos a los distintos mercados mundiales.
                    </p> 
                </section>
                <h2 class="main__h2">NUESTROS PRODUCTOS</h2>
            </main>
        </div>

        <!--Widget for UVA-->       
        <div class="widget" id="widget1">
            <h2 class="widget__h2">UVA</h2>
            <div class="widget__img">
                <figure class="widget__img-figure">
                    <img src="img/uva.jpg" alt="uva" id="uva">
                    <div class="widget__img-figure-container">
                        <ul class="widget__img-figure-container-text">
                            <li>RED GLOBE</li>
                            <li>SWEET GLOBE</li>
                            <li>SWEET CELEBRATION</li>
                            <li>FLAME SEEDLESS</li>
                            <li>CANDY DREAM</li>
                        </ul>
                    </div>                                
                </figure>
            </div>
            <p class="widget__description">
                5 variedades de UVA
            </p>
        </div>

        <!--Widget for PALTA-->
        <div class="widget" id="widget2">
            <h2 class="widget__h2">PALTA</h2>
            <div class="widget__img">
                <figure class="widget__img-figure">
                    <img class="widget__img-figure-img" src="img/palta.jpg" alt="palta">
                    <div class="widget__img-figure-container">
                        <ul class="widget__img-figure-container-text--palta">
                            <li>HASS</li>
                            <li>FUERTE</li>
                        </ul>
                    </div>
                </figure>
            </div>
            <p class="widget__description"> 
                2 variedades de PALTA
            </p>
        </div>

        <?php include 'view/footer.php' ?>
        
    </div>
    <script src="js/script_index.js"></script>
</body>
</html>
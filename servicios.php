<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style_servicios.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Servicios</title>
</head>
<body>
    <!--CONTAINER FOR ALL ELEMENTS-->
    <div class="container">
        
        <?php include 'view/header.php'?>

        <!--MAIN TITLE-->
        <div class="main" id="move-contenido">
            <main>
                <div class="main__h1">
                    <h1>SERVICIOS</h1>
                </div>
            </main>
        </div>

        <!--SERVICES SECTION-->
        <div class="services" id="services">
            <div class="services__produccion">
                <div class="services__produccion-h2">
                    <h2>PRODUCCIÓN</h2>
                </div>
                <div class="services__produccion-p">
                    <p>
                        Nos especializamos en la producción de UVA y PALTA de la mejor calidad del mercado.
                    </p>
                </div>
                <div class="services__produccion-img">
                    <img src="img/produccion.jpg" alt="produccion" class="image">
                </div>
            </div>
            <div class="services__venta">
                <div class="services__venta-h2">
                    <h2>VENTA</h2>
                </div>
                <div class="services__venta-p">
                    <p>
                        Tenemos cobertura a todo el mercado nacional, llevando nuestros productos a todos los hogares de los peruanos.
                    </p>
                </div>
                <div class="services__venta-img">
                    <img src="img/venta.jpg" alt="ventas" class="image">
                </div>
            </div>
            <div class="services__exportacion">
                <div class="services__exportacion-h2">
                    <h2>EXPORTACION</h2>
                </div>
                <div class="services__exportacion-p">
                    <p>
                        Nos hemos expandido también al mercado internacional con la exportación de nuestros productos de primera calidad.
                    </p>
                </div>
                <div class="services__exportacion-img">
                    <img src="img/exportacion.jpg" alt="exportacion" class="image">
                </div>
            </div>
        </div>

        <?php include 'view/footer.php'?>
    </div>  
    <script src="js/script_servicios.js"></script>
</body>
</html>
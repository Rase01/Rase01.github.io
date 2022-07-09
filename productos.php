<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/style_productos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Productos</title>
</head>
<body>
    <!--CONTAINER FOR ALL ELEMENTS-->
    <div class="container">
        
        <?php include 'view/header.php'?>

        <!--MAIN PART-->
        <div class="main" id="move-contenido">
            <h1 class="main__h1">PRODUCTOS</h1>
            <h2 class="main__h2">ELIJA UN PRODUCTO</h2>
            <div class="main__productos">
                <div class="main__productos-uva">
                    <div class="main__h3">
                        <a href="uva.php" class="uva" onclick="redirigir_uva()">UVA</a>
                    </div>
                    <div class="main__img">
                        <a href="uva.php" class="uva" onclick="redirigir_uva()">
                            <div class="main__img-container">
                                <img src="img/uva.jpg" alt="uva">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="main__productos-palta">
                    <div class="main__h3">
                        <a href="palta.php" class="palta" onclick="redirigir_palta()">PALTA</a>
                    </div>
                    <div class="main__img">
                        <a href="palta.php" class="palta" onclick="redirigir_palta()">
                            <div class="main__img-container">
                                <img src="img/palta.jpg" alt="palta">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'view/footer.php'?>
    </div>
    <script src="js/script_productos.js"></script>
</body>
</html>
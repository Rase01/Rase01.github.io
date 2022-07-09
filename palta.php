<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/style_palta.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Productos | Palta</title>
</head>
<body>
    <!--CONTAINER FOR ALL ELEMENTS-->
    <div class="container">
        
        <?php include 'view/header.php'?>

        <!--PALTA SECTION-->
        <div class="main" id="move-contenido">
            <h1 class="main__h1">PRODUCTOS</h1>
            <h2 class="main__h2">PALTA</h2>
            <div class="main__galeria">
                <div class="main__galeria-hass">
                    <div class="main__galeria-h3">
                        <h3>HASS</h3>
                    </div>
                    <div class="main__galeria-container">
                        <img src="img/hass.jpg" alt="palta hass">
                    </div>
                </div>
                <div class="main__galeria-fuerte">
                    <div class="main__galeria-h3">
                        <h3>FUERTE</h3>
                    </div>
                    <div class="main__galeria-container">
                        <img src="img/fuerte.jpg" alt="palta fuerte">
                    </div>
                </div>
            </div>
        </div>

        <?php include 'view/footer.php'?>
    </div>
    <script src="js/script_palta.js"></script>
</body>
</html>
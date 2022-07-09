<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style_uva.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Uva</title>
</head>
<body>
    <!--CONTAINER FOR ALL ELEMENTS-->
    <div class="container">
        
        <?php include 'view/header.php'?>
        
        <!--MAIN PART-->
        <div class="main" id="move-contenido">
            <h1 class="main__h1">PRODUCTOS</h1>
            <h2 class="main__h2">UVA</h2>
            <div class="main__galeria">
                <div class="main__galeria-item">
                    <div class="main__galeria-h3">
                        <h3>CANDY DREAM</h3>
                    </div>
                    <div class="main__galeria-container">
                        <img src="img/candy_dream.jpg" alt="palta hass">
                    </div>
                </div>
                <div class="main__galeria-item">
                    <div class="main__galeria-h3">
                        <h3>FLAME SEEDLESS</h3>
                    </div>
                    <div class="main__galeria-container">
                        <img src="img/flame_seedless.jpg" alt="palta fuerte">
                    </div>
                </div>
                <div class="main__galeria-item">
                    <div class="main__galeria-h3">
                        <h3>RED GLOBE</h3>
                    </div>
                    <div class="main__galeria-container">
                        <img src="img/red_globe.jpg" alt="palta hass">
                    </div>
                </div>
                <div class="main__galeria-item">
                    <div class="main__galeria-h3">
                        <h3>SWEET CELEBRATION</h3>
                    </div>
                    <div class="main__galeria-container">
                        <img src="img/sweet_celebration.jpg" alt="palta hass">
                    </div>
                </div>
                <div class="main__galeria-item">
                    <div class="main__galeria-h3">
                        <h3>SWEET GLOBE</h3>
                    </div>
                    <div class="main__galeria-container">
                        <img src="img/sweet_globe.png" alt="palta hass">
                    </div>
                </div>
            </div>
        </div>

        <?php include 'view/footer.php'?>
    </div>
    <script src="js/script_uva.js"></script>
</body>
</html>
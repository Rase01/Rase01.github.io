<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/style_contacto.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Contacto</title>
</head>
<body>
    <div class="container">
        
        <?php 
        
        include 'view/header.php';
        
        ?>

        <!--MAIN PART including FORM and TITLE-->
        <div class="main" id="move-contenido">
            <main>
                <h1 class="main__h1">DÉJANOS UN <span class="main__h1--part">MENSAJE</span></h1>
            </main>
            <section>
                <div class="flex-form">
                    <form class="form" name="form" action="form.php" method="post">
                        <div class="form__section">
                            <input type="text" class="form__section-input" name="nombre" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="form__section">
                            <input type="text" id="apellido" class="form__section-input" name="apellido" placeholder="Ingrese su apellido" required>
                        </div>
                        <div class="form__section">
                            <input type="email" class="form__section-input" name="correo" placeholder="Ingrese su correo" required>
                        </div>
                        <div class="form__section">
                            <input type="tel"  class="form__section-input" name="telefono" placeholder="Ingrese su número de teléfono" required>
                        </div>
                        <div class="form__section">
                            <div class="tipo-button">
                                <label>Motivo del mensaje</label>
                                <div>
                                    <input type="radio" name="tipo" value="consulta">
                                    <label>Consulta</label>
                                  </div>
                              
                                  <div>
                                    <input type="radio" name="tipo" value="solicitud">
                                    <label>Solicitud</label>
                                  </div>
                              
                                  <div>
                                    <input type="radio" name="tipo" value="reclamo">
                                    <label>Reclamo</label>
                                  </div>
                            </div>
                        </div>
                        <div class="form__section">
                            <input type="text" class="form__section-input" placeholder="Ingrese el asunto del mensaje" name="asunto" required>
                        </div>
                        <div class="form__section">
                            <textarea class="form__section-input" placeholder="Ingrese su mensaje" name="mensaje" required maxlength='250'></textarea>
                        </div>
                        <div class="form__section">
                            <input type="submit" class="form__section-input boton" name='enviar'>
                        </div>
                        <div class="form__section">
                            <input type="reset" class="form__section-input boton">
                        </div>
                    </form>
                </div>
            </section>
        </div>
        
        <?php include 'view/footer.php'?>

    </div>
    <script src="js/script_contacto.js"></script>
</body>
</html>
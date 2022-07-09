<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/style_form.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/f4c449a1a2.js" crossorigin="anonymous"></script>
    <title>Mensaje</title>
</head>
<body>
    <div class="container">
        
        <?php 
        
        include ('view/header.php');

        include ("assets/registrar.php");

        include ("assets/correo.php");

        ?>

        <!--MAIN PART including FORM and TITLE-->
        <div class="main" id="move-contenido">
            <main>
                <h1 class="main__h1">Gracias por <span class="main__h1--part">escribirnos!</span></h1>
                <h2 class="main__h2">Mensaje enviado</h2>
                <div class="table">
                    <table>
                        <tr class="table-item">
                            <td class="table-item-slot">
                                Nombre
                            </td>
                            <td class="table-item-slot">
                                <?php
                                echo $_POST['nombre'];
                                ?>
                            </td>
                        </tr>
                        <tr class="table-item">
                            <td class="table-item-slot">
                                Apellido
                            </td>
                            <td class="table-item-slot">
                                <?php
                                echo $_POST['apellido'];
                                ?>
                            </td>
                        </tr>
                        <tr class="table-item">
                            <td class="table-item-slot">
                                Correo
                            </td>
                            <td class="table-item-slot">
                                <?php
                                echo $_POST['correo'];
                                ?>
                            </td>
                        </tr>
                        <tr class="table-item">
                            <td class="table-item-slot">
                                Teléfono
                            </td>
                            <td class="table-item-slot">
                                <?php
                                echo $_POST['telefono'];
                                ?>
                            </td>
                        </tr>
                        <tr class="table-item">
                            <td class="table-item-slot">
                                Motivo
                            </td>
                            <td class="table-item-slot">
                                <?php
                                echo $_POST['tipo'];
                                ?>
                            </td>
                        </tr>
                        <tr class="table-item">
                            <td class="table-item-slot">
                                Asunto
                            </td>
                            <td class="table-item-slot">
                                <?php
                                echo $_POST['asunto'];
                                ?>
                            </td>
                        </tr>
                        <tr class="table-item">
                            <td class="table-item-slot">
                                Mensaje
                            </td>
                            <td class="table-item-slot">
                                <?php
                                echo $_POST['mensaje'];
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </main>
        </div>
        
        <?php include 'view/footer.php'?>

    </div>
    <script src="js/script_contacto.js"></script>
</body>
</html>
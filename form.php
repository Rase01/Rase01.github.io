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
        <!--HEADER-->
        <header>
            <nav class="main-nav">
                <div class="main-nav__logo-container">
                    <a href="contacto.html"><img src="img/LogoSafco.png" alt="logo"></a>
                </div>
                <div class="main-nav__menu" id="nav-menu">
                    <ul class="main-nav__menu-ul">
                        <li class="main-nav__menu-ul-item">
                            <a href="index.html" class="main-nav__menu-ul-item-links"><b>HOME</b></a>
                        </li>
                        <li class="main-nav__menu-ul-item">
                            <a href="conocenos.html" class="main-nav__menu-ul-item-links"><b>CONOCENOS</b></a>
                        </li>
                        <li class="main-nav__menu-ul-item">
                            <a href="productos.html" class="main-nav__menu-ul-item-links"><b>PRODUCTOS</b></a>
                        </li>
                        <li class="main-nav__menu-ul-item">
                            <a href="servicios.html" class="main-nav__menu-ul-item-links"><b>SERVICIOS</b></a>
                        </li>
                        <li class="main-nav__menu-ul-item">
                            <a href="contacto.html" class="main-nav__menu-ul-item-links"><b>CONTACTANOS</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--Icon button for responsive-->
            <div id="icon-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
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
        <!--FOOTER-->
        <div class="footer" id="footer"> 
            <footer>
                <ul class="footer__menu">
                    <li class="footer__menu-item--active">CONTACTO</li>
                    <li class="footer__menu-item">Alcanflores 1234</li>
                    <li class="footer__menu-item">Miraflores Lima 20</li>
                    <li class="footer__menu-item">Teléfono: +51 999 876 532</li>
                    <li class="footer__menu-item">Correo: comercio@tavaperu.com</li>
                </ul>
                <img class="footer__logo" src="img/LogoSafco.png" alt="logo">
            </footer>
        </div>
    </div>
    <script src="js/script_contacto.js"></script>
</body>
</html>
<?php

require_once 'app/Models/User.php';
require_once 'app/Models/DBConnection.php';

use App\Models\{User,DBConnection};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>a2 Academia</title>
</head>
<body>
    <?php
        if (!session_id()) @ session_start();
        if (isset($_SESSION['user'])) {
            echo '
                <nav class="navbar">
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                BIENVENIDO
                            </li>
                            <li class="nav-item">
                                <spam>'.$_SESSION['user']->getName().'</spam>
                            </li>
                        </ul>
                    </div>
                </nav>
            ';
            //session_destroy();
        } else {
            echo '
                <nav class="navbar">
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#">CURSOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">QUIENES SOMOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">TESTIMONIOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">TEAM NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">CONTACTO</a>
                            </li>
                            <li class="nav-item">
                                <a href="./logSide.php" id="user_log"><img src="./sources/imgs/user (1).png" alt="USER LOG"> LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            ';
        }
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="sources/imgs/27090_hd.jpg" alt="First slide">
                    <div class="carousel-message carousel-caption d-none d-md-block">
                        <h2>
                            <b>Introducción a a2</b>
                        </h2>
                        <p>
                            El propósito del curso introductorio a2 es exponer a los nuevos
                            distribuidores a la misión y visión de nuestra empresa, así como a las 
                            características de todos nuestros productos, como elemento inicial de la
                            formación del distribuidor a2.
                        </p>
                        <a href="#" class="button-buy">Comprar</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="sources/imgs/writing-notes-idea-conference.jpg" alt="Second slide">
                    <div class="carousel-message carousel-caption d-none d-md-block">
                        <h2>
                            <b>Introducción a a2</b>
                        </h2>
                        <p>
                            El propósito del curso introductorio a2 es exponer a los nuevos
                            distribuidores a la misión y visión de nuestra empresa, así como a las 
                            características de todos nuestros productos, como elemento inicial de la
                            formación del distribuidor a2.
                        </p>
                        <a href="#" class="button-buy">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    <footer class="footer">
        <div class="footer-text">
            <h2>¿Quienes somos?</h2>
            <p>Somos un entorno dedicado al entrenamiento continuo del canal <b>de Distribución de a2 Softway y usuarios finales,</b>
                 por medio de herramientas tecnológicas innovadoras y basadas en la constante interacción entre distribuidores y <br>
                 el personal especializado de nuestra empresa</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
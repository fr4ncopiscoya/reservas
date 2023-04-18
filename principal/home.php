<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    header ('location: http://localhost/reservas/inicio/index.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/reservas/css/home.css">
    <link rel="stylesheet" href="http://localhost/reservas/css/media.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="inicio">
            <h1>BIENVENIDO A LA CLÍNICA VETERINARIA <br> PATITAS FELICES</h1>
        </div>
    </header>
    <nav class="menu">
        <section class="menu__container">
            <h1 class="menu__logo">PATITAS FELICES</h1>
            <ul class="menu__links">
                <li class="menu__item">
                    <a href="http://localhost/reservas/principal/home.php" class="menu__link active">Inicio</a>
                </li>
                <li class="menu__item menu__item--show">
                    <a href="#espe" class="menu__link">Especialidad<img src="http://localhost/reservas/svg/arrow.svg" class="menu__arrow"></a>
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Cardiologia</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Cirujia</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#history" class="menu__link menu__link--inside">Medicina Felina</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Odontologia</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Oftalmologia</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Fisioterapia</a>
                        </li>

                    </ul>
                </li>

                <li class="menu__item menu__item--show">
                    <a href="#servi" class="menu__link">Servicios<img src="http://localhost/reservas/svg/arrow.svg" class="menu__arrow"></a>
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Laboratorio</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Peluqueria</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#history" class="menu__link menu__link--inside">Baño</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#galery" class="menu__link menu__link--inside">Teleconsulta</a>
                        </li>

                    </ul>
                </li>
    
                <li class="menu__item">
                    <a href="http://localhost/reservas/inicio/agendar.php" class="menu__link">Agendar</a>
                </li>

                <li class="menu__item ">
                    <a class= "btnlg menu__link" href="http://localhost/reservas/main/close.php">Salir</a>
                </li>


            </ul>

            <div class="menu__hamburguer">
                <img src="http://localhost/reservas/svg/menu.svg" class="menu__img">
            </div>
        </section>


    </nav>


    <section id="espe" class="section1">

        <h2>Especialidades</h2>

        <div class="container">
            <div class="prod">
                <img src="http://localhost/reservas/img/cardio.jpg" alt="">
                <div class="des">
                    <h5>CARDIOLOGÍA</h5>
                </div>
            </div>
            
            <div class="prod">
                <img src="http://localhost/reservas/img/odonto.jpg" alt="">
                <div class="des">
                    <h5>ODONTOLOGÍA</h5>
                </div>
            </div>

            <div class="prod">
                <img src="http://localhost/reservas/img/fisio.jpg" alt="">
                <div class="des">
                    <h5>FISIOTERAPIA</h5>
                </div>
            </div>

            <div class="prod">
                <img src="http://localhost/reservas/img/oftalmo.jpg" alt="">
                <div class="des">
                    <h5>OFTALMOLOGÍA</h5>
                </div>
            </div>

            <div class="prod">
                <img src="http://localhost/reservas/img/felina.jpg" alt="">
                <div class="des">
                    <h5>MEDICINA FELINA</h5>
                </div>
            </div>

            <div class="prod">
                <img src="http://localhost/reservas/img/cirugia.jpg" alt="">
                <div class="des">
                    <h5>CIRUGÍA</h5>
                </div>
            </div>



        </div>
    </section>

    <section id="servi" class="section1">

        <h2>Servicios</h2>

        <div class="container">
            <div class="prod">
                <img src="http://localhost/reservas/img/laboratorio.jpg" alt="">
                <div class="des">
                    <h5>LABORATORIO</h5>
                </div>
            </div>
            
            <div class="prod">
                <img src="http://localhost/reservas/img/peluqueria.jpg" alt="">
                <div class="des">
                    <h5>PELUQUERÍA</h5>
                </div>
            </div>

            <div class="prod">
                <img src="http://localhost/reservas/img/banio.jpg" alt="">
                <div class="des">
                    <h5>BAÑO</h5>
                </div>
            </div>

            <div class="prod">
                <img src="http://localhost/reservas/img/telecon.jpg" alt="">
                <div class="des">
                    <h5>TELECONSULTA</h5>
                </div>
            </div>



        </div>
    </section>


    <footer class="footer">
            <div class="">
             <div class="row">
               <div class="footer-col">
                 <h4 style="color: #008080">CONTACTO Y ATENCIÓN AL CLIENTE WHATSAPP</h4>
                 <ul>
                   <li><a" href="https://www.whatsapp.com/?lang=es">(01)505-0505</a></li>
                   <li><a" href="https://www.whatsapp.com/?lang=es">TELÉFONO LIMA: (01)505-0050</a></li>
                   <li><a" href="https://www.whatsapp.com/?lang=es">TELÉFONO PROVINCIA: (044)779-009</a></li>
                 </ul>
               </div>
               <div class="footer-col">
                 <h4 style="color: #008080">SOBRE NOSOTROS</h4>
                 <ul>
                   <li><a" href="#">NUESTRA MISIÓN</a></li>
                   <li><a" href="#">TIENDAS, HORARIOS Y ZONA DE COBERTURA</a></li>
                 </ul>
               </div>
               <div class="footer-col">
                 <h4 style="color: #008080">POLÍTICAS Y TÉRMINOS DE PRIVACIDAD</h4>
                 <ul>
                   <li><a" href="#">POLÍTICAS DE DELIVERY, PICK UP Y AUTOSTARBUCKS</a></li>
                   <li><a" href="#">TÉRMINOS Y CONDICIONES DE LA WEB</a></li>
                 </ul>
               </div>
               <div class="footer-col follow">
                 <h4 style="color: #008080">FOLLOW US</h4>
                 <div class="social-links">
                 <a href="#about" class="menu__icons"><img src="http://localhost/reservas/svg/facebook.svg" class="menu__arrow"></a>
                 <a href="#about" class="menu__icons"><img src="http://localhost/reservas/svg/whatsaap.svg" class="menu__arrow"></a>
                 <a href="#about" class="menu__icons"><img src="http://localhost/reservas/svg/twitter.svg" class="menu__arrow"></a>
                 <a href="#about" class="menu__icons"><img src="http://localhost/reservas/svg/instagram.svg" class="menu__arrow"></a>
                 </div>
               </div>
             </div>
            </div>
         </footer>




    <script src="http://localhost/reservas/js/navbar.js"></script>



</body>
</html>
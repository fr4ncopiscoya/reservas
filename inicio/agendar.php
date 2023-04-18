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
        <!-- <link rel="stylesheet" href="http://localhost/reservas/css/index.css"> -->
        <link rel="stylesheet" href="http://localhost/reservas/css/agendar.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css"> -->
        <!-- <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css"> -->
        <title>Document</title>
    </head>


    <body>



    <nav class="menu">
        <section class="menu__container">
            <h1 class="menu__logo">PATITAS FELICES</h1>
            <ul class="menu__links">
                <li class="menu__item">
                    <a href="http://localhost/reservas/principal/home.php" class="menu__link">Inicio</a>
                </li>
                <li class="menu__item menu__item--show">
                    <a href="http://localhost/reservas/principal/home.php#espe" class="menu__link">Especialidad<img src="http://localhost/reservas/svg/arrow.svg" class="menu__arrow"></a>
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
                    <a href="http://localhost/reservas/principal/home.php#servi" class="menu__link">Servicios<img src="http://localhost/reservas/svg/arrow.svg" class="menu__arrow"></a>
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
                    <a href="http://localhost/reservas/inicio/agendar.php" class="menu__link active">Agendar</a>
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

    <section id="page-header" class="about-header">
       <h2>#Agendar Cita</h2>
       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
    </section>
 
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Puedes ubicarnos aquí</span>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h2>
            <h3>Sede Oficial</h3>
            <div>
                <li>
                    <i class="far fa-map" ></i>
                    <p>- Los olivos / Calle 365</p>
                </li>

                <li>
                    <i class="far fa-envelope" ></i>
                    <p>- contacto@ejemplo.com</p>
                </li>

                <li>
                    <i class="fas fa-phone-alt" ></i>
                    <p>- +51 9 876 54 321</p>
                </li>

                <li>
                    <i class="far fa-clock" ></i>
                    <p>- Lunes a Sabado / 10:00 a 20:00</p>
                </li>
            </div>
        </div>


        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124832.40914576866!2d-77.08413388269327!3d-12.111277060879807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce543477f8d9%3A0x9d64f6794789376b!2sMegaPlaza!5e0!3m2!1sen!2spe!4v1665062398980!5m2!1sen!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

    <section id="form-details">
        <form action="http://localhost/reservas/main/reserva.php" method= "POST">
            <span>Agenda tu cita</span>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
            <input type="text" name= "mascota" id= "mascota" pattern = "[A-Za-z]+" required placeholder = "Nombre Mascota">
            <input type="telefono" name= "telefono" placeholder="Telefono" pattern = "[0-9]+" required>
            <input type="date" name= "date" id= "date" min = "2023-01-01" max = "2023-12-31" placeholder="" required>
            <input type="time" name= "time" id= "time" min = "08:00 AM" max = "08:00 PM" placeholder="" required>
            <select name="asunto" id="asunto" required>
                <option disable>Seleccione una opcion</option>
                <option>Peluqueria</option>
                <option>Oftalmologia</option>
                <option>Cardiologia</option>
                <option>Peluqueria</option>
                <option>Medicina Felina</option>
                <option>Fisioterapia</option>
                <option>Laboratorio</option>
                <option>Ducha</option>
                <option>Teleconsulta</option>
                <option>Cirugia</option>
            </select>
            <!-- <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea> -->
            <button class="normal">ENVIAR</button>
        </form>
        
        <div class="people">
            <div>
                <img src="http://localhost/reservas/img/doc1.jpg" alt="">
                <p><span>Jhon Zito</span>Especialista <br> Phone: +51 9 876 54 321 <br> Email: contact@example.com</p>
            </div>
            
            <div>
                <img src="http://localhost/reservas/img/doc2.jpg" alt="">
                <p><span>William Smith</span>Especialista <br> Phone: +51 9 876 54 321 <br> Email: contact@example.com</p>
            </div>
            
            <div>
                <img src="http://localhost/reservas/img/doc3.jpg" alt="">
                <p><span>Carlos Curo</span>Especialista <br> Phone: +51 9 876 54 321 <br> Email: contact@example.com</p>
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
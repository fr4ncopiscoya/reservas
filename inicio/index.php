<?php
session_start();


// if(isset($_SESSION['user'])){
//     if($_SESSION['user'] = $usuariolg){
//         header("http://localhost/Login/usuario/usuario.php");
//     }
// }
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/Login/css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css"> -->
        <!-- <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css"> -->
        <title>Document</title>
    </head>


        <body>
        <!-- <script type= "text/javascript">
            function mostrar(){
                Swal.fire({
                    title: 'Error!',
                    text: 'Do you want to continue',
                    icon: 'error',
                    confirmButtonText: 'Cool'
                    })
            }
            mostrar();
        </script> -->
            <div class="error">
                <span>LOS DATOS SON INCORRECTOS, INTÉNTE OTRA VEZ </span>
                </div>
                <div class="main">
                    <form action="http://localhost/Login/main/logear.php" method= "POST" id="form">
                        <div class="form">
                            <h1>Iniciar Sesión</h1>
                            <!-- <div class="group">
                                <input type="text" name= "namelgl" id= "nombre" required > <span class= "barra"></span>
                                <label for="">NOMBRE</label>
                            </div> -->
                            <div class="group">
                    <input type="email" name= "usuariolg" id= "email" required > <span class= "barra"></span>
                    <label for="">EMAIL</label>
                </div>
                <div class="group">
                    <input type="password" name= "passlg" id= "pass" required > <span class= "barra"></span>
                    <label for="">PASSWORD</label>
                </div>
                <input type="submit" class= "btnlg" value = "Enviar">
                <p class = reg >No tienes una cuenta?</p>
                <a class= "link" href="http://localhost/Login/inicio/registro.php">Registrate Aquí</a>
            </div>
        </form>
        <!-- <input type="password" name= "passlg" placeholder = "Contraseña" required >
        <input type="submit" class= "btnlg" value = "Iniciar Sesión" > -->
</body>
</html>
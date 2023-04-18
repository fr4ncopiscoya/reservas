<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/reservas/css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Document</title>
    </head>

<body>
    <div class="error">
        <span>NO SE PUDO REGISTRAR</span>
    </div>
    <div class="main">
        <form action="http://localhost/reservas/main/insertar.php" method= "POST" id="form">
            <div class="form">
                <h1>Registrarse</h1>
                <div class="group">
                    <input type="text" name= "namerg" id= "nombre" pattern = "[A-Za-z]+" required > <span class= "barra"></span>
                    <label for="">NOMBRE</label>
                </div>
                <div class="group">
                    <input type="dni" name= "dnirg" id= "dni" pattern = "[0-9]+" required > <span class= "barra"></span>
                    <label for="">DNI</label>
                </div>
                <div class="group">
                    <input type="email" name= "usuariorg" id= "email" required > <span class= "barra"></span>
                    <label for="">EMAIL</label>
                </div>
                <div class="group">
                    <input type="password" name= "passrg" id= "pass"  required > <span class= "barra"></span>
                    <label for="">PASSWORD</label>
                </div>
                <input type="submit" class= "btnrg btnlg" value = "Enviar">
                <p class = reg >Ya tienes una cuenta?</p>
                <a class= "link" href="http://localhost/reservas/inicio/index.php">Ingresa Aquí</a>
            </div>
            <p class = doble ></p>
        </form>
        <!-- <input type="password" name= "passlg" placeholder = "Contraseña" required >
        <input type="submit" class= "btnlg" value = "Iniciar Sesión" > -->
</body>

<!-- <script>
    $(document).ready(function(){
    $('.btnrg').on('click',function(e){

        e.preventDefault();
        insertar();
    });
});
</script> -->
<script src="http://localhost/Login/js/insertar.js"></script>
</html>
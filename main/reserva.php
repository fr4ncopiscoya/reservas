<?php
require 'conexion.php';
// require 'insertar.php';
sleep(2);


// if(
//     isset( $_POST['mascota'])&&
//     isset( $_POST['telefono'])&&
//     isset( $_POST['date'])&&
//     isset( $_POST['time'])&&
//     isset( $_POST['asunto'])
// )
// {
//     $mysqli->query("INSERT INTO reserva (mascota,telefono,fecha,hora,asunto,id_user)
//          VALUES ('".$_POST['mascota']."','".$_POST['telefono']."','".$_POST['date']."','".$_POST['time']."','".$_POST['asunto']."',".$mysqli->id_user." )
//         ");
//         echo '<script> alert("CITA AGENDADA CORRECTAMENTE");
//         location.href="http://localhost/reservas/inicio/agendar.php";
//         </script>';
// }

$mascota = $_POST['mascota'];
$telefono = $_POST['telefono'];
$fecha = $_POST['date'];
$hora = $_POST['time'];
$asunto = $_POST['asunto'];


// if(repe($fecha,$hora,$mysqli )==1){
//     echo '<script> alert("USTED YA TIENE CITA AGENDADA PARA ESTA FECHA Y HORA");
//         location.href="http://localhost/reservas/inicio/agendar.php";
//         </script>';
// }else{
    $insertar = "INSERT INTO citas (mascota,telefono,fecha,hora,asunto) VALUES('$mascota','$telefono','$fecha', '$hora', '$asunto')";
    echo mysqli_query($conexion,$insertar);
    echo '<script> alert("CITA AGENDADA CORRECTAMENTE");
    location.href="http://localhost/reservas/inicio/agendar.php";
    </script>';
    // header("location: http://localhost/Login/inicio/index.php");
// }


function repe($fecha,$hora,$mysqli){
    $sql = "SELECT * FROM citas WHERE fecha = '$fecha' and hora = '$hora' ";
    $result = mysqli_query($conexion,$sql);

    if(mysqli_num_rows($result)>0){
        return 1;
    }else{
        return 0;
    }
}

?>
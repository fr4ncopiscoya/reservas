<?php
require 'conexion.php';
sleep(2);

// if(
//     isset( $_POST['namerg'])&&
//     isset( $_POST['dnirg'])&&
//     isset( $_POST['usuariorg'])&&
//     isset( $_POST['passrg'])&&
// )
//     {
//         $mysqli->query("INSERT INTO usuarios (Nombre,Dni,Usuario,Pass)
//         VALUES ('".$_POST['namerg']."','".$_POST['dnirg']."','".$_POST['usuariorg']."','".$_POST['passrg']."' )
//         ");
//     }

$nombre = $_POST['namerg'];
$dni = $_POST['dnirg'];
$usuario = $_POST['usuariorg'];
$password = $_POST['passrg'];

if(repe($dni,$usuario,$conexion)==1){
    echo '<script> alert("ESTE USUARIO YA EXISTE OE GIL");
        location.href="http://localhost/reservas/inicio/registro.php";
        </script>';
}else{
    $insertar = "INSERT INTO usuarios (Nombre,Dni,Usuario,Pass) VALUES('$nombre','$dni','$usuario', '$password')";
    echo mysqli_query($conexion,$insertar);
    header("location: http://localhost/reservas/inicio/index.php");
}


function repe($dni,$user,$conexion){
    $sql = "SELECT * FROM usuarios WHERE Dni = '$dni' and Usuario = '$user' ";
    $result = mysqli_query($conexion,$sql);

    if(mysqli_num_rows($result)>0){
        return 1;
    }else{
        return 0;
    }
}

?>
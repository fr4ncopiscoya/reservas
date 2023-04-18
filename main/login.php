<?php
// if(!empty($_SERVER['HTTP_X_REQUESTED_WIDHT']) && strtolower($_SERVER['HTTP_X_REQUESTED_WIDHT']) == 'xmlhttprequest'){
//     require 'conexion.php';
//     sleep(2);
//     session_start();

//     $mysqli -> set_charset('utf8');

//     $usuariolg  = $mysqli-> real_escape_string($_POST['usuariolg']);
//     $passwordlg  = $mysqli-> real_escape_string($_POST['passlg']);

//     if($nueva_consulta = $mysqli -> preapare("SELECT Usuario,Pass FROM usuarios WHERE Usuario = ? AND Pass = ?")){
//         $nueva_consulta->bind_param('ss',$usuariolg,$passwordlg);
//         $nueva_consulta->execute();

//     }

// }



// require 'conexion.php';
// sleep(2);
// session_start();

// $usuariolg = $_POST['usuariolg'];
// $passwordlg = $_POST['passlg'];

// $usuarios = $conexion -> query("SELECT Usuario,Pass FROM usuarios WHERE Usuario = '".$usuariolg."' AND Pass = '".$passwordlg."'");

// if($usuarios -> num_rows == 1){
//     $datos = $usuarios -> fetch_assoc();
//     $_SESSION['user'] = $datos;
//     echo json_encode(array('error' => false,'tipo' => $datos['Usuario'],['Pass']));
// }else{

//     echo json_encode(array('error' => true));
// }


// $conexion -> close();
?>
<?php

include("../conexion/conectar.php");


$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql_usuario = "SELECT Id_empleado FROM empleado WHERE Usuario = '$usuario' AND contraseña = '$password'  ";

$consulta_usuario = mysqli_query($conexion, $sql_usuario);


if(mysqli_num_rows($consulta_usuario) >0) {
    header("location:../turno.php"); 
} else {
    header("location:../index.php?error=Verifique sus datos");
}


?>
<?php

include("../conexion/conectar.php");


$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql_usuario = "SELECT Usuario FROM usuario WHERE Usuario = '$usuario' and contraseña='$password';";

$consulta_usuario = mysqli_query($conexion, $sql_usuario);


if($consulta_usuario) {
	session_start();
	$_SESSION['nombre']="x";
	setcookie("USUARIO",$usuario, time()+3600,"/peluquearte/");
    header("location:../turno.php"); 
} else {
    header("location:index.html?error=Verifique sus datos");
}


?>
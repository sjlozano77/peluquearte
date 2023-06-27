<?php

include("CONEXION/conectar.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql = "INSERT INTO empleado (Nombre, Apellido, usuario, contraseña) VALUES('$nombre', '$apellido', '$usuario', '$password')";

$consulta = mysqli_query($conexion, $sql);

if($consulta) {
    header("location:registro.php");
} else {
    header("location:registro.php?error=Verifique sus datos");
}

?>
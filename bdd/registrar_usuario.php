<?php

require("../conexion/conectar.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql_select = "SELECT Usuario FROM empleado WHERE Usuario = '$usuario'";
$consulta_select = mysqli_query($conexion, $sql_select);
if (mysqli_num_rows($consulta_select) == 0) {
    $sql = "INSERT INTO empleado VALUES ('', '$nombre', '$apellido', '$usuario', '$password')";
    $consulta = mysqli_query($conexion, $sql);
    if($consulta) {
        header("location:../registro.php?msj=ok");
    } else {
        header("location:../registro.php?msj=error1");
    }
}
else {
    header("location:../registro.php?msj=error2");
}





?>
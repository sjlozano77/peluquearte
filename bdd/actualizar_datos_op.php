<?php 
include('../conexion/conectar.php');

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$contra = $_POST['contraseña'];



$sql_actualizar = "UPDATE usuario SET Dni = '$dni', Nombre = '$nombre', Apellido = '$apellido', Usuario = '$usuario', Contraseña = '$contra' WHERE Dni= '$dni'";

$act=mysqli_query($conexion, $sql_actualizar);

if($act) {
        header("location:../cerrar_sesion.php?msj=ok");
    } else {
        header("location:../mi_perfil_op.php?msj=error");
    }

 ?>
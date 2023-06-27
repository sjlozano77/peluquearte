<?php

include('../conexion/conectar.php');

$id_reserva = $_GET['id_reserva'];

$sql_actualizar = "UPDATE reservas SET estado = 'Confirmado' WHERE Id_Reserva = '$id_reserva'";

mysqli_query($conexion, $sql_actualizar);

header("location:../ver_mis_turnos.php");

?>
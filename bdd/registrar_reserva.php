<?php 
    include("../conexion/conectar.php");
    
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $calendario = $_POST['calendario']; 
    $hora = $_POST['hora'];
    $reservado = "reservado";
    $id_empleado = $_POST['Id_empleado'];

    $sql_insert = "INSERT INTO reservas (DNI, Nombre, Apellido, dia, hora, Estado, Id_empleado ) VALUES ('$dni','$nombre','$apellido','$calendario', '$hora' ,'$reservado' ,'$id_empleado')";
    
    $insertar_reserva = mysqli_query($conexion, $sql_insert);

    if($insertar_reserva) {
        header("location:../turno.php?Su turno se ha registrado exitosamente");
    } else {
        header("location:../turno.php?error=Hubo un problema al intentar registrar el turno. Reintente por favor");
    }

?>

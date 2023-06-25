<?php
require("conexion/conectar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <nav> SISTEMA DE TURNOS - PELUQUERIA</nav>
    <h1> Reserva de turno</h1>
    <?php 
        // Ejecutar la consulta de reservas
        $sql = "SELECT * FROM reservas";
        $resultado = mysqli_query($conexion, $sql) or die("Error al ejecutar la consulta");

        // Mostrar la consulta en una tabla
        echo "<table border='1'>";
        echo "<tr><th>Id_Reserva</th><th>DNI</th><th>Nombre</th><th>Apellido</th><th>Dia</th><th>Estado</th><th>Id_empleado</th></tr>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila["Id_Reserva"] . "</td>";
            echo "<td>" . $fila["DNI"] . "</td>";
            echo "<td>" . $fila["Nombre"] . "</td>";
            echo "<td>" . $fila["Apellido"] . "</td>";
            echo "<td>" . $fila["Dia"] . "</td>";
            echo "<td>" . $fila["Estado"] . "</td>";
            echo "<td>" . $fila["Id_empleado"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Cerrar la conexión
        mysqli_close($conexion);
    ?>

    <script type="text/javascript" src="js/formulario.js"></script>
</body>
</html>
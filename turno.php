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
    <form  action="bdd/registrar_reserva.php" method="post" id="formulario" name="formulario" autocomplete="off">   
        <div>
            <label>DNI</label>
            <input id="DNI" type="number" name="dni" autocomplete="off" >            
        </div>
        <div>
            <label>Nombre</label>
            <input id="nombre"type="text" name="nombre" autocomplete="off">
        </div>
        <div>
            <label>Apellido</label> 
            <input id="apellido"type="text" name="apellido" autocomplete="off" >   
        </div>
        <div>
             <label>Seleccionar fecha del turno: </label>
              <input type="date" name="calendario"  value="2023-07-22" min="2018-01-01" max="2025-12-31" id= "dia">
              <label>Hora:</label>
              <input type="time" id="hora" name="hora" value="11:45:00" max="19:30:00" min="10:00:00" step="1" >
        </div>
        <div>
        <label>Seleccionar estado: </label>
        <select id="estado" name="estado">
            <option value="">Estado</option>
            <option value="confirmado">confirmado</option>
            <option value="reservado">reservado</option>
            <option value="cancelado">cancelado</option>
        </select>   
        </div>
        <div>
            <label>Seleccionar empleado: </label>
             <select name="Id_empleado" id="Id_empleado">
                <?php
                // Hacer la consulta incluyendo el campo id_empleado
                $result = mysqli_query($conexion, 'SELECT id_empleado, Nombre, Apellido FROM empleado');

                // Comprobar si la consulta tuvo éxito
                if ($result) {
                // Recorrer todas las filas del resultado
                while ($row = mysqli_fetch_assoc($result)) {
                    // Crear una opción con el valor del campo id_empleado y el texto del campo Nombre
                    echo "<option value='" . $row["id_empleado"] . "'>" . $row["Nombre"] . " " . $row["Apellido"] . " " . "</option>";
                    //echo "<option value='" . $row["id_empleado"] . "'>" . $row["Nombre"] . "</option>";
                }
                } else {
                // Mostrar un mensaje de error
                echo "Error al hacer la consulta: " . mysqli_error($conexion);
                }
                ?>
            </select>
        </div>   
        <input type="submit" value="enviar">     
    </form>

    <div id= "alerta">
        <p id = "dniMensaje"></p>
        <p id = "nombreMensaje"></p>
        <p id = "apellidoMensaje"></p>
        <p id = "selectMensaje"></p> 
    </div>


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
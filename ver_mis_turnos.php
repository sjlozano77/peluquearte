<?php
require("conexion/conectar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!---------------------------Fuentes de Google Fonts------------------------------------->
    <!--Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">    
    <!--Rock Salt-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">

    <!-------------------------------Hojas de estilo----------------------------------------->
    <!--variables-->
    <link rel="stylesheet" href="css/01.variables/variables.css">
    <!-----base------>
    <link rel="stylesheet" href="css/02.base/normalize.css">
    <link rel="stylesheet" href="css/02.base/general.css">
    <!--secciones--->
    <link rel="stylesheet" href="css/03.secciones/header.css">    
    <link rel="stylesheet" href="css/03.secciones/header-titulo.css">
    <link rel="stylesheet" href="css/03.secciones/main.css">
    <link rel="stylesheet" href="css/03.secciones/main-header.css">
    <link rel="stylesheet" href="css/03.secciones/main-header-titulo.css">
    <link rel="stylesheet" href="css/03.secciones/main-contenido.css">
    <!--componentes-->   
    <link rel="stylesheet" href="css/04.componentes/menu/menu.css">
    <link rel="stylesheet" href="css/04.componentes/menu/menu-list.css"> 
    <link rel="stylesheet" href="css/04.componentes/menu/menu-item.css"> 
    <link rel="stylesheet" href="css/04.componentes/menu/menu-link.css"> 

    <title>Peluquearte | Ver mis turnos</title>

</head>
<body class=body-sistema>
    <header class="header">
        <h1 class="header-titulo">Peluquearte</h1>
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="turno.php">Generar turnos</a></li>
                <li class="menu__item"><a class="menu__link" href="ver_mis_turnos.php">Ver mis turnos</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <header class="main-header">
            <h2 class="main-header-titulo">Ver mis turnos</h2>
        </header>
        <section class="main-contenido">
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
        </section>
    </main>
    
    <script type="text/javascript" src="js/formulario.js"></script>
</body>
</html>
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
    <link rel="stylesheet" href="css/03.secciones/main-contenido-tabla.css">
    <!--componentes-->   
    <link rel="stylesheet" href="css/04.componentes/menu/menu.css">
    <link rel="stylesheet" href="css/04.componentes/menu/menu-list.css"> 
    <link rel="stylesheet" href="css/04.componentes/menu/menu-item.css"> 
    <link rel="stylesheet" href="css/04.componentes/menu/menu-link.css">
    <link rel="stylesheet" href="css/04.componentes/tabla/tabla.css"> 
    <link rel="stylesheet" href="css/04.componentes/tabla/tabla-encabezado.css">
    <link rel="stylesheet" href="css/04.componentes/tabla/tabla-fila.css">
    <link rel="stylesheet" href="css/04.componentes/tabla/tabla-celda.css">
    <link rel="stylesheet" href="css/04.componentes/acciones/acciones.css">
    <link rel="stylesheet" href="css/04.componentes/acciones/acciones-confirmar.css">
    <link rel="stylesheet" href="css/04.componentes/acciones/acciones-cancelar.css">
    <link rel="stylesheet" href="css/04.componentes/estado/estado.css">
    <!--Utilidades-->
    <link rel="stylesheet" href="css/05.utilidades/utilidades.css">
    

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
            <h2 class="main-header-titulo">Mis turnos</h2>
        </header>
        <section class="main-contenido">
            <div class="main-contenido-tabla">
                <?php 
                    // Ejecutar la consulta de reservas
                    $sql = "SELECT reservas.Id_Reserva, reservas.DNI, reservas.Nombre, reservas.Apellido, reservas.Dia, reservas.Hora, empleado.Nombre, empleado.Apellido, reservas.Estado FROM reservas inner join empleado on reservas.Id_empleado = empleado.Id_empleado";
                    $resultado = mysqli_query($conexion, $sql) or die("Error al ejecutar la consulta");

                    // Mostrar la consulta en una tabla
                    echo "<table class='tabla' border='1'>";
                    echo "<tr class='tabla__encabezado'><th class='tabla__celda'>Reserva</th><th class='tabla__celda'>DNI</th><th class='tabla__celda'>Nombre</th><th class='tabla__celda'>Dia</th><th class='tabla__celda'>Hora</th><th class='tabla__celda'>Peluquero/a</th><th class='tabla__celda'>Estado</th><th class='tabla__celda'>Acciones</th></tr>";
                    $contador = 0;
                    while ($fila = mysqli_fetch_row($resultado)) {
                        if($contador % 2 == 0) {
                            echo "<tr class='tabla__fila tabla__fila--par'>";
                            echo "<td class='tabla__celda tabla__celda--negrita'>" . $fila[0] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[1] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[2] . " " . $fila[3] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[4] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[5] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[6] . " " .  $fila[7] . "</td>";
                            if($fila[8] == "Confirmado") {
                                echo "<td class='tabla__celda'>" . "<div class='estado estado--confirmado'></div>"  . "</td>";
                            } else if ($fila[8] == "reservado") {
                                echo "<td class='tabla__celda'>" . "<div class='estado estado--reservado'></div>"  . "</td>";
                            } else { //cancelado
                                echo "<td class='tabla__celda'>" . "<div class='estado estado--cancelado'></div>" . "</td>";
                            }
                            echo "<td class='tabla__celda tabla__celda--display-flex-row'>" . "<form action='bdd/actualizar_estado_a_confirmado.php' method='get'><textarea class='oculto' name='id_reserva'>$fila[0]</textarea><button class='acciones acciones--confirmar' type='submit'><img src='assets/iconos/confirmar.svg'></button></form>" . "<form action='bdd/actualizar_estado_a_cancelado.php' method='get'><textarea class='oculto' name='id_reserva'>$fila[0]</textarea><button class='acciones acciones--cancelar' type='submit'><img src='assets/iconos/cancelar.svg'></button></form>". "</td>";
                            echo "</tr>";
                        } else {
                            echo "<tr class='tabla__fila tabla__fila--impar'>";
                            echo "<td class='tabla__celda tabla__celda--negrita'>" . $fila[0] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[1] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[2] . " " . $fila[3] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[4] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[5] . "</td>";
                            echo "<td class='tabla__celda'>" . $fila[6] . " " .  $fila[7] . "</td>";
                            if($fila[8] == "Confirmado") {
                                echo "<td class='tabla__celda'>" . "<div class='estado estado--confirmado'></div>"  . "</td>";
                            } else if ($fila[8] == "reservado") {
                                echo "<td class='tabla__celda'>" . "<div class='estado estado--reservado'></div>"  . "</td>";
                            } else { //cancelado
                                echo "<td class='tabla__celda'>" . "<div class='estado estado--cancelado'></div>" . "</td>";
                            }
                            echo "<td class='tabla__celda tabla__celda--display-flex-row'>" . "<form action='bdd/actualizar_estado_a_confirmado.php' method='get'><textarea class='oculto' name='id_reserva'>$fila[0]</textarea><button class='acciones acciones--confirmar' type='submit'><img src='assets/iconos/confirmar.svg'></button></form>" . "<form action='bdd/actualizar_estado_a_cancelado.php' method='get'><textarea class='oculto' name='id_reserva'>$fila[0]</textarea><button class='acciones acciones--cancelar' type='submit'><img src='assets/iconos/cancelar.svg'></button></form>". "</td>";
                            echo "</tr>";
                        }

                        $contador++;
                    }
                    echo "</table>";

                    // Cerrar la conexión
                    mysqli_close($conexion);
                ?>
            </div>
        </section>
    </main>
    
    <script type="text/javascript" src="js/formulario.js"></script>
</body>
</html>
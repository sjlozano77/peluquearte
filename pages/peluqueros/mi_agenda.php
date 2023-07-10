<?php
    require("../../conexion/conectar.php");
?>

<?php
    session_start();

    function obtenerColorEstado($estado) {
        switch ($estado) {
            case 'Confirmado':
                return 'verde';
            case 'Reservado':
                return 'amarillo';
            case 'Cancelado':
                return 'rojo';
            }
    }

    if(isset($_SESSION["nombre"])) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peluquearte | Mi perfíl</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <link rel="stylesheet" href="../../css/01.variables/variables.css">
    <!-----base------>
    <link rel="stylesheet" href="../../css/02.base/normalize.css">
    <link rel="stylesheet" href="../../css/02.base/general.css">
    <!--secciones--->
    <link rel="stylesheet" href="../../css/03.secciones/header.css">    
    <link rel="stylesheet" href="../../css/03.secciones/main.css">
    <link rel="stylesheet" href="../../css/03.secciones/main-header.css">
    <link rel="stylesheet" href="../../css/03.secciones/main-header-titulo.css">
    <link rel="stylesheet" href="../../css/03.secciones/main-contenido.css">
    <!--componentes-->
    <link rel="stylesheet" href="../../css/04.componentes/usuario/usuario.css">
    <link rel="stylesheet" href="../../css/04.componentes/usuario/usuario-imagen.css">
    <link rel="stylesheet" href="../../css/04.componentes/usuario/usuario-nombre.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form-titulo.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form-datos.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form-input.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form-label.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form-select.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form-botones.css">
    <link rel="stylesheet" href="../../css/04.componentes/form/form-botones-boton.css">
    <link rel="stylesheet" href="../../css/04.componentes/mensaje/mensaje-link.css"> 
    <link rel="stylesheet" href="../../css/04.componentes/menu-hamburguesa/menu-hamburguesa.css">
    <link rel="stylesheet" href="../../css/04.componentes/logo/logo.css"> 
    <link rel="stylesheet" href="../../css/04.componentes/logo/logo-titulo.css">
    <link rel="stylesheet" href="../../css/04.componentes/logo/logo-icon.css">    
    <link rel="stylesheet" href="../../css/04.componentes/menu/menu.css">
    <link rel="stylesheet" href="../../css/04.componentes/menu/menu-list.css"> 
    <link rel="stylesheet" href="../../css/04.componentes/menu/menu-item.css"> 
    <link rel="stylesheet" href="../../css/04.componentes/menu/menu-link.css">
    <link rel="stylesheet" href="../../css/04.componentes/menu/menu-icon.css">
    <link rel="stylesheet" href="../../css/04.componentes/alerta/alerta.css">
    <link rel="stylesheet" href="../../css/04.componentes/alerta/alerta-item.css">
    <link rel="stylesheet" href="../../css/04.componentes/logout/logout.css">
    <link rel="stylesheet" href="../../css/04.componentes/usuario/usuario.css">
    <link rel="stylesheet" href="../../css/04.componentes/usuario/usuario-imagen.css">
    <link rel="stylesheet" href="../../css/04.componentes/usuario/usuario-nombre.css">
    <link rel="stylesheet" href="../../css/05.utilidades/utilidades.css"> 
    
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/6911c92bee.js" crossorigin="anonymous"></script>

</head>
<body>
    <header id="header" class="header">
        <div class="flex-izquierda">
            <img id='toggle-menu' class="menuhamburguesa" src="../../assets/iconos/menu-icon.svg">
            <h1 class="logo">Peluquearte</h1>
        </div>
        <div class=flex-derecha>
            <div class="usuario">
                <div class="usuario__imagen-container"><img class="usuario__imagen-content" src="<?php echo $_SESSION["foto"] ?>" alt="usuario-imagen"></div>
                <p class=usuario__nombre><?php  echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?></p>
            </div>
            <a href="../../cerrar_sesion.php"><img class="logout" src="../../assets/iconos/logout.svg"></a>
        </div>
    </header>
    <nav class="menu" id="menu">
        <ul class="menu__list">
            <li class="menu__item"><a class="menu__link" href="mi_perfil.php"><svg class="menu__icon" xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="40" viewBox="0 -960 960 960" width="40"><path d="M480-481q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42ZM160-160v-94q0-38 19-65t49-41q67-30 128.5-45T480-420q62 0 123 15.5t127.921 44.694q31.301 14.126 50.19 40.966Q800-292 800-254v94H160Zm60-60h520v-34q0-16-9.5-30.5T707-306q-64-31-117-42.5T480-360q-57 0-111 11.5T252-306q-14 7-23 21.5t-9 30.5v34Zm260-321q39 0 64.5-25.5T570-631q0-39-25.5-64.5T480-721q-39 0-64.5 25.5T390-631q0 39 25.5 64.5T480-541Zm0-90Zm0 411Z"/></svg>Mi perfil</a></li>
            <li class="menu__item"><a class="menu__link" href="mi_agenda.php"><svg class="menu__icon" xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" height="40" viewBox="0 -960 960 960" width="40"><path d="M220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h520q24 0 42 18t18 42v680q0 24-18 42t-42 18H220Zm0-60h520v-680h-60v266l-97-56-97 56v-266H220v680Zm0 0v-680 680Zm266-414 97-56 97 56-97-56-97 56Z"/></svg>Mi agenda</a></li>
        </ul>
    </nav>
    <main class="main">
    <header class="main-header">
            <h2 class="main-header-titulo">Agenda</h2>
        </header>
        <section class="main-contenido main-contenido-centrado">
        <div class="main-contenido-tabla">
         <?php 
         $sql =   "SELECT reserva.Id, usuario.Nombre, reserva.Dia, reserva.Hora, usuario.Apellido AS Peluquero, estado.Descripcion AS Estado
         FROM reserva
         INNER JOIN usuario ON reserva.Dni_peluquero = usuario.Dni
         INNER JOIN estado ON reserva.Id_estado = estado.Id";
         $resultagenda =  mysqli_query($conexion, $sql) or die("Error al ejecutar la consulta");
         if ($resultagenda->num_rows > 0) {
         echo "<table>";
         echo "<thead>";
         echo "<tr>";
         echo "<th scope=col>Id</th>";
         echo "<th scope=col>Nombre</th>";
         echo "<th scope=col>Dia</th>";
         echo "<th scope=col>Hora</th>";
         echo "<th scope=col>Peluquero</th>";
         echo "<th scope=col>Estado</th>";
         echo "<tr>";
         echo "</thead>";
         while ($info = $resultagenda->fetch_assoc()) {
            $idReserva = $info["Id"];
            $nombre = $info["Nombre"];
            $dia = $info["Dia"];
            $hora = $info["Hora"];
            $peluquero = $info["Peluquero"];
            $estado = $info["Estado"];
            
            $colorEstado = obtenerColorEstado($estado);

            echo "<tbody>";
            echo "<tr>";
            echo "<td>$idreserva</td>";
            echo "<td>$nombre</td>";
            echo "<td>$dia</td>";
            echo "<td>$hora</td>";
            echo "<td>$peluquero</td>";
            echo "<td><div style='width: 20px; height: 20px; border-radius: 50%; background-color: $colorEstado;'></div></td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
    }else{ 
        echo "No se encontraron registros.";
    }
    mysqli_close($conexion);

         ?>
        </div>               
        </section>
    </main>
    <?php
        error_reporting(0);
    ?>
    <script type="text/javascript" src="../../js/formulario.js"></script>
    <script type="text/javascript" src="../../js/toggle-menu.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php
} else {
    header("location:../../index.php");
}
?>
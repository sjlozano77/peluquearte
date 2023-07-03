<!DOCTYPE html>
<html lang="en">
<head>
    <title>Peluquería | Registrarse</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link rel="stylesheet" href="css/01.variables/variables.css">
    <!-----base------>
    <link rel="stylesheet" href="css/02.base/normalize.css">
    <link rel="stylesheet" href="css/02.base/general.css">
    <!--secciones--->
    <link rel="stylesheet" href="css/03.secciones/header.css">    
    <link rel="stylesheet" href="css/03.secciones/main.css">
    <link rel="stylesheet" href="css/03.secciones/main-header.css">
    <link rel="stylesheet" href="css/03.secciones/main-header-titulo.css">
    <link rel="stylesheet" href="css/03.secciones/main-contenido.css">
    <!--componentes-->
     <link rel="stylesheet" href="css/04.componentes/form/form.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-titulo.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-datos.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-input.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-label.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-select.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-botones.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-botones-boton.css">
    <link rel="stylesheet" href="css/04.componentes/mensaje/mensaje-link.css"> 
    <link rel="stylesheet" href="css/04.componentes/menu-hamburguesa/menu-hamburguesa.css">
    <link rel="stylesheet" href="css/04.componentes/logo/logo.css"> 
    <link rel="stylesheet" href="css/04.componentes/logo/logo-titulo.css">
    <link rel="stylesheet" href="css/04.componentes/logo/logo-icon.css">    
    <link rel="stylesheet" href="css/04.componentes/menu/menu.css">
    <link rel="stylesheet" href="css/04.componentes/menu/menu-list.css"> 
    <link rel="stylesheet" href="css/04.componentes/menu/menu-item.css"> 
    <link rel="stylesheet" href="css/04.componentes/menu/menu-link.css">
    <link rel="stylesheet" href="css/04.componentes/menu/menu-icon.css">
    <link rel="stylesheet" href="css/04.componentes/alerta/alerta.css">
    <link rel="stylesheet" href="css/04.componentes/alerta/alerta-item.css"> 
    
    
</head>
<body>
    <header id="header" class="header">
        <img id='toggle-menu' class="menuhamburguesa" src="assets/iconos/menu-icon.svg">
        <div class="logo">
            <p class="logo__icon">p</p>
            <h1 class="logo__titulo">Peluquearte</h1>
        </div>
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="turno.php"><img class="menu__icon" src="assets/iconos/turno-icon.svg">Generar turnos</a></li>
                <li class="menu__item"><a class="menu__link" href="ver_mis_turnos.php"><img class="menu__icon menu__icon--ver" src="assets/iconos/ver-icon.svg">Ver mis turnos</a></li>
                <li class="menu__item"><a class="menu__link" href="registro_peluquero.php"><img class="menu__icon menu__icon--ver" src="assets/iconos/ver-icon.svg">REGISTRAR PELUQUERO</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form class="form" id="Peluquero" action="bdd/registrar_peluquero.php" method="POST" enctype="multipart/form-data">
            <h1 class="form__titulo">Registrarse</h1>
            <div class="form__datos">
                <label class="form__label" for="dni">DNI</label>
                <input class="form__input" type="number" id="dni" name="dni" required>
                <label class="form__label" for="nombre">Nombre</label>
                <input class="form__input" type="text" id="nombre" name="nombre" required>
                <label class="form__label" for="apellido">Apellido</label>
                <input class="form__input" type="text" id="apellido" name="apellido" required>
                <label class="form__label--font-size-grande">Fecha de Nacimiento: </label>
                <input class="form__input" type="date" name="fecha"  value="2023-07-22" min="1900-01-01" max="2025-12-31" id= "dia" required>
                <input class="form__input" type="file" id="file" name="file" required >
            </div>
            <div class="form__botones">
                <input class="form__botones__boton form__botones__boton--resetear" type="reset" value="Resetear">
                <input class="form__botones__boton form__botones__boton--resetear" type="submit" value="Enviar">
            </div>
        </form>
        <p class="mensaje">
            ¿Ya tiene una cuenta? Puede <a class="mensaje__link" href="index.php">iniciar sesión aquí</a>
        </p>

        <?php
            error_reporting(0);
            $valor = $_GET['msj'];
            echo "<p class='opcionAlert' style='visibility: hidden' >". $valor . "</p>";
        ?>
    </main>
    <script type="text/javascript" src="js/formulario.js"></script>
    <script type="text/javascript" src="js/toggle-menu.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
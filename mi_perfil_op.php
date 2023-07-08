<?php
require("conexion/conectar.php");
?>
<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['nombre'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Peluquearte | Mis datos</title>

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
                <li class="menu__item"><?php echo "<p>Bienvenido " .$_COOKIE['USUARIO']."</p>";  ?> </li>
                <li class="menu__item"><a class="menu__link" href="operador/mi_perfil_op.php">Ver mi Perfil</a></li>
                <li class="menu__item"><a class="menu__link" href="turno.php"><img class="menu__icon" src="assets/iconos/turno-icon.svg">Generar turnos</a></li>
                <li class="menu__item"><a class="menu__link" href="ver_mis_turnos.php"><img class="menu__icon menu__icon--ver" src="assets/iconos/ver-icon.svg">Ver mis turnos</a></li>
                <li class="menu__item"><a class="menu__link" href="cerrar_sesion.php">CERRAR SESION</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <header class="main-header">
            <h2 class="main-header-titulo">Mis Datos</h2>
        </header>
        <section class="main-contenido main-contenido-centrado">
            <input type="submit" value="Modificar" onclick="activarInput()"> 
            <form  class="main-form form" action="bdd/actualizar_datos_op.php" method="POST" autocomplete="off">   
                <section class="form__datos" >
                    <section class="form__botones">
                                
                </section>

                    <?php  
                    $usuario= $_COOKIE['USUARIO'];
                    $result = mysqli_query($conexion, "SELECT DNI, Nombre, Apellido, Usuario, Contraseña, n.descripcion as nivel FROM usuario as u left join nivel as n on u.Id_nivel= n.id WHERE Usuario = '$usuario'");
                    if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $dni = $row['DNI'];
                                $nom = $row['Nombre'];
                                $ape =$row['Apellido'];
                                $usuario = $row['Usuario'];
                                $contra = $row['Contraseña'];
                                $nivel = $row['nivel'];
                    ?>
                    <label class="form__label--font-size-grande">DNI </label>
                     <label ><?php echo $dni?></label>   
                    <label class="form__label--font-size-grande">Nombre</label>
                    <input class="form__input" id="input"type="text" name="nombre" autocomplete="off" value="<?php echo $nom ; ?>" disabled >
                    <label class="form__label--font-size-grande">Apellido</label> 
                    <input class="form__input" id="input"type="text" name="apellido" autocomplete="off" disabled value="<?php echo $ape ; ?>" >   
                    <label class="form__label--font-size-grande">Usuario </label>
                    <input class="form__input" id="input"type="text" name="usuario" autocomplete="off" value= "<?php echo $usuario;  ?>" disabled>   
                    <label class="form__label--font-size-grande">Contraseña</label>
                    <input class="form__input" id="input"type="text" name="contraseña" autocomplete="off" disabled value="<?php echo $contra; ?>">   
                    <label class="form__label--font-size-grande">Nivel</label>
                    <select class="form__select" name="nivel" disabled>
                        <option value="<?php echo $nivel; ?>"><?php echo $nivel; ?></option>
                            <?php
                            }} else {
                            echo "Error al hacer la consulta: " . mysqli_error($conexion);
                            }
                            ?> 
                             
                    
                    </select>                      
                </section>
                <section class="form__botones">
                    <input class="form__botones__boton form__botones__boton--enviar" type="submit" value="Enviar">             
                </section>
            </form>
        </section>
    </main>
    <script type="text/javascript" src="js/modificar.js"></script>
    <script type="text/javascript" src="js/toggle-menu.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php 
} else {
    header("Location: index.php");
    exit();
}
?>
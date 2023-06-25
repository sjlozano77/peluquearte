<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------------------------Fuentes de Google Fonts------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">    
    
    <!-------------------------------Hojas de estilo----------------------------------------->
    <!--variables-->
    <link rel="stylesheet" href="css/01.variables/variables.css">
    <!-----base------>
    <link rel="stylesheet" href="css/02.base/normalize.css">
    <link rel="stylesheet" href="css/02.base/general.css">
    <!--secciones--->
    <!--componentes-->
    <link rel="stylesheet" href="css/04.componentes/form.css">
    <link rel="stylesheet" href="css/04.componentes/form-titulo.css">
    <link rel="stylesheet" href="css/04.componentes/form-datos.css">
    <link rel="stylesheet" href="css/04.componentes/form-input.css">
    <link rel="stylesheet" href="css/04.componentes/form-label.css">
    <link rel="stylesheet" href="css/04.componentes/form-botones.css">
    <link rel="stylesheet" href="css/04.componentes/form-botones-boton.css">
    <link rel="stylesheet" href="css/04.componentes/mensaje-link.css">    
    
    <title>Peluquería | Registrarse</title>
</head>
<body>
    <main>
        <form class="form" action="registrar.php" method="POST">
            <h1 class="form__titulo">Registrarse</h1>
            <div class="form__datos">
                <label class="form__label" for="nombre">Nombre</label>
                <input class="form__input" type="text" id="nombre" name="nombre" required>
                <label class="form__label" for="apellido">Apellido</label>
                <input class="form__input" type="text" id="apellido" name="apellido" required>
                <label class="form__label" for="usuario">Usuario</label>
                <input class="form__input" type="text" id="usuario" name="usuario" required>
                <label class="form__label" for="password">Contraseña</label>
                <input class="form__input" type="password" id="password" name="password" required>
            </div>
            <div class="form__botones">
                <input class="form__botones__boton form__botones__boton--resetear" type="reset" value="Resetear">
                <input class="form__botones__boton form__botones__boton--validar" type="button" value="validar">
                <input class="form__botones__boton form__botones__boton--resetear" type="submit" value="Enviar">
            </div>
        </form>
        <p class="mensaje">
            ¿Ya tiene una cuenta? Puede <a class="mensaje__link" href="index.php">iniciar sesión aquí</a>
        </p>
    </main>
</body>
</html>
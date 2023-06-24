<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-------------------------------Hojas de estilo----------------------------------------->
    <!--variables-->
    <link rel="stylesheet" href="css/01.variables/variables.css">
    <!-----base------>
    <link rel="stylesheet" href="css/02.base/normalize.css">
    <link rel="stylesheet" href="css/02.base/general.css">

    <link rel="stylesheet" href="CSS/modal.css">
    <title>Peluquería | Iniciar sesión</title>
</head>
<body>
    <main>

        <section class="formulario-container">
            <form class=form action="bdd/iniciar_sesion.php" method="POST">
                <h1 class=form__titulo>Iniciar sesión</h1>
                <div class="form__datos">
                    <label class="form__label" for="usuario">Usuario</label>
                    <input class="form__input" type="text" id="usuario" name="usuario" required>
                    <label class="form__label" for="password">Contraseña</label>
                    <input class="form__input" type="password" id="password" name="password" required>
                </div>
                <div class="form__boton boton">
                    <input class="form__boton  boton__resetear" type="reset" value="Resetear">
                    <input class="form__boton boton__validar" type="button" value="validar">
                    <input class="form__boton boton__enviar" type="submit" value="Enviar">
                </div>
            </form>
        </section>

        <div class="mensaje-container">
            <p>
                ¿No tienes una cuenta?<a href="registro.php"> Puede registrarse aquí</a>
            </p>
        </div>

    </main>
    <script src="JS/modal.js"></script>
</body>
</html>
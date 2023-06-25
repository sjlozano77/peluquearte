<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/modal.css">
    <title>Peluquería | Registrarse</title>
</head>
<body>
    <main>
        <form action="registrar.php" method="POST">
            <h1>Registrarse</h1>
            <div class="formulario__datos">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="formulario__botones">
                <input class="botones boton-resetear" type="reset" value="Resetear">
                <input class="botones boton-enviar" type="submit">
            </div>
        </form>
        <p>
            ¿Ya tiene una cuenta? Puede <a href="index.php">iniciar sesión aquí</a>
        </p>
    </main>
</body>
</html>
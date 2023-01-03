<?php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="estilos/principal.css">
    <link rel="stylesheet" href="estilos/iniciar.css">
</head>

<body>
    <!--Aqui empieza el navegador que deberá estar en todos lados-->
    <div id="margen">
        <div id="navegador">
            <p id="logo">Foro Romano</p>
            <div id="enlace">
                <a href="iniciar.php" class="enlace">Iniciar sesión</a>
                <a href="index.php" class="enlace">Registrarse</a>
            </div>
        </div>
        <h1>Página de inicio de sesión</h1>
        <h2>Foro para discutir sobre foros. Especialistas en construcciones greco-latinas</h2>
        <div id="inicioSesion">
            <form action="" method="post">
                <label for="nombre">Introduzca el nombre del usuario</label>
                <br>
                <input type="text" name="nombre" id="nombre">
                <br>
                <label for="contrasena">Introduzca su contraseña</label>
                <br>
                <input type="password" name="contrasena" id="contrasena">
            </form>
        </div>
    </div>
</body>

</html>
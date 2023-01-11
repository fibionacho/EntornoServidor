<?php
require('db.php');
session_start();
/*print_r($_SESSION["usuario"]);*/
$texto = "";
$user="";

if (isset($_SESSION["name"])) {

    if (isset($_POST["publicar"])) {
        $texto = $_POST["post"];
        $user=$_SESSION["name"];
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foro</title>
        <link rel="stylesheet" href="estilos/principal.css">
        <link rel="stylesheet" href="estilos/iniciar.css">
    </head>

    <body>

        <div id="margen">
            <div id="navegador">
                <p id="logo">Foro Romano</p>
                <div id="enlace">
                    <a href="logout.php" class="enlace">Cerrar sesión</a>
                    <a href="registro.php" class="enlace">Registrarse</a>
                </div>
            </div>

            <h1>Bienvenido <?php print_r($_SESSION["name"]) ?></h1>
            <div id="imagen">
                <form action="foro.php" method="post">
                    <textarea name="post" id="post" cols="50" rows="10"></textarea>
                    <button type="submit" name="publicar" id="publicar">Publicar</button>
                </form>


            </div>



            <div id="publicacion">
                <p id="comentario">
                    <?= $user?> publicó:


                <div id="info">
                    <?= $texto ?>
                </div>
                </p>
            </div>
        </div>


    </body>

    </html>
<?php } else {
    header('Location: iniciar.php');
}
?>
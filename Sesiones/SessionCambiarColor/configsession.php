<?php
include "pintarMenuSession.php";
session_start();

if (isset($_POST["color"])) {
    $_SESSION["color"] = $_POST["color"];
    $bcolor = $_SESSION["color"];
}else{
    $bcolor = $_SESSION["color"];
}

if (isset($_POST["colorTexto"])) {
    $_SESSION["colorTexto"] = $_POST["colorTexto"];
    $fcolor = $_SESSION["colorTexto"];
}else{
    $fcolor = $_SESSION["colorTexto"];
}

if (isset($_POST["name"])) {
    $_SESSION["name"] = $_POST["name"];
    $apenom = $_SESSION["name"];
} else if (!isset($_POST["name"])) {
    $apenom = "anonimo";
}else{
    $apenom = $_SESSION["name"];
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php
    echo pintarFondo($bcolor, $fcolor);
    ?>
</head>

<body>

    <?php
    echo pintarAdvertencia();
    echo pintarTexto();
    ?>



    <form action="configsession.php" method="post">
        <label>Introduzca un color de fondo</label>
        <input type="color" name="color" id="colorFondo" value="<?php echo $bcolor ?>">
        <br>

        <label>Introduzca un color para el texto</label>
        <input type="color" name="colorTexto" id="colorTexto" value="<?php echo $fcolor ?>">
        <br>

        <label>Nombre</label>
        <input type="text" name="name" id="name" value="<?php echo $apenom ?>">
        <br>

        <button type="submit" value="enviar" id="enviar" name="enviar">Enviar</button>
    </form>

    <?php
    print_r($_POST);
    echo pintarMenu($apenom);

    ?>

</body>

</html>
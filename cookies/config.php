<?php
include "pintarMenu.php";

if (isset($_POST["color"])) {
    setcookie("colorFondo", $_POST["color"]);
    $bcolor = $_POST["color"];
} elseif (!isset($_POST["color"]) && isset($_COOKIE["colorFondo"])) {
    $bcolor = $_COOKIE["colorFondo"];
}

if (isset($_POST["colorTexto"])) {
    setcookie("colorTexto", $_POST["colorTexto"]);
    $fcolor = $_POST["colorTexto"];
} elseif (!isset($_POST["colorTexto"]) && isset($_COOKIE["colorTexto"])) {
    $fcolor = $_COOKIE["colorTexto"];
}

if (isset($_POST["name"])) {
    setcookie("nombre", $_POST["name"]);
    $apenom = $_POST["name"];
} elseif (!isset($_POST["name"]) && isset($_COOKIE["nombre"])) {
    $apenom = $_COOKIE["nombre"];
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



    <form action="config.php" method="post">
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
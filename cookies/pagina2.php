<?php
include "pintarMenu.php";

if (isset($_COOKIE["colorFondo"])) {
    $bcolor = $_COOKIE["colorFondo"];
}

if (isset($_COOKIE["colorTexto"])) {
    $fcolor = $_COOKIE["colorTexto"];
}

if (isset($_COOKIE["nombre"])) {
    $apenom = $_COOKIE["nombre"];
} else {
    $apenom = "anonimo";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
    <?php
    echo pintarFondo($bcolor, $fcolor);
    ?>
    <style>
        p {
            display: inline-flex;

        }

        nav {
            border: 1px solid black;
            ;
        }
    </style>
</head>

<body>
    <?php
    echo pintarAdvertencia();

    echo pintarTexto();

    echo pintarMenu($apenom);
    ?>


</body>

</html>
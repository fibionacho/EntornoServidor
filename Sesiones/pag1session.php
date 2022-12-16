<?php
include "pintarMenuSession.php";
session_start();

$bcolor = $_SESSION["color"];
$fcolor = $_SESSION["colorTexto"];
$apenom = $_SESSION["name"];

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

    echo pintarMenu($apenom);
    ?>


</body>

</html>
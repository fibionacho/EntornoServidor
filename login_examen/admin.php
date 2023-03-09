<?php
session_start();
if (!isset($_SESSION["id"]) || $_SESSION["grupo"]!="admin") {
    header("Location:loginEj5.php");
   
} else {
    $texto= "identificado como admin";
    ?>

<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<p>Información solo para admin</p>

<p><?=$texto?></p>

<p> Estás autentificado como <?=$_SESSION["nombre"]?> y eres del grupo <?=$_SESSION["grupo"]?> </p>
</body>
</html>
<?php

}
?>
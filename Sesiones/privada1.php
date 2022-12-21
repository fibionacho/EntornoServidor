<?php

session_start();

if (!isset($_SESSION["user"]) || $_SESSION[]) {
    header('Location: login.php?error=AreaPrivada&url=premio.php');
    exit;
}

?>
<html>

<head>
    <link rel="stylesheet" type="text/css" media="all" href="estilo.css">
</head>

<body>
    <h1>Bienvenido!!</h1>
    <?php include('menu.php') ?>
    <p>Información solo para gente autentificada</p>
</body>

</html>
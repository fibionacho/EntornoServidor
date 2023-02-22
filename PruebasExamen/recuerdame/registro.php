<?php
require("db.php");
session_start();
$errorList[]="";
$insertado=false;
if (isset($_POST["registrar"]) && isset($_POST["nombre"]) && isset($_POST["correo"])){
    //meter en variables el post y hashear psswd
    $user=$_POST["nombre"];
    $mail = $_POST["correo"];
    $pass = password_hash($_POST["passwd"],PASSWORD_DEFAULT);

    //prepar consulta
    $insert = $db-> prepare("INSERT INTO usuarios(nombre, correo, passwd) VALUES (:user, :mail, :pass)");
    $insert->bindParam(":user", $user);
    $insert->bindParam(":mail",$mail);
    $insert->bindParam(":pass", $pass);
    
    $insert->execute();
    $insertado=true;
    header("Location:iniciarAlt.php");


}else{
    $errorList ="rellene todos los campos";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!$insertado) { ?> 
    <form action="registro.php" method="post">
        Nombre: <input type="text" name="nombre" id="nombre"><br>
        Password: <input type="password" name="passwd" id="passwd"><br>
        Email <input type="email" name="correo" id="correo"><br>
        <input type="submit" name="registrar" value="Registrar">
    </form>
    <?php } else { ?>
        Usuario registrado
    <?php } ?>
</body>
</html>
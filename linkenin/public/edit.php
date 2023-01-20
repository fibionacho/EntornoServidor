<?php
require("../src/init.php");
if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] == "") {
    header("Location: login.php?redirect=edit.php");
    die();
}

if(isset($_POST["actualizar"])){

    //actualizo todos los campos escritos en este caso solo texto

    $DB->ejecuta(
        "UPDATE usuarios SET descripcion = ? WHERE id = ?",
        $_POST["descripcion"],
        $_SESSION["id"]
    );
}

//proceso de imagen
if(isset($_FILES["imagen"])){
    $nombreTmp = $_FILES["imagen"]["tmp_name"];
    $nombre = $_FILES["imagen"]["name"];
    $tipo  = $_FILES["imagen"]["type"];
    if($tipo == "image/png" || $tipo == "image/jpeg"){
        if($_FILES["imagen"]["error"]==0){
            //mover el ficher a su posicion final
            move_uploaded_file($nombreTmp, "pedirselo a alguien");
            $DB->ejecuta(
                "UPDATE usuarios SET img = ? WHERE id = ?",
                "pedirselo a alguien",
                $_SESSION["id"]
            );
        }
    }else{
        //mostrar error
    }

}




$usuario = $DB->ejecuta(
    "SELECT * FROM usuarios WHERE id = ?",
    $_SESSION["id"]
);
$usuario = $DB->obtenElDato();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aqui hay que meter el formulario para editar el perfil</h1>
    <h3>Esta es tu informacion</h3>
    <h4><?= $usuario["nombre"] ?></h4>
    <form action="" method="post" enctype="multipart/form-data">
        
    <?php if ($usuario["img"]!=""){  ?>
        <img src="<?=$usuario["img"]?>"/>

        Imagen de perfil <input type="file" name="imagen" accept="image/png, image/jpeg"> <br>
        <textarea name="descripcion" id="" cols="30" rows="10">
                 <?= $usuario["descripcion"] ?>
        </textarea>
        <input type="submit" value="Actualizar" name="actualizar">
    </form>
</body>

</html>
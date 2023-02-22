<?php

require('init.php');
require('db.php');
if (isset($_SESSION['usuario'])) {
   
    if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
        // Se ha seleccionado una imagen
        $permitidos = array("image/jpg", "image/jpeg", "image/png");
        //$max_size = 5 * 1024 * 1024; // Tamaño máximo permitido: 5MB

        if(in_array($_FILES["foto"]["type"], $permitidos) ) {
            // El archivo es válido
            $ruta_imagen = "./img/" . $_FILES["foto"]["name"];
            move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta_imagen);
            $DB->ejecuta("UPDATE usuarios SET img = ? WHERE id = ?", $ruta_imagen,  $_SESSION['id']);
          
        } else {
            // El archivo no es válido
        }
    } else {
        // No se ha seleccionado una imagen
    }
    
}else{
    header('Location: iniciarAlt.php');
}



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
   

<form action="private.php" method="post" enctype="multipart/form-data">
    <input type="file" name="foto">
    <input type="submit" value="Actualizar foto de perfil">
</form>

<img src="<?=$ruta_imagen?>" alt="" width="300px" heigth = "200px">

</body>
</html>
<?php
    require("src/init.php");
   // print_r($_GET["token"]);
    $token = $_GET["token"];

    $db->ejecuta("SELECT * FROM auth_tokens WHERE token =?;",
        $token);

    $consulta = $db->obtenElDato();

   // print_r($consulta);

    $id_user = $consulta["id_user"];

   $db->ejecuta("SELECT * FROM usuarios WHERE id = ?;",
        $id_user);

    $user = $db->obtenElDato();
    $valorActivo=1;

    if($user["activo"]==0){
        $db->ejecuta("UPDATE usuarios SET activo=? WHERE id =?",
        $valorActivo, $user["id"]);
    }

    $db->ejecuta("DELETE  FROM auth_tokens WHERE token =?;",
    $token);
    //print_r($user);
    $_SESSION["id"]=$user["id"];
    $_SESSION["email"]=$user["email"];

    if(isset($_SESSION["id"])){
        header("Location: privado.php");
        die();
    }else{
        header("Location:publico.php");
        die();
    }
   
 

?>
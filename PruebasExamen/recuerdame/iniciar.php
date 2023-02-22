<?php
//require("db.php");
require("init.php");

//La función para evitar ataques
function clean_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST["login"])){
    $nombre = $_POST["nombre"];
    $passwd = $_POST["passwd"];
    $recuerdame = $_POST["recuerdame"];

    //consultamos

    $consulta = $db->prepare("SELECT id, nombre, passwd FROM usuarios WHERE nombre=:nombre");
    $consulta->bindParam(":nombre", $nombre);
   $user= $consulta->execute();
   print_r($user);

  //$DB->ejecuta("SELECT * FROM usuarios WHERE nombre = ?", $nombre);

    // solo quiero la primera instancia
   // $data = $db->obtenPrimeraInstancia();

    //$data = $consulta->obtenPrimeraInstancia();
    if(!empty($user) && password_verify($passwd  ,$user["passwd"])){
        $_SESSION['usuario'] = $user['nombre'];
        $_SESSION['id'] $insert = $db-> prepare("INSERT INTO usuarios(nombre, correo, passwd) VALUES (:user, :mail, :pass)");
        $insert->bindParam(":user", $user);
        $insert->bindParam(":mail",$mail);
        $insert->bindParam(":pass", $pass); = $user['id'];

        if(isset($_POST["recuerdame"]) && $_POST["recuerdame"]=="on"){
            //generamos token
            $token = bin2hex(openssl_random_pseudo_bytes(LONG_TOKEN));
            //GUARDAR TOKEN
            $DB->ejecuta(
                "INSERT INTO tokens VALUES( id_usuario, valor) VALUES(?, ?)",
                $_SESSION["id"],
                $token
            );
             //cookie con token
             setcookie(
                "recuerdame",
                $token,
                [
                    "expires"=>time() + 7*24*60*60,
                    //"secure"=>true,
                    "httponly"=>true
                ]
            );
        }
        header("Location:index.php");
    } else{
        echo "Mostrar error";
    }
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
<form action="" method="post">
        User: <input type="text" name="nombre" id="">

        Pass: <input type="password" name="passwd" id="">

        Recuerdame: <input type="checkbox" name="recuerdame" id="">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
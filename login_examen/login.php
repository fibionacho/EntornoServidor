<?php
require("db.php");
session_start();

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errorlist="";

if (isset($_POST["submit"])) {
    if (isset($_POST["login"])) {
        $login = $_POST["login"];
        $password = $_POST["password"];
        $consulta = $db->prepare("SELECT * FROM usuarios WHERE nombre = :nombre LIMIT 1");
        $consulta->bindParam(":nombre", $login);
       // $consulta->bindParam(":secreto",$password);
        $consulta->execute();
        $usuario = $consulta->fetch();
      print_r($usuario);
        if(isset($usuario) && ($usuario["nombre"]==$login)){
          if(password_verify( $password,$usuario["secreto"])){
              $_SESSION["id"]=$usuario["id"];
             // $errorlist="todobien";
              header("Location:privado.php");
          }else{
            $errorlist="contraseña erronea";
          }
        }else{
          $errorlist="Usuario no encontrado";
        }

    }
}
?>




<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<form action="login.php" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?=$login?>">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <p>
        <div class="error"><?=$errorlist?></div>
    </p>

    <p class="login-submit">
      <label for="submit">&nbsp;</label>
      <button type="submit" name="submit" class="login-button">Login</button>
    </p>
</form>
</body>
</html>
<?php

require('init.php');
require('db.php');
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$usuario = '';
$passwd = '';

if(isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $passwd = $_POST['passwd'];
    $recuerdame = $_POST['recuerdame'] ?? null;

    $DB->ejecuta("SELECT * FROM usuarios WHERE nombre = ?", $usuario);

    // solo quiero la primera instancia
    $data = $DB->obtenPrimeraInstancia();

    // echo password_verify($passwd, $data['passwd']);
    // print_r($data);
    
    if(!empty($data) && password_verify($passwd,$data['passwd'])) {
        $_SESSION['usuario'] = $data['nombre'];
        $_SESSION['id'] = $data['id'];

        if(isset($recuerdame) && $recuerdame == 'on') {
            //generar token
            $token = bin2hex(openssl_random_pseudo_bytes(LONG_TOKEN));
            //GUARDAR TOKEN
           /* $DB->ejecuta(
                "INSERT INTO tokens VALUES( :id_usuario, :valor) VALUES(?, ?)",
                $_SESSION["id"],
                $token
            );*/

            $insert = $db ->prepare("INSERT INTO tokens (id_usuario, valor) VALUES( :id_usuario, :valor)");
            $insert->bindParam("id_usuario", $_SESSION["id"]);
            $insert->bindParam(":valor", $token);
            $insert->execute();
            setcookie("recuerdame", $token, [
                "expires" => time() + (7 * 24 * 60 * 60),
                // "secure" => true,c
                "httponly" => true
            ]);
        }

        header('Location: registro.php');
    }
}

// css
ob_start();
?>
<!-- etiquetas css -->
<?php
$css = ob_get_clean();

// scripts
ob_start();
?>
<!-- etiquetas script att defer -->
<?php
$scripts = ob_get_clean();

// avisos
ob_start();
?>
<!-- avisos -->
<?php
$avisos = ob_get_clean();

// titulo
$tituloPagina = "";

// contenido
ob_start();
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
<form class="formulario container-lg d-flex flex-column mx-auto" method="POST" action="">
    <h2 class="mb-3">Inicio de sesión</h2>

    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="usuario" id="usuario" value="<?= $usuario ?>" placeholder="" autofocus required>
        <label class="" for="usuario">Usuario:</label>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" type="password" name="passwd" id="passwd" value="<?= $passwd ?>" placeholder="" required>
        <label class="form-label" for="passwd">Constraseña:</label>
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="recuerdame" id="recuerdame">
        <label class="form-check-label" for="recuerdame">Recuerdame</label>
    </div>

    <a href="./recuperar.php" class="mb-3">¿Has olvidado la contraseña?</a>

    <input class="btn btn-primary" type="submit" name="submit" value="Log in">

    <?php if (isset($_SESSION['usuario']) && !$verificado) : ?>
        <div class="alert alert-warning" role="alert">
            Por favor verifique su cuenta, se le ha enviado un correo. <a href="verificar.php?reenviar" rel="noopener noreferrer">Reenviar correo</a>
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'verify') : ?>
        <div class="alert alert-danger" role="alert">
            No se ha podido verificar su cuenta de correo.
        </div>
    <?php endif; ?>

</form>

</body>
</html>

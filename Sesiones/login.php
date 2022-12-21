<?php
session_start();

function clean_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$login = "";
$password = "";
$errorList = [];


if (isset($_POST["submit"])) {
  if (isset($_POST["login"])) {
    $login = clean_input($_POST["login"]);
  }

  if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
    $errorList[] = "Usuario inválido";
    //http://php.net/manual/es/filter.filters.php
  }


  if (isset($_POST["password"])) {
    $password = clean_input($_POST["password"]);
  }


  /**try catch toda la consulta */

  try {
    //code...
  } catch (PDOException $e) {
    print "Error: " . $e->getMessage() . "\n";
    die();
  }

  //$mbd = new PDO('mysql:host=localhost;dbname=usuarios', "root", "");

  // $sql="SELECT * FROM usuarios WHERE user = ? AND password=?";
  // Consulta preparada!
  // Traed registro de usuario con ese email
  // Haced un hash de la contraseña
  // Comparad hash con hash

  if ($login == "asd@asd.es" && $password == "1234") {
    $_SESSION["user"] = $login;
    if (isset($_GET["url"])) {
      header('Location: ' . $_GET["url"]);
    } else {
      header('Location: premio.php');
    }
    exit;
  } else {
    $errorList[] = "Clave errónea";
  }
}


if (isset($_GET["error"])) {
  $errorList[] = $_GET["error"];
}

?>
<html>

<head>
  <link rel="stylesheet" type="text/css" media="all" href="estilo.css">
</head>

<body>
  <form action="login.php" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?= $login ?>">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <?php if (count($errorList) > 0) { ?>
      <p>
        <?php foreach ($errorList as $error) { ?>
      <div class="error"><?= $error ?></div>
    <?php } ?>
    </p>
  <?php } ?>

  <p class="login-submit">
    <label for="submit">&nbsp;</label>
    <button type="submit" name="submit" class="login-button">Login</button>
  </p>
  </form>
</body>

</html>


<!---
<script>alert(document.cookie);</script>
"<script>alert(document.cookie);</script>
"><script>alert(document.cookie);</script>
--->
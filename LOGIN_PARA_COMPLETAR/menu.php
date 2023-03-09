<?php 
  require("src/init.php");

  if(isset($_SESSION["email"])){
    $correo= $_SESSION["email"];
  }else{
    $correo ="anónimo";
  }

?>




<div class="menu">
  <h2>BIENVENIDO <?=$correo?></h2>
  <a href="privado.php">privado</a>
  <a href="publico.php">público</a>
  <a href="logout.php">cerrar sesión</a>
</div>

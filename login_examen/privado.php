<?php
session_start();
if(!isset($_SESSION["nombre"])&& !isset($_SESSION["grupo"])){
  header("Location:loginEj5.php");

}else{
  if($_SESSION["grupo"]!="admin"){
    $texto = "Estas autentificado";
  }else{
    $texto = "Estas autentificado como admin";
  }
  ?>



<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<p>Información solo para gente autentificada</p>
<p><?=$texto?></p>

<p> Estás autentificado como <?=$_SESSION["nombre"]?> y eres del grupo <?=$_SESSION["grupo"]?> </p>

</body>
</html>
<?php
}


?>
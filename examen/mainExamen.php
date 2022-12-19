<?php
namespace Ejercicios;


spl_autoload_register(function ($class) {
    $classPath = "../";
    $file = str_replace('\\', '/', $class);
    require("$classPath${file}.php");
});


  $exFacil = new ExamenFacil();
  print_r($exFacil->obtenerNota());
  $exFacil->setFecha("30/11/2022");
  echo "<br>";
  print_r($exFacil->getFecha());
  echo "<br>";





   $exChungo= new ExamenChungo();
   print_r($exChungo->obtenerNota());
   $exChungo->setFecha("1/12/2022");
   echo "<br>";
   print_r($exChungo->getFecha());
   echo "<br>";


    $exHP= new ExamenHP();
    print_r( $exHP->obtenerNota());
    $exHP->setFecha("2/12/2022");
    echo "<br>";
    print_r($exHP->getFecha());
    echo "<br>";
   

?>
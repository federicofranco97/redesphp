<?php
$nombre = $_POST["InputName"];
$clave = $_POST["InputPassword"];
$objForm = new stdclass; 
      $objForm -> Nombre = $nombre;
      $objForm -> Clave = $clave;
      
      $JsonObj = Json_encode($objForm);
      echo $JsonObj;
?>
<?php
$nombre = $_POST["NombreInput"];
$nacimiento = $_POST["NacimientoInput"];
$saldo = $_POST["SaldoInput"];
sleep(2);
$objForm = new stdclass; 
      $objForm -> Nombre = $nombre;
      $objForm -> Nacimiento = $nacimiento;
      $objForm -> Saldo = $saldo;
      $JsonObj = Json_encode($objForm);
      echo $JsonObj;
?>
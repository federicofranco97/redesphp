<?php
    $NroMesa = $_POST["NroMesa"];
    $CantPersonas = $_POST["CantPersonas"];
    $DescripcionMesa = $_POST["DescripcionMesa"];
    $NombreMozo = $_POST["NombreMozo"];
    $NroPuntoVenta = $_POST["NroPuntoVenta"];

    $Valores = "descripcionmesa=' ".$DescripcionMesa ."' ,cantpersonas= ".$CantPersonas." ,nombremozo='".$NombreMozo ."', nropuntoventa=".$NroPuntoVenta;

    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "update mesa set ".$Valores ." where nromesa=".$NroMesa;
    $resultado = $mysqli->query($query); 
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
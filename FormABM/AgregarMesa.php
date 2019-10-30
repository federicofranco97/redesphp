<?php
    $CantPersonas = $_POST["CantPersonas"];
    $DescripcionMesa = $_POST["DescripcionMesa"];
    $NombreMozo = $_POST["NombreMozo"];
    $NroPuntoVenta = $_POST["NroPuntoVenta"];

    $Valores = "(" .$CantPersonas .",'".$DescripcionMesa."','".$NombreMozo."',".$NroPuntoVenta.")";

    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "insert into mesa (CantPersonas,DescripcionMesa,NombreMozo,NroPuntoVenta) values ".$Valores;
    $resultado = $mysqli->query($query); 
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
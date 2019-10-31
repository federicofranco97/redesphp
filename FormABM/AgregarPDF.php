<?php
    $NroMesa = $_POST["NroMesa"];
    $PDF = $_POST["PDF"];

    $Valores = "PDFMesa=' ".$PDF;

    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "update mesa set ".$Valores ." where nromesa=".$NroMesa;
    $resultado = $mysqli->query($query); 
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
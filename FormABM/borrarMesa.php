<?php
    $NroMesa =  $_POST["NroMesa"];
    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "delete mesa where nromesa= ".$NroMesa;
    $resultado = $mysqli->query($query);
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
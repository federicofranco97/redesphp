<?php
    session_start();
    if(!isset($_SESSION['Tsession'])){
        header('Location:./login.html');
        exit;
    }
    $NroMesa =  $_POST["NroMesa"];
    include("BaseDatos.inc");
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $query = "delete from mesa where nromesa= ".$NroMesa;
    $resultado = $mysqli->query($query);
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
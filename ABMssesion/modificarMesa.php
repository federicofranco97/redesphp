<?php
    session_start();
    if(!isset($_SESSION['session'])){
        header('Location:../ABMssesion/login.php');
        exit;
    }
    $NroMesa = $_POST["NroMesa"];
    $CantPersonas = $_POST["CantPersonas"];
    $DescripcionMesa = $_POST["DescripcionMesa"];
    $NombreMozo = $_POST["NombreMozo"];
    $NroPuntoVenta = $_POST["NroPuntoVenta"];

    $Valores = "descripcionmesa=' ".$DescripcionMesa ."' ,cantpersonas= ".$CantPersonas." ,nombremozo='".$NombreMozo ."', nropuntoventa=".$NroPuntoVenta;

    include("BaseDatos.inc");
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $query = "update mesa set ".$Valores ." where nromesa=".$NroMesa;
    $resultado = $mysqli->query($query); 
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
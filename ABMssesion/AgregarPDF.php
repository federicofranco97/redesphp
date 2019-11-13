<?php
    session_start();
    if(!isset($_SESSION['session'])){
        header('Location:../ABMssesion/login.php');
        exit;
    }
    $NroMesa = $_POST["NroMesa"];
    $archivoPDF = file_get_contents($_FILES["archivoPDF"]["tmp_name"]);
    $mysqli = new mysqli("localhost","root","","ubd1");
    $long =000000;
    $query = "update mesa set PDFMesa= ".$archivoPDF ." where nromesa=".$NroMesa;
    $resultado = $mysqli->query($query); 
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
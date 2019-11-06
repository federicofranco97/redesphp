<?php
    session_start();
    if(!isset($_SESSION['session'])){
        header('Location:../ABMssesion/login.php');
        exit;
    }
    $NroMesa = $_POST["NroMesa"];
    $PDF = $_POST["archivoPDF"];
    $archivoPDF = file_get_contents($_FILES["archivoPDF"]["tmp_name"]);
    $Valores = "PDFMesa= ".$archivoPDF;

    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "update mesa set ".$Valores ." where nromesa=".$NroMesa;
    $resultado = $mysqli->query($query); 
    $JsonObj = Json_encode($resultado);
    echo $JsonObj;
?>
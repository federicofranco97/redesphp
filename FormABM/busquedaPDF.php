<?php
    $NroMesa = $_POST["NroMesa"];
    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "select pdfmesa from mesa where nromesa= ".$NroMesa;
    $resultado = $mysqli->query($query);
    $objSql = new stdclass;   
    while($fila = $resultado->fetch_assoc()){
        $objSql-> PDF = base64_encode($fila["pdfmesa"]);
    }
    $JsonObj = Json_encode($objSql);
    echo $JsonObj;
?>
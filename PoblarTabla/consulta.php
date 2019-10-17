<?php
    $consulta = $_POST["OrderBy"];
    $objSql = new stdclass; 
    $objSql -> Orden = $consulta;
    $JsonObj = Json_encode($objSql);
    sleep(3);
    echo $JsonObj;
?>
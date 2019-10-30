<?php
    $CantPersonas = $_POST["CantPersonas"];
    $DescripcionMesa = $_POST["DescripcionMesa"];
    $NombreMozo = $_POST["NombreMozo"];
    $NroPuntoVenta = $_POST["NroPuntoVenta"];

    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "select * from empleado order by NombreUsuario";
    $resultado = $mysqli->query($query);
    $CantidadRegistros = $resultado->num_rows;  
    $almacenSql = [];
    while($fila = $resultado->fetch_assoc()){
        $objSql = new stdclass;   
        $objSql-> NombreUsuario = $fila["NombreUsuario"];
        array_push($almacenSql,$objSql);
    }
    $JsonObj = Json_encode($almacenSql);
    echo $JsonObj;
?>
<?php
    $orden = $_POST["OrderBy"];
    if($orden == ""){
        $orden="NroMesa";
    }
    $mysqli = new mysqli("localhost","root","","ubd1");
    $query = "select * from mesa order by ".$orden;
    $resultado = $mysqli->query($query);
    $CantidadRegistros = $resultado->num_rows;  
    $almacenSql = [];
    while($fila = $resultado->fetch_assoc()){
        $objSql = new stdclass;   
        $objSql-> NroMesa = $fila["NroMesa"];
        $objSql-> CantPersonas = $fila["CantPersonas"];
        $objSql-> DescripcionMesa = $fila["DescripcionMesa"];
        $objSql-> TotalMesa = $fila["TotalMesa"];
        $objSql-> NombreMozo = $fila["NombreMozo"];
        $objSql-> NroPuntoVenta = $fila["NroPuntoVenta"];
        $objSql-> FotoMEsa = $fila["TotalMesa"];
        array_push($almacenSql,$objSql); 
    }
    $JsonObj = Json_encode($almacenSql);
    echo $JsonObj;
?>
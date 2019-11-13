<?php
    session_start();
    if(!isset($_SESSION['Tsession'])){
        header('Location:./login.html');
        exit;
    }
    $orden = $_POST["OrderBy"];
    if($orden == ""){
        $orden="NroMesa";
    }
    sleep(1);
    include("BaseDatos.inc");
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
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
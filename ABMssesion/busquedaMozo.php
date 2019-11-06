<?php
    session_start();
    if(!isset($_SESSION['session'])){
        header('Location:../ABMssesion/login.php');
        exit;
    }
    sleep(3);
    $empleado = $_POST["NombreEmpleado"];
    include("BaseDatos.inc");
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $query = "select * from mesa where nombremozo='".$empleado ."'";
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
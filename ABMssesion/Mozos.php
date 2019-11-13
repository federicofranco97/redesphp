<?php
session_start();
if(!isset($_SESSION['session'])){
header('Location:./login.html');
exit;
}
    include("BaseDatos.inc");
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
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
<?php
    $orden = $_POST["OrderBy"];
    sleep(3);
    $mysqli = new mysqli("localhost","ubd1","invitado1","ubd1");
    $query = "select * from empleado order by ".$orden;
    $resultado = $mysqli->query($query);
    $CantidadRegistros = $resultado->num_rows;  
    $almacenSql = [];
    while($fila = $resultado->fetch_assoc()){
        $objSql = new stdclass;   
        $objSql-> IdUsuario = $fila["IdUsuario"];
        $objSql-> NombreUsuario = $fila["NombreUsuario"];
        $objSql-> LoginUsuario = $fila["LoginUsuario"];
        $objSql-> PasswordUsuario = $fila["PasswordUsuario"];
        array_push($almacenSql,$objSql);
    }
    $JsonObj = Json_encode($almacenSql);
    echo $JsonObj;
?>
<?php
    $User = $_POST["User"];
    $Password = $_POST["Password"];
    $EncPassword = sha1($Password);
    include("BaseDatos.inc");
    $mysqli = new mysqli(SERVER,USUARIO,PASS,BASE);
    $query = "select passwordusuario from empleado where loginusuario = '".$User."'";
    $resultado = $mysqli->query($query);
   
    while($fila = $resultado->fetch_assoc()){
        $claveResultado = $fila["passwordusuario"];
    } 
    if($claveResultado == $EncPassword){
        $JsonObj = Json_encode(true);   
        session_start();
        $_SESSION['Tsession'] = session_id(); 
        header("Location:./index.php");
        exit;
    }   
    else{
        $JsonObj = Json_encode(false);      
        header('Location:./login.html');
        exit; 
    }
   
    echo $JsonObj;
?>
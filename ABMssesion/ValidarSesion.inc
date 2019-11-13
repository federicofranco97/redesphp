<?php
session_start();
if(!isset($_SESSION['Tsession'])){
    header('Location:../ABMssesion/login.php');
    exit;
}
?>
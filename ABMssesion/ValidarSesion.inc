<?php
session_start();
if(!isset($_SESSION['session'])){
    header('Location:../ABMssesion/login.php');
    exit;
}
?>
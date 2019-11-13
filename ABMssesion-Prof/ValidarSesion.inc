<?php
session_start();
if(!isset($_SESSION['Tsession'])){
    header('Location:./login.php');
    exit;
}
?>
<?php
include("./ValidarSesion.inc");
session_unset();
session_destroy();
header('Location:../ABMssesion/login.html');
?>
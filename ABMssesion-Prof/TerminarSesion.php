<?php
include("./ValidarSesion.inc");
session_unset();
session_destroy();
header('Location:./login.html');
?>
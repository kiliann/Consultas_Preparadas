<?php

require_once "selecionDeDatos.php";

$selecion = new SelecionDeDatos();



$selecion->iniciarSesion($_POST['correo'], $_POST['pass']);

echo "Acabas de inicar sesion ".$_SESSION['usuario'];

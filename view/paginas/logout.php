<?php
//elimina la sesion del usuario cuando presiona salir en la parte inferior
//del menu 
session_start();
unset($_SESSION['usuario']);
session_destroy();
//refresca la pagina para verificar el resultado y redirecciona
header("Refresh: 2; url = login.php");
echo 'Saliendo.....';
?>
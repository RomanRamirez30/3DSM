<?php
$conexion=new mysqli("localhost","root","","web","3306");
$conexion->set_charset("utf8"); /* Para que el navegador puede reconoce los caracteres especiales*/

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>




<?php
session_start();

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from usuario where usuario='$usuario' and clave='$clave' ");
        if($datos=$sql->fetch_object()) {
            $_SESSION["id_user"]=$datos->id_user;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["apellidos"]=$datos->apellidos;
            header("location:menu.php");
        
    } else {       
echo '<div class="alert alert-primary"><h5> LOS CAMPOS ESTAN VACIOS</h5></div>';
    }
} else {
echo '<div class="alert alert-success"><h4>ACCESO DENEGADO</h4></div>';
}
    }

?>
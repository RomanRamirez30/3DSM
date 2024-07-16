<?php
if(!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from persona where id_per=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Datos de Persona Eliminado</div>';
   }else{
    echo'<div class="alert alert-danger"> Datos no eliminado</div>';
   }
}
?>

<?php
session_start();
if(empty($_SESSION["id_user"])) {
header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>
 <script>
    function eliminar(){
        var respuesta=confirm("Estas seguro que deseas eliminar?");
        return respuesta
    }
    </script>
<body>
    <h2 class="text-center p-3" style="color: #000080";> Mostrar Datos de Personas</h2>
    <?php
        include ("conexion.php");
        include("eliminar.php");
        ?>
    <div class="container-fluifd row">
          <form class="col-4 p-3" method="POST" class="text-center p-3">
            <h3 class="text-center text-dark">Registro de Persona</h3>
            <?php
        include ("conexion.php");
        include ("registro.php");
            ?>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
    <input type="text" class="form-control" name="nombre">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
    <input type="text" class="form-control" name="apellido">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="dni">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha_nac">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo">
</div>
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
<a href="menu.php" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square">Regresar al menu</i></a> 
<a href="cerrar_sesion.php" class="btn btn-small btn-Dark"><i class="fa-solid fa-pen-to-square">Exit</i></a>   
</form> 
    <div class="col-8 p-4">
           <table class="table">      
  <thead class="bg-info">
    <tr> 
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DNI</th>
      <th scope="col">FECHA_NAC</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
include ("conexion.php");
$sql = $conexion->query("select * from persona ");
while ($datos = $sql->fetch_object()) {?>
    <tr>
        <td><?=$datos->id_per ?></td>
        <td><?=$datos->nombre ?></td>
        <td><?=$datos->apellido ?></td>
        <td><?=$datos->dni ?></td>
        <td><?=$datos->fecha_nac ?></td>
        <td><?=$datos->correo ?></td>
              <td>
              <a href="modificar.php?id=<?=$datos->id_per?>">Editar</a>
              <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_per ?>">Eliminar</a>
              <a href="" class="bnt btn-small btn-warning"><i class="fa-solid fa-pen-to-to-square"></i></a>
              <a href="" class="bnt btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  <?php }
    ?>
  <tbody>
</div>
</div>
<!-- javaScript bunde with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></>
</body>
</html>


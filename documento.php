<!DOCTYPE html>
<?php
  include ("conexion.php");
if (isset($_POST['subir'])) {
     $titulo =$_POST['titulo'];
    $archivo = $_FILES['archivo']['name'];
     $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $archivo;
    if ($titulo!= "") {
        if (copy($ruta, $destino)) { 
            $db=new mysqli();
            $sql = "INSERT INTO documento(titulo,
            archivo) VALUES('$titulo','$archivo')";
             $query = $conexion->query($sql);
            if($query){
                ?>
                <script type="text/javascript">
                alert("Archivo subido Correctamente");
              window.location.href='mostrar_archivo.php';
               </script>
               <?php  }
            } else {
            echo "Error";
        }
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Archivos</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<h1 align="center">Universidad Tecnológica de la Selva sede Rayón</h1>
                         </h3><br><hr/>
        <div style="width: 500px;margin: auto;border: 1px padding: 30px;">
            <h4>Registro de Archivos</h4>
             <form method="post" action="" enctype="multipart/form-data">
            <table>                  
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><textarea name="titulo" placeholder="Registrar Titulo"   required=""></textarea></td>
                    </tr>
                    <tr>
                   <td>
                        <label>Archivo PDF: </label>
                        <td colspan="2"><input type="file" name="archivo" required="">
                   </td>
                   <tr>
                    <td><br><input  class='btn btn-success' type="submit" value="Subir Archivo" name="subir"></td>
                    </tr>
                </table>
            </form>    
        </div>
        <hr/>
    </body>
</html>

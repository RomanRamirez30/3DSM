
<?php
session_start();
if(empty($_SESSION["id_user"])) {
	header("location: login.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Menu</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light fixed-top">
    <ul class="nav nav-pills">
    <div class="nav-link p-2" style="color: white;">
    <?php
			echo $_SESSION["nombre"]." ". $_SESSION["apellidos"];
			?>
      </div>
      <li class="nav-item">
        <a class="nav-link p-2" style="color: white;"  href="index.php"><font style="vertical-align: inherit;" >Registrar Personas</font></a>
      </li>

      <div class="btn-group">
  <button class="nav-link p-2" style="color: white;" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
  <font style="vertical-align: inherit;" >Archivo</font>
  </button>
  <ul class="dropdown-menu" >
  <li class="nav-item navbar navbar-dark bg-dark">
        <a class="nav-link p-2" style="color: white;"  href="documento.php"><font style="vertical-align: inherit;">Subir Archivo</font></a>
      </li>
      <li class="nav-item navbar navbar-dark bg-dark">
        <a class="nav-link p-2" style="color: white;" href="mostrar_archivo.php"><font style="vertical-align: inherit;">Mostrar archivo</font></a>
      </li>
  </ul>
</div>


      <li class="nav-item">
        <a class="nav-link p-2" style="color: white;" href="cerrar_sesion.php"><font style=" right: inherit;;"><font style="right: inherit;">Salir</font></font></a>
      </li>

       </ul>
    </nav>
       <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/maestria.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/uts.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/utselva.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css"> 
    <link rel="stylesheet" href="css/fontawesome.min.css"> 
 
   <title>Inicio de sesión</title>
</head>

<script>
function solonumeros(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key);
numeros="0123456789";
especiales="8-37-38-46$%&#!&?¿?='or--";//array
teclado_especial=false;
for(var i in especiales){
if(key==especiales[i]){
teclado_especial=true;
}
}
if(numeros.indexOf(teclado)==-1 && !teclado_especial){
  return false;
}
}

</script>

<script>
function sololetras(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key).toLowerCase();
letras=" abcdefghijklmnñopqrstuvwxyz";
especiales="8-37-38-46$%&#!&?¿?='or--";//array
teclado_especial=false;
for(var i in especiales){
if(key==especiales[i]){
teclado_especial=true;break;
}
}
if(letras.indexOf(teclado)==-1 && !teclado_especial){
  return false;
}
}
</script>


<body style="background-color:;"><br>
   <div class="container"> 
       <h2 style="color: #000080";> Página web Profesional<h2>
      <div class="img">
      </div>
      <div class="login-content">
         <form method="post" action=""> <!--si ponemos get en metodo nos nmuestra los datos de los usarios, por eso se recomienda poner post -->
       
         <img src="img/Roman.JPEG">
            <h1 class="title">BIENVENIDO</h1>
            <?php
            include("conexion.php");
            include("controlador.php");
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario" onkeypress="return sololetras(event)" onpaste="return false">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password" onkeypress="return solonumeros(event)" onpaste="return false">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
            <br><h5><FONT COLOR="Blue">Ing. Román Ramírez Ruiz</font></h5>
         </form>
      </div>
   </div>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>

</body>

</html>
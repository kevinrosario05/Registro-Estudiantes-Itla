<?php
include 'validar.php';


if(isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Carrera'])){
  session_start();
 
$_SESSION['Estudiantes'] = isset($_SESSION['Estudiantes'])? $_SESSION['Estudiantes']: array();
$Estudiantes = $_SESSION['Estudiantes'];
$ID = 1;
   
if(!empty($Estudiantes)){
 $lastElement = obtenerElemento($Estudiantes);
$ID = $lastElement['id'] + 1;
}


array_push($Estudiantes,['id'=> $ID,'Nombre'=>$_POST['Nombre'],'Apellido'=>$_POST['Apellido'],'Carrera'=>$_POST['Carrera']]);
$_SESSION['Estudiantes'] = $Estudiantes;
 
  


  header("location: index.php");
  exit();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiante</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
   

</head>
<body>


  <div class="posicion">
    <nav class="bg-primary">
        <input type="checkbox" id="check">
        <label for="check" class="btncheck">
          <i class="fas fa-bars"></i>
</label>
    <label class="lo"> Registrar Estudiante</label>
    <ul>
    <li><a class="mover" href="index.php"> Ver Estudiantes</a></li>
    </ul>
    </nav>
</div>
 <div id="fotos">
    <img class="fo" src="imagenes/itla.jpg"> 
</div> 

<div class="forqm" >
<form class="mover" action="index2.php" method="POST">
 
<div class="form-group">
    <label for="exampleInputNombre">Nombre</label>
    <input  type="Text" name="Nombre" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputNombre">Apellido</label>
    <input name="Apellido" type="Text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputNombre">Carrera</label>
    <input name="Carrera" type="Text" class="form-control" id="exampleInputPassword1">
    <p class="mensaje" style="color:#ff3333"> *Escribir Nombre de la carrera en con la inicial Mayuscula. Ejemplo: "Seguridad"</p>
  </div>
  

  <input class="btn btn-primary" type="submit" name="submit">
  
</form>
</div>

</div>

<script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
</body>
</html>
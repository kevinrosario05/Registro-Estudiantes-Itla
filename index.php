<?php
include 'validar.php';

session_start();

$_SESSION['Estudiantes'] = isset($_SESSION['Estudiantes'])? $_SESSION['Estudiantes']: array();
$listaEstudiantes = $_SESSION['Estudiantes'];

if(!empty($listaEstudiantes)){
    if(isset($_GET['Carrera'])){
        $listaEstudiantes = buscar($listaEstudiantes,'Carrera',$_GET['Carrera']);
          
    }
   
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Estudiantes Registrados </title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <script src="validar.js"></script>

</head>
<body>

<div>
    <nav class="bg-primary">
        <input type="checkbox" id="check">
        <label for="check" class="btncheck">
          <i class="fas fa-bars"></i>
</label>
    <label class="lo"> Lista de Estudiantes</label>
    <ul>
    <li><a class="mover" href="index2.php#"> Registrar Estudiante</a></li>
    </ul>
    <div class="mune col-md-2">

<div class=" btn-group">
    <a href="index.php?Carrera=Software" class="btn btn-primary">Software</a>
    <a href="index.php?Carrera=Redes" class="btn btn-primary">Redes</a>
    <a href="index.php?Carrera=Multimedia" class="btn btn-primary">Multimedia</a>
    <a href="index.php?Carrera=Seguridad" class="btn btn-primary">Seguridad</a>
    <a href="index.php?Carrera=Mecatronica" class="btn btn-primary">Mecatronica</a>
    <a href="index.php" class="btn btn-primary">Todos</a>
</div>
</div>
  </nav>
 

  <div class="container m-md-4">
  
<div >

    <?php if(empty($listaEstudiantes)):  ?>
       <h2> No hay Estudiantes Registrados</h2>
    <?php else: ?>
       
      


        <?php foreach($listaEstudiantes as $Estudiantes):?>
           
<ul class="list-group">
  <li class="list-group-item list-group-item-dark"><?php echo $Estudiantes['Nombre']?></li>
  <li class="list-group-item"><?php echo $Estudiantes['Apellido']?></li>
  <li class="list-group-item"><?php echo $Estudiantes['Carrera']?></li>
  <li class="list-group-item"><?php echo 'status:'.' Activo'?></li>
  <li class="list-group-item"><a href="editar.php? id= <?php echo $Estudiantes['id'];?>">Editar</a></li>
  <li class="list-group-item"><a href="delete.php? id= <?php echo $Estudiantes['id'];?>">Eliminar </a></li>
</ul>

        <?php endforeach; ?>
    <?php endif; ?>
  

</div>

</div>
</div>



    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
</body>
</html>
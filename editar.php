
<?php
include 'validar.php';






if(isset($_GET['id'])){
    session_start();

    $ID = $_GET['id'];
    
 
        $_SESSION['Estudiantes'] = isset($_SESSION['Estudiantes'])? $_SESSION['Estudiantes']: array();
        $Estudiantes = $_SESSION['Estudiantes'];
        $Element = buscar($Estudiantes,'id',$ID)[0];
        $elementindex =obtenerIndex($Estudiantes,'id',$ID);

    if(isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Carrera'])){
        

     
       
        
        
        $editado = ['id'=> $ID,'Nombre'=>$_POST['Nombre'],'Apellido'=>$_POST['Apellido'],'Carrera'=>$_POST['Carrera']];
      $Estudiantes[$elementindex] = $editado;
      
        $_SESSION['Estudiantes'] = $Estudiantes;
         
          
        
        
          header("location: index.php");
          exit();
        
        }


}
else{
    header("location: index.php");
    exit();
}




?>

<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
</head>
<body>
<div class="forqm" >
<form class="mover" action="editar.php?id=<?php echo $Element['id'] ?>" method="POST">
 
<div class="form-group">
    <label for="exampleInputNombre">Nombre</label>
    <input  type="Text" value="<?php echo $Element['Nombre']?>" name="Nombre" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputNombre">Apellido</label>
    <input name="Apellido" type="Text" value="<?php echo $Element['Apellido']?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputNombre">Carrera</label>
    <input name="Carrera" type="Text" value="<?php echo $Element['Carrera']?>" class="form-control" id="exampleInputPassword1">
  </div>


  <!-- <div class="form-check">
  <input class="form-check-input" value="yes" type="radio" name="Status" id="exampleRadios1" value="option1" >
  <label class="form-check-label" for="exampleRadios1">
    Activo
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" value="no" type="radio" name="Status" id="exampleRadios1" value="option">
  <label class="form-check-label" for="exampleRadios1">
    Inactivo
  </label>
</div> -->

  

  <input class="btn btn-primary" type="submit" name="submit">
  
</form>
</div>
<script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>

</body>
</html>



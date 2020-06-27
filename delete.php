<?php

include 'validar.php';

session_start();
$listEstudiantes = $_SESSION['Estudiantes'];
if(isset($_GET['id'])){

    $ID = $_GET['id'];
    $elindex = obtenerIndex($listEstudiantes,'id',$ID);
    unset($listEstudiantes[$elindex]);
    $_SESSION['Estudiantes'] = $listEstudiantes;

}
header("location: index.php");
exit();
?>
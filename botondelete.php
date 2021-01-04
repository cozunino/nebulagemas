<?php

include 'conexionbd.php';


$id = mysqli_real_escape_string($conexion,$_GET['id']);

$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
$precio = mysqli_real_escape_string($conexion,$_POST['precio']);

$consultasql = "DELETE FROM productos WHERE id='$id'";

$query = mysqli_query($conexion,$consultasql);

/*$num_filas = mysqli_num_rows($query);*/

if($query){
    header('location: consultas.php');
   
}
else{
    
    echo 'algo salio mal';
}   


?>


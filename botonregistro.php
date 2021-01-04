<?php

include 'conexionbd.php';

$id = mysqli_real_escape_string($conexion,$_POST['id']);
$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
$precio = mysqli_real_escape_string($conexion,$_POST['precio']);

$insertar = "INSERT INTO productos (id,nombre,precio) VALUES ('$id','$nombre','$precio')";
/*$insertar = "INSERT INTO productos (id,nombre,precio) VALUES ('{$_POST['id']}','{$_POST['nombre']}','{$_POST['precio']}')";*/

$insert = mysqli_query($conexion,$insertar);


if($insert){
   
   header('location: consultas.php');
}
else{
    echo 'Algo fallo...';
    
}



?>
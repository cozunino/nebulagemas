<?php

include 'conexionbd.php';

if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nombre'])&& !empty($_POST['apellido'])){

$email = mysqli_real_escape_string($conexion,$_POST['email']);
$password = mysqli_real_escape_string($conexion,$_POST['password']);
$nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
$apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
$telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
$direccion = mysqli_real_escape_string($conexion,$_POST['direccion']);

/*if(!empty($email) && !empty($password) && !empty($nombre) && !empty($apellido)){*/


$insertar = "INSERT INTO usuarios (nombre,apellido,email,telefono,password,direccion) VALUES ('$nombre','$apellido','$email','$telefono','$password','$direccion')";
/*('{$_POST['nombre']}','{$_POST['apellido']}','{$_POST['email']}','{$_POST['telefono']}','{$_POST['password']}','{$_POST['direccion']}')";*/

$insert = mysqli_query($conexion,$insertar);


if(!$insert){
    echo 'Algo fallo.. vuelva a intentar';
    echo "<br>";
    echo "<h3 style=color:coral;><a href=index.html>Volver</a></h3>";
}
else{
    
    echo 'Bienvenido.Ya estas registrado!!!';
    echo "<br>";
    echo "<h3 style=color:coral;><a href=index.html>Volver</a></h3>";
    
}
}else{
    header('location:index.html');
    echo "<p>Ingrese todos los datos</p>";
}


?>
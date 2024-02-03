<?php

include 'conexionbd.php';

if(!empty($_POST['email']) &&!empty($_POST['password'])){

$email = mysqli_real_escape_string($conexion,$_POST['email']);
$password = mysqli_real_escape_string($conexion,$_POST['password']);

echo "<center><h4>Bienvenido al sistema</h4>";

/*$consultasql = "SELECT * FROM adm WHERE email='$email' AND password='$password'";*/
/*$consultasql = "SELECT * FROM adm WHERE email='{$_POST['email']}' AND password='{$_POST['password']}'";*/

$query = mysqli_query($conexion,$consultasql);

$num_filas = mysqli_num_rows($query);

/*if($num_filas){*/
    echo 'Bienvenido administrador!!!';
   header('location: consultas.php');
/*}
else{
    echo 'Permiso denegado';
    header('location: noseconecto.html');
}

}else{
    header("location:index.html");
}*/


?>

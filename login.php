         
<?php

include 'conexionbd.php';

if(!empty($_POST['email']) &&!empty($_POST['password'])){

$email = mysqli_real_escape_string($conexion,$_POST['email']);
$password = mysqli_real_escape_string($conexion,$_POST['password']);

/*if(!empty($email) && !empty($password)){*/

$consultasql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
/*$consultasql = "SELECT * FROM usuarios WHERE email='{$_POST['email']}' AND password='{$_POST['password']}'";*/

$query = mysqli_query($conexion,$consultasql);

$num_filas = mysqli_num_rows($query);

if($num_filas){
    session_start();
    $_SESSION['iniciado']=$_POST['email'];
    header("location:index.php");
}
else{
    echo 'Acceso denegado.';
    echo '<br>';
    echo "<h3 style=color:coral;><a href=index.html>Volver</a></h3>";
}

}else{
    header("location:index.html");
}


?>
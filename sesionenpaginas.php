<?php

session_start();

if(isset($_SESSION['iniciado'])){
    $iniciado = $_SESSION['iniciado'];
    // echo $_SESSION['id_usuario'];
}else{
    header('location:index.html');
}

?>
<?php

session_start();

session_destroy();
echo 'Sesion cerrada';
header('location:index.html');


?>
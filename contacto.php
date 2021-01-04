

<?
if ($_POST){
    //Estoy recibiendo el formulario, compongo el cuerpo
    $cuerpo = "Formulario enviado\n";
    $cuerpo .= "Nombre: " . $_POST["nombre"] . "\n";
    $cuerpo .= "Apellido: " . $_POST["apellido"] . "\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\n";
    $cuerpo .= "Comentarios: " . $_POST["coment"] . "\n";

    //mando el correo...
    mail("nebulaz@gmail.com","Formulario recibido",$cuerpo);
        echo "<h2>Enviado</h2>";
        echo "<br>";
        echo "<h2><a href=index.html >Volver</a></h2>";
}else{
    echo "<h2>No se envio</h2>";
    echo "<br>";
    echo "<h2><a href=index.html >Volver</a></h2>";
}
?>
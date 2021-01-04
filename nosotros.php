<?php

include_once 'sesionenpaginas.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> <!--encontre esta pagina de efectos y me parecio facil de usar y un detallecito interesante-->
    
    <link rel="stylesheet" href="estilo.css">
  

        <title>Nebula Gemas</title>
    </head>
    <body>

        

            <!--navbar-->

  <!--nav logo-->
  <header>
              <nav class="navbar navbar-expand-lg " >

              <div id="logo" >
                <a class="navbar-brand" href="index.php" >
                  <img src="img/logotrans.png" height="80" alt="" loading="lazy" class="animate__animated animate__backInLeft"> <!--aca implemente la pagina Animate.css en el logo-->
                  </a>
              </div>

              

      
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <!--search            
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="" aria-label="Search" id="buscarimput">
          <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit" id="buscarimput">Buscar</button>
        </form>
  </div>-->

    <div class="navbar navbar-expand-lg " > 

    <div id="divingresar">
       
     <!--   <?php 
     echo "<script>
                alert('Bienvenido');
                
    </script>";
?>-->
    <div>
  
      <!--modal cerrar sesion-->

  <div id="divingresar">
    <button type="button" class="btn btn-outline-secondary" id="botoningresar" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Cerrar sesion</button>


      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cerrar sesion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
        
        <!--formulario cerrar sesion-->     
          <form action="cerrarsesion.php" method="POST">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label" >Contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password">
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary" id="entrarmodal">Entrar</button>
       
          </form>
          <br>
          

        </div>
      </div>
    </div>
  </div>
</div>   

  <!--modal administrador

<div class="collapse navbar-collapse" id="navbarSupportedContent" >
  <button type="button" class="btn btn-outline-secondary" id="administrador" data-bs-toggle="modal" data-bs-target="#exampleModaladm" data-bs-whatever="">Administrador</button>


    <div class="modal fade" id="exampleModaladm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Aministrador</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      <div class="modal-body">-->
      
      <!--formulario ingreso administrador     
        <form action="loginadm.php" method="POST">
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" name="email">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label" >Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" name="password">
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary" id="entrarmodal">Entrar</button>
     
        </form>-->

      </div>
      
    </div>
  </div>
</div>
</div>  

</div>
    </div>
      </nav>
                

    <!--navbar enlaces-->
                <nav class="navbar navbar-expand-lg " id="navenlaces" >
                
               <div id="divenlaces">
                    <button type="button" class="btn " id="zoomin" ><a href="index.php" id="enlaces" >Home</a></button>
                    
                    <button type="button" class="btn " id="zoomin" ><a href="nosotros.php" id="enlaces">Nosotros</a></button>
                    <button type="button" class="btn " id="zoomin" ><a href="gemas.php" id="enlaces">Productos</a></button>
                    <button type="button" class="btn " id="zoomin" ><a href="contacto.html" id="enlaces">Contacto</a></button>
              </div>

                </nav>
            </header>

    
            <div class="container" >
              

                <!--body pagina nosotros boostrap card-->
                
                <div class="card mb-3">
                  <img src="img/agatarojaver.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Gemas</h5>
                                    <p class="card-text" style="text-shadow: 50px;">Con su rareza, las piedras preciosas suponen una valiosa fuente de 
                                    información para los geólogos que investigan la dinámica interna del planeta.</p>
                                    <p class="card-text" style="text-shadow: 50px;">Una gema, también llamada piedra preciosa, es una roca, mineral,  
                                    vidrio o producto orgánico de origen natural, que al ser cortado </p>
                                    <p class="card-text" style="text-shadow: 50px;">o pulido se puede usar en la confección de joyas u objetos artísticos.
                                    Hoy en día, las gemas son descritas y diferenciadas por los especialistas</p>
                                    <p class="card-text" style="text-shadow: 50px;">  por ciertas especificaciones técnicas. 
                                    Entre ellas, de qué están hechas, su composición química e incluso su color.</p>
                                    
                  </div>
                </div>
                
                  
                    <!--fin container-->
                    </div> 



<!--footer-->
<footer >
  <br>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="justify-content: center; padding-bottom: 5px; padding-top: 7px;">
    <div class="container">
      <a class="navbar-brand" href="#" ><small></small></a>
    </div>
    <div class="container">
      <a class="navbar-brand" href="index.php" style= "font-size: 18px;"><small>Home</small></a>
    </div>
    <div class="container">
      <a class="navbar-brand" href="nosotros.php" style= "font-size: 18px;"><small>Nosotros</small></a>
    </div>
    <div class="container">
      <a class="navbar-brand" href="gemas.php" style= "font-size: 18px;"><small>Productos</small></a>
    </div>
    <div class="container">
      <a class="navbar-brand" href="contacto.html" style= "font-size: 18px;"><small>Contacto</small></a>
    </div>

    <!--fontawasome-->
      
    <ul class="navbar-nav " style="margin-left: 40px; margin-top: 15px; color: white;" >
      <li class="nav-item active">
        <i class="fab fa-facebook-f" style="font-size: 20px;"></i>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>

      <li class="nav-item" style="margin-left:40px; color: white;">
        <i class="fab fa-instagram" style="font-size: 20px;"></i>

        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item" style="margin-left:20px;">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item" style="margin-left:20px;">
        <a class="nav-link" href="#"></a>
      </li>
      
      
    </ul>
  </nav>

  <!--nav powered by-->

  <div class="navbar navbar-expand-lg navbar-dark bg-dark" style="justify-content: center; padding-bottom: 5px; padding-top: 7px;">
    <div class="container">
      <p class="navbar-brand" style= "font-size: 12px; color: coral; "></p>
    </div>
    <div class="container">
      <p class="navbar-brand" style= "font-size: 12px; color: coral; "></p>
    </div>
    <div class="container">
      <p class="navbar-brand" style= "font-size: 12px; color: coral; "></p>
    </div>
    <div class="container">
      <p class="navbar-brand" style= "font-size: 12px; color: coral; justify-content: flex-end; align-items: flex-end;">POWERED BY Coni Zunino - nebulaz@gmail.com</p>
    </div>
  </nav>
</footer>







<script src="modalnav.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f594a0e86f.js" crossorigin="anonymous"></script>
<script src="mail.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilo.css">

</body>

</html>

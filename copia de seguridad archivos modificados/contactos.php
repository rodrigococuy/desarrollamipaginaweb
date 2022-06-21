<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pagina web empresarial | mactecnologia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link id="css-preset" href="css/presets/preset6.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
    <form method="post" action="http://forms.melodysoft.com">
      <input type="hidden" name="id" value="CÓDIGO_IDENTIFICATIVO_DEL_FORMULARIO">
    </form>
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link href="css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="media/css/demo_table.css" />
    
    
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
      $('#dtable').dataTable();
      })
    </script>
  </head>
    
  
  

















<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "php/conection.php";
?>

<body>

 
<header id="home">
      <div class="main-nav">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <h1><img class="img-responsive" src="images/favicon.png" alt="logo"></h1>
            </a>                    
          </div>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">    
              <li class="scroll active"><a href="index.html">Inicio</a></li>
              <li><a href="products.php">Tienda</a></li>
              <li><a href="comprar.php">Como Comprar?</a></li>
              <li><a href="nosotros.php">Quienes Somos</a></li>
              <li><a href="contactos.php">Contactos</a></li>
              
              <li><a href="cart.php" ><img src="images/carrito.png"  target="_blank"/> </a></li>
            </ul>
          </div>
        </div>
      </div><!--/#main-nav-->
    </header><!--/#home-->






  <div class="container">
    <div class="row">
      
       



      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><br>
            <h2>Cuestionario para el cliente de diseño web</h2><br>
            <h4>Responde esta lista de preguntas diseñadas para abrir la comunicación y descubrir</h4>
             <h4>exactamente qué necesitas.</h4><br>
            <h3><strong>Cuéntenos sobre su compañía</strong></h3>
              <h4>Nombre del cliente / empresa</h4>
              <h4>Números de teléfono</h4>
              <h4>Dirección de correo electrónico</h4><br>
            <h3><strong>¿Qué servicios específicos brinda su empresa?</strong></h3><br>
            <h3><strong>¿Qué diferencia a su empresa de la competencia?</strong></h3><br>
            <h3><strong>¿En qué tipo de clientes están enfocados?</strong></h3>
            <h3>Esto debe incluir todos los datos demográficos aplicables, como edad, ubicación, sexo, educación, ocupaciones, etc.</h3><br>
            <h3><strong>¿Actualmente tienes un sitio web?</strong></h3><br>
            <h3><strong>¿Qué palabras clave usará su audiencia para encontrar su sitio web?</strong></h3><br>
            <h3><strong>¿Qué le gusta de su sitio web?</strong></h3>
            <h4>Definir el propósito del nuevo sitio web, comprender sus debilidades actuales y crear una lista detallada de características </h4><br>
            <h3><strong>¿Por qué quiere un nuevo sitio web?</strong></h3><br>
            <h3><strong>¿Qué características necesitará su sitio web?</strong></h3><br>
            <h3><strong>¿Qué sitios web similares le atraen y qué le gusta de ellos?</strong></h3><br>
            <h3><strong>¿Quién proporcionará contenido para el nuevo sitio web?</strong></h3><br>
            <h3><strong>¿Su empresa ha establecido marcas?</strong></h3><br>
            <h3><strong>¿Necesita una nueva URL?</strong></h3><br>
            <h3><strong>¿Necesita alojamiento web?</strong></h3><br>
            <h3><strong>¿Se moverá el sitio antiguo a una nueva ubicación?</strong></h3><br>
            <h3><strong>¿Cuál es la fecha límite para el sitio web?</strong></h3><br>
            <h3><strong>¿Cuál es el presupuesto para el sitio web?</strong></h3><br>
            <h3><strong>¿Desea que manejemos el mantenimiento?</strong></h3><br>
            <h3><strong> ¿Desea que manejemos el marketing de contenidos??</strong></h3><br>



          </div>
        </div>
      </div>
    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="col-sm-6">
          
          <form method="post" action="http://forms.melodysoft.com">
            <input type="hidden" name="id" value="mactecnologia">
            
            <input type="text"  name="nombre" class="form-control"placeholder=" Nombre:"  style="border:solid 1px #000;">    
            
               <input type="text" name="email" class="form-control"placeholder=" E-Mail:" style="border:solid 1px #000;">
               <textarea name="mensaje" class="form-control"placeholder=" Celular y Mensaje:" style="border:solid 1px #000;" ></textarea>
            
              <input type="submit" value="Enviar" class="btn-submit">
              <input type="reset" value="Borrar" class="btn-submit"><br>
          </form>    
          
        </div>
        <div class="col-sm-6">
          <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        
            <ul class="address">
              <li><i class="fa fa-map-marker"></i> <span> Direccion:</span> xxxxxxxxxxxxxxxxxxxx </li> <br>
              <li><i class="fa fa-phone"></i> <span> Celular:</span> 1234567890  </li> <br>
              <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mactecnologia2020@hotmail.com"> miemailb@xxxxx.com</a></li> <br>
              <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">http://misitioweb.midominio/</a></li> <br>
            </ul>
          </div>                            
        </div>
      </div>
    </div>



</section><!--/#contact-->


<footer id="footer">
      <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
          <div class="footer-logo">
            <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
           
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p> Cotizaciones cel. 3116604125.</p>
            </div>
            <div class="col-sm-6">
              <p class="pull-right">Hecho a mano por <a href="https://www.facebook.com/rodrigo.cocuysanchez/">&copy;mactecnologia cel 3116604125</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>                      


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>


  
</body>
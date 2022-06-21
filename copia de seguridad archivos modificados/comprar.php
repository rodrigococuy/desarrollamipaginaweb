<!DOCTYPE html>
<html>


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
<!DOCTYPE html>
<html>
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


<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <br> <br>
            <h2>Terminos y Condiciones</h2> 
            <br> <br> 
            <p>Se informa de manera general o detallada el proceso utilizado para realizar el envio </p> 
             <p> Se informan los medios que se utilizan para enviar el pedido </p> 
             <p>Se informa el valor minimo de compra en caso que existiera </p> 
              <p> Se informa la zona geografica o territorio de cobertura a la cual se realizan los envios </p> 
               <p>Se informa tabla de valores de envio </p>  
               <p> Se informa tiempo de entrega </p> 
               <p>Se informa en que casos se puede realizar devolucion de el envio </p> 
               <p> Se informa si genera gastos la devolucion </p> 
          </div>
        </div> 
      </div>




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
      <script src="media/js/jquery.js" type="text/javascript"></script>
      <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
      <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
        $('#dtable').dataTable();
        })
      </script>     
      


 




</body>

<?php

















    <div class="main-nav">
      <div class="container">
        <div id="header">
          <ul class="nav">
            <script src="//code.jivosite.com/widget/62IKcML4Fn" async></script>
           <li> 
            <img src="images/favicon.jpg" ></li>
            <li class="scroll active"><a href="index.html">Inicio</a></li>
            <li><a href="products.php">Tienda</a>
            <li><a href="comprar.php">Como Comprar?</a>
            <li><a href="nosotros.php">Quienes Somos</a></li>
            <li><a href="contactos.php">Contactos</a></li>
			<li><a href="listar_prod.php">Productos</a></li>
			<li><a href="listar_cate.php">Categorias</a></li>
            <a href="cart.php" ><img src="images/carrito.png"  target="_blank"/> </a>
          </ul>
        </div>
       </div>
    </div><!--/#main-nav-->





  

  
 
  
  



  <title>Menu Desplegable</title>
  <style type="text/css">
    
    * {
      margin:0px;
      padding:0px;
    }
    
    #header {
      margin:auto;
      width:500px;
      font-family:Arial, Helvetica, sans-serif;
    }
    
    ul, ol {
      list-style:none;
    }
    
    .nav {
      width:1000px; /*Le establecemos un ancho*/
      margin:0 auto; /*Centramos automaticamente*/
    }

    .nav > li {
      float:left;
    }
    
    .nav li a {
      background-color:rgb(15, 100, 26);
      color:#fff;
      text-decoration:none;
      padding:10px 12px;
      display:block;
      border-right: 0.3em solid black;
    }
    
    .nav li a:hover {
      background-color:#434343;
    }
    
    .nav li ul {
      display:none;
      position:absolute;
      min-width:140px;
    }
    
    .nav li:hover > ul {
      display:block;
    }
    
    .nav li ul li {
      position:relative;
    }
    
    .nav li ul li ul {
      right:-140px;
      top:0px;
    }
    
  </style>



















<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "php/conection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">		



  
</head>
<body>

<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <br> <br>
            <h2>Terminos y Condiciones</h2> 
            <br> <br> <br> <br> <br>
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
          <a href="index.html"><img class="img-responsive" src="images/logotipo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
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
            <p class="pull-right">Hecho a mano por <a href="https://www.linkedin.com/in/rodrigo-cocuy-sanchez-b2908118a/">&copy;Rodrigo Cocuy Sanchez cel 3116604125</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


 




</body>

<?php



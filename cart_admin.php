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
    <div class="form_head" align="left"><h3></h3></div>
      <div class="control-group">  
        <div style="width:140px" class="control-group" align="center">     
      <h2>CARRITO</h2> 
            <a href="./products.php" class="btn-submit">Regresar</a>
            </div>
          <?php
          /*
          * Esta es la consula para obtener todos los productos de la base de datos.
          */
          $products = $con->query("select * from product");
          if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
                    ?>
            <table name="booklist" id="dtable" width="900">
              <thead>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                
                <th>Acciones</th>
              </thead>
                      <?php 
                      /*
                      * Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
                      */
              $acum=0;        
              foreach($_SESSION["cart"] as $c):
              $products = $con->query("select * from product where id=$c[product_id]");
              $r = $products->fetch_object();
                        ?>
              <tr class='tb1'>
                <td><?php echo $c["q"];?></td>
                <td><?php echo $r->name;?></td>
                <td>$ <?php echo $r->price; ?></td>
                <td>$ <?php echo $c["q"]*$r->price; ?></td>
                <?php $acum=$acum+$c["q"]*$r->price; ?>
                <td style="width:260px;">
                          <?php
                  $found = false;
                  foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}
                              ?>
                  <a href="php/delfromcart.php?id=<?php echo $c["product_id"];?>" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
                            <?php 
                  endforeach; ?>

            </table>
                      <?php 
          else:?>
            <p class="alert alert-warning">El carrito esta vacio.</p>
                    <?php 
          endif;?>
            <br><br><hr>
            <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
        
          <H3><th>&nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; TOTAL A PAGAR &nbsp;&nbsp;&nbsp;$<?php echo $acum; ?></th></H3>
          <td></td>
        
      <div></div>     

        
      </div>
      

      


    </div>

    <br><br>
    <br>
    <h1>CARRITO</h1> 
    <br>



    <head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>


    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AaQ67c3ndEc3VlzS6VOQzf7qtS-LADpWgZGX3HFWOsMZrh25D-oqQ2OCwfctV_JBJvii-HNWOlVUaE1q&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '  <?php $acum=$acum+$c["q"]*$r->price; ?>'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>




    
      



<a href="https://biz.payulatam.com/B0d33f22CD61858"><img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png"></a><br><br><br>







  </body>
  

      
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

</html>
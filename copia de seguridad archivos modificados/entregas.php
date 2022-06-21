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
      <link id="css-preset" href="css/presets/preset4.css" rel="stylesheet">
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

          <div class="collapse navbar-collapse"><!--/"Inicio del navbar-collapse"-->
          <ul class="nav navbar-nav navbar-right">    
            <li class="scroll active"><a href="index.html">Inicio</a></li>
            <li><a href="products_admin.php">Tienda</a></li>
            <li><a href="listar_prod.php">Productos</a></li>
	         	  <li><a href="listar_cate.php">Categorias</a></li>
               <li><a href="entregas.php">Entregas</a></li>
               <li><a href="products.php">Usuario</a></li>
               <li><a href="logout.php">Cerrar Sesion</a></li>
  			    
            <li><a href="cart.php" ><img src="images/carrito.png"  target="_blank"/> </a></li>
          </ul>
          </div><!--/"Fin navbar-collapse"-->  
        </div>
      </div><!--/#main-nav-->
    </header><!--/#home-->

  



    <div class="container">
    <div class="form_head" align="left"><h3></h3></div>
      <div class="control-group">  
        <div style="width:140px" class="control-group" align="center">     
          <h2>PEDIDOS PENDIENTES</h2> 
            <a href="./products.php" class="btn-submit">Regresar</a>
        </div>


        <table name="booklist" id="dtable" width="900">
          <thead>
            <th>ID PEDIDO.</th>
            <th>PRODUCTO</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>ACCIONES</th>
          </thead>
                   <?php
          include "php/conection.php";
          $q="select cp.id,cp.product_id,cp.q,cp.cart_id,c.id,c.client_email,c.created_at,pro.name,pro.price from cart_product cp inner join cart c inner join product pro on c.id = cp.cart_id and cp.product_id = pro.id order by cp.cart_id";
          $result = mysqli_query($con,$q);
          while($rs=mysqli_fetch_array($result)){
            $prid=$rs['id'];
            $prname=$rs['name'];
            $cart_id=$rs['cart_id'];
            $cclient_email=$rs['client_email'];
            $ccreated_at=$rs['created_at'];
            $proprice=$rs['price'];
            echo "<tr class='tb1'>";
            echo "<td>".$prid."</td>";
            echo "<td>".$prname."</td>";
            echo "<td>".$proprice."</td>";
            echo "<td>".$cclient_email."</td>";
            echo "<td>".$ccreated_at."</td>";
                      ?>    
            <td>  <a class="btn-submit" href="listar_prod.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>Ver</a></td>
                      <?php   
            echo "</tr>";
          }
                       ?>
        </table>

        
        <br><hr>
        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
          <H3><th>&nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; TOTAL A PAGAR &nbsp;&nbsp;&nbsp;$<?php echo $acum; ?></th></H3>
      </div>
    </div>
    <br>
    <br>
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
  </html>
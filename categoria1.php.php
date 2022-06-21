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
    <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
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
    </head>

    <?php
        // Include the database configuration file
        require 'php/config_cate.php';
        function categoryTree($parent_id = 0, $sub_mark = ''){
        global $db;
        $query = $db->query("SELECT * FROM category WHERE id_padre = $parent_id ORDER BY category ASC");
        if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['category'].'">'.$sub_mark.$row['category'].'</option>';
            categoryTree($row['id_cat'], $sub_mark.'---');
          }
        }
      }
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
              
            
              <li><a href="contactos.php">Contactos</a></li>
              
              <li><a href="cart.php" ><img src="images/carrito.png"  target="_blank"/> </a></li>
            </ul>
          </div>
        </div>
      </div><!--/#main-nav-->
    </header><!--/#home-->
     





  
  
  <?php
    /*
    * Este archio muestra los productos en una tabla.
    */
    session_start();
    include "php/conection.php";
    $prname=$_GET['category'];
    ?>

    <div class="container">
      <div class="ms-inline" data-ms-id="5ec450362213e3049a2619b7" data-ms-lang="es" ></div>
        <div class="row">
          <div class="col-md-12"> <br>
            <h1>REFERENCIAS</h1> 
            <a href="./products.php" class="btn btn-primary">Regresar</a>
            <a href="./cart.php" class="btn btn-primary">Ver Carrito</a><br>
            
          
            <?php
              /*
              * Esta es la consula para obtener todos los productos de la base de datos.
              */
              $products = $con->query("select cat.id_cat,cat.category,pro.id,pro.price,pro.name,pro.foto,pro.forcategoria from product pro INNER JOIN category cat ON pro.forcategoria = cat.category where pro.forcategoria = '$prname'");
              echo "$prname";
              
            ?>
            <table class="table table-bordered">
                            <?php 
              /*
              * Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
              */
              
              
              $num=0;
              while($r=$products->fetch_object()):
                if($num==3) {
                  echo "<tr>";
                   $num=1;
                }else{
                  $num++;
                }
                $prid=$r->id;
                              ?>
              <div class="col-sm-3">
                <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <td> <a href=<?php echo"'catalogo.php?id=$prid'"?>> <img class="img-responsive" src="images/portfolio/<?php echo $r->foto; ?>"width="500" height="500" onclick='muestro(<?php echo $r->id; ?>)'></a>
                     <h4><?php echo $r->id;?></h4> 
                      <h4><?php echo $r->name;?></h4> 
                      <h5>US  $<?php echo $r->price; ?></h5>
                                      <?php
                      $found = false;
                      if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}}
                                      ?>		<?php     
                      if($found):
                                        ?> 
                        <a href="cart.php" class="btn btn-info">Agregado</a>
                                        <?php
                      else:
                                          ?>  
                        <form class="form-inline" method="post" action="./php/addtocart.php">
                          <input type="hidden" name="product_id" value="<?php echo $r->id; ?>">
                            <div class="form-group">
                              <input  type="number" name="q" value="1" style="width:50px;" min="1" class="form-control" placeholder="Cantidad"><br>
                              <button type="submit"style="width:130px;" class="btn btn-primary">Agregar al carrito</button><br>
                            </div><br>
                                            <?php  
                                              ?>
                        </form>	
                                                  <?php 
                      endif; ?>
                    </td>        
                  </div>		
                </div> 
              <?php endwhile; ?>
            </table>
            </div>
          </div>
        </div>
      </div>
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
    <div id="ms-popup" data-ms-id="5ec450362213e3049a2619b7" data-ms-lang="es" ></div>  
  </body><!--/#body-->
</html><!--/#html-->


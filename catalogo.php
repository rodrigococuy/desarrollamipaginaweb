<!DOCTYPE html>
<html>
  <head>
    <title>Checkout</title>
    <script src="https://js.stripe.com/v3/"></script>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link href="css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="media/css/demo_table.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link id="css-preset" href="css/presets/preset6.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="media/js/jquery.js" type="text/javascript"></script>
    <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
    // Set your publishable key: remember to change this to your live publishable key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    var stripe = Stripe('pk_test_BMKBrqKlJ68EKRjz6pU5MPdr00FmcQS6tB');
    var elements = stripe.elements();
      $(document).ready(function(){
      $('#dtable').dataTable();
      })
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
                <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
  </head>
  
  <body>
    <div class="main-nav">
      <div class="container">
        <div id="header">
          <ul class="nav">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.html">
                  <h1></h1>
                </a>                    
            </div>
            <h1><p style="color:white"> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <img class="img-responsive" src="images/favicon.png" alt="logo"></h1>
          </ul>
          <ul class="nav">
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->

    <?php
          
          
          include "php/conection.php";
          global $prctry;
          global $prqty;
          $prid=$_GET['id'];
          $q = "select * from product where id='$prid'";
          $result=mysqli_query($con,$q);
          while($rs=mysqli_fetch_array($result)){
            $prid=$rs['id'];
            $prname=$rs['name'];
            $prctry=$rs['forcategoria'];
            //$prqty=$rs['prod_qty'];
            $prfoto=$rs['foto'];
            $prprice=$rs['price'];
            $prcaract1=$rs['caract1'];
          }
            $fctgry="select * from category";
            $result=mysqli_query($con,$fctgry);
              ?>

    <div class="container"  >
      <div style="width:140px" class="control-group" align="center">     
          <a href="./products.php" class="btn-submit">Regresar</a>
          <a href="./cart.php" class="btn-submit">Ver Carrito</a><br>
      </div>
    </div>
    
    <div class="container"  align="center">
      <div class="ms-inline" data-ms-id="5ec450362213e3049a2619b7" data-ms-lang="es" ></div>
        <div class="row" align="center">
          <div class="col-md-12" align="center"> <br>
                            <?php
            $products = $con->query("select cat.id_cat,cat.category,pro.id,pro.price,pro.name,pro.foto,pro.forcategoria,pro.caract1 from product pro INNER JOIN category cat ON pro.forcategoria = cat.category where id='$prid'" );
            $num=0;
            while($r=$products->fetch_object()):
                        ?>
              <div class="container" align="center">
                <div class="folio-item wow fadeInRightBig" align="center" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <td align="center">
                    <a href=<?php echo"'catalogo.php?id=$prid'"?>> <img class="img-responsive" src="images/portfolio/<?php echo $r->foto; ?>.jpg" width="800" onclick='muestro(<?php echo $r->id; ?>)'></a>
                    <h4><?php echo $r->name;?></h4>
                    <h5> $<?php echo $r->price; ?></h5>
                    <div class="container">
                      <h3>Caracteristicas : </h3><br>
                      <?php echo $r->caract1; ?>
                   
                                    <?php
                    $found = false;
                    if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}}
                                    ?>		<?php     
                    if($found):
                                      ?> 
                      <a href="cart.php" class="btn-submit">Agregado</a>
                                      <?php
                    else:
                                        ?>  
                      <form class="form-inline" method="post" action="./php/addtocart.php">
                        <input type="hidden" name="product_id" value="<?php echo $r->id; ?>">
                          <div class="form-group">
                            <input  type="number" name="q" value="1" style="width:50px;" min="1" class="form-control" placeholder="Cantidad"><br>
                            <button type="submit"style="width:130px;" class="btn-submit">Agregar al carrito</button><br>
                          </div><br>
                      </form>	
                                                <?php 
                    endif; ?>
                     </div>
                  </td>        
                </div>		
              </div> 
                           <?php 
            endwhile; ?>
            </td> 
            </tr> 
          
        </div>
      </div>
    </div>




  
  </body>
</html>





                    
                    
                
           
     
              
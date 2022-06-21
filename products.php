<!DOCTYPE html>
<html>
  <head> <!--Inicio del head-->  
                                  <!--meta-->    
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
                                  <!--title-->
    <title> mactecnologia |Pagina web empresarial </title>
                                  <!--link-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link id="css-preset" href="css/presets/preset6.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link href="css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="media/css/demo_table.css" />
                                  <!--script-->
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
    <script type="text/javascript" charset="utf-8"> $(document).ready(function(){ $('#dtable').dataTable(); }) </script>
    <script src="//code.jivosite.com/widget/Gfjs9s3A0K" async></script>

    <?php

      session_start();
      // Este archivo carga las categorias en categoryTree para poder luego visualizar con un select el filtro de categorias-->
      require 'php/config_cate.php'; //Crea una variable $db con conexion a la base de datos cartbasic1 //
      function categoryTree($parent_id = 0, $sub_mark = ''){ //Inicio funcion categoryTree//  
        global $db;
        $query = $db->query("SELECT * FROM category WHERE id_padre = $parent_id ORDER BY category ASC");
        if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['category'].'">'.$sub_mark.$row['category'].'</option>';  //Visualiza categorias y subcategorias infinitas dentro de el select//
            categoryTree($row['id_cat'], $sub_mark.'___'); //Visualiza categorias y subcategorias infinitas dentro de el select//
         }
        }
      } //Fin de la funcion categoryTree
    ?>

      
    
  </head> <!--/Fin head-->  
        
  <body> <!--/Inicio del body-->  
                                  <!--formulario de chat-->                                  
    <form method="post" action="http://forms.melodysoft.com"> <!--Me eniva a una pagina de internet la cual procesa el envio de el correo independiente que este en localhost o en el hosting-->
     <input type="hidden" name="id" value="CÓDIGO_IDENTIFICATIVO_DEL_FORMULARIO"> <!--Envia un codigo a melodysoft con el que valida a el correo que voy a enviar el mensaje-->
    </form>
                                  <!--header-->
    <header id="home"> <!--/Inicio del "home"-->  

      <div class="main-nav">  <!--/Inicio del div "main-nav"-->  

        <div class="container"> <!--/Inicio del "container"-->   
                                    <!--Logotipo Empresa-->
          <div class="navbar-header"> 
            <a class="navbar-brand" href="index.html"> <h1><img class="img-responsive" src="images/favicon.png" alt="logo"></h1> </a>  
          </div>
                                    <!--menu responsive-->
          <div class="navbar-header"> <!--/Inicio del "navbar-header"-->  
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
          </div><!--/Fin del "navbar-header"-->  
                                    <!--menu colgante-->
          <div class="collapse navbar-collapse"><!--/"Inicio del navbar-collapse"-->
            <ul class="nav navbar-nav navbar-right">  <!--Inicio del "nav navbar-nav navbar-right"-->    
              <li class="scroll active"><a href="index.html">Inicio</a></li>
              <li><a href="products.php" >Tienda</a></li>
              <li><a href="comprar.php">Como Comprar?</a></li>
              <li><a href="nosotros.php">Quienes Somos</a></li>
              <li><a href="contactos.php">Contactos</a></li>
              <li><a href="cart.php" ><img src="images/carrito.png"  target="_blank"/> </a></li>
            </ul> <!--Fin del "nav navbar-nav navbar-right"-->    
          </div><!--/"Fin navbar-collapse"-->  

        </div>  <!--/Fin del "container"-->  

      </div>  <!--/Fin del id="home"-->  

    </header><!--/#home-->
   
    

    <?php
      include "php/conection.php";//Crea una variable $con la cual tiene conexion a la base de datos cartbasic1 //
      $prname=isset($_GET['category']); //Recibe de el filtro la categoria seleccionada//
  //  echo "---".$_GET['category']."***";  se utilizo para visualizar el contenido de category //
    ?>
      
    
      <div class="container"> <!--/Inicio del container-->  
                                  <!--formulario de filtro de categoria-->
      <form action="products.php" target="_self"> <!-- Envia utilizando get por defecto la categoria seleccionada por el usuario para filtrar-->
        <p>
         <select name="category">
            <?php categoryTree(); ?>
         </select>
            <input type="submit" value="Filtrar Categorias">
        </p>
      </form>
      
      <div class="ms-inline" data-ms-id="5ec450362213e3049a2619b7" data-ms-lang="es" >  <!--Inicio del ms-inline-->  
        <h1>REFERENCIAS</h1> 
      </div> <!--Fin del ms-inline-->  
      
      
      <div class="row"> <!--Inicio del row-->  
        <div class="col-md-12"> <br>  <!--Inicio del col-md-12-->  
                          <!--Esta es la consula para obtener todos los productos de la base de datos.-->
          <?php
          
          
          
          
          
          
          global $buscafiltro;
            if(isset($_GET['category'])!="") {
              $buscafiltro = "where pro.forcategoria = '$prname'"; //Valida si el filtro fue utilizado entonces la busqueda mostrara solo los productos que pertenezcan a esa categoria de lo contrario mostrara todos los productos por ahora mientras se configura para mostrar solo de a 40 articulos por pagina//
            }           
            $products = $con->query("select cat.id_cat,cat.category,pro.id,pro.price,pro.name,pro.foto,pro.forcategoria from product pro INNER JOIN category cat ON pro.forcategoria = cat.category ".$buscafiltro."");  //Realiza una consulta concatenando los campos de la tabla productos + la tabla categorias para poder por medio de la relacion seleccionar por categorias y poder aplicar filtros //
          ?>
                        <!--Esta es la tabla para visualizar el catalogo de el porducto-->         
          <table class="table " border="1" >  <!--Inicio de la table    table-bordered    -->  
                          <?php 
            /*
            * Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
            */
            include "php/conection.php";
            $prid=isset($_GET['id']);
            $num=0; //Banderita para personalizar el numero de columnas en las que se visualizara el catalogo de productos//
            ?>
              <tr><td align="center">
            <?php
            while($r=$products->fetch_object()):
              $prid=$r->id; 
                             ?>
                <div style="width:240px;padding:2%;display: inline-block; align:center; border:solid 1px #000; height: 500px;float:left;margin:1%; border-radius:10px;" >  <!--Inicio del col-sm-3-->  
                  <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms" style="width:100%;height:100%;"> <!--Inicio del item wow fadeInRightBig-->
                    <a href=<?php echo"'catalogo.php?id=$prid'"?>> <img class="img-responsive" src="images/portfolio/<?php echo $r->foto; ?>.jpg" style="width=170px;height:200px" onclick='muestro(<?php echo $r->id; ?>)'></a> <!-- Visualiza cada una de las imagenes de el catalogo-->
                      <h4><?php echo $r->name;?></h4> <!-- Visualiza en catalogo el nombre de el producto -->
                      <h5>COP $<?php echo $r->price; ?></h5>  <!-- Visualiza en catalogo el precio de el producto -->  
                                      <?php
                      $found = false;
                      if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}}
                                      ?>
                                      <?php     
                      if($found): //Valida si el producto ya fue agregado cambio el boton a el estado agregado//
                                        ?> 
                        <a href="cart.php" class="btn-submit">Agregado</a>
                                        <?php
                      else:   // de lo contrario el boton permanece en el estado agregar e el carrito//
                                          ?>  
                        <div  style="position:absolute; bottom:50px; width:100%; height:60px;">
                        <form class="" method="post" action="./php/addtocart.php"> <!-- Envia por el metodo GET a el formulario addtocart los productos y la cantidad seleccionada a comprar            form-inline    -->
                          <input type="hidden" name="product_id" value="<?php echo $r->id; ?>"><!-- Carga el codigo de el producto seleccionado desde la tabla product para enviarlo a el formulario addtocarts-->
                          <input  type="number" style="width:130px;display: inline;" name="q" value="1" style="width:50px;" min="1" class="form-control" placeholder="Cantidad"><br> <!-- Solicita por pantalla a el usuario la cantidad de productos a comprar por defecto inicialmente muestra cantidad 1-->
                          <button type="submit" style="width:190px;" class="btn-submit">Agregar al carrito</button>
                        </form>	
                      </div>
                                                  <?php 
                      endif; ?>
                  </div> <!--Fin del item wow fadeInRightBig-->
                </div> <!--Fin del col-sm-3-->  
            <?php endwhile; ?>
              </td> 
            </tr> 
          </table>  <!--Inicio del table-->  
        </div>  <!--Fin del col-md-12-->  
      </div>  <!--Fin del row-->  
    
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
    </div>  <!--Fin del container-->
  </body> <!--/Fin del body-->  

</html>
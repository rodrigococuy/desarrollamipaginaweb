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
          <li><a href="listar_prod.php">VER</a></li>
            <li><a href="insertar_prod.php">CREAR</a></li>
            <li><a href="actualizar_prod.php">ACTUALIZAR</a></li>
            <li><a href="eliminar_prod.php">BORRAR</a></li>
            <li><a href="products_admin.php">SALIR</a>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->



	<?php
		/* Este archio muestra los productos en una tabla.*/
		include("function.php");
	?>
	<div class="container"> <br>
		<div class="row">
			<div class="col-md-12">
				<div id="container2">
					<div class="form_head" align="left"><h2>BORRAR REFERENCIAS</h2></div>
						<div class="control-group">
							<table name="booklist" id="dtable" width="900">
								<thead>
									<th width="10%">ID.</th>
									<th width="40%">PRODUCTO</th>
									<th width="10%">PRECIO</th>
									<th width="10%">IMAGEN</th>
									<th width="20%">CATEGORIA</th>
									<th width="10%">ACCIONES</th>
								</thead>	
								<?php 
									$sql = "select * from product";
									$result = db_query($sql);
									while($row = mysqli_fetch_object($result)){
								?>
								<tr>
									<td><?php echo $row->id;?></td>		
									<td><?php echo $row->name;?></td>
									<td><?php echo $row->price;?></td>
									<td><?php echo $row->foto;?></td>
									<td><?php echo $row->forcategoria;?></td>
									<td>
									<a class="btn-submit" href="borrar_prod.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>Borrar</a>
									</td>
								</tr>
								<?php } 
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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















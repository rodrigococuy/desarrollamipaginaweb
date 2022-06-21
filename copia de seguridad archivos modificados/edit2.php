<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link href="css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="media/css/demo_table.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link id="css-preset" href="css/presets/preset4.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="media/js/jquery.js" type="text/javascript"></script>
    <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
      $('#dtable').dataTable();
      })
    </script>
  </head>
  <body> <!--/Inicio del body-->  
    <div class="main-nav">
      <div class="container">
        <div id="header">
          <ul class="nav">
            <h1><p style="color:white"> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; CATEGORIAS</h1>
          </ul>
          <ul class="nav">
    
            
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->






<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><br>
			<h3>Formulario de Actualizacion</h3>
			<br><br>
			<a href="./products.php" class="btn btn-primary">Tienda</a>
			<a href="./actualizar_cate.php" class="btn btn-primary">Regresar</a>
			<br><br>
      <?php
        include "php/conection.php";
        $prid=$_GET['id_cat'];
        $q = "select * from category where id_cat ='$prid'";
        $result=mysqli_query($con,$q);
        while($rs=mysqli_fetch_array($result)){
          $prid=$rs['id_cat'];
          $prcategory=$rs['category'];
          $prid_padre=$rs['id_padre'];
        }
        
        global $prcategory;
        global $prid_padre;
      ?>


<div id="container">
<div class="form_head" align="left"><h4>Actualizar categoria</h4> </div><br>
	<form method="post" action="process2.php">
		<label class="control-label">REF. :</label>
<div class="controls">
<input type="text" style=width:170px; name="eprodid" placeholder="Product ID" id="eprodid" value="<?php echo $prid;?>"/>

</div>
		<label class="control-label">NOMBRE :</label>
<div class="controls">
	<input type="text" name="eprodname" placeholder="Product Title" id="eprodname" value="<?php echo $prcategory;?>"/>
</div>
    <label class="control-label">NIVEL :</label>
<div class="controls">
	<input type="text" name="eprodpadre" placeholder="Product Title" id="eprodpadre" value="<?php echo $prid_padre;?>"/>
</div>

<div class="controls">
		<button id="btn" class="btn btn-primary">Actualizar</button>
		
</div>
	</form>
</div><br /><br /><br />        







		</body>
	</html>
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
            <h1><p style="color:white"> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; REFERENCIAS</h1>
          </ul>
          <ul class="nav">
    
            
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
	





  
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br><br>
			<h3>Formulario de Actualizacion</h3>
			<br><br>
			<a href="./products.php" class="btn btn-primary">Tienda</a>
			<a href="./actualizar_prod.php" class="btn btn-primary">Regresar</a>
			<br><br> 
			<?php
			  include "php/conection.php";
			  $prid=$_GET['id'];
			  $q ="select cat.id_cat,cat.category,pro.id,pro.price,pro.name,pro.foto,pro.forcategoria,pro.caract1 from product pro INNER JOIN category cat ON pro.forcategoria = cat.category WHERE pro.id = '$prid'";
			  $result=mysqli_query($con,$q);
			  while($r=mysqli_fetch_array($result)){
			  $prid=$r['id'];
			  $prprice=$r['price'];
			  $prname=$r['name'];
			  $prfoto=$r['foto'];
			  $prforcategoria=$r['forcategoria'];
			  $prcaract1=$r['caract1'];
			}
			$fctgry="select * from category";
			$result=mysqli_query($con,$fctgry);
		?>
		<div id="container">
			<div class="form_head" align="left"><h4>ACTUALIZAR REFERENCIA</h4> </div><br>
				<form method="post" action="process.php">
					<label class="control-label">REF :</label>
					<div class="controls">
						<input type="text" style=width:170px; name="eprodid" placeholder="Product ID" id="eprodid" value="<?php echo $prid;?>"/>
					</div>
					<label class="control-label">NOMBRE :</label>
					<div class="controls">
						<input type="text" style=width:300px; name="eprodname" placeholder="Product Title" id="eprodname" value="<?php echo $prname;?>"/>
					</div>
						<label class="control-label">CATEGORÍA :</label>
					<div class="controls" >
						<select name="ecategory" style=width:300px; id="ecategory">
							<option><?php echo $prforcategoria; ?></option>
							<?php
								while($rs=mysqli_fetch_array($result)){
									$categ=$rs['id_cat'];
									$category=$rs['category'];
									echo "<option>".$category."</option>";
								}
							?>
						</select>
					</div>
					
					<label class="control-label">IMAGEN :</label>
					<div class="controls">
						<input type="text" name="eprodfoto" placeholder="Number of Products to add" id="eprodfoto" value="<?php echo $prfoto; ?>"/>
					</div>
					
					<label class="control-label">PRECIO :</label>
					<div class="controls">
						<input type="text" name="eprodprice" placeholder="Number of Products to add" id="eprodprice" value="<?php echo $prprice; ?>"/>
					</div><br>
					
					<label class="control-label">CARACTERISTICAS :</label>
					<div class="controls">
					<input type="text" style=width:500px; name="eprodcaract1" placeholder="Ingrese las caracteristicas" id="eprodcaract1" value="<?php echo $prcaract1; ?>"> </textarea>  
					</div><br>
					
					<div class="controls">
						<button id="btn" class="btn btn-primary">Actualizar</button>
					</div>
				</form><br><br>





		


			</div><br /><br /><br />
			
		</body>
		
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
	</div>       
	</html>
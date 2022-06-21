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
	
	<body>
				<?php
		include "php/conection.php";
		function edit_categor($id,$prid,$prcategory,$prid_padre){
	
			global $con;
			$q="update category set id_cat='$prid', category='$prcategory', id_padre='$prid_padre' where id_cat ='$prid'";
			if(mysqli_query($con,$q)){
				echo "<script language='javascript'>
				alert('PRODUCTO ACTUALIZADO SATISFACTORIAMENTE');
				window.location = 'actualizar_cate.php';
				</script>";
			}
			else{
				echo "<script language='javascript'>
				alert('Error no se pudo actualizar');
				window.location = 'edit2.php';
				</script>";	
		
				echo "<tr class='tb1'>";
				echo "<td>".$prid."</td>";
				echo "<td>".$prcategory."</td>";
				echo "<td>".$prid_padre."</td>";	
				echo "<td> <a href='edit2.php?id=$prid' id='popedit'>Editar</a></td>";
				echo "</tr>";
			}
		}
		if(isset($_POST['eprodid'],$_POST['eprodname'],$_POST['eprodpadre'])){
			$prid=$_POST['eprodid'];
			$prcategory=$_POST['eprodname'];
			$prid_padre=$_POST['eprodpadre'];
			edit_categor('',$prid,$prcategory,$prid_padre);
		}
						?>
	</body>
</html>
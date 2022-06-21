<!DOCTYPE html>
<html>





<html>   

<head><meta charset="gb18030">   
<title>Guardamos los datos en la base de datos</title>   
</head>   

<body>   
<?php   

// Recibimos por POST los datos procedentes del formulario   


$id = $_POST["id"];
$name = $_POST["name"];   
$price = $_POST["price"];   
$categ=$_POST['prod_ctry'];
$prqty = $_POST["prod_qty"];  
$foto = $_POST["foto"];  




	include "php/conection.php";
	$q="select * from product order by id asc";
	$result = mysqli_query($con,$q);
	while($rs=mysqli_fetch_array($result)){
	$categ=$rs['prod_ctry'];
	echo "<tr class='tb1'>";
    echo "<td>".$categ."</td>";
  
		
}

  

// Abrimos la conexion a la base de datos   



$hotsdb = "localhost";    // sera el valor de nuestra BD
$basededatos = "desarro7_factura";    // sera el valor de nuestra BD
$usuariodb = "desarro7_factura";    // sera el valor de nuestra BD
$clavedb = "grJMJvrivX9G";    // sera el valor de nuestra BD




// Fin de los parametros a configurar para la conexion de la base de datos

$conexion_db = mysqli_connect("$hotsdb","$usuariodb","$clavedb",$basededatos)
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");


    if (!$conexion_db) {
        die("Connection failed: " . mysqli_connect_error());
  }
   
  echo "Connected successfully";
  

 //   $db = mysqli_select_db( $conexion_db,"$basededatos")
 //   or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");










$sql = "INSERT INTO product (id,name,price,prod_ctry,prod_qty,foto) VALUES ('$id','$name','$price','$categ','$prqty','$foto')";   
mysqli_query($conexion_db,$sql);  

   
  

// Confirmamos que el registro ha sido insertado con exito   
if (mysqli_query($conexion_db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion_db);
}
mysqli_close($conexion_db);
?>   
</body>   

</html>  
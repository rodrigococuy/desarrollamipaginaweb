<!DOCTYPE html>
<html>




<html>   
    <head><meta charset="gb18030">   
        <title>Guardamos los datos en la base de datos</title>   
    </head>   
    <body>   
                <?php   
        // Recibimos por POST los datos procedentes del formulario   
        $id_cat = $_POST["id_cat"];
        $category = $_POST["categoria"];   
        $prid_padre = $_POST["id_padre"];
    	include "php/conection.php";
	    $q="select * from category order by id asc";
	    $result = mysqli_query($con,$q);
	    // Abrimos la conexion a la base de datos   
        $hotsdb = "localhost";    // sera el valor de nuestra BD
        $basededatos = "cartbasic1";    // sera el valor de nuestra BD
        $usuariodb = "root";    // sera el valor de nuestra BD
        $clavedb = "";    // sera el valor de nuestra BD
        // Fin de los parametros a configurar para la conexion de la base de datos
        $conexion_db = mysqli_connect("$hotsdb","$usuariodb","$clavedb",$basededatos)
        or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
        if (!$conexion_db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        //   $db = mysqli_select_db( $conexion_db,"$basededatos")
        //   or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");
        $sql = "INSERT INTO category (id_cat,category,id_padre) VALUES ('$id_cat','$category','$prid_padre')";   
        mysqli_query($conexion_db,$sql);  
        // Confirmamos que el registro ha sido insertado con exito   
        if (mysqli_query($conexion_db, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion_db);
        }
        mysqli_close($conexion_db);
        /*header("location:insertar_cate.php");*/
                        ?>   
    </body>   
</html>  


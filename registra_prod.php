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
        $foto = $_POST["foto"]; 
        $price = $_POST["price"];   
        $categ=$_POST["ecategory"];  
        $caract1=$_POST["caract1"];
        include "php/conection.php";
	    $fctgry="select * from product";
	    $result = mysqli_query($con,$fctgry);
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
        $sql = "INSERT INTO product (id,price,name,foto,forcategoria,caract1) VALUES ('$id','$price','$name','$foto','$categ','$caract1')";   
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




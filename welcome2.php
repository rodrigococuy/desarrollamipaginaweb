<!DOCTYPE html>
<html>



<?php
// Initialize the session
//session_start();
 
// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
    
<!--  <h1>Hola, <b><?php/* echo htmlspecialchars($_SESSION["username"]);*/?>-->
         </b>. Bienvenido a mactecnologia.com</h1><br>
        <h3>En esta pagina tendras la opcion de CAMBIAR TU CONTRASEÑA cuando estes registrado</h3>
        
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>

        <h3>No olvides cerrar la sesion cuando termines la administracion de la pagina</h3><br>
        <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>

        <h3>Ingresa aqui para administrar tu pagina , la cual te permite agregar , editar , actualizar y borrar las referencias y categorias. Si no posees la contraseña comunicate al whatsapp +573116604125 y solicita la contraseña de demostracion</h3><br>
        <a href="products_admin.php" class="btn btn-danger">Modo Administrador</a>



        <h3>Ingresa con permisos de usuario </h3><br>
        <a href="products.php" class="btn btn-danger">Modo Usuario</a>
        
        
    </p>


</body>
</html>
<!--
Author: mactecnologia
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Slide Login Form Flat Responsive Widget Template :: w3layouts</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Archivos Tema Clientes -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Archivos Tema Clientes -->

	<!-- Fuente Web -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //Fuente Web -->

</head>

<?php
// Incluir Archivo de Configuracion
require_once "config.php";
 
// Define las variables e inicializa los valores en ceros
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Formulario para procesar registro de usuarios
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validacion de usuario 
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese un usuario.";
    } else{
        // Busqueda de usuarios en la base de datos
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Almacena la busqueda de los usuarios en una variable 
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Recibe parametros desde el formulario
            $param_username = trim($_POST["username"]);
            
            // Intentando ingresar datos a la tabla de usuarios
            if(mysqli_stmt_execute($stmt)){
                /* almacenar resultados */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Este usuario ya fue tomado.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Cerrar la busqueda
        mysqli_stmt_close($stmt);
    }
    
    // Validacion de la Contraseña
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingresa una contraseña.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La contraseña al menos debe tener 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirma tu contraseña.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "No coincide la contraseña.";
        }
    }
    
    // Validando la entrada de errores antes de guardar en la base de datos
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Almacenando en la base de datos
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Almacenando los valores de el registro en las variables
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Almacenando valores en las variables
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Si se registro exitosamente lo envia a la pagina login
            if(mysqli_stmt_execute($stmt)){
                // Enviando a la pagina login
                header("location: login.php");
            } else{
                echo "Algo salió mal, por favor inténtalo de nuevo.";
            }
        }
         
        // Cerrando la validacion
        mysqli_stmt_close($stmt);
    }
    
    // Cerrando la conexion con la base de datos
    mysqli_close($link);
}
?>
 
<body>

<!-- menu -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>REGISTRO</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-user"></span>
			</div>
			<div class="header-left-bottom">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="icon1 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <span class="fa fa-user"></span>
                        <input type="email" placeholder="Correo Electronico" required="" name="username" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>   
                    </div>   

                    <div class="icon1 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <span class="fa fa-lock"></span>
                        <input type="password" placeholder="Contraseña" required="" name="password" value="<?php echo $password; ?>"> 
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>                                   
				
                    <div class="icon1 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <span class="fa fa-lock"></span>    
                        <input type="password" placeholder="Contraseña" required="" name="confirm_password" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>

                    <div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Permanecer Conectado</label>
                    </div>

                    <div class="bottom">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                        <input type="reset" class="btn btn-default" value="Borrar">
                    </div>

					<div class="links">
						<p><a href="login.php">Ya tienes una Cuenta?</a></p>
						<p class="right"><a href="register.php">Usuario nuevo? Registrarse</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>o registrese usando : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		
		<!-- derechos -->
		<div class="copyright">
			<p>© 2020 Formulario de registro. Todos los Derechos reservados | Diseñado por <a href="http://mactecnologia.epizy.com/" target="_blank">mactecnologia</a></p>
		</div>
		<!-- //derechos --> 
	</div>
</div>	
<!-- //menu -->

</body>
</html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title> mactecnologia |Pagina web empresarial </title>


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

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>


<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: products_admin.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingrese su contraseña.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: products_admin.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "La contraseña que has ingresado no es válida.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";
                }
            } else{
                echo "Algo salió mal, por favor vuelve a intentarlo.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>INICIAR SECCION</h1>
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
				
                    <div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Permanecer Conectado</label>
                    </div>

                    
                    <div class="bottom">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                        <input type="reset" class="btn btn-default" value="Borrar">
                        
                    </div>

					<div class="links">
						
                        <p class="right"><a href="welcome2.php">Ya tienes una Cuenta? </a></p>
						<p class="right"><a href="welcome.php">Ingrese modo usuario? </a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>o registrese usando : </li>
					<li><a href="register.php" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="welcome.php" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>©| Diseñado por <a href="http://mactecnologia.epizy.com/" target="_blank">mactecnologia</a> Si desea adquirir mas informacion sobre la version completa comuniquese a el +573116604125</p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>
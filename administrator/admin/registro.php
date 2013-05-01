<?php 
    session_start(); 
    include('connect.php'); 
    if(empty($_SESSION['nombre'])) { // comprobamos que las variables de sesión estén vacías  
	header('Location: ../index.php');
} else {

    include('connect.php'); // incluimos el archivo de conexión a la Base de Datos 
    if(isset($_POST['enviar'])) { // comprobamos que se han enviado los datos desde el formulario 
        // creamos una función que nos parmita validar el email 
        function valida_email($correo) { 
            if (eregi("^[_.0-9a-z-]+@[0-9a-z._-]+.[a-z]{2,4}$", $correo)) return true; 
            else return false; 
        } 
        // Procedemos a comprobar que los campos del formulario no estén vacíos 
        $sin_espacios = count_chars($_POST['nombre'], 1); 
        if(!empty($sin_espacios[32])) { // comprobamos que el campo nombre no tenga espacios en blanco 
            echo "El campo <em>nombre</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>"; 
        }elseif(empty($_POST['nombre'])) { // comprobamos que el campo nombre no esté vacío 
            echo "No haz ingresado tu admin. <a href='javascript:history.back();'>Reintentar</a>"; 
        }elseif(empty($_POST['clave'])) { // comprobamos que el campo clave no esté vacío 
            echo "No haz ingresado contraseña. <a href='javascript:history.back();'>Reintentar</a>"; 
        }elseif($_POST['clave'] != $_POST['clave_conf']) { // comprobamos que las contraseñas ingresadas coincidan 
            echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>"; 
        }elseif(!valida_email($_POST['email'])) { // validamos que el email ingresado sea correcto 
            echo "El email ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>"; 
        }else { 
            // "limpiamos" los campos del formulario de posibles códigos maliciosos 
            $nombre = mysql_real_escape_string($_POST['nombre']); 
            $clave = mysql_real_escape_string($_POST['clave']); 
            $email = mysql_real_escape_string($_POST['email']);
			$web = mysql_real_escape_string($_POST['web']); 
			$progreso = $_POST['progreso'];  
            // comprobamos que el admin ingresado no haya sido registrado antes 
            $sql = mysql_query("SELECT nombre FROM usuarios WHERE nombre='".$nombre."'"); 
            if(mysql_num_rows($sql) > 0) { 
                echo "El nombre admin elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>"; 
            }else { 
                $clave = md5($clave); // encriptamos la contraseña ingresada con md5 
                // ingresamos los datos a la BD 
                $reg = mysql_query("INSERT INTO usuarios (nombre, clave, email, web, progreso, freg) VALUES ('".$nombre."', '".$clave."', '".$email."', '".$web."', '".$progreso."', NOW())"); 
                if($reg) { 
                    
					header('Location: index.php');
					 ?>
                    
 <?php               }else { 
                    echo "ha ocurrido un error y no se registraron los datos."; 
                } 
            } 
        } 
    }else { 
?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CPanel</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
    
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	  <script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>
</head>
<body>
<nav id="menu">
	CPANEL IDTEAM.ES

     <strong>Bienvenido</strong><br />
</nav>

<div class="container" id="cpanel">
	<div class="sixteen columns" >
		<div class="eight columns">                
            <div id="login">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
                    <label>Usuario:</label><br /> 
                    <input type="text" name="nombre" maxlength="15" /><br /> 
                    <label>Web:</label><br /> 
                    <input type="text" name="web" maxlength="30" /><br /> 
                    <label>Progreso:</label><br /> 
                    <input type="text" name="progreso" maxlength="15" /><br /> 
                    <label>Contraseña:</label><br /> 
                    <input type="password" name="clave" maxlength="15" /><br /> 
                    <label>Confirmar Contraseña:</label><br /> 
                    <input type="password" name="clave_conf" maxlength="15" /><br /> 
                    <label>Email:</label><br /> 
                    <input type="text" name="email" maxlength="50" /><br /> 
                    <input type="submit" name="enviar" value="Registrar" /> 
                    <input type="reset" value="Borrar" /> 
                </form> 
           </div>
		</div>
	</div>
</div>

<script>
$( "#accordion" ).accordion();
</script>

<script src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=twago_proyectos&include_rts=1&exclude_replies=true&callback=twitterCallback2&count=2" type="text/javascript"></script>

</body>
</html>

<?php 
    } 
}
?>
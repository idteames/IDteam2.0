<?php 
    session_start(); 
    include('connect.php'); 
    if(empty($_SESSION['nombre'])) { // comprobamos que las variables de sesión estén vacías 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login Form</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js" type="text/javascript"></script>
</head>
<body>
<div class="show"></div>
<div id="cerceve">
	<div class="header"><div class="text" style="float:left">Area clientes</div><div class="close"></div></div>
		<div class="formbody">
			<form  method="post" action="autentificar.php">
			<input type="text" name="nombre"  placeholder="Usuario" class="text" style="background:url(images/username.png) no-repeat;" />
			<input type="password" name="clave"   placeholder="••••••••••••" class="text" style="background:url(images/password.png) no-repeat;" />
			<input type="submit" name="enviar" value="Conectar" class="submit" style="background:url(images/login.png) no-repeat;" />
			</form>
		</div>
	</div>
</body>
</html>
<?php

	} else { 

	header('Location: admin/index.php');

	}
?>
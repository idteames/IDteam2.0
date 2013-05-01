<?php 
    session_start(); 
    include('connect.php'); 
    if(empty($_SESSION['nombre'])) { // comprobamos que las variables de sesión estén vacías 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js" type="text/javascript"></script>
</head>
<body>
<div class="show"></div>
<div id="cerceve">
<div class="header"><div class="text" style="float:left">Administración</div><div class="close"></div></div>
<div class="formbody">
<form action="autentificar.php" method="post">
<input type="text" name="nombre" placeholder="Usuario" class="text" style="background:url(images/username.png) no-repeat;" />
<input type="password" name="clave" placeholder="••••••••••••" class="text" style="background:url(images/password.png) no-repeat;" />
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
<?php 
    session_start(); 
    include('connect.php'); 
    if(empty($_SESSION['nombre'])) { // comprobamos que las variables de sesión estén vacías  
	header('Location: ../index.php');

	} else {
	include('connect.php'); 
    $perfil = mysql_query("SELECT * FROM usuarios WHERE nombre='".$_SESSION['nombre']."'") or die(mysql_error()); 
        $row = mysql_fetch_array($perfil); 
        $nombre = $row["nombre"]; 
        $progreso = $row["progreso"]; 
		$email = $row["email"]; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>IDteam : Diseño y desarrollo web</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/base.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>

	<div class="container">
		<div class="sixteen column">
			<div class="nine columns">
				<img id="logo" src="images/logo.png" />
			</div>

			<div class="six columns">
				<nav>
			        <ul>
			            <li><a href="#">Home</a></li>
			            <li><a href="../../index.php">Portada</a></li>
			            <li><a href="#">Contacto</a></li>
                        <li><a href="logout.php">Desconectar</a></li>
			        </ul>
				</nav>
			</div>

		</div>
		<hr>
		<div class="sixteen column" id="proceso">
			<div class="eight columns" >

                <script src="http://code.jquery.com/jquery-latest.min.js"></script>
      <div id="contenedor">
            <h1>Progreso:</h1>
      <div class="progress-bar blue stripes">

            <span style="width:<?php echo $progreso ?>%" id="progresito"><? echo $progreso?>% </span>
         </div>
      </div>
			</div>
			<div class="seven columns">
				<h5>Notificaciones:</h5></br>
				Bienvenido <?php echo $nombre ?>, en este panel de control podrás visualizar las actualizaciones de las web.
				Recuerda que puedes seguirnos en <a href="">twitter</a> y <a href="">facebook</a>

			</div>
		</div>
		<div class="sixteen column" >
			<div class="eight columns" id="registro" >

				<ul>
					<li>20% - Analizando Proyecto</li><hr>
					<li>40% - Maquetacion</li><hr>
					<li>60% - Diseñar </li><hr>
					<li>80% - Desarrollar</li><hr>
                    <li>100% - Entrega</li><hr>
				</ul>
			</div>
			

		</div>
		






	</div><!-- container -->
<br />
<footer>
	Copyright ©2013 - <a href="http://www.idteam.es">IDteam</a>
</footer>

<!-- End Document
================================================== -->
</body>
</html>
<?php
	}
	?>
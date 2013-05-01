<?php 
    session_start(); 
    include('connect.php'); 
    if(empty($_SESSION['nombre'])) { // comprobamos que las variables de sesión estén vacías  
	header('Location: ../index.php');

	} else {
		$perfil = mysql_query("SELECT * FROM usuarios WHERE id='".$_GET['id']."'") or die(mysql_error()); 
        $row = mysql_fetch_array($perfil); 
        $id = $row["id"]; 
        $nick = $row["nombre"]; 
		$email = $row["email"]; 
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
		<div class="nine columns" id="navegation">
			<div class="two columns" id="icon" >
				<a href="contacto.php"><img src="img/cpanel_1.jpg" alt="">
				Soporte</a>
			</div>
			<div class="two columns" id="icon" >
				<img src="img/cpanel_2.jpg" alt="">
				Twitter 
			</div>
			<div class="two columns" id="icon" >
				<a href="registro.php"><img src="img/cpanel_3.jpg" alt="">
				Registro</a>
			</div>
			<div class="two columns" id="icon" >
				<a href="clients.php"><img src="img/cpanel_4.jpg" alt="">
				Clientes</a>
			</div>
			<div class="two columns" id="icon" >
				<img src="img/cpanel_1.jpg" alt="">
				Analytics
			</div>
			<div class="two columns" id="icon" >
				<img src="" alt="">
				texto
			</div>
			<div class="two columns" id="icon" >
				<img src="" alt="">
				texto
			</div>
			<div class="two columns" id="icon" >
				<img src="" alt="">
				texto
			</div>
			<div class="two columns" id="icon" >
				<img src="" alt="">
				texto
			</div>
			<div class="two columns" id="icon" >
				<img src="" alt="">
				texto 
			</div>
			<div class="two columns" id="icon" >
				<img src="" alt="">
				texto
			</div>
			<div class="two columns" id="icon" >
				<a href="logout.php"><img width="100px" height="100px" src="img/logout.png" alt="Desconectar"></a>
				
			</div>
		</div>
	<div class="six columns" >

		<div id="accordion">
		  <h3>Últimos proyectos</h3>
		  <div>
		    <p>
		    <div id="twitter_update_list"></div>
		    </p>
		  </div>
		  <h3>Perfil</h3>
		  <div>
		    <p>
            	<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
            	<p align="center"><label><font color="#FF0000"size="+3"><b>id:</b></font></label>
                <input type="text" name="textfield2">
                </p>
                <p align="center">
                <input type="submit" name="enviar" value="Enviar">
                </p>
                </form>
		    </p>
		  </div>
		  <h3>Section 3</h3>
		  <div>
		    <p>
		    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
		    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
		    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
		    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
		    </p>
		    <ul>
		      <li>List item one</li>
		      <li>List item two</li>
		      <li>List item three</li>
		    </ul>
		  </div>
		  <h3>Section 4</h3>
		  <div>
		    <p>
		    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
		    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
		    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
		    mauris vel est.
		    </p>
		    <p>
		    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
		    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
		    inceptos himenaeos.
		    </p>
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
?>
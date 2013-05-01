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
	<div class="nine columns" >

<?php

// Realizamos la conexión al servidor MySQL
include('connect.php'); 

// La variable submit es recibida desde el formulario de modificación de datos
// Comprobamos si este archivo es llamado desde el formulario se ejecuta la 
// consulta UPDATE, si no, se presenta el formulario para editar la información

if(isset($_POST["submit"])){

	$query = "UPDATE usuarios SET nombre='".$_POST["Nombre"]."', email='".$_POST["Email"]."', ".
		"nivel='".$_POST["Nivel"]."', web='".$_POST["Web"]."', ".
		"progreso='".$_POST["Progreso"]."' WHERE id='".$_POST["Id"]."'";
	$result=mysql_query($query) or die("Error: ".mysql_error());
	echo "Se han modificado los datos del usuario con id ".$id;
?>
<h3><a href="index.php">Volver</a></h3>
<?php

}else{

	// Recibimos la variable id pasada mediante el metodo GET
	// y depositamos el valor de esta en la variable llamada $id
	 
	$id=$_GET['id'];
	$query="SELECT * FROM usuarios WHERE id='".$id."'";
	$result=mysql_query($query) or die("Error: ".mysql_error());
	 
	// Verificamos con la consulta SELECT si existe un registro asociado al número
	// recibido presentamos el formulario de edición, sino avisamos que 
	// la operación no puede efectuarse
	 
	if(mysql_num_rows($result) > 0){

	while($Rs=mysql_fetch_array($result)) {
	 
	?>

	<form  method="post" name="frm" action="modificar.php">
	    <table>
		<tr>
		<td colspan=2>
		Formulario de Modificación</td>
	    </tr>
	  <tr>
	    <td> Nombre</td>
	    <td><input name='Nombre'  type='text' maxlength='20' value="<?php echo $Rs['nombre']; ?>"></td>
	    </tr>
	  <tr>
	    <td> Email</td>
	    <td><input name='Email'  type='text' maxlength='20' value="<?php echo $Rs['email']; ?>"></td>
	    </tr>
	  <tr>
	    <td> Web</td>
	    <td><input name='Web'  type='text' maxlength='20' value="<?php echo $Rs['web']; ?>"></td>
	    </tr>
	  <tr>
	    <td> Progreso</td>
	    <td><input name='Progreso'  type='text' maxlength='20' value="<?php echo $Rs['progreso']; ?>"></td>
	    </tr>
	  <tr>
	    <td> Nivel</td>
	    <td><input name='Nivel'  type='text' maxlength='20' value="<?php echo $Rs['nivel']; ?>"></td>
	    </tr>
	  <tr>
	    <td> ID</td>
	    <td><input name='Id'  type='text' maxlength='20' value="<?php echo $Rs['id']; ?>" readonly='true'></td>
	    </tr>        
	  <tr>
	    <td>&nbsp;</td>
	    <td><input name='submit' type='submit' value='Enviar'></td>
	  </tr>
	</table>
	</form>

	<?php
	}
	   
	}else{
	    echo "No fué posible realizar la operación solicitada al usuario con id ".$id;
	}
}
// Cerramos la conexión
mysql_close();
  
?>
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
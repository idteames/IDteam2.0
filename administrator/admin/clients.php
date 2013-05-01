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

include('connect.php'); 


$query="SELECT * FROM usuarios ORDER BY id ASC";

$result=mysql_query($query) or die("Error: ".mysql_error());

// Si no se encuentran registros en la tabla usuarios solo resta mostrar
// el mensaje correspondiente, si se encuentra uno o más registros se recorre 
// la tabla con la posibilidad de recoger los diferentes campos mediante la variable $Rs

if(mysql_num_rows($result) > 0){

// El encabezado de la tabla
?>
<table border=1>
  <tbody>
    <tr>
      <td>Id</td>
      <td>Nombre</td>
      <td>Email</td>
      <td>Web</td>
      <td>Progreso</td>
      <td>Nivel</td>
      <td>Fecha</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
</tr>
    


<?php      

  while($Rs=mysql_fetch_array($result)) {

echo "<tr>".
	  "<td>".$Rs["id"]."</td>".
      "<td>".$Rs["nombre"]."</td>".
      "<td>".$Rs["email"]."</td>".
      "<td>".$Rs["web"]."</td>".
      "<td>".$Rs["progreso"]."</td>".
      "<td>".$Rs["nivel"]."</td>".
      "<td>".$Rs["freg"]."</td>".
	  "<td><a href=./baja.php?id=".$Rs["id"].">Eliminar</a></td>".
	   "<td><a href=./modificar.php?id=".$Rs["id"].">Modificar</a></td>".
    "</tr>";
   
}


}else{

echo "No hay clientes para mostrar";

}
// Cerramos la conexión
mysql_close();

?>

</table>
</form>
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
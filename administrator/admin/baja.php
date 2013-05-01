<?php

include('connect.php'); 

// Recibimos la variable id pasada mediante el metodo GET
// y depositamos el valor de esta en la variable llamada $id

$id=$_GET['id'];
$query="SELECT id FROM usuarios WHERE id='".$id."'";
$result=mysql_query($query) or die("Error: ".mysql_error());

// Verificamos con la consulta SELECT si existe un registro asociado al número
// recibido concretamos la consulta DELETE, sino avisamos que fué imposible realizarla

if(mysql_num_rows($result) > 0){
	$query="DELETE FROM usuarios WHERE id='".$id."'";
	$result=mysql_query($query) or die("Error: ".mysql_error());
	header('Location: clients.php');
}else{
	echo "No fué posible dar de baja al usuario con id ".$id;
}
// Cerramos la conexión
mysql_close
 
?>
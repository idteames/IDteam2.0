<?php 
    session_start(); 
    include('connect.php'); // incluímos los datos de acceso a la BD 
    // comprobamos que se haya iniciado la sesión 
    if(isset($_SESSION['id'])) { 
        session_destroy(); 
        header("Location: ../index.php"); 
    }else {
		echo "Operación incorrecta.";
	}
?>

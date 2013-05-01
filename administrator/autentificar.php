<?php 
    session_start(); 
    include('connect.php'); 
    if(isset($_POST['enviar'])) { // comprobamos que se hayan enviado los datos del formulario 
        // comprobamos que los campos admins_nombre y clave no estén vacíos 
        if(empty($_POST['nombre']) || empty($_POST['clave'])) { 
            echo "El admin o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>"; 
        }else { 
            // "limpiamos" los campos del formulario de posibles códigos maliciosos 
            $nombre = mysql_real_escape_string($_POST['nombre']); 
            $clave = mysql_real_escape_string($_POST['clave']); 
            $clave = md5($clave); 
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD 
            $sql = mysql_query("SELECT id, nombre, clave FROM usuarios WHERE nombre='".$nombre."' AND clave='".$clave."'"); 
            if($row = mysql_fetch_array($sql)) { 
                $_SESSION['id'] = $row['id']; // creamos la sesion "id" y le asignamos como valor el campo id 
                $_SESSION['nombre'] = $row["nombre"]; // creamos la sesion "nombre" y le asignamos como valor el campo nombre 
                header("Location: admin/index.php"); 
            }else { 
?> 
                Error, <a href="index.php">Reintentar</a> 
<?php 
            } 
        } 
    }else { 
        header("Location: admin/index.php"); 
    } 
?>
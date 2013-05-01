 <?php 
    session_start(); 
    include('connect.php'); 


  if(empty($_SESSION['nombre'])) { // comprobamos que las variables de sesión estén vacías  
  header('Location: ../index.php');
  ?>
              <form class="navbar-form pull-right" method="post" action="autentificar.php">
              <input class="span2" name="nombre" type="text" placeholder="Usuario">
              <input class="span2" name="clave" type="password" placeholder="Contraseña">
              <button type="submit" name="enviar" class="btn btn-info">Login</button>
            </form>
  <?php
 } else {
        $perfil = mysql_query("SELECT * FROM usuarios WHERE nombre='".$_SESSION['nombre']."'") or die(mysql_error()); 
        $row = mysql_fetch_array($perfil); 
        $id = $row["id"]; 
        $nivel = $row["nivel"];
        if ($nivel == 1) {
          ?>
             <a class="pull-right" href="administrator"><button class="btn btn-info">Administracion</button></a>
  <?php
        }
  ?>
              <a class="pull-right" href="logout.php"><button class="btn btn-danger">Desconectar</button></a>
              <a class="pull-right" href="clientes/admin/index.php"><button class="btn btn-success" >Panel de Control</button></a>
<?php } ?>
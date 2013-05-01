<?php 
   // process form
   include('connect.php'); 
   if (isset($_POST["cliente"])) {
    $cliente = $_POST["cliente"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $comentario = $_POST["comentario"];
    $informacion = $_POST["informacion"];
    mysql_query("INSERT INTO contacto (cliente, email, telefono, comentario, informacion)
VALUES ('{$_POST['cliente']}','{$_POST['email']}','{$_POST['telefono']}','{$_POST['comentario']}','{$_POST['informacion']}')");
   $result = mysql_query($sql);
   ?>
<hr>
<h2>Muchas gracias, su mensaje fue enviado correctamente</h2> <br>
 <input type="submit" onClick="history.back()" value="Volver a contacto">
 <hr>

<?php
}else{
?> 
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>IDTEAM | Desarrollo y diseño web</title>
	<meta name="description" content="Equipo de desarrollo web empleando las últimas tecnologías del mercado a precios económicos...">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="shortcut icon" href="img/favicon.ico" />

<!-- # CSS #-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

<body>

    <!-- NAVBAR
    ================================================== -->

     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php"><img src="img/logo.png" alt=""></a></li>
              <li class="active"><a href="index.php">Inicio</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="webpersonal.php">Web personal</a></li>
                  <li><a href="webempresa.php">Web empresa</a></li>
                  <li><a href="webblog.php">Web blog</a></li>
                  <li><a href="#">Tu proyecto</a></li>
                </ul>
              </li>
              <li><a href="portafolio.php">Portafolios</a></li>
              <li><a href="#contact">Contacto</a></li>
              
            </ul>
 <?php 
  include('login.php'); 
  ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row-fluid" id="contacto">
        <div class="span6 ">
    <form name="formulario" class="form-horizontal" action="contacto.php" method="post">

              <label>Contacta con nosotros, te ayudaremos.</label>
              <div class="control-group">
                <input type="text" name="cliente" placeholder="Nombre">
              </div>

              <div class="control-group">
                <input type="text" name="email" placeholder="Email">
              </div>

              <div class="control-group">
                <input type="text" name="telefono" placeholder="Telefono">
              </div>

              <select name="informacion">
                <option>Información</option>
                <option>Presupuesto</option>
                <option>Contacto</option>
                <option>Otros</option>
              </select>

              <div class="control-group">
                <textarea rows="10"  name="comentario" placeholder="Mensaje"></textarea>
              </div>

              <div class="control-group">
                <button type="submit" value="enviar" class="btn">Enviar</button>
              </div>
      
          </form>        </div>
        <div class="span6 ">


¿Dónde puedes econtrarnos?
</br>
          <iframe width="90%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Fuenlabrada,+Espa%C3%B1a&amp;aq=0&amp;oq=fuenlabr&amp;sll=37.0625,-95.677068&amp;sspn=57.553742,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Fuenlabrada,+Madrid,+Comunidad+de+Madrid,+Espa%C3%B1a&amp;t=m&amp;z=14&amp;ll=40.290206,-3.803548&amp;output=embed"></iframe><br />



          <div class="bs-docs-example">
            <address>
              <abbr title="Correo electronico">Email:</abbr><a href="mailto:#"> idteames@gmail.com</a>
            </address>
          </div>
        
        </div>
      </div>
    </div>



    <div class="row-fluid" id="footer">
      <div class="span12" id="bloque3">
           <div class="row-fluid">
             <div class="span4">
                <ul class="unstyled">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="portafolio.php">Portafolios</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="sitemap.php">Site-map</a></li>
              </ul>
            </div>
            <div class="span4">
              <ul class="unstyled">
                Tipos de webs | Presupuesto
                <li><a href="webpersonal.php">Web personal</a></li>
                <li><a href="webempresa.php">Web empresa</a></li>
                <li><a href="webblog.php">Web blog</a></li>
              </ul>
           </div>
            <div class="span4" >
              <div class="bs-docs-example">
                <address>
                  <strong>IDteam.es</strong><br>
                  Fuenlabrada (Madrid)<br>
                  <abbr title="Telefono">Tlf:</abbr> 695113772</br>
                  <abbr title="Correo electronico">Email:</abbr><a href="mailto:#"> idteames@gmail.com</a>
                </address>
              </div>
           </div>
      </div>
    </div>
    </div>


<!-- # Scripts #-->
<script src="js/jquery-1.9.1.min.js"></script>	
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40457554-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html>

<?php 
} //end if 
?> 

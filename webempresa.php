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

<h2 class="text-center" id="packs">¡Encuentra lo que mejor se adapte a ti!</h2>
<div class="container" >
  <div class="row-fluid">
   <div class="span12">
      <table class="table table-striped" >
      <tr id="col">
        <th id="cola"></th>
        <th id="colb" >Pack Económico</th>
        <th id="colc" >Pack Basico</th>
        <th id="cold" >Pack Avanzado</th>
        <th id="cole" >Pack Experto</th>
      </tr>
      <tr id="precio">
        <th id="precio0"><A name="web">Packs</A></th>
        <th id="precio1">199€</th>
        <th id="precio2">299€</th>
        <th id="precio3">499€</th>
        <th id="precio4">799€</th>
      </tr>
      <tr>
        <th>Número de Páginas</th>
        <td>De 1 a 5</td>
        <td>De 1 a 10</td>
        <td>De 1 a 20</td>
        <td>De 1 a 30</td>
      </tr>
      <tr>
        <th>Dominio + Hosting</th>
        <td>6 meses</td>
        <td>1 año</td>
        <td>2 años</td>
        <td>2 años</td>
      </tr>
      <tr>
        <th>Atencion al cliente</th>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
        <tr>
        <th>Compatibilidad</th>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>Cuentas de correo</th>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
        <tr>
        <th>Sección de contacto</th>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>HTML5 / CSS3</th>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>PHP</th>
        <td><img src="img/cross.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>Javascript / Jquery</th>
        <td><img src="img/cross.png"></td>
        <td><img src="img/cross.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>Redes Sociales</th>
        <td><img src="img/cross.png"></td>
        <td><img src="img/cross.png"></td>
        <td><img src="img/check.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>Adaptado a movil</th>
        <td><img src="img/cross.png"></td>
        <td><img src="img/cross.png"></td>
        <td><img src="img/cross.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>Google analytics</th>
        <td><img src="img/cross.png"></td>
        <td><img src="img/cross.png"></td>
        <td><img src="img/cross.png"></td>
        <td><img src="img/check.png"></td>
      </tr>
      <tr>
        <th>SEO</th>
        <td><img src="img/cross.png"></td>
        <td><img src="img/cross.png"></td>
        <td>7 Días</td>
        <td>20 Días</td>
      </tr>
      <tr>
        <th>Mantenimiento</th>
        <td><img src="img/cross.png"></td>
        <td>1 mes</td>
        <td>3 meses</td>
        <td>6 meses</td>
      </tr>

        <tr id="resultado">
        <th></th>
        <td><button class="btn btn-info" id="resultado1">Contratar</button></td>
        <td><button class="btn btn-info" id="resultado2">Contratar</button></td>
        <td><button class="btn btn-info" id="resultado3">Contratar</button></td>
        <td><button class="btn btn-info" id="resultado4">Contratar</button></td>
      </tr>
    </table>
  </div>
</div>
</div>




<div class="row-fluid">
  <div class="span12" id="bloque2">
       <div class="row-fluid">
         <div class="span5">
          <h2>¿Necesitas información?</h2>
          <p>Nos dudes en preguntarnos cualquier información que necesites, estamos dispuestos a resolverte tus dudas lo antes posible, tambien puedes seguirnos es las redes sociales donde te pondremos al día de toda la información sobre la web, ofertas etc... </p>

          <a href="#" ><img src="img/twitter-64.png" alt="redes_sociales"></a>
          <a href="#" ><img src="img/facebook-64.png" alt="redes_sociales"></a>
          <a href="#" ><img src="img/googleplus-64.png" alt="redes_sociales"></a>
          <a href="#" ><img src="img/email-64.png" alt="redes_sociales"></a>
        </div>
        <div class="span6" id="formu">
              <form class="form-horizontal">
                <div class="control-group" id="form_index">
                  <div class="controls">
                    <input type="text" placeholder="Usuario" id="form_contacto">
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <input type="email" placeholder="usuarios@usuario.com" id="form_contacto">
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <textarea rows="6" placeholder="mensaje" id="form_contacto"></textarea><button type="submit" class="btn" id="form_contacto_boton">Enviar</button>
                  </div>
                </div>
                    
                  </div>
                </div>
              </form>
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
            <li><a href="contacto.php">Contacto</a></li>
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


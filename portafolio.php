<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>IDTEAM | Desarrollo y diseño web </title>
  <meta name="description" content="Equipo de desarrollo web empleando las últimas tecnologías del mercado a precios económicos...">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="shortcut icon" href="img/favicon.ico" />

<!-- # CSS #-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="css/style.css">

</head>
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
              <li><a href="#ancla_portafolios">Portafolios</a></li>
              <li><a href="contacto.php">Contacto</a></li>
              
            </ul>
 <?php 
  include('login.php'); 
  ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  <hr id="portafolios_page">
  <h3 class="text-center" id="portafolio">ESTOS SON NUESTROS PROYECTOS</h3>
  <div class="row-fluid" >

    <div class="span12" id="bloque1">
      <li class="span3">
        <a href="portafolio/portafolio1/index.php" class="thumbnail">
          <img src="img/portafolio1.jpg" alt="260x180" style="width: 260px; height: 180px;" src=""/>
        </a>
      </li>
      <li class="span3">
        <a href="index.php" class="thumbnail">
           <img src="img/portafolio2.jpg" alt="260x180" style="width: 260px; height: 180px;" src=""/>
        </a>
      </li>
      <li class="span3">
        <a href="http://www.creandoweb.es" class="thumbnail">
          <img src="img/portafolio3.jpg" alt="260x180" style="width: 260px; height: 180px;" src=""/>
        </a>  
      </li>
      <li class="span3">
        <a href="#" class="thumbnail">
          <img src="img/portafolio4.jpg" alt="260x180" style="width: 260px; height: 180px;" src=""/>
        </a>  
      </li>
    </ul>
  </div>

<div class="row-fluid">
  <div class="span12" id="bloque2">
       <div class="row-fluid">
         <div class="span5">
          <h2>¿Necesitas información?</h2>
          <p>No dudes en preguntarnos cualquier información que necesites, estamos dispuestos a resolverte tus dudas lo antes posible, tambien puedes seguirnos es las redes sociales donde te pondremos al día de toda la información sobre la web, ofertas etc... </p>

          <a href="https://twitter.com/idteames" ><img src="img/twitter-64.png" alt="redes_sociales"></a>
          <a href="#" ><img src="img/facebook-64.png" alt="redes_sociales"></a>
          <a href="#" ><img src="img/googleplus-64.png" alt="redes_sociales"></a>
          <a href="mailto:idteames@gmail.com" ><img src="img/email-64.png" alt="redes_sociales"></a>
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
            <li><a href="#ancla_portafolios">Portafolios</a></li>
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


<!-- Script (Javascript y jquery)
================================================== -->
<script src="js/jquery-1.9.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>





<!-- Código de Google analytics
================================================== -->
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


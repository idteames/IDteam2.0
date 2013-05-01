<!doctype html>
<html lang="es">
<head>
    <?php include('includes/head.php') ?>
</head>
<body>


<!-- NAVBAR -->
<?php include('includes/nav.php') ?>

<!-- # Carousel #-->
	  <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
<!-- # Carousel  item 1#-->
        <div class="item active">
          <div class="container">
          <div class="row-fluid">
            <div class="span12" id="principal">
              <h1>ID-TEAM </h1>
              <h2>Somos un equipo de desarrollo web empleando las últimas tecnologías del mercado.</h2>
              <center><a class="btn btn-warning btn-large" href="contacto.php">Contactar</a></center>
              
            </div>
          </div>
          </div>
        </div>
<!-- # Carousel  item 2#-->
        <div class="item">
          <div class="container">
          <div class="row-fluid">
            <div class="carousel-caption span9">
              <h1>Últimas tecnologias</h1>
              <p class="lead">Estamos pendientes de las últimas tecnologias del mercado, buscando siempre la rapidez, efectividad y productividad de nuestro equipo, aumentando la profesionalidad a nuestros clientes.</p>
            </div>
            <div class="span3" id="imagen-header">
            	<img src="img/carrusel_2.png" alt="" />
            </div>
          </div>
          </div>
        </div>
<!-- # Carousel  item 3#-->
        <div class="item">
          <div class="container">
          <div class="row-fluid">
            <div class="carousel-caption span9">
              <h1>Social Media</h1>
              <p class="lead">Estamos en la era de las redes sociales, anunciamos tu web en todas las redes sociales dando a conocer tus proyectos.</p>
            </div>
            <div class="span3" id="imagen-header">
            	<img src="img/carrusel_3.png" alt="">
            </div>
          </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

  <aside id="redes-sociales"><center><div id="tweet"></div>
  <script>$.getJSON("https://api.twitter.com/1/statuses/user_timeline/id_team_es.json?count=1&include_rts=1&callback=?", function(data) {
  $("#tweet").html(data[0].text);
  });</script></center></aside>


<div class="container-fluid">
	<div class="row-fluid">
	   <div class="span12" id="bloque1">
	     <div class="row-fluid">
	       <div class="span4">
            <div id="circle"><img src="img/circle1.jpg" alt=""></div>
  	          <h2><img src="img/ellipsis.png" alt="" /> Anunciate</h2>
  	             <p>¿Quieres una web para enseñar al mundo que sabes hacer? realizamos páginas web personales donde podrás mostrar tu portafolios, curriculum, blog o tienda online donde vender tus productos, te conectamos a las redes sociales...</p>
  	          <p><a class="btn" href="webpersonal.php">Más información &raquo;</a></p>
            </div>
	       <div class="span4">
            <div id="circle"><img src="img/circle2.jpg" alt=""></div>
              <h2><img src="img/ellipsis.png" alt="" /> Negocios</h2>
                  <p>¿Tienes un negocio o estas pensando en abrir uno? en ID-team realizamos proyectos profesionales para pymes y grandes empresas, aumenta tus ingresos y a la vez tus clientes, compite a un nivel superior contra tu competencia.</p>
              <p><a class="btn" href="webempresa.php">Más información &raquo;</a></p>
            </div>
	        <div class="span4">
            <div id="circle"><img src="img/circle3.jpg" alt=""></div>
              <h2><img src="img/ellipsis.png" alt="" /> Mundo movil</h2>
                  <p>No pagues más dinero por crear una web desde cero para los dispositivos móviles, utilizamos lo último en programación web "responsive design" tu web se adapta automáticamente en dispositivos móviles, tablets y todas las resoluciones.</p>
              <p><a class="btn" href="webblog.php" id="ancla_portafolios">Más información &raquo;</a></p>
            </div>
	        </div>
        </div>
	</div>
</div>
<hr>

<h3 class="text-center" id="portafolio">ESTOS SON NUESTROS PROYECTOS</h3>
<div class="container">
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
</div>
</div>



<!-- INFORMACION -->
<?php include('includes/informacion.php') ?>
<!-- FOOTER -->
<?php include('includes/footer.php') ?>
<!-- CONSULTA -->
<?php include('includes/consulta.php') ?>
<!-- GOOGLE ANALYTICS -->
<?php include('includes/analytics.php') ?>


<!-- JAVASCRIPT - JQUERY -->
<script src="js/jquery-1.9.1.min.js"></script>	
<script src="js/bootstrap.min.js"></script>



</body>
</html>


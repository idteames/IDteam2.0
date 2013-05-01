<html>
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

</html>

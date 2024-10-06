<?php
include("php/conexion.php");

$conexion = conectarDBS();

$query = "SELECT 1"; 

$resultado = $conexion->query($query);

// Verificar si la consulta fue exitosa

$conexion->close();
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Empresa De Seguridad Privada del Atlantico </title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons
    ================================================== -->
  <link rel="icon" type="image/png" href="img/logos aespa.png">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/modernizr.custom.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Navigation
    ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1"> <span class="sr-only"> </span> <span class="icon-bar"></span>
          <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html">Aespa</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home" class="page-scroll">Inicio</a></li>
          <li> <a href="#about-section" class="page-scroll">Sobre Nosotro</a></li>
          <li><a href="#services-section" class="page-scroll">Servicios</a></li>
          <li><a href="#repertorio" class="page-scroll">Repertorio</a></li>

          <li><a href="#contact-section" class="page-scroll">Contactos</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- Header -->
  <header class="text-center" name="home">
    <div class="intro-text">
      <h1>¿Que es <span class="color">Aespa?</span></h1>
      <p class="Asociacion">
        <strong>Asociación de Empresa de Seguridad Privada del Atlántico.</strong>
      </p>
      <div class="clearfix"></div>
      <a href="#about-section" class="btn btn-default btn-lg page-scroll">Leer Mas </a>
    </div>
  </header>
  <!-- About Section -->
  <div id="about-section">
    <div class="container">
      <div class="section-title">
        <h2>Sobre Nosotro</h2>
        <hr>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-md-4">
          <h4>¿Quienes somos?</h4>
          <p>Es un honor darles la más cordial bienvenida a AESPA, su socio de confianza en soluciones integrales de
            seguridad. Nos complace recibirlos en nuestro sitio web, donde la protección y la tranquilidad son nuestra
            prioridad. En AESPA, entendemos que cada cliente es único, y por eso ofrecemos soluciones personalizadas que
            se adaptan a sus necesidades específicas, ya sea para su hogar, su negocio o cualquier otro entorno que
            desee proteger.
          </p>
        </div>
        <div class="col-md-4">
          <h4>¿Que hacemos?</h4>
          <p> En AESPA comprendemos la importancia de sentirse seguro en un entorno cada vez más complejo. Ya sea que
            necesite proteger su hogar, su empresa, estamos aquí para ofrecerle la asistencia
            experta que requiere. Nuestro equipo altamente capacitado y nuestra tecnología de vanguardia están a su
            disposición para asegurar que sus necesidades de seguridad sean atendidas con precisión y
            profesionalismo.</p>
        </div>
        <div class="col-md-4">
          <h4>¿Por que escogernos?</h4>
          <p>Elegir AESPA significa optar por un socio comprometido con su seguridad y tranquilidad, ofreciendo
            soluciones personalizadas que se adaptan a sus necesidades específicas. Nuestro equipo de expertos utiliza
            tecnología de vanguardia para garantizar sistemas de seguridad eficaces y confiables, mientras que nuestro
            enfoque en el servicio al cliente construye relaciones de confianza.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Services Section -->
  <div id="services-section">
    <div class="container">

      <div class="section-title">
        <h2>Nuestros servicios</h2>
        <hr>
      </div>

      <div class="space"></div>
      <div class="row">

        <div class="col-md-3 col-sm-6 service"> <i> <img src="img/proteger.png" alt="ícono" class="icono"></i> <i
            class="fa fadesktop"> </i>
          <h4>Seguridad Privada</h4>
          <p>Servicio de seguridad privada las 24 horas, los siete días de la semana, en ambas jornadas.</p>
        </div>

        <div class="col-md-3 col-sm-6 service"> <i> <img src="img/casa.png" alt="ícono" class="icono"></i> <i
            class="fa fadesktop"> </i>

          <h4>Limpieza de Citios</h4>
          <p>Servicios de limpieza para oficinas, despacho, locales comerciales, viviendas .</p>
        </div>

        <div class="col-md-3 col-sm-6 service"><i> <img src="img/frontera.png" alt="ícono" class="icono"></i> <i
            class="fa fadesktop"> </i>
          <h4>Control de acceso</h4>
          <p>Control de acceso Sistemas de vigilancia y gestión de entradas y salidas en instalaciones.</p>
        </div>

        <div class="col-md-3 col-sm-6 service"> <i> <img src="img/jardineria.png" alt="ícono" class="icono"></i> <i
            class="fa fadesktop"> </i>
          <h4>Jardinería</h4>
          <p> Jardinerí Diseño y mantenimiento de jardines, áreas verdes y locales.</p>
        </div>
      </div>








    </div>
  </div>
  </div>
  <!-- Portfolio Section -->
  <div id="repertorio">
    <div class="container"> <!-- Container -->
      <div class="section-title">
        <h2>Repertorio</h2>
        <hr>
        <div class="clearfix"></div>
      </div>
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">Todo</a></li>
              <li><a href="#" data-filter=".web">Seguridad Privada</a></li>
              <li><a href="#" data-filter=".app">Servicio de limpieza</a></li>
              <li><a href="#" data-filter=".branding">Jardineria</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/01.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Seguridad</h4>
                    <small>24/7</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/01.jpg" class="img-responsive" alt="">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 app">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/02.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <small>App Development</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/02.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/03.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <small>Web Design</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/03.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/04.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <small>Web Design</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 app">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/05.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <small>App Development</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 branding">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/06.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <small>Branding</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 branding app">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/07.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <small>App Development, Branding</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/07.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 web">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/08.jpg" rel="prettyPhoto">
                  <div class="hover-text">
                    <h4>Project Title</h4>
                    <small>Web Design</small>
                    <div class="clearfix"></div>
                  </div>
                  <img src="img/portfolio/08.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Team Section
  <div id="team-section">
    <div class="container">
      <div class="section-title">
        <h2>Meet the Team</h2>
        <hr>
      </div>
      <div id="row">
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/01.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>John Doe</h3>
              <p>Founder</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/02.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Mike Doe</h3>
              <p>Web Designer</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/03.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jane Doe</h3>
              <p>Creative Director</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/team/04.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Larry Show</h3>
              <p>Project Manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 -->


  <!-- Contact Section -->
  <div id="contact-section">
    <div class="container">
      <div class="section-title center">
        <h2>Contactanos</h2>
        <hr>
      </div>
      <div class="col-md-4">
        <h4>Informacion de Contacto</h4>
        <div class="space"></div>
        <p><i class="fa fa-map-marker"></i>Aldea El Cacao Jutiapa Atlantidad <br>
          Honduras a 300 metros de la CA-13</p>
        <div class="space"></div>
        <p><i class="fa fa-envelope-o"></i>ezequielchavez537@gmail.com</p>
        <div class="space"></div>
        <p><i class="fa fa-phone"></i>+504 3160-8044</p>
      </div>
      <div class="col-md-8">
        <h4>Déjanos un mensaje</h4>

     



        <form action="insertar.php" method="post" enctype="multipart/form-data">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
               
                <input type="tel" id="telefono" name="telefono" placeholder="Telefono" class="form-control" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            
            
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Direccion" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
               
                <input type="email" id="email"  name="email"class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            

          </div>

          <div class="form-group">
            <textarea id="descripcion"  name="descripcion" class="form-control" rows="4" placeholder="Mensaje"
              required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>

          <a href="#contact-section"> <input type="submit" name="insertar"  value="Enviar Mensaje" class="btn btn-default" ></input>
        </a>
        </form>






      </div>
    </div>
  </div>
  <div id="social-section">
    <div class="container">
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/profile.php?id=61565899935467&mibextid=ZbWKwL"><i
                class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
          <!--<li><a href="#"><i class="fa fa-github"></i></a></li>-->
          <li><a href=" https://wa.me/qr/JYMNU6YRZU7TE1 "><i class="fa fa-whatsapp"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container">
      <p>Ezequiel &copy; Private asociation <a href="" rel="nofollow">Aespa</a></p>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/SmoothScroll.js"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="js/contact_me.js"></script>

  <!-- Javascripts
    ================================================== -->
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
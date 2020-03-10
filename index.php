<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags Seo-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Meta etiquetas SEO -->
  <meta name="description" content="Asesoría de alto nivel profesional en materia Fiscal, Contable, Administrativa, Jurídica, inmobiliaria y de Capital Humano">
  <meta name="keywords" content="asesores, fiscal, financiero, finanzas, estado financiero, solucion fiscal, asesor fiscal, asesoria fiscal, asesoria de negocios, diseño de objetivos, asesor financiero, planeacion fiscal, contabilidad, contable, contadores, contador, declaracion anual, tramites, impuestos, persona fisica, reclutar, reclutamiento, persona moral, contribuyente, estudio socioeconomico, control interno, administracion, recursos humanos, capital humano, capacitacion, capacitacion empresarial, laboral, contratacion, personal nuevo, busqueda de personal, inmobiliaria, inmuebles, propiedad, terreno, grupo inmobiliario, abogados, despacho de abogados, juridico, agencia de abogados, asesor juridico, juicio oral, juicio laboral, riesgo laboral, ley mercantil, seguridad social, derecho penal, derecho civil, derecho laboral, derecho fiscal, marco legal, contribuciones, contrato mercantil, contrato compraventa, compliance, seguridad laboral, defensa fiscal">

  <meta name="robots" content="index, follow">
  <meta name="author" content="Geek, Carolina Jimenez Delgado" />
  <meta name="copyright" content="Siempre Hay Alguien, A.C." />

  <link rel="canonical" href="https://asesoresgo.com/">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <!-- Metaetiquetas SEO -->

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Font awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">

  <!--Slick -->
  <link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css"/>

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<title>Siempre hay alguien - A.C.</title>
</head>
<body>

	<!--Navbar -->
  <nav class="navbar navbar-expand-md navbar-light  d-flex align-items-start" id="menu">
    <a class="navbar-brand" href="index.php" title="Inicio">
      <img src="image/logo.svg" height="120" class="align-top desk" alt="asesores fiscales">
      <img src="image/logo.svg" height="65" class="align-top movil" alt="asesores fiscales">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class=""><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse pt-5" id="collapsibleNavbar"> <!-- nav-sc-item -->
      <ul class="navbar-nav">
        <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
          <a class="nav-link active" href="index.php" title="Inicio"><span class="hover-nav">INICIO</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Servicios">
            EVENTOS
          </a>
          <div class="dropdown-menu dropdown-multicol" aria-labelledby="navbarDropdown">
            <div class="dropdown-row">
              <a class="dropdown-item" href="contabilidad.php" title="Contabilidad">SOCIALES</a>
              <a class="dropdown-item" href="fiscal.php" title="Fiscal">DEPORTIVOS</a>
            </div>
            <div class="dropdown-row">
              <a class="dropdown-item" href="administrativo.php" title="Administrativo">CULTURALES</a>
              <a class="dropdown-item" href="rh.php" title="Recursos Humanos">REUNIONES</a>
            </div>
            <div class="dropdown-row">
              <a class="dropdown-item" href="#" title="Inmobiliaria">APOYOS</a>
              <a class="dropdown-item" href="juridico.php" title="Juridico">TALLERES</a>
            </div>
          </div>
        </li>
        <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
          <a class="nav-link" href="blog.php" title="Blog Asesores financieros"><span class="hover-nav text-dorado">BLOG</span></a>
        </li>
        <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
          <a class="nav-link" href="index.php#contacto" title="Contacto"><span class="hover-nav text-dorado">CONTACTO</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- ./navbar -->

  <!-- php Mensaje de envio de formulario -->
    <?php
      if(isset($_GET['enviado'])){
        if($_GET['enviado'] == 1){
            echo '<div class="caption-alert alert alert-success alert-dismissible mt-4>
                  <a href="#" title="icon cerrar" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>¡Tu mensaje se ha enviado exitosamente!</strong> Gracias por tu confianza, en breve nos pondremos en contacto.
                </div>';
        }else if($_GET['enviado'] == 0){
          echo '<div class="caption-alert alert alert-danger alert-dismissible mt-4">
                  <a href="#" title="icon cerrar" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>!Error!</strong> Hubo un problema al enviar tu mensaje, por favor inténtalo nuevamente.
                </div>';
        }
      }
    ?>
    <!--*************************************-->

	<!-- Carrusel inicio -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000" data-pause="false">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleFade" data-slide-to="1"></li>
      <li data-target="#carouselExampleFade" data-slide-to="2"></li>
      <li data-target="#carouselExampleFade" data-slide-to="3"></li>
      <li data-target="#carouselExampleFade" data-slide-to="4"></li>
      <li data-target="#carouselExampleFade" data-slide-to="5"></li>
    </ol>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="image/contabilidad.jpg" class="desk img-fluid w-100" alt="asesoria contable" title="asesoria contable">
        <img src="image/mov/contabilidad.jpg" class="movil img-fluid carmov w-100" alt="asesoria contable" title="asesoria contable">
        <div class="carousel-captionInt">
          <h2 class="text-doradolight desk">SOCIALES</h2>
          <P class="text-dorado desk">Es uno de los factores decisores para que una empresa sea exitosa, ¡define el rumbo de tu empresa!.</P>
          <h2 class="text-bluedark movil">SOCIALES</h2>
          <P class="text-bluedark movil">Es uno de los factores decisores para que una empresa sea exitosa, ¡define el rumbo de tu empresa!.</P>
          <div class="text-center pt-4">
            <a href="contabilidad.php"><button class="btn btn-primary btn-serv">Ver más</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/fiscal.jpg" class="desk img-fluid w-100" alt="asesoria fiscal" title="asesoria fiscal">
        <img src="image/mov/fiscal.jpg" class="movil img-fluid carmov w-100" alt="asesoria fiscal" title="asesoria fiscal">
        <div class="carousel-captionInt">
          <h2 class="text-doradolight desk">DEPORTIVOS</h2>
          <p class="text-dorado desk">Obtén todos los beneficios y estímulos que ofrecen las leyes dentro de un marco de legalidad y transparencia.</p>
          <h2 class="text-bluedark movil">DEPORTIVOS</h2>
          <p class="text-bluedark movil">Obtén todos los beneficios y estímulos que ofrecen las leyes dentro de un marco de legalidad y transparencia.</p>
          <div class="text-center pt-4">
            <a href="fiscal.php"><button class="btn btn-primary btn-serv">Ver más</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/administrativo.jpg" class="desk img-fluid w-100" alt="asesoria administrativa" title="asesoria administrativa">
        <img src="image/mov/administrativo.jpg" class="movil img-fluid carmov w-100" alt="asesoria administrativa" title="asesoria administrativa">
        <div class="carousel-captionInt">
          <h2 class="text-doradolight desk">CULTURALES</h2>
          <p class="text-dorado desk">¡Desarrolla la productividad y la competitividad de tu empresa u organismo social con una administración de calidad!.</p>
          <h2 class="text-bluedark movil">CULTURALES</h2>
          <p class="text-bluedark movil">¡Desarrolla la productividad y la competitividad de tu empresa u organismo social con una administración de calidad!.</p>
          <div class="text-center pt-4">
            <a href="administrativo.php"><button class="btn btn-primary btn-serv">Ver más</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/rh.jpg" class="desk img-fluid w-100" alt="Recursos Humanos" title="Recursos Humanos">
        <img src="image/mov/rh.jpg" class="movil img-fluid carmov w-100" alt="Recursos Humanos" title="asesoria administrativa">
        <div class="carousel-captionInt">
          <h2 class="text-doradolight desk">REUNIONES</h2>
          <p class="text-dorado desk">Incrementa la productividad de tu empresa mejorando la calidad y habilidades de tu personal.</p>
          <h2 class="text-bluedark movil">REUNIONES</h2>
          <p class="text-bluedark movil">Incrementa la productividad de tu empresa mejorando la calidad y habilidades de tu personal.</p>
          <div class="text-center pt-4">
            <a href="rh.php"><button class="btn btn-primary btn-serv">Ver más</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/inmobiliaria.jpg" class="desk img-fluid w-100" alt="Recursos Humanos" title="Recursos Humanos">
        <img src="image/mov/inmobiliaria.jpg" class="movil img-fluid carmov w-100" alt="Recursos Humanos" title="asesoria administrativa">
        <div class="carousel-captionInt">
          <h2 class="text-doradolight desk">APOYOS</h2>
          <p class="text-dorado desk">Consigue resultados satisfactorios a corto plazo en el mercado inmobiliario con una atención integral y personalizada.</p>
          <h2 class="text-bluedark movil">APOYOS</h2>
          <p class="text-bluedark movil">Consigue resultados satisfactorios a corto plazo en el mercado inmobiliario con una atención integral y personalizada.</p>
          <div class="text-center pt-4">
            <a href="#"><button class="btn btn-primary btn-serv">Ver más</button></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/juridico.jpg" class="desk img-fluid w-100" alt="Recursos Humanos" title="Recursos Humanos">
        <img src="image/mov/juridico.jpg" class="movil img-fluid carmov w-100" alt="Recursos Humanos" title="asesoria administrativa">
        <div class="carousel-captionInt">
          <h2 class="text-doradolight desk">TALLERES</h2>
          <p class="text-dorado desk">El capital humano es la base de cualquier entidad económica, conocido también como Recursos Humanos, está compuesta de seres humanos que se unen para beneficio mutuo...</p>
          <h2 class="text-bluedark movil">TALLERES</h2>
          <p class="text-bluedark movil">El capital humano es la base de cualquier entidad económica, conocido también como Recursos Humanos, está compuesta de seres humanos que se unen para beneficio mutuo...</p>
          <div class="text-center pt-4">
            <a href="juridico.php"><button class="btn btn-primary btn-serv">Ver más</button></a>
          </div>
        </div>
      </div>

      <!--<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>-->
    </div>
  </div>
  <!-- ./Carrusel iniciio-->

  <!-- Quienes Somos -->
  <section class="bg-somos" id="nosotros">
    <div class="container pt-5">
      <div class="row pt-5">

        <div class="col-md-5">
          <img src="image/logo-somos.png" class="desk" alt="asesoria financiera" width="100%"  style="opacity:0.55">
          <img src="image/logo-somos.png" class="movil img-fluid" alt="asesoria financiera"  style="opacity:0.55">
        </div>

        <div class="col-md-7 mt-5 pb-5">
          <h1 class="text-bluedark">Somos</h1>
          <p class="text-bluedark text-justify">
            Somos una AC sin fines de lucro, dedicada a trabajar por mejorar Ocoyoacac y ayudar a nuestra gente.
          </p>
          <p class="text-bluedark text-justify">
            Ofrecemos apoyo y soluciones a la comunidad generando resultados satisfactorios; proporcionando seguridad y confianza a cada miembro que acude a nosotros.
          </p>
        </div>

      </div>
    </div>
  </section>
  <!-- ------------- -->


  <!-- Page Quienes -->
  <section class="bg-quienes pt-5 pb-5">
    <div class="container">
      <div class="center mt-5 text-center" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
        <div class="clip text-justify p-4">
          <div class="row">
            <div class="col-md-4">
              <img src="image/mision.png" class="img-fluid" alt="asesoria fiscal" title="asesoria fiscal">
            </div>
            <div class="col-md-8 pt-5">
              <h3 class="text-dorado"></h3>
              <h4 class="text-dorado">Generar un cambio de mentalidad positiva en los ciudadanos de Ocoyoacac fomentando la participación, trabajando en diversos temas para mejorar nuestro entorno social.</h4>
            </div>
          </div>
        </div>

        <div class="clip text-justify p-4">
          <div class="row">
            <div class="col-md-4">
              <img src="image/vision.png" class="img-fluid" alt="asesoria fiscal" title="asesoria fiscal">
            </div>
            <div class="col-md-8 pt-5">
              <h3 class="text-dorado"></h3>
              <h4 class="text-dorado">Contagiar a toda una sociedad de optimismo y ganas de colaborar en actividades que ayuden a hacer de Ocoyoacac un mejor lugar para todos.</h4>
            </div>
          </div>
        </div>

        <div class="clip text-center p-4">
          <div class="row">
            <div class="col-md-4 offset-md-2">
              <img src="image/objetivos.png" class="img-fluid" alt="asesoria fiscal" title="asesoria fiscal">
            </div>
            <div class="col-md-5 pt-5">
              <h3 class="text-dorado"></h3>
              <h3 class="text-dorado">Progreso</h3>
              <h3 class="text-dorado">Eficacia</h3>
              <h3 class="text-dorado">Humanismo</h3>
              <h3 class="text-dorado">Honradez</h3>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>

        <div class="clip p-4">
          <div class="row">
            <div class="col-md-4 offset-md-2">
              <img src="image/valores.png" class="img-fluid" alt="asesoria fiscal" title="asesoria fiscal">
            </div>
            <div class="col-md-5 pt-5">
              <div class="row">
                <div class="col-md-4">
                  <h3 class="text-dorado"></h3>
                  <p class="text-dorado">
                  Amor<br>
                  Solidaridad<br>
                  Honestidad<br>
                  Fraternidad<br></p>
                </div>
                <div class="col-md-5 pt-5">
                    <p class="text-dorado">
                     Generosidad<br>
                     Dignidad<br>
                     Laboriosidad<br>
                     Humildad<br></p>
               </div>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="bg-contacto pt-5" id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 boxC">
          <h1 class="text-center">AFILIATE</h1>
          <form method="POST" action="contact.php">
            <div class="row">

              <div class="form-group col-md-12">
                <input id="name" type="text" class="form-control" name="name" required placeholder="Nombre:">
              </div>

              <div class="form-group col-md-12">
                <input id="direccion" type="text" class="form-control" name="dir" required placeholder="Dirección">
              </div>

              <div class="form-group col-md-12">
                <input id="telefono" type="text" class="form-control" name="tel" placeholder="Teléfono / Celular:">
              </div>

              <div class="form-group col-md-12">
                <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico:">
              </div>

              <div class="form-group col-md-12">
                <textarea class="form-control form-control-rld" id="mensaje" rows="5" name="mensaje" placeholder="Mensaje:"></textarea>
                <!--<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">-->
              </div>

              <div class="form-group col-md-12 ">
                <button type="submit" class="btn btn btn-primary btn-serv float-left pl-5 pr-5">
                  Enviar
                </button>
              </div>

            </div>
          </form>
        </div>

        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center boxC2">
          <div class="col-md-12 mb-4">
            <p class="mb-4"><img src="image/tel-icon.svg" width="30"> T. (728) 287 81 04</p>
            <p class="mb-4"><img src="image/mail-icon.svg" width="30"> contacto@ocoyoacac.com</p>
            <p class="mb-4"><img src="image/face-icon.svg" width="30"> /siemprehayalguienocoyoacac</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <footer class="bg-bluedark">
    <div class="container">
      <div class="col-md-11 mx-auto text-center pt-5 foot">
        <a href="index.php" class="text-doradolight pr-2" title="Home">Inicio</a>
        <span class="ml-5 mr-5 deskC text-doradolight">/</span>
        <a href="index.php#nosotros" class="text-doradolight pr-2" title="Nosotros">Nosotros</a>
        <span class="ml-5 mr-5 deskC text-doradolight">/</span>
        <a href="index.php#servcios" class="text-doradolight pr-2" title="Eventos">Eventos</a>
        <span class="ml-5 mr-5 deskC text-doradolight">/</span>
        <a href="index.php#contacto" class="text-doradolight pr-2" title="Contacto">Contacto
        </a>
        <a href="" class="text-doradolight pl-4 deskF" title="FaceBook">
          <img src="image/face-icon.svg" width="30">
          <!--<i class="fa fa-facebook" aria-hidden="true"></i>-->
        </a>

        <p class="text-white">
          <br>
          <a class="text-bluelight" href="aviso-de-privacidad.php" title="Aviso de Privacidad"> AVISO DE PRIVACIDAD </a>
          <br>
        </p>
      </div>
      <div class="row mx-auto">
        <div class="col-md-12 text-center">
          <p class="text-doradolight font-min"> Siempre hay Alguien Ocoyoacac A.C Derechos Reservados 2020</p>
        </div>
        <div class="col-md-12 text-center">
          <a class="text-doradolight font-min" href="https://ztark.mx/" title="Desarrollado por Geek">Powered By Geek</a>
        </div>
      </div>

      <h1 style="opacity: 0;font-size: 8px;margin-bottom: 0;">
      </h1>
    </div>
  </footer>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- para los carruseles -->

  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="css/slick/slick.min.js"></script>
  <!-- Carrusel clientes -->
    <script type="text/javascript">
      $(document).ready(function(){

        $('.center').slick({
          centerMode: true,
          infinite: true,
          centerPadding: '20px',
          slidesToShow: 2,
          speed: 500,
          variableWidth: false,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
      });
      $('.center').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
          //console.log('beforeChange', currentSlide, nextSlide);
      });
      $('.center').on('afterChange', function (event, slick, currentSlide) {
          //console.log('afterChange', currentSlide);
      });

    });
    </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: 10000
      })
    });
  </script>


</body>
</html>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Nuevos Caminos - Sobre Nosotros</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400"/>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/styleF.css" />
  </head>
  <body>
    <?php include 'src/includes/Navbar.php'; ?>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset p-0">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Sobre Nosotros</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">Sobre Nosotros</li>
            </ul>
          </div>
          <!-- foto Arrumada-->
          <div
            class="box-position"
            style="background-image: url(images/sobre.jpg)" 
          ></div>
        </div>
      </section>
      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6">
              <img
                class = 'foto'
                src="images/imigrates.png" 
                alt=""
                width="519"
                height="564"
              /> <!-- Colocar foto do grupo depois--> 
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9">
                Por qué elegimos
              </h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="#tabs-4-1" data-toggle="tab" 
                    >Experiencia</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#tabs-4-2" data-toggle="tab"
                      >misión</a>
                  </li>
                </ul>
                <!-- Pq nos ecolher arrumado-->
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>
                      Nuevos Caminos se especializa en apoyar a los inmigrantes españoles en Brasil, ofreciendo asistencia para encontrar vivienda asequible, oportunidades laborales y acceso a servicios esenciales. Con años de experiencia, nuestro equipo se dedica a hacer su transición lo más suave y exitosa posible. Confíe en nosotros para comenzar su nueva vida con seguridad y oportunidades.
                    </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <p>
                      Nuestra misión en Nuevos Caminos es minimizar los desafíos que enfrentan los inmigrantes españoles en Brasil, asegurando que tengan acceso a empleos y viviendas asequibles. Nos comprometemos a ofrecer un apoyo integral para que cada inmigrante pueda establecerse de manera segura y exitosa, con dignidad y oportunidades reales de crecimiento.
                    </p>
                    <div class="text-center text-sm-left offset-top-30 tab-height">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Conocimiento del Territorio Brasileño</li>
                        <li>Entrada en el Mercado Laboral</li>
                        <li>Adaptación a Brasil</li>
                        <li>Mejores Condiciones en Viviendas</li>
                        <li>Sensación de Pertenencia</li>
                        <li>Apoyo Personalizado y Continuo</li>
                      </ul>
                    </div>
                    <div class="group-md group-middle">
                      <a class="button button-width-xl-230 button-primary button-pipaluk" href="#">entrar en contacto</a>
                        <a class="button button-black-outline button-md" href="#">Descargar presentación</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Pq nos ecolher arrumado-->
      <!-- What people Say-->
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h3>Equipe</h3>
          <!-- Owl Carousel-->
          <div
            class="owl-carousel owl-modern"
            data-items="1"
            data-stage-padding="15"
            data-margin="30"
            data-dots="true"
            data-animation-in="fadeIn"
            data-animation-out="fadeOut"
            data-autoplay="true"
          >
            <!-- Quote Baneza-->
            <article class="quote-lisa">
              <div class="quote-lisa-body">
                <a class="quote-lisa-figure" href="#"
                  ><img
                    class="img-circles"
                    src="images/user-17-100x100.jpg"
                    alt=""
                    width="100"
                    height="100"
                /></a>
                <div class="quote-lisa-text">
                  <p class="q">
                    Pharetra vel turpis nunc eget lorem dolor sed viverra ipsum.
                    Diam phasellus vestibulum lorem sed risus ultricies. Aenean
                    et tortor at risus viverra adipiscing. Aliquet enim tortor
                    at auctor urna. Tortor aliquam nulla facilisi cras
                    fermentum. Malesuada pellentesque elit eget gravida cum
                    sociis natoque.
                  </p>
                </div>
                <h5 class="quote-lisa-cite">
                  <a href="#">Baneza Lívia</a>
                </h5>
                <p class="quote-lisa-status">Desarrollador web & aplicaciones</p>
                <i class="bi bi-instagram"></i>
              </div>
            </article>
            <!-- Quote Diogo-->
            <article class="quote-lisa">
              <div class="quote-lisa-body">
                <a class="quote-lisa-figure" href="#"
                  ><img
                    class="img-circles"
                    src="images/user-17-100x100.jpg"
                    alt=""
                    width="100"
                    height="100"
                /></a>
                <div class="quote-lisa-text">
                  <p class="q">
                    Sodales ut etiam sit amet nisl purus. Maecenas accumsan
                    lacus vel facilisis volutpat est. Suscipit adipiscing
                    bibendum est ultricies integer quis auctor. Viverra aliquet
                    eget sit amet tellus cras adipiscing. Posuere ac ut
                    consequat semper viverra nam libero justo laoreet. Iaculis
                    eu non diam phasellus vestibulum lorem sed risus ultricies.
                  </p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Diogo Marques</a></h5>
                <p class="quote-lisa-status">Desarrollador web & aplicaciones</p>
              </div>
            </article>
            <!-- Quote Henrique-->
            <article class="quote-lisa">
              <div class="quote-lisa-body">
                <a class="quote-lisa-figure" href="#"
                  ><img
                    class="img-circles"
                    src="images/user-18-100x100.jpg"
                    alt=""
                    width="100"
                    height="100"
                /></a>
                <div class="quote-lisa-text">
                  <p class="q">
                    Lacus vestibulum sed arcu non odio euismod lacinia.
                    Pellentesque elit ullamcorper dignissim cras. Ultrices eros
                    in cursus turpis massa tincidunt dui. Nunc pulvinar sapien
                    et ligula ullamcorper malesuada proin. Commodo odio aenean
                    sed adipiscing diam. Sed euismod nisi porta lorem mollis
                    aliquam.
                  </p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Henrique de Moraes</a></h5>
                <p class="quote-lisa-status">Desarrollador web & aplicaciones</p>
              </div>
            </article>
            <!-- Quote Joao-->
            <article class="quote-lisa">
              <div class="quote-lisa-body">
                <a class="quote-lisa-figure" href="#"
                  ><img
                    class="img-circles"
                    src="images/eu.jpeg"
                    alt=""
                    width="100"
                    height="100"
                /></a>
                <div class="quote-lisa-text">
                  <p class="q">
                    Sodales ut etiam sit amet nisl purus. Maecenas accumsan
                    lacus vel facilisis volutpat est. Suscipit adipiscing
                    bibendum est ultricies integer quis auctor. Viverra aliquet
                    eget sit amet tellus cras adipiscing. Posuere ac ut
                    consequat semper viverra nam libero justo laoreet. Iaculis
                    eu non diam phasellus vestibulum lorem sed risus ultricies.
                  </p>
                </div>
                <h5 class="quote-lisa-cite"><a href="https://www.instagram.com/itsme_jo4n/">João Pedro</a></h5>
                <p class="quote-lisa-status">Desarrollador web & aplicaciones</p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!--Counters-->
      <!-- Tempo de Ativo-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/sobremeb.jpg">
            <div class="parallax-content section-xl context-dark bg-overlay-26">
                <div class="container">
                    <div class="row row-50 justify-content-center border-classic">
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="counter-classic">
                                <div class="counter-classic-number" id="days">
                                    <span class="counter">0</span>
                                </div>
                                <h5 class="counter-classic-title">Dias</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="counter-classic">
                                <div class="counter-classic-number" id="hours">
                                    <span class="counter">0</span>
                                </div>
                                <h5 class="counter-classic-title">Horas</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="counter-classic">
                                <div class="counter-classic-number" id="minutes">
                                    <span class="counter">0</span>
                                </div>
                                <h5 class="counter-classic-title">Minutos</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <div class="counter-classic">
                                <div class="counter-classic-number" id="seconds">
                                    <span class="counter">0</span>
                                </div>
                                <h5 class="counter-classic-title">Segundos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Tempo de Ativo-->
      <!-- Footer-->
      <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <!-- Repartição 1-->
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contáctenos</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                          <div class="unit-left">
                            <span class="icon fa fa-envelope"></span>
                          </div>
                          <div class="unit-body">
                            <a class="link-aemail" href="mailto:#"
                              >nuevoscaminos.02@gmail.com</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 1-->

              <!-- Repartição 2-->
              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInDown" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">
                      Preguntas frecuentes
                    </h6>

                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title">
                        <a href="#"
                          >¿Qué empleos están aumentando en Brasil?</a>
                      </p>
                    </article>

                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title">
                        <a href="#"
                          >¿Cómo hacer un CV aceptable?</a
                        >
                      </p>
                    </article>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 2-->
              
              <!-- Repartição 3-->
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Más links</h6>
                    <ul
                      class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="sobre.html">Sobre nosotros</a></li>
                      <li><a href="foro.html">Foro</a></li>
                      <li><a href="#">Galeria</a></li>
                    </ul>
                    <div class="group-md group-middle justify-content-sm-start">
                      <a class="button button-lg button-primary button-ujarak" href="#">Saber más</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Fim Repartição 3-->

            </div>
          </div>
        </div>
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div
              class="row justfy-content-xl-space-berween row-10 align-items-md-center2"
            >
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2"> <!-- Colocar link do Face depois--> 
                    <li><a class="icon fa fa-github" href="https://github.com/Nuevos-Caminos/NC"></a></li> 
                  <li><a class="icon fa fa-twitter" href="https://x.com/Nuevos_Caminos0"></a></li>
                  <li><a class="icon fa fa-instagram" href="https://www.instagram.com/tcc_nuevoscaminos/"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                
                <!-- Considerações-->
                <p class="rights">
                  <span>&copy;&nbsp;</span><span class="copyright-year"></span
                  ><span>&nbsp;</span><span>Etec Zona leste</span>.
                  <span>TCC Nuevos Caminos</span>
                </p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <p class="rights"><a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!--Fim Footer-->

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/sobre.js"></script>
  </body>
</html>

